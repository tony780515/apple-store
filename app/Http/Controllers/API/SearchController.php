<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 新增抓API的Controller,記得要改以下這行並import class
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate(
            [
                'search' => 'max:255'
            ]
        );

        $products = Product::all();

        $search = $request->get('search');

        if ($search) {
            $products = Product::where('name', 'like', '%' . $search . '%')->get();
        }

        return response()->json($products);
    }
}
