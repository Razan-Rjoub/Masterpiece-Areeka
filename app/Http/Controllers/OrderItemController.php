<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Models\User;
use Auth;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        if(Auth::id()){
            $user=User::find(Auth::id());
            if($user->Role=='provider'){
                $orderitem = OrderItem::where('order_id', $id)->where('user_id',Auth::id())->where('store_id',$user->store)->with(['order','product','user','store'])->get();
                $order = Order::with('payment')->find($id); 
                return view('Provider.orders.orderdetail',compact('orderitem','order'));
            }
           else{ $orderitem = OrderItem::where('order_id', $id)->where('user_id',Auth::id())->with(['order','product','user','store'])->get();
            $order = Order::with('payment')->find($id);
            return view('profilee.orderdetails',compact('orderitem','order'));}
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderItemRequest $request, OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        //
    }
}
