@extends('layout.template')

@section('css')
    <link rel="stylesheet" href="{{mix('css/searchlist.css')}}">
@endsection

@section('main')
    <div class="search">
        @foreach ($products as $product)
        <div class="item">
            <div class="photo">
                <img src="{{asset($product->img)}}" alt="">
            </div>
            <div class="iteminfo">
                <div class="name">產品:{{$product->name}}</div>
                <div class="item_price">單價: NT$ {{$product->price}}</div>
            </div>
            <div class="item_quantity">剩餘 {{$product->quantity}} 件</div>
            <div class="link">
                @if ($product->quantity > 0)
                    <div class="link-text"><a href="/shoppingcart/store/{{$product->id}}">加入購物車</a></div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                @else
                    <div class="soldout">已售完</div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <div class="backtotop">
        <a href="#">
            <img src="{{asset('images/back-to-top.jpg')}}" alt="">
        </a>
    </div>
@endsection
