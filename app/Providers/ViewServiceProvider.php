<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('template.template', function ($view) {
            $carts = Cart::with('products')->get();
            $usercart = $carts->where('ip', request()->ip());
            $quantity = $usercart->sum('quantity');

            // 'count'是blade檔裡面的$count
            // $quantity是要帶入'count'的變數

            $view->with('count', $quantity);
        });
    }
}
