<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin= User::where('Role','admin')->get();
        return view('Admin.admin.admin',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       return view('Admin.admin.Addadmin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'adminname' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
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
            $filename = $request->getSchemeAndHttpHost() . '/images/admin/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/admin/'), $filename);
        }
        else {
            unset($request->image);
        }
        User::create([
            'name' => $request->adminname,
            'image' => $filename,
            'Address' =>$request->address,
            'email' => $request->email,
            'password'=>bcrypt($request->password),
            'Role'=>'admin',
        ]);
        Alert::success('success', 'Admin Added Successfully');
        return redirect('adminuser');
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {

        $user = User::find($id);
        $userrole=User::all();
        
        return view('Admin.admin.edit',compact('user','userrole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
        $data['Role'] = $request->role_id;
     
        User::where(['id' => $id])->update( $data
    );
    Alert::success('success', 'Admin Updated Successfully');
    return redirect('adminuser');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
        Alert::success('success', 'Admin Deleted Successfully');
    return redirect('adminuser');
    }
}
