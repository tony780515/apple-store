@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{mix('css/orderlist.css')}}">
@endsection

@section('main')
    <div class="success">
        <img src="https://wemediaschool.com/wp-content/uploads/2021/06/tick-green.png" alt="">
        <div class="text">購買成功</div>
    </div>
    <div class="cart">
        {{-- @foreach ($carts as $cart) --}}
        <div class="item">
            <!-- <input type="checkbox" checked> -->
            <div class="photo">
                {{-- <img src="{{$cart->products->img}}" alt=""> --}}
            </div>
            <div class="iteminfo">
                <div class="name">產品:</div>
                <div class="item_price">單價: NT$ </div>
            </div>
            <div class="item_quantity">數量 1件</div>
            <div class="item_total">NT$ 33900</div>
        </div>
        {{-- @endforeach --}}
        <div class="account">
            <div class="order_quantity">共 <span class="total_red"></span> 件產品</div>
            <div class="order_total">總金額:<span class="total_red">NT$ 39900</span></div>
        </div>
    </div>
    <div class="order_title">訂單明細</div>
    <div class="order">
        <table>
            <tr>
                <th scope="row">訂單編號:</th>
                <td>1234567890</td>
            </tr>
            <tr>
                <th scope="row">收件者名稱:</th>
                <td>小羅</td>
            </tr>
            <tr>
                <th scope="row">Email:</th>
                <td>born780515@gmail.com</td>
            </tr>
            <tr>
                <th scope="row">收件地址:</th>
                <td>台中市北區綏遠路一段26號10樓之9</td>
            </tr>
            <tr>
                <th scope="row">收件人電話:</th>
                <td>0912345678</td>
            </tr>
            <tr>
                <th scope="row">消費金額:</th>
                <td>NT: 39900</td>
            </tr>
        </table>
    </div>
    <div class="backtoshop"><a href="/">繼續購物</a></div>
    <div class="backtotop"><a href="#"><img
                src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt=""></a>
    </div>
@endsection
