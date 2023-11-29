<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Auth;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function payment()
    {
        $cart = Cart::where('user_id', Auth::id())->with('product')->get();
    
        // Set your secret API key
        \Stripe\Stripe::setApiKey(config('stripe.stripe_sk'));
    
        $lineItems = [];
    
        foreach ($cart as $cartItem) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $cartItem->product->name, 
                    ],
                    'unit_amount' => $cartItem->price * 100, // Convert to cents
                ],
                'quantity' => $cartItem->quantity,
            ];
        }
    
        // Create a Checkout Session
        $response = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
    
            'mode' => 'payment',
            'success_url' => route('stripe_success'),
            'cancel_url' => route('stripe_cancel'),
        ]);
  
        return redirect()->away($response->url);
    }
    

    public function success()
    {
        $cart = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalPrice = $cart->sum('Totalprice');
        $paymentRequest = session('paymentRequest');
        $payment = Payment::create([
            'method' => $paymentRequest['payment'],
            'user_id' => Auth::id(),
        ]);


        $order = Order::create([
            'name' => $paymentRequest['name'],
            'email' =>$paymentRequest['email'],
            'address' => $paymentRequest['address'],
            'phone' => $paymentRequest['phone'],
            'comment' =>$paymentRequest['comment'],
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
    }


    public function cancel()
    {
        return redirect('/checkout');


    }
}
