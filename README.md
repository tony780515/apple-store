# 蘋果商城及購物車
相關技術:PHP, Laravel 8, MySQL, HTML, CSS, JaveScrip


## 環境建置(以Docker為例)
1. `sail up`
2. `composer install`
3. 複製.env.example,貼上後改名為.env
4. `php artisan key:generate`
5. `php artisan migrate --seed`


## 功能介紹
1. 可將想購買的物品放入購物車並可從右上角看出購物車裡的物品件數
2. 透過後台的ip驗證,可到購物車內調整數量以及確認總件數及總金額
3. 填寫個人資訊的欄位,前後台階有驗證機制
4. 按下結帳後會生成訂單給客人同時清空購物車
