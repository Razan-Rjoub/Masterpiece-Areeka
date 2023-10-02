<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(){
        if(Auth::id()){
            $user=User::find(Auth::id());
            
        return view('profilee.profile',compact('user'));}
    }
    public function edit(Request $request)
    {

        $request-> validate ([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' =>  'required',
            'regex:/^(079|078|077)\d{7}$/|max:10',
            'address' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['Address']=$request->address;

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images/customer/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/customer/'), $filename);
            $data['image'] = $filename;
        }
        else {
            unset($request->image);
        }
        $id = Auth::id();
        User::where(['id' => $id])->update($data);
        return redirect()->route('profilee')->with([
            'success' => 'updated successfully'
        ]);

    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
