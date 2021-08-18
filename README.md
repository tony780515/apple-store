# 蘋果商城及購物車
* 相關技術:PHP, Laravel 8, MySQL, HTML, CSS, JavaScript
* 功能介紹影片:https://www.youtube.com/watch?v=-h8kuzqNwV0


## 環境建置(以Docker為例)
1. `./vendor/bin/sail up`
2. `composer install`
3. 複製.env.example,貼上後改名為.env
4. `php artisan key:generate`
5. `php artisan migrate --seed`


## 功能介紹
1. 提供產品名稱搜尋功能
2. 可將想購買的物品放入購物車並可從右上角看出購物車裡的物品件數
3. 透過後台的ip驗證,可到購物車內調整數量以及確認總件數及總金額
4. 填寫個人資訊的欄位,前後台階有驗證機制
5. 按下結帳後會生成訂單給客人同時清空購物車
6. 結帳成功時,系統會Email訂單明細到顧客所填寫的Email address


## 商城畫面
#### 1.首頁
![image](https://i.imgur.com/J7YiqyP.png)

#### 2.產品搜尋
![image](https://i.imgur.com/6aM1XzJ.png)

#### ３.購物車
![image](https://i.imgur.com/Mj8ISW8.png)

#### ４.訂單明細
![image](https://i.imgur.com/3rjr5N4.png)

