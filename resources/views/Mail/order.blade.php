<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: black;
        }

        main {
            width: 100%;
            padding: 10px;
        }

        .cart {
            width: 70%;
            margin: 20px auto;
            border: gainsboro solid 2px;
            border-radius: 5px;
            padding-bottom: 20px;
        }

        .item {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: gainsboro solid 1px;
            position: relative;
        }

        .cart .photo {
            width: 20%;
            margin-left: 20px;
            /* margin: 20px 0; */
        }

        .cart .photo img {
            width: 100%;
            height: 130px;
            object-fit: contain;
        }
        .cart .iteminfo {
            font-size: 15px;
            line-height: 25px;
            margin-left: 50px;
        }

        .order_title {
            width: 70%;
            margin: auto;
            margin-top: 70px;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }

        .order {
            width: 40%;
            margin: 20px auto;
            border: gainsboro solid 2px;
            border-radius: 5px;
            padding-bottom: 20px;
        }

        .order table {
            margin: auto;
            margin-bottom: 20px;
        }

        .order th,
        td {
            padding: 35px 0px 0px 5px;
            font-size: 17px;
        }

        .order td {
            border-bottom: gainsboro solid 1px;
        }

        a {
            display: flex;
            justify-content: center;
            text-align: center;
            font-size: 17px;
            /* font-weight: 400; */
            padding: 8px;
            margin: auto;
            /* margin-top: 40px; */
            width: 10%;
            border: grey 1px solid;
            border-radius: 5px;
            background: rgba(220, 220, 220, 0.63);
        }
    </style>
</head>

<body>
    <main>
        <div class="cart">
            @foreach ($order->products as $product)
            <div class="item">
                <div class="photo">
                    <img src="{{asset($product->img)}}" alt="">
                </div>
                <div class="iteminfo">
                    <div class="name">產品:{{$product->name}}</div>
                    <div class="item_price">單價: NT$ {{$product->price}}</div>
                    <div class="item_quantity">數量 {{$product->pivot->quantity}} 件</div>
                </div>

                {{-- <div class="item_total">NT$ {{$product->price * $product->pivot->quantity}}</div> --}}
            </div>
            @endforeach
            {{-- <div class="account">
                <div class="order_quantity">共 <span class="total_red">{{$total_quantity}}</span> 件產品</div>
                <div class="order_total">總金額:<span class="total_red">NT$ {{$total_price}}</span></div>
            </div> --}}
        </div>
        <div class="order_title">訂單明細</div>
        <div class="order">
            <table>
                <tr>
                    <th scope="row">訂單編號:</th>
                    <td>{{$order->serial}}</td>
                </tr>
                <tr>
                    <th scope="row">收件者名稱:</th>
                    <td>{{$order->customer_name}}</td>
                </tr>
                <tr>
                    <th scope="row">Email:</th>
                    <td>{{$order->email}}</td>
                </tr>
                <tr>
                    <th scope="row">收件地址:</th>
                    <td>{{$order->address}}</td>
                </tr>
                <tr>
                    <th scope="row">收件人電話:</th>
                    <td>{{$order->phone}}</td>
                </tr>
                <tr>
                    <th scope="row">消費金額:</th>
                    <td>NT: {{$total_price}}</td>
                </tr>
            </table>
        </div>
        <a href="{{config('app.url')}}">繼續購物</a>
    </main>
</body>

</html>
