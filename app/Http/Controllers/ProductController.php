<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Review;
use App\Models\Store;

use App\Models\User;
use App\Models\Wishlist;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {

                $product = Product::with('category','store')->get();
                return view('Admin.products.product', compact( 'product'));
            } else if ($role == 'provider') {
                $user = User::find(Auth::id());
                $store_id = $user->store;
                $product= Product::where('store_id', $store_id)->with('category')->get();

                return view('Provider.Products.product', compact( 'product'));
            }

        }

    }

    public function create()
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $store = Store::all();
                $category = Category::all();
                return view('Admin.products.Addproduct', compact('store', 'category'));
            } else if ($role == 'provider') {
                $user = User::find(Auth::id());

                $store_id = $user->store;
                $store = Store::find($store_id);
                $category = Category::all();
                return view('Provider.Products.Addproduct', compact('store', 'category'));
            }

        }
    }
    public function store(Request $request)
    { 
        // dd($request);
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
               
                $request->validate([
                    'productname' => 'required|string',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                    'price' => 'required|numeric',
                    'quantity' => 'required|numeric',
                    'description' => 'required',
                    'image2' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                    'image3' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                    'image4' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                    'width'=>'required',
                    'height'=>'required',
                    'depth'=>'required',
                    'weight'=>'required',
                    'qualitycheck'=>'required',
                    'longdescription'=>'required'

                ]);
                $image = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('images/product'), $image);
        
                $image2 = time() . '_' . $request->file('image2')->getClientOriginalName();
                $request->file('image2')->move(public_path('images/product'), $image2);
        
                $image3 = time() . '_' . $request->file('image3')->getClientOriginalName();
                $request->file('image3')->move(public_path('images/product'), $image3);
                
                $image4 = time() . '_' . $request->file('image4')->getClientOriginalName();
                $request->file('image4')->move(public_path('images/product'), $image4);

                Product::create([
                    'name' => $request->productname,
                    'image' => $image,
                    'image2' =>  $image2,
                    'image3' =>  $image3,
                    'image4' => $image4,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                    'descrption' => $request->description,
                    'store_id' => $request->store_id,
                    'category_id' => $request->category_id,
                    'stock' => $request->stock,
                    'status' => $request->status,
                    'descrptionLong'=>$request->longdescription,
                    'width'=>$request->width,
                    'height'=>$request->height,
                    'Depth'=>$request->depth,
                    'Weight'=>$request->weight,
                    'Qualitycheck'=>$request->qualitycheck,
                ]);
                $product = Product::where('store_id', $request->store_id)->with('store')->get();
                $totalearning = Product::where('store_id', $request->store_id)->with('store')->sum('price');
                $totalProducts = $product->count();
                $store = Store::find($request->store_id);
                $store->totalproduct = $totalProducts;
                $store->totalearning = $totalearning;
                $store->save();
                Alert::success('success', 'product Added Successfully');
                return redirect('product');
            } else if ($role == 'provider') {
                // $user = User::find(Auth::id());
                // $request->validate([
                //     'productname' => 'required|string',
                //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                //     'price' => 'required|numeric',
                //     'quantity' => 'required|numeric',
                //     'description' => 'required',
                //     'image2' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                //     'image3' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                //     'image4' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
                //     'width' => 'required',
                //     'height' => 'required',
                //     'depth' => 'required',
                //     'weight' => 'required',
                //     'qualitycheck' => 'required',
                //     'longdescription' => 'required'
                // ]);
                
                // $filenames = [];
                
                // foreach (['image', 'image2', 'image3', 'image4'] as $key) {
                //     if ($request->hasFile($key)) {
                //         $filename = $request->getSchemeAndHttpHost() . '/images/product/' . time() . '.' . $request->$key->extension();
                //         $request->$key->move(public_path('/images/product/'), $filename);
                //         $filenames[$key] = $filename;
                //     }
                // }

                // Product::create([
                //     'name' => $request->productname,
                //     'image' => $image, 
                //     'image2' => $image2,
                //     'image3' => $image3,
                //     'image4' => $image4,

                //     'price' => $request->price,
                //     'quantity' => $request->quantity,
                //     'descrption' => $request->description,
                //     'store_id' => $request->store_id,
                //     'category_id' => $request->category_id,
                //     'stock' => $request->stock,
                //     'status' => 'pending',
                //     'descrptionLong'=>$request->longdescription,
                //     'width'=>$request->width,
                //     'height'=>$request->height,
                //     'Depth'=>$request->depth,
                //     'Weight'=>$request->weight,
                //     'Qualitycheck'=>$request->qualitycheck,
                // ]);
                // $product = Product::where('store_id', $request->store_id)->with('store')->get();
                // $totalearning = Product::where('store_id', $request->store_id)->with('store')->sum('price');
                // $totalProducts = $product->count();
                // $store = Store::find($request->store_id);
                // $store->totalproduct = $totalProducts;
                // $store->totalearning = $totalearning;
                // $store->save();
                // Alert::success('success', 'product Added Successfully');
                // return redirect('product');
            }

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $product = Product::find($id);
                $store = Store::all();
                $category = Category::all();

                return view('Admin.products.edit', compact('category', 'store', 'product'));
            } else if ($role == 'provider') {
                $product = Product::find($id);
                $user = User::find(Auth::id());
                if ($user) {
                    $store_id = $user->store;
                    $store = Store::find($store_id);
                }
                $category = Category::all();

                return view('Provider.Products.edit', compact('category', 'store', 'product'));
            }
        }
    }


    public function update(Request $request, $id)
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $request->validate([
                    'productname' => 'required|string',

                    'price' => 'required|numeric',
                    'quantity' => 'required|numeric',
                    'description' => 'required'
                ]);
                $filename = '';
                if ($request->hasFile('image')) {
                    $filename = $request->getSchemeAndHttpHost() . '/images/product/' . time() . '.' . $request->image->extension();
                    $request->image->move(public_path('/images/product/'), $filename);
                    $data['image'] = $filename;
                } else {
                    unset($request->image);
                }
                $data['name'] = $request->productname;
                $data['price'] = $request->price;
                $data['quantity'] = $request->quantity;
                $data['descrption'] = $request->description;
                $data['store_id'] = $request->store_id;
                $data['category_id'] = $request->category_id;
                $data['status'] = $request->status;
                $data['stock'] = $request->stock;
                Product::where(['id' => $id])->update(
                    $data
                );
                Alert::success('success', 'product Updated Successfully');
                return redirect('product');
            } else if ($role == 'provider') {
                $request->validate([
                    'productname' => 'required|string',

                    'price' => 'required|numeric',
                    'quantity' => 'required|numeric',
                    'description' => 'required'
                ]);
                $filename = '';
                if ($request->hasFile('image')) {
                    $filename = $request->getSchemeAndHttpHost() . '/images/product/' . time() . '.' . $request->image->extension();
                    $request->image->move(public_path('/images/product/'), $filename);
                    $data['image'] = $filename;
                } else {
                    unset($request->image);
                }
                $data['name'] = $request->productname;
                $data['price'] = $request->price;
                $data['quantity'] = $request->quantity;
                $data['descrption'] = $request->description;
                $data['store_id'] = $request->store_id;
                $data['category_id'] = $request->category_id;
                $data['status'] = 'pending';
                $data['stock'] = $request->stock;
                Product::where(['id' => $id])->update(
                    $data
                );
                Alert::success('success', 'product Updated Successfully');

                return redirect('product');
            }
        }
    }

    public function destroy($id)
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                Product::find($id)->delete();
                Product::destroy($id);
                Alert::success('success', 'Product Deleted Successfully');
                return redirect('product');
            } else if ($role == 'provider') {
                Product::find($id)->delete();
                Product::destroy($id);
                Alert::success('success', 'Product Deleted Successfully');
                return redirect('product');
            }
        }

    }
    public function products($id)
    {
        $product = Product::where('store_id', $id)->get();
        $store=Store::find($id);
        return view('Product.product',compact('product','store'));

    }
    public function productcat($id)
    {
        $product = Product::where('category_id', $id)->get();
        $store=Store::find($id);
        return view('Product.product',compact('product','store'));

    } 
    public function singleproduct($id){
        $cartcount = Cart::where('user_id', Auth::id())->count();
        session(['cartCount' => $cartcount]);
        $product = Product::with('category')->find($id);
        $review=Review::where('product_id',$id)->with('user')->get();
        $countreview=Review::where('product_id',$id)->count();
        $one=Review::where('product_id',$id)->where('rate','1')->count();
        $two=Review::where('product_id',$id)->where('rate','2')->count();
        $three=Review::where('product_id',$id)->where('rate','3')->count();
        $four=Review::where('product_id',$id)->where('rate','4')->count();
        $five=Review::where('product_id',$id)->where('rate','5')->count();
        $counts = [];
        $wishlist= Wishlist::where('user_id', auth()->id())
        ->where('product_id', $id)
        ->exists();
        for ($i = 1; $i <= 5; $i++) {
            $counts[$i] = Review::where('product_id', $id)->where('rate', $i)->count();
        }
        $highestCount = max($counts);
        $highestRating = array_search($highestCount, $counts);
        return view('Product.single', compact('product', 'review', 'one', 'two', 'three', 'four', 'five', 'countreview', 'highestRating','wishlist'));
       
    } 
}