<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())
            ->with('product')
            ->get();
        return view('wishlist', compact('wishlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function wishlistcart($id){
    
    $wishlist = Wishlist::where('user_id', Auth::id())
    ->where('product_id', $id)
    ->first();
    if ($wishlist) {
        $wishlist->delete();}
        else{
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
            ]);    
        }
        return redirect()->back()->with('wishlist');
}
    public function create($id)
    {
        if (Auth::id()) {

            $wishlist = Wishlist::where('user_id', Auth::id())
                ->where('product_id', $id)
                ->first();
            // dd($wishlist);
            if ($wishlist) {
                $wishlist->delete();
                $product = Product::with('category')->find($id);
                $review = Review::where('product_id', $id)->with('user')->get();
                $countreview = Review::where('product_id', $id)->count();
                $one = Review::where('product_id', $id)->where('rate', '1')->count();
                $two = Review::where('product_id', $id)->where('rate', '2')->count();
                $three = Review::where('product_id', $id)->where('rate', '3')->count();
                $four = Review::where('product_id', $id)->where('rate', '4')->count();
                $five = Review::where('product_id', $id)->where('rate', '5')->count();
                $counts = [];

                for ($i = 1; $i <= 5; $i++) {
                    $counts[$i] = Review::where('product_id', $id)->where('rate', $i)->count();
                }
                $wishlist = Wishlist::where('user_id', auth()->id())
                    ->where('product_id', $id)
                    ->exists();
                $highestCount = max($counts);
                $highestRating = array_search($highestCount, $counts);
                return view('Product.single', compact('product', 'review', 'one', 'two', 'three', 'four', 'five', 'countreview', 'highestRating', 'wishlist'));
            } else {
                Wishlist::create([
                    'user_id' => Auth::id(),
                    'product_id' => $id,
                ]);
                $product = Product::with('category')->find($id);
                $review = Review::where('product_id', $id)->with('user')->get();
                $countreview = Review::where('product_id', $id)->count();
                $one = Review::where('product_id', $id)->where('rate', '1')->count();
                $two = Review::where('product_id', $id)->where('rate', '2')->count();
                $three = Review::where('product_id', $id)->where('rate', '3')->count();
                $four = Review::where('product_id', $id)->where('rate', '4')->count();
                $five = Review::where('product_id', $id)->where('rate', '5')->count();
                $counts = [];

                for ($i = 1; $i <= 5; $i++) {
                    $counts[$i] = Review::where('product_id', $id)->where('rate', $i)->count();
                }
                $wishlist = Wishlist::where('user_id', auth()->id())
                    ->where('product_id', $id)
                    ->exists();
                $highestCount = max($counts);
                $highestRating = array_search($highestCount, $counts);
                return view('Product.single', compact('product', 'review', 'one', 'two', 'three', 'four', 'five', 'countreview', 'highestRating', 'wishlist'));
                // return redirect()->back();
            }

        } else {
            session()->put('wishlist', $id);
            Alert::error('You must login first!')->autoClose()->footer('<a href="' . route("register") . '">Sign in here ?</a>');
            return redirect()->back();
        }

    }


    public function store(StoreWishlistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Wishlist::find($id)->delete();
        Wishlist::destroy($id);
        return redirect()->back();
    }
}