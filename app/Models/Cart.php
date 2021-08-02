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

    // 以下方式可以用price來代表cart裡面每一項產品的總價

    // public function getPriceAttribute()
    // {
    //     return $this->products->price * $this->quantity ;
    // }

}
