<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Auth;
use App\Models\Category;
use App\Models\Store;
// use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $store = Store::take(4)->get();
        $highestProductCounts = OrderItem::groupBy('product_id')
            ->selectRaw('product_id, MAX(quantity) as max_count')
            ->orderByDesc('max_count')
            ->take(10)
            ->pluck('max_count', 'product_id');
        $highestProducts = [];
        foreach ($highestProductCounts as $productId => $maxCount) {
            $product = Product::find($productId);
            if ($product) {
                $highestProducts[] = $product;
            }
        }
        
        if (Auth::check()) {
            $user = Auth::user();
            $role = $user->Role ?? null; 
            if ($role == 'admin') {
                return redirect()->route('index');
            } else if ($role == 'provider') {
                return redirect('product');
            } else {
                return view('Home.home', compact('category', 'store', 'highestProducts'));
            }
        } else {
            return view('Home.home', compact('category', 'store', 'highestProducts'));
        }
        
    }

}
