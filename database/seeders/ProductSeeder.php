<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    // php artisan migrate --seed
    // php artisan migrate:fresh --seed

    const CATEGORY_MAC = 1;
    const CATEGORY_IPAD = 2;
    const CATEGORY_IPHONE = 3;
    const CATEGORY_WATCH = 4;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'MacBook',
                'price' => 30900,
                'quantity' => 0,
                'img' => 'images/Product_Macbook.jpg'
            ],
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'iMac',
                'price' => 39900,
                'quantity' => 18,
                'img' => 'images/Product_IMac.jpg'
            ],
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'Mac Pro',
                'price' => 189900,
                'quantity' => 5,
                'img' => 'images/Product_Macpro.jpg'
            ],
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'Mac Mini',
                'price' => 21900,
                'quantity' => 8,
                'img' => 'images/Product_Macmini.png'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad Pro',
                'price' => 24900,
                'quantity' => 19,
                'img' => 'images/Product_IPadpro.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad Air',
                'price' => 18900,
                'quantity' => 0,
                'img' => 'images/Product_IPadair.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad',
                'price' => 10500,
                'quantity' => 7,
                'img' => 'images/Product_IPad.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad Mini',
                'price' => 12900,
                'quantity' => 9,
                'img' => 'images/Product_IPadmini.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone 12 Pro',
                'price' => 33900,
                'quantity' => 17,
                'img' => 'images/Product_IPhone12pro.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone 12',
                'price' => 23900,
                'quantity' => 11,
                'img' => 'images/Product_IPhone12.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone SE',
                'price' => 13900,
                'quantity' => 6,
                'img' => 'images/Product_IPhoneSE.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone 11',
                'price' => 19900,
                'quantity' => 0,
                'img' => 'images/Product_IPhone11.jpg'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Watch Series 6',
                'price' => 12900,
                'quantity' => 20,
                'img' => 'images/Product_AppleWatchSeries 6.jpg'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Watch SE',
                'price' => 8900,
                'quantity' => 4,
                'img' => 'images/Product_AppleWatchSE.jpg'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Watch Series 3',
                'price' => 5900,
                'quantity' => 2,
                'img' => 'images/Product_AppleWatchSeries3.jpg'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Watch Hermès',
                'price' => 37900,
                'quantity' => 14,
                'img' => 'images/Product_AppleWatchHermès.jpg'
            ],


        ]);
    }
}
