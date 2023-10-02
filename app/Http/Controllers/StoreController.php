<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{

    public function index()
    {if (Auth::id()) {
        $role = Auth()->user()->Role;
        if ($role == 'admin') {
        $store = Store::all();
       
        return view('Admin.store.store',compact('store'));}
        else if($role == 'customer'){
            $store = Store::all();
        return view('Stores.store',compact('store'));  
        }
    

}else {
        $store = Store::all();
        return view('Stores.store',compact('store')); 
    }
    }

    public function create()
    {
        return view('Admin.store.Addstore');


    }


    public function store(Request $request)
    {
       

        $request->validate([
            'storename' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',

        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/stores/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/stores/'), $filename);
        }
        Store::create([
            'name' => $request->storename,
            'image' => $filename,
            'totalproduct' =>0,
            'totalearning' => 0
        ]);
        Alert::success('success', 'Store Added Successfully');
        return redirect('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    public function edit($id)
    {
        $store = Store::find($id);
        return view('Admin.store.edit')->with('store', $store);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'storename' => 'required|string',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/stores/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/stores/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($request->image);
        }
        $data['name'] = $request->storename;

        Store::where(['id' => $id])->update( $data
        );
        Alert::success('success', 'Store Updated Successfully');
        return redirect('store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Store::find($id)->delete();
        Store::destroy($id);
        Alert::success('success', 'Store Deleted Successfully');
    return redirect('store');
    }
}