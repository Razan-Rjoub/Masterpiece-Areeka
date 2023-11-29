<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function payment()
    {
        $price=20;
        $product = [];
        $product['items'] = [
            [
                'name' => '',
                'price' => $price,
                'desc' => '',
                'qty' => 1
            ]
        ];
       

        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = 'http://127.0.0.1:8000/success';
        $product['cancel_url'] =' http://127.0.0.1:8000/cancell';
        $product['total'] = $price * 1;

        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($product);
      $res = $paypalModule->setExpressCheckout($product, true);
 
        return redirect($res['paypal_link']);


    }

    public function success(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Payment was successfull. The payment success page goes here!');
        }

        dd('Error occured!');

    }
    public function cancel()
    {
      return view('Thankyou');
    }
public function cancelview(){
    $id = Auth::id();
    $user = User::find($id);
    return view('thankyou',compact('user'));
}
public function successview(){
    $id = Auth::id();
    $user = User::find($id);
    return view('thankyou',compact('user'));
}
}

