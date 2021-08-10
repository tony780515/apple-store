<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function products()
    {
        //return $this->belongsToMany('App\要連結的model名稱','關聯的第三個資料表')->withPivot('多對多關聯額外的資料欄位')
        return $this->belongsToMany('App\Models\Product', 'product_orders')->withPivot('quantity');
    }
}
