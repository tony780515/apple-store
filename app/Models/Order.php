<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product()
    {
        //return $this->belongsToMany('App\要連結的model名稱','關聯的第三個資料表','外鍵','主鍵')
        return $this->belongsToMany('App\Models\Cart');
    }
}
