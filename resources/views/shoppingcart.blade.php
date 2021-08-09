@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{mix('css/shoppingcart.css')}}">
@endsection

@section('main')
<main>
    <div class="cart_title">購物車清單</div>
    <div class="cart">
        @if ($carts->isEmpty())
            <div class="item">
                <div class="photo">
                    <img src="https://s4.lativ.com.tw/images/icon/icon_blank_cart.png" alt="">
                </div>
                <div class="iteminfo">
                    <div class="name">您的購物車中沒有商品</div>
                </div>
            </div>
        @else
            @foreach ($carts as $cart)
            <div class="item">
                <div class="photo">
                    <img src="{{$cart->products->img}}" alt="">
                </div>
                <div class="iteminfo">
                    <div class="name">產品:{{$cart->products->name}}</div>
                    <div class="item_price">單價: NT$ {{$cart->products->price}}</div>
                </div>
                <div class="item_quantity">數量
                    @if ($cart->products->quantity > $cart->quantity)
                    <form action="/shoppingcart/add/{{$cart->products->id}}">
                        <button>+</button>
                    </form>
                    @endif
                    <span>{{$cart->quantity}}</span>
                    <form action="/shoppingcart/minus/{{$cart->products->id}}">
                        <button>-</button>
                    </form>
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
            <div class="order_quantity">共 <span class="total_red">{{$total_quantity}}</span> 件產品</div>
            <div class="order_total">總金額:<span class="total_red">NT${{$total_price}}</span></div>
        </div>
        @endif
    </div>
    <div class="customer_title">收件人資訊</div>
    <form action="/orderlist/store" method="POST">
        @csrf
        <div class="customer_data">
            @if ($errors->any())
                <div style="width: 100%">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif
            <div class="customer_name"><span style="color: red;" >*</span>收件人名稱:
                <input type="text" name="customer_name" required>
            </div>
            <div class="email" required><span style="color: red;" >*</span>Email:
                <input type="email" name="email">
            </div>
            <div class="address" required><span style="color: red">*</span>寄送地址:
                <input type="text" name="address">
            </div>
            <div class="phone"   required><span style="color: red">*</span>手機號碼:
                <input type="tel" name="phone" >
            </div>
            <a href="/"><div class="backtoshop">繼續購物</div></a>
            <div class="pay"><button type="submit">結帳</button></div>
        </div>
    </form>
    <div class="backtotop">
        <a href="#">
            <img src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt="">
        </a>
    </div>
</main>
@endsection
