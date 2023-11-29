<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer= User::where('Role','customer')->get();
        
        return view('Admin.customer.customer',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       return view('Admin.customer.addcustomer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customername' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'address'=>'required',
            'email' => 'required|email|unique:users',
            'phone' =>  ['required',
            'regex:/^(079|078|077)\d{7}$/'
            ,'max:10'],
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]

        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/customer/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/customer/'), $filename);
        }
        else {
            unset($request->image);
        }
        User::create([
            'name' => $request->customername,
            'image' => $filename,
            'Address' =>$request->address,
            'email' => $request->email,
            'password'=>bcrypt($request->password),
            'Role'=>'customer',
            'phone'=>$request->phone,
        ]);
        Alert::success('success', 'Customer Added Successfully');
        return redirect('customer');
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {

        $user = User::find($id);
        $userrole=User::all();
        
        return view('Admin.customer.edit',compact('user','userrole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
        $data['Role'] = $request->role_id;
     
        User::where(['id' => $id])->update( $data
    );
    Alert::success('success', 'Customer Updated Successfully');
    return redirect('customer');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
        Alert::success('success', 'Customer Deleted Successfully');
    return redirect('customer');
    }
}
