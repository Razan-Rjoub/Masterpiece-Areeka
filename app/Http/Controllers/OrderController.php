<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $order = Order::with(['payment', 'user'])->get();
                return view('Admin.orders.orderlist', compact('order'));
            }
            if ($role == 'provider') {
                $user = User::find(Auth::id());
                if ($user) {
                    $store_id = $user->store;
                }
                $orderitem = OrderItem::where('store_id', $store_id)->with(['order', 'product', 'user', 'store'])->get();
                $order = Order::with(['payment', 'user'])->get();


                return view('Provider.orders.orderlist', compact('orderitem', 'order'));

            }
        }
    }

    public function edit($id)
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'admin') {
                $orderitem = OrderItem::where('order_id', $id)->with(['order', 'product', 'user', 'store'])->get();
                $order=Order::find($id);

                return view('Admin.orders.orderdetail', compact('orderitem','order'));
            }
            if ($role == 'provider') {
                $order = Order::find($id);
                return view('Provider.orders.edit', compact('order'));
            }
        }
    }


    public function editorder($id)
    {
        $order = Order::find($id);
        return view('Provider.orders.edit', compact('order'));
    }
    public function update(Request $request, $id)
    {
        if (Auth::id()) {
            $role = Auth()->user()->Role;
            if ($role == 'provider') {
                $data['status'] = $request->status;
                $order=Order::where('id',$id)->with('payment')->first();
                $payment=$order->payment->id;
                if($request->status=='Delivered'){
                    $datapay['method'] = 'paypal';
    Payment::where(['id' => $payment])->update($datapay);
                }
                Order::where(['id' => $id])->update(
                    $data
                );
                Alert::success('success', 'Order Updated Successfully');
                return redirect('order');
            }
        }
    }

    public function orderdetails($id)
    {
        $user = User::find(Auth::id());
        $store_id = $user->store;
        $orderitem = OrderItem::where('order_id', $id)->where('store_id',$store_id)->with(['order', 'product', 'user', 'store'])->get();
        $order=Order::find($id);
        // dd($order);
        return view('Provider.orders.orderdetail', compact('orderitem','order'));
    }

}