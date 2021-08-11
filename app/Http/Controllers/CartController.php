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
        $carts = Cart::with('products')->userIp()->get();
        $total_quantity = $carts->sum('quantity');

        // 方法1:
        // $total_price = 0;
        // foreach($carts as $cart){
        //     $total_price = $total_price + ($cart->products->price * $cart->quantity);
        // }

        // 方法2:
        $total_price = $carts->sum(function ($cart) {
            return $cart->products->price * $cart->quantity;
        });

        return view('shoppingcart', compact('carts', 'total_quantity', 'total_price'));
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

        $cart = Cart::userIp()
        ->where('product_id', $product->id)
        ->first();

        if ($cart && $cart->quantity < $cart->products->quantity) {
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
        } else if (!$cart) {
            Cart::create([
                'ip' => $request->ip(),
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        return redirect('/');
    }

    public function add(Request $request, $id)
    {
        $cart = Cart::userIp()->where('product_id', $id)->first();

        if ($cart->quantity < $cart->products->quantity) {
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
        }

        return redirect('/shoppingcart');
    }

    public function minus(Request $request, $id)
    {
        $cart = Cart::userIp()->where('product_id', $id)->first();

        if ($cart) {
            if ($cart->quantity > 1) {
                $cart->quantity = $cart->quantity - 1;
                $cart->save();
            } else {
                $cart->delete();
            }
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
        $cart = Cart::userIp()->find($id);
        $cart->delete();
        return redirect('/shoppingcart');
    }
}
