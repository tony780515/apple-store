<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'price', 'quantity', 'img', 'created_at', 'updated_at'];

    public function category()
    {   //return $this->hasOne('App\要連結的model名稱','外鍵','主鍵')
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'product_orders');
    }
}
