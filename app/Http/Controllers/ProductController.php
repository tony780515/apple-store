<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();

        $macs = Product::whereHas('category', function ($q) {
            $q->where('code', 'mac');
        })->get();

        $ipads = Product::whereHas('category', function ($q) {
            $q->where('code', 'ipad');
        })->get();

        $iphones = Product::whereHas('category', function ($q) {
            $q->where('code', 'iphone');
        })->get();

        $watchs = Product::whereHas('category', function ($q) {
            $q->where('code', 'watch');
        })->get();

        return view('applestore', compact('macs', 'ipads', 'iphones', 'watchs'));
    }

}
