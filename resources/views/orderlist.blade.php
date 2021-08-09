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
        @foreach ($order->products as $product)
        <div class="item">
            <div class="photo">
                <img src="{{$product->img}}" alt="">
            </div>
            <div class="iteminfo">
                <div class="name">產品:{{$product->name}}</div>
                <div class="item_price">單價: NT$ {{$product->price}}</div>
            </div>
            <div class="item_quantity">數量 {{$product->pivot->quantity}}件</div>
            <div class="item_total">NT$ {{$product->price * $product->pivot->quantity}}</div>
        </div>
        @endforeach
        <div class="account">
            <div class="order_quantity">共 <span class="total_red">{{$total_quantity}}</span> 件產品</div>
            <div class="order_total">總金額:<span class="total_red">NT$ {{$total_price}}</span></div>
        </div>
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
    <div class="backtoshop">
        <a href="/">繼續購物</a>
    </div>
    <div class="backtotop">
        <a href="#">
            <img src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt="">
        </a>
    </div>
@endsection
