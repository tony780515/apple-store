<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $request->validate([
            'customer_name' => 'required|max:255',
            'email' => 'required|max:255|email:rfc',
            'address' => 'required|max:255',
            'phone' => 'required|numeric|digits:10|starts_with:09',
        ]);

        $carts = Cart::where('ip', $request->ip())->get();

        if(!$carts->isEmpty()){
            $order = Order::create([
                'ip'=> $request->ip(),
                'customer_name' => $request->customer_name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);

            $order->serial = 'A0000' . $order->id;
            $order->save();
        }

        foreach ($carts as $cart){
            // 多對多關聯才會用到attach來新增資料
            $order->products()->attach($cart->product_id, ['quantity' => $cart->quantity]);
            // 將產品傳到product_order之後就將購物車清空
            $cart->delete();
        }

        if($carts->isEmpty()){
            return redirect('/shoppingcart');
            // abort(404);
        }else{
            return redirect()->route('orderlist', ['id' => $order->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::where('ip',request()->ip())->find($id);
        $total_quantity =ProductOrder::where('order_id',$id)->sum('quantity');

        $total_price = $order->products->sum(function ($product){
            return $product->price * $product->pivot->quantity;
        });

        return view('orderlist',compact('order', 'total_quantity', 'total_price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
