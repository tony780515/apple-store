<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function products()
    {
        //return $this->hasMany('App\要連結的model名稱','外鍵','主鍵')
        return $this->hasOne('App\Models\Product', 'id', 'product_id');

    }

    public function order()
    {

        return $this->belongsToMany('App\Models\Order', 'product_orders', 'product_id', 'order_id');
    }
}
