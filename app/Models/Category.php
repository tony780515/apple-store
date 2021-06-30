<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code','created_at', 'updated_at'];

    public function products()
    {
        //return $this->hasMany('App\要連結的model名稱','外鍵','主鍵')
        return $this->hasMany('App\Product','category_id','id');
    }

}
