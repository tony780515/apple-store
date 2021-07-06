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
                'img' => 'https://img.ltn.com.tw/Upload/3c/page/2021/04/26/210426-44119-1.jpg'
            ],
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'iMac',
                'price' => 39900,
                'quantity' => 18,
                'img' => 'https://mrmad.com.tw/wp-content/uploads/2021/04/apple-imac-2021-color-4.jpg'
            ],
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'Mac Pro',
                'price' => 189900,
                'quantity' => 5,
                'img' => 'https://support.apple.com/library/content/dam/edam/applecare/images/en_US/macpro/id-mac-pro-2019.jpg'
            ],
            [
                'category_id' => self::CATEGORY_MAC,
                'name' => 'Mac Mini',
                'price' => 21900,
                'quantity' => 8,
                'img' => 'https://cdn1.techbang.com/system/images/467276/original/19766dee860df4e7b45497d77ca54f22.png?1540913095'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad Pro',
                'price' => 24900,
                'quantity' => 19,
                'img' => 'https://d2lfcsub12kx0l.cloudfront.net/tw/article/img/202106/202106020555029382_ExtraLargeSize-640x640.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad Air',
                'price' => 18900,
                'quantity' => 0,
                'img' => 'https://s.yimg.com/zp/MerchandiseImages/bb2fdfc50a-Gd-9238370.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad',
                'price' => 10500,
                'quantity' => 7,
                'img' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/ipad-2020-hero-landing?wid=744&hei=1212&fmt=jpeg&qlt=80&.v=1598913494000'
            ],
            [
                'category_id' => self::CATEGORY_IPAD,
                'name' => 'iPad Mini',
                'price' => 12900,
                'quantity' => 9,
                'img' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-mini-select-201911_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=80&.v=1573825332486'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone 12 Pro',
                'price' => 33900,
                'quantity' => 17,
                'img' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-12-pro-max-family-hero-all?wid=940&hei=1112&fmt=jpeg&qlt=80&.v=1604021663000'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone 12',
                'price' => 23900,
                'quantity' => 11,
                'img' => 'https://s.yimg.com/zp/MerchandiseImages/3279D4BDC1-SP-9795825.jpg'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone SE',
                'price' => 13900,
                'quantity' => 6,
                'img' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-se-family-select-2020?wid=882&hei=1058&fmt=jpeg&qlt=80&.v=1586794486444'
            ],
            [
                'category_id' => self::CATEGORY_IPHONE,
                'name' => 'iPhone 11',
                'price' => 19900,
                'quantity' => 0,
                'img' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone11-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=80&.v=1567022175704'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Apple Watch Series 6',
                'price' => 12900,
                'quantity' => 20,
                'img' => 'https://www.apple.com/tw/watch/shared/images/overview/compare_s6__evsi0wlzp4ya_large.jpg'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Apple Watch SE',
                'price' => 8900,
                'quantity' => 4,
                'img' => 'https://www.apple.com/v/watch/shared/compare/e/images/overview/compare_se__crebhd9hhdea_large.jpg'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Apple Watch Series 3',
                'price' => 5900,
                'quantity' => 2,
                'img' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/42-alu-space-sport-black-nc-s3-grid_GEO_TW?wid=270&hei=275&fmt=jpeg&qlt=95&.v=1594259810000'
            ],
            [
                'category_id' => self::CATEGORY_WATCH,
                'name' => 'Apple Watch Hermès',
                'price' => 37900,
                'quantity' => 14,
                'img' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MG213_VW_34FR+watch-44-stainless-silver-cell-hermes6s_VW_34FR_WF_CO+watch-face-44-hermes6s-encre_VW_34FR_WF_CO_GEO_TW?wid=375&hei=356&trim=1,0&fmt=p-jpg&qlt=95&.v=1599351644000,1600811023000,1618108900000'
            ],


        ]);
    }
}
