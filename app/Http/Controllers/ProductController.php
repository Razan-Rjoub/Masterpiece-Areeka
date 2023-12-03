<?php

namespace App\Http\Controllers;

use App\Traits\ImageUploadTrait;
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
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $product = Product::with('category', 'store')->get();
                return view('Admin.products.product', compact('product'));
            } else if ($role == 'provider') {
                $user = User::find(Auth::id());
                $store_id = $user->store;
                $product = Product::where('store_id', $store_id)->with('category')->get();
                return view('Provider.Products.product', compact('product'));
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
        $request->validate([
            'productname' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required',
            'width' => 'required',
            'height' => 'required',
            'depth' => 'required',
            'weight' => 'required',
            'qualitycheck' => 'required',
            'longdescription' => 'required'
        ]);

        $image = $this->uploadImage($request, 'image', 'uploads');
        $image2 = $this->uploadImage($request, 'image2', 'uploads');
        $image3 = $this->uploadImage($request, 'image3', 'uploads');
        $image4 = $this->uploadImage($request, 'image4', 'uploads');
        $product = Product::where('store_id', $request->store_id)->with('store')->get();
        $totalearning = Product::where('store_id', $request->store_id)->with('store')->sum('price');
        $totalProducts = $product->count();

        $user = User::find(Auth::id());

        Product::create([
            'name' => $request->productname,
            'image' => $image,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'descrption' => $request->description,
            'store_id' => $request->store_id,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'status' => $user->Role == 'provider' ? 'pending' : $request->status,
            'descrptionLong' => $request->longdescription,
            'width' => $request->width,
            'height' => $request->height,
            'Depth' => $request->depth,
            'Weight' => $request->weight,
            'Qualitycheck' => $request->qualitycheck,
        ]);
        $store = Store::find($request->store_id);
        $store->totalproduct = $totalProducts;
        $store->totalearning = $totalearning;
        $store->save();
        Alert::success('success', 'product Added Successfully');
        return redirect('product');



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
            $request->validate([
                'name' => 'required|string',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'descrption' => 'required',

                'width' => 'required',
                'height' => 'required',
                'Depth' => 'required',
                'Weight' => 'required',
                'Qualitycheck' => 'required',
                'descrptionLong' => 'required'
            ]);

            $product = Product::findOrFail($id);
            $data = $request->except(['_token', '_method']);
            $image = $this->updateImage($request, 'image', 'uploads', $product->image);
            $image2 = $this->updateImage($request, 'image2', 'uploads', $product->image2);
            $image3 = $this->updateImage($request, 'image3', 'uploads', $product->image3);
            $image4 = $this->updateImage($request, 'image4', 'uploads', $product->image4);
            $data['image'] = empty(!$image) ? $image : $product->image;
            $data['image2'] = empty(!$image2) ? $image2 : $product->image2;
            $data['image3'] = empty(!$image3) ? $image3 : $product->image3;
            $data['image4'] = empty(!$image4) ? $image4 : $product->image4;
            Product::where(['id' => $id])->update(
                $data
            );
            Alert::success('success', 'product Updated Successfully');
            return redirect('product');
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
        $product = Product::where('store_id', $id)->where('status', 'active')->get();
        $store = Store::find($id);
        $category = Category::where('store_id', $id)->get();

        return view('Product.product', compact('product', 'store', 'category'));

    }
    public function fillterproducts($id, $price)
    {
        if ($price == '0-299' || $price == '300-599' || $price == '600-1000') {
            [$minPrice, $maxPrice] = explode('-', $price);
            $store = Store::find($id);
            $category = Category::where('store_id', $id)->get();
            $product = Product::where('store_id', $id)
                ->whereBetween('price', [$minPrice, $maxPrice])->where('status','active')
                ->get();
        } else if ($price == "Low") {
            $store = Store::find($id);
            $product = Product::where('store_id', $id)
                ->orderby('price', 'asc')->where('status','active')
                ->get();
        } else if ($price == "High") {
            $store = Store::find($id);
            $product = Product::where('store_id', $id)
                ->orderby('price', 'desc')->where('status','active')->with('category')
                ->get();
        } else if ($price) {
            $store = Store::find($id);
            $product = Product::where('store_id', $id)->where('category_id', $price)->where('status','active')->with('category')->get();
        }
        $category = Category::where('store_id', $id);
        return view('Product.product', compact('product', 'store', 'category'));
    }
    public function productcat($id, $store_id)
    {
        $category = Category::where('store_id', $store_id);
        $product = Product::where('category_id', $id)->where('status','active')->get();
        $store = Store::find($store_id);
        return view('Product.product', compact('product', 'store', 'category'));

    }
    public function singleproduct($id)
    {
        $cartcount = Cart::where('user_id', Auth::id())->count();
        session(['cartCount' => $cartcount]);
        $product = Product::with('category')->find($id);
        $review = Review::where('product_id', $id)->with('user')->get();
        $countreview = Review::where('product_id', $id)->count();
        $one = Review::where('product_id', $id)->where('rate', '1')->count();
        $two = Review::where('product_id', $id)->where('rate', '2')->count();
        $three = Review::where('product_id', $id)->where('rate', '3')->count();
        $four = Review::where('product_id', $id)->where('rate', '4')->count();
        $five = Review::where('product_id', $id)->where('rate', '5')->count();
        $counts = [];
        $wishlist = Wishlist::where('user_id', auth()->id())
            ->where('product_id', $id)
            ->exists();
        for ($i = 1; $i <= 5; $i++) {
            $counts[$i] = Review::where('product_id', $id)->where('rate', $i)->count();
        }
        $highestCount = max($counts);
        $highestRating = array_search($highestCount, $counts);
        return view('Product.single', compact('product', 'review', 'one', 'two', 'three', 'four', 'five', 'countreview', 'highestRating', 'wishlist'));

    }
}