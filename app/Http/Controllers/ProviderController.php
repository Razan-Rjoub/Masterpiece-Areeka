<?php

namespace App\Http\Controllers;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provider= User::where('Role','provider')->get();

        return view('Admin.provider.provider',compact('provider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $store=Store::all();
       return view('Admin.provider.Addprovider',compact('store'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'providername' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif',
            'address'=>'required',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]

        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/provider/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/provider/'), $filename);
        }
        else {
            unset($request->image);
        }
        User::create([
            'name' => $request->providername,
            'image' => $filename,
            'Address' =>$request->address,
            'email' => $request->email,
            'password'=>bcrypt($request->password),
            'Role'=>'provider',
            'store'=>$request->store,
            'storename'=>$request->storename
        ]);
        Alert::success('success', 'Provider Added Successfully');
        return redirect('provider');
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {

        $user = User::find($id);
        $userrole=User::all();
        
        return view('Admin.provider.edit',compact('user','userrole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
        $data['Role'] = $request->role_id;
     
        User::where(['id' => $id])->update( $data
    );
    Alert::success('success', 'Provider Updated Successfully');
    return redirect('provider');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
        Alert::success('success', 'provider Deleted Successfully');
    return redirect('provider');
    }
}
