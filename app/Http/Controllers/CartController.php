<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $carts = Cart::with('products')->get();
        $total_quantity = $carts->where('ip', $request->ip())->sum('quantity');


        return view('shoppingcart', compact('carts', 'total_quantity'));
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
    public function store(Request $request, $id)
    {
        $product = Product::find($id);

        $cart = Cart::where('ip', $request->ip())
        ->where('product_id', $product->id)
        ->first();

        // $cart->quantity->validate(
        //     [
        //         'quantity' => 'integer|max:{{$product->quantity}}'
        //     ]
        // );


        if($cart){
                $cart->quantity =  $cart->quantity + 1;
                $cart->save();

        }else{
            Cart::create(array(
                'ip' => $request->ip(),
                'product_id' => $product->id,
                'quantity' => 1
                ));
        }


        return redirect('/shoppingcart');
    }

    public function add(Request $request, $id)
    {
        $cart = Cart::where('ip', $request->ip())
        ->where('product_id',$id)->first();

        $cart->quantity =  $cart->quantity + 1;
        $cart->save();

        return redirect('/shoppingcart');
    }

    public function minus(Request $request, $id)
    {
        $cart = Cart::where('ip', $request->ip())
        ->where('product_id',$id)->first();

        if($cart->quantity >1){
            $cart->quantity =  $cart->quantity - 1;
            $cart->save();
        }else{
            $cart ->delete();
        }

        return redirect('/shoppingcart');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart ->delete();
        return redirect('/shoppingcart');
    }
}
