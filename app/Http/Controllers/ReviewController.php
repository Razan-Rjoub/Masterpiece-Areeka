<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $review = Review::with(['product', 'user', 'store'])->get();
                return view('Admin.review', compact('review'));
            } elseif ($role == 'provider') {
                $user = User::find(Auth::id());
                $store_id = $user->store;
                $review = Review::where('store_id',$store_id)->with(['product', 'user', 'store'])->get();
                return view('Provider.review', compact('review'));
            }

        }


    }
    public function reviewcustomer($product_id, $store_id)
    {
        $product = Product::with('store')->find($product_id);
        return view('profilee.review', compact('product'));

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required',
            
        ]);
        // $user = User::find(Auth::id());
        Review::create([
            'comment' => $request->comment,
            'rate' => $request->rating,
            'store_id' =>$request->store_id,
            'product_id' =>$request->product_id,
            'user_id'=>Auth::id()
        ]);
        return redirect('/profileuser')->with('success','Review Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Review::find($id)->delete();
        Review::destroy($id);
        Alert::success('success', 'Review Deleted Successfully');
        return redirect('review');
    }
}