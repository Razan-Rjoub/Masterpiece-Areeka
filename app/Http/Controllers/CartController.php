<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usercart = Cart::where('user_id', Auth::id())->with('product')->get();

        if (Auth::id()) {
            $cartData = session()->get('cart', []);
            foreach ($cartData as $cartItem) {
                Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $cartItem['product_id'],
                    'quantity' => $cartItem['quantity'],
                    'price' => $cartItem['price'],
                    'Totalprice' => $cartItem['price'] * $cartItem['quantity']
                ]);
            }
            $cartcount = Cart::where('user_id', Auth::id())->count();
            session(['cartCount' => $cartcount]);

            session()->forget('cart');
            $cart = Cart::where('user_id', Auth::id())->first();

            // if ($cart) {
            return view('cart.cart', compact('usercart'))->with('reload', true);
            // } else {
            // return view('cart.cart', compact('usercart'));
            // }
        } else
            return view('cart.cart', compact('usercart'));

    }
    public function create(Request $request)
    {
      
        $cart = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalPrice = $cart->sum('Totalprice');
      
        $request->validate([
            'name' => 'required|string',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'regex:/^(079|078|077)\d{7}$/|max:10',
        ]);
 
        if ($request->payment == 'cash') {
            $payment = Payment::create([
                'method' => $request->payment,
                'user_id' => Auth::id(),
            ]);


            $order = Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'comment' => $request->comment,
                'status' => 'Dispatched',
                'totalprice' => $totalPrice,
                'payment_id' => $payment->id,
                'user_id' => Auth::id(),

            ]);
           
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'user_id' => Auth::id(),
                    'product_id' => $item->product_id,
                    'store_id' => $item->product->store_id,
                    'price' => $item->price,
                    'quantity' => $item->quantity,

                ]);

            }

            if (Auth::id()) {
                Cart::where('user_id', Auth::id())->delete();
                session()->forget('cartCount');
                return redirect('/thankyou');
            }
        } else {
         
            $paymentRequest = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'comment' => $request->comment,
                'status' => 'Dispatched',
                'payment' =>  $request->payment,
                
            ];
            session(['paymentRequest' => $paymentRequest]);

       
            return redirect()->route('stripe');

        }
    }
    public function destroyCart()
    {


    }
    public function store($id)
    {
        $product = Product::findOrFail($id);
        if (!Auth::id()) {
            $cart = session()->get('cart', []);
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    "image" => $product->image,
                    'product_id' => $product->id
                ];
            }
            session()->put('cart', $cart);

            Alert::success('Product has been added to cart!')->autoClose();
            $currentUrl = request()->fullUrl();
            session(['current_url' => $currentUrl]);
            echo session('current_url');
            return redirect()->back();

        } else {

            $cart = Cart::where('product_id', $id)->first();
            $cartData = session()->get('cart', []);
            if (!isset($cartData[$id])) {
                if (!$cart) {
                    Cart::create([
                        'product_id' => $product->id,
                        'user_id' => Auth::id(),
                        'price' => $product->price,
                        'quantity' => 1,
                        'Totalprice' => $product->price
                    ]);
                    Alert::success('Product has been added to cart!')->autoClose();
                    session()->forget('cart');
                    return redirect()->back();
                } else {
                    $cart->increment('quantity');
                    $newQuantity = $cart->quantity;
                    $productPrice = $product->price;
                    $newTotalPrice = $productPrice * $newQuantity;
                    Cart::where(['product_id' => $id])->update(
                        ['Totalprice' => $newTotalPrice]
                    );
                    Alert::success('Product has been added to cart!')->autoClose();
                    session()->forget('cart');
                    return redirect()->back();
                }

            }
        }

    }
    public function quantitycart($id, $type)
    {
        $cart = session()->get('cart', []);
        if ($type == 'plus') {
            if (!Auth::id()) {
                if (isset($cart[$id])) {
                    $cart[$id]['quantity']++;
                    session()->put('cart', $cart);
                    return redirect()->back();
                }
            } else {
                $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();
                $cart->increment('quantity');
                $newQuantity = $cart->quantity;
                $productPrice = $cart->price;
                $newTotalPrice = $productPrice * $newQuantity;
                Cart::where(['id' => $id])->where('user_id', Auth::id())->update(
                    ['Totalprice' => $newTotalPrice]
                );
                $cart->save();
                return redirect()->back();
            }
        }
        if ($type == 'minus') {
            if (!Auth::id()) {
                if (isset($cart[$id])) {
                    $cart[$id]['quantity']--;
                    session()->put('cart', $cart);
                    return redirect()->back();
                }
            } else {
                $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();

                $cart->decrement('quantity');
                $newQuantity = $cart->quantity;
                $productPrice = $cart->price;
                $newTotalPrice = $productPrice * $newQuantity;
                Cart::where(['id' => $id])->update(
                    ['Totalprice' => $newTotalPrice]
                );
                $cart->save();
                return redirect()->back();
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }


    public function Checkout()
    {
  
        if (Auth::id()) {
            $user = User::find(Auth::id());
            $cart = Cart::where('user_id', Auth::id())->with('product')->get();
            return view('cart.checkout', compact('user', 'cart'));
        } else {
            session()->put('checkout', 'check');
            Alert::error('You must login first!')->autoClose()->footer('<a href="' . route("register") . '">Sign in here ?</a>');
            return redirect()->back();
        }

    }


    public function destroy($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if (Auth::id()) {
            Cart::find($id)->delete();
            Cart::destroy($id);

            return redirect()->back();
        }
    }
}