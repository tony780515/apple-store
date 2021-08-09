@extends('template.template')

@section('css')
<link rel="stylesheet" href="{{mix('css/applestore.css')}}">
@endsection

@section('main')
<div id="c1" class="content">
    <div class="banner"><img src="https://www.apple.com/v/home/z/images/heroes/imac/hero_imac__dqh65mwjj04m_largetall.jpg" alt=""></div>
    <div class="group-photo">
        @foreach ($macs as $mac)
            <div class="box">
                <div class="photo"><a href=""><img src="{{$mac->img}}" alt=""></a></div>
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
    <div class="banner"><img
            src="https://www.apple.com/v/home/z/images/heroes/ipad-pro/hero_ipad_pro_non_avail__fcrsmhs4b7ma_largetall.jpg"
            alt="">
    </div>
    <div class="group-photo">
        @foreach ($ipads as $ipad)
        <div class="box">
            <div class="photo"><a href=""><img src="{{$ipad->img}}" alt=""></a></div>
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
    <div class="banner"><img
            src="https://content.vodafone.co.nz/dims4/default/d98478e/2147483647/strip/true/crop/2360x640+0+0/resize/1640x445!/quality/90/?url=http%3A%2F%2Fvodafonenz-brightspot.s3.amazonaws.com%2F3d%2F7e%2Fbc19d8a74fcea1c2532b2199c4b0%2Fcbu-presale-family-page-hello-banner-desktop-banner-iphone-12-pro-no-cta-copy-2x.png"
            alt="">
    </div>
    <div class="group-photo">
        @foreach ($iphones as $iphone)
        <div class="box">
            <div class="photo"><a href=""><img src="{{$iphone->img}}" alt=""></a></div>
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
        <img src="https://mac24h.vn/images/companies/1/untitled%20folder%201/untitled%20folder/banner-watch-seri4.jpg?1537526795127"alt="">
    </div>
    <div class="group-photo">
        @foreach ($watchs as $watch)
        <div class="box">
            <div class="photo">
                <a href=""><img src="{{$watch->img}}" alt=""></a>
            </div>
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
<div class="backtotop"><a href="#"><img
            src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt=""></a></div>
@endsection
