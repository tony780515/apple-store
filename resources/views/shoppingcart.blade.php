   @extends('template.template')

   @section('css')
        <link rel="stylesheet" href="{{mix('css/shoppingcart.css')}}">
   @endsection
   {{-- <style>
        main {
            width: 100%;
            padding: 10px;
        }

        .cart_title{
            width: 70%;
            margin: auto;
            margin-top: 110px;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }


        .cart {
            width: 70%;
            margin:20px auto;
            border: gainsboro solid 2px;
            border-radius: 5px;
            padding-bottom: 20px;
        }

        .item {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            align-items: center;
            border-bottom: gainsboro solid 1px;
            position: relative;
        }

        /* .cart input[type="checkbox"] {
            width: 18px;
            height: 18px;
        } */

        .cart .photo {
            width: 20%;
            margin-left: 20px;
            /* margin: 20px 0; */
        }

        .cart .photo img {
            width: 100%;
            object-fit: contain;
        }

        .cart .iteminfo {
            font-size: 15px;
            line-height: 25px;
            margin-left: 50px;
        }

        .cart .item_quantity {
            position: absolute;
            right: 200px;
        }

        .cart .item_total {
            position: absolute;
            right: 100px;
        }

        .cart .delete {
            position: absolute;
            right: 0px;
            font-size: 20px;
        }

        .cart .account {
            display: flex;
            justify-content: space-evenly;
            width: 30%;
            margin-left: auto;
            text-align: center;
        }

        .account .total_red {
            color: red;
        }

        .customer_title {
            width: 70%;
            margin: auto;
            margin-top: 50px;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }

        .customer_data {
            width: 70%;
            margin:20px auto;
            border: gainsboro solid 2px;
            border-radius: 5px;
            padding: 50px 100px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .customer_data .customer_name,.email,.address,.phonen {
            width: 45%;
            margin: 20px;
            padding: 0;
        }

        .customer_data input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 15px;
            background-color: rgba(220, 220, 220, 0.63);
        }

        .customer_data .backtoshop {
            cursor: pointer;
            text-align: center;
            font-size: 17px;
            font-weight: 400;
            min-width: 28px;
            padding: 8px 40px;
            margin-top: 30px;
            border: grey 1px solid;
            border-radius: 5px;
            background: rgba(220, 220, 220, 0.63);
        }

        .customer_data .backtoshop:hover {
            opacity: 0.8;
        }

        .customer_data .pay button {
            cursor: pointer;
            text-align: center;
            font-size: 17px;
            font-weight: 400;
            min-width: 28px;
            padding: 8px 50px;
            margin-top: 30px;
            border: none;
            border-radius: 5px;
            background: #0071e3;
            color: #fff;
        }

        .customer_data .pay button:hover {
            background-color: #0076edec;
        }
    </style> --}}

@section('main')
<main>
    <div class="cart_title">購物車清單</div>
    <div class="cart">
        @foreach ($carts as $cart)
            <div class="item">
                <!-- <input type="checkbox" checked> -->
                <div class="photo">
                    <img src="{{$cart->products->img}}" alt="">
                </div>
                <div class="iteminfo">
                    <div class="name">產品:{{$cart->products->name}}</div>
                    <div class="item_price">單價: NT$ {{$cart->products->price}}</div>
                </div>
                <div class="item_quantity">數量
                    <input type="number" name="quantity" min="1" max="{{$cart->products->quantity}}" value="{{$cart->quantity}}">
                </div>
                <div class="item_total">NT$ {{$cart->products->price * $cart->quantity}}</div>
                <form action="/shoppingcart/destroy/{{$cart->id}}">
                    <div class="delete">
                        <button type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </form>
            </div>
        @endforeach
        <div class="account">
            <div class="order_quantity">共 <span class="total_red">1</span> 件產品</div>
            <div class="order_total">總金額:<span class="total_red">NT$ 39900</span></div>
        </div>
    </div>
    <div class="customer_title">收件人資訊</div>
    <form action="" method="POST">
        @csrf
        <div class="customer_data">
            <div class="customer_name">收件人名稱:
                <input type="text" name="customer_name" required>
            </div>
            <div class="email" >Email:
                <input type="email" name="email">
            </div>
            <div class="address" required>寄送地址:
                <input type="text" name="address">
            </div>
            <div class="phone"  name="phone" required>手機號碼:
                <input type="tel" pattern="[0-9]{10}">
            </div>
            <div class="backtoshop"><a href="/">繼續購物</a></div>
            <div class="pay"><button type="submit">結帳</button></div>
        </div>
    </form>
    <div class="backtotop"><a href="#"><img src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt=""></a></div>
</main>
@endsection
