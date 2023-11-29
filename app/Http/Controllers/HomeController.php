<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Category;
use App\Models\Store;
// use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $role=Auth()->user()->Role;
            if($role=='customer'){
                $category=Category::all();
                $store=Store::take(4)->get();  
                session()->put('name', Auth()->user()->name);
                session()->put('image',Auth()->user()->image);
                return view('Home.home',compact('category','store'));
            }
            else if($role=='admin'){
                return redirect()->route('index');
            }
            else if ($role=='provider'){
                return redirect('product');
            }
        }
        else{
            $category=Category::all();
            $store=Store::take(4)->get();
            return view('Home.home',compact('category','store'));  
        }
    }
   
}
