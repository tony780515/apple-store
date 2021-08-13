@extends('layout.template')

@section('css')
<link rel="stylesheet" href="{{mix('css/applestore.css')}}">
@endsection

@section('main')
<div id="c1" class="content">
    <div class="banner"><img src="{{asset('images/Banner_Mac.jpg')}}" alt=""></div>
    <div class="group-photo">
        @foreach ($macs as $mac)
            <div class="box">
                <div class="photo"><img src="{{asset($mac->img)}}" alt=""></div>
                <div class="text">
                    <h3>{{$mac->name}}</h3>
                    <h4>NT$ {{$mac->price}}</h4>
                </div>
                <div class="link">
                    @if ($mac->quantity > 0)
                    <div class="link-text"><a href="/shoppingcart/store/{{$mac->id}}">加入購物車</a></div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                    @else
                    <div class="soldout">已售完</div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
<div id="c2" class="content">
    <div class="banner"><img src="{{asset('images/Banner_IPad.jpg')}}" alt="">
    </div>
    <div class="group-photo">
        @foreach ($ipads as $ipad)
        <div class="box">
            <div class="photo"><img src="{{asset($ipad->img)}}" alt=""></div>
            <div class="text">
                    <h3>{{$ipad->name}}</h3>
                    <h4>NT$ {{$ipad->price}}</h4>
            </div>
            <div class="link">
                @if ($ipad->quantity > 0)
                    <div class="link-text"><a href="/shoppingcart/store/{{$ipad->id}}">加入購物車</a></div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                @else
                    <div class="soldout">已售完</div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="c3" class="content">
    <div class="banner"><img src="{{asset('images/Banner_IPhone.png')}}" alt="">
    </div>
    <div class="group-photo">
        @foreach ($iphones as $iphone)
        <div class="box">
            <div class="photo"><img src="{{asset($iphone->img)}}" alt=""></div>
            <div class="text">
                <h3>{{$iphone->name}}</h3>
                <h4>NT$ {{$iphone->price}}</h4>
            </div>
            <div class="link">
                @if ($iphone->quantity > 0)
                    <div class="link-text"><a href="/shoppingcart/store/{{$iphone->id}}">加入購物車</a></div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                @else
                    <div class="soldout">已售完</div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="c4" class="content">
    <div class="banner">
        <img src="{{asset('images/Banner_Watch.jpg')}}"alt="">
    </div>
    <div class="group-photo">
        @foreach ($watchs as $watch)
        <div class="box">
            <div class="photo"><img src="{{asset($watch->img)}}" alt=""></div>
            <div class="text">
                <h3>{{$watch->name}}</h3>
                <h4>NT$ {{$watch->price}}</h4>
            </div>
            <div class="link">
                @if ($watch->quantity > 0)
                    <div class="link-text"><a href="/shoppingcart/store/{{$watch->id}}">加入購物車</a></div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                @else
                    <div class="soldout">已售完</div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
