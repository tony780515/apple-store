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
        {{-- <div class="box">
                <div class="photo"><a href=""><img
                            src="https://s.yimg.com/zp/MerchandiseImages/bb2fdfc50a-Gd-9238370.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPad Air</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>

            </div>
            <div class="box">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/ipad-2020-hero-landing?wid=744&hei=1212&fmt=jpeg&qlt=80&.v=1598913494000"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPad</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/ipad-mini-select-201911_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=80&.v=1573825332486"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPad mini</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div> --}}
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
        {{-- <div class="box">
                <div class="photo"><a href=""><img
                            src="https://s.yimg.com/zp/MerchandiseImages/3279D4BDC1-SP-9795825.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPhone 12</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>

            </div>
            <div class="box">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-se-family-select-2020?wid=882&hei=1058&fmt=jpeg&qlt=80&.v=1586794486444"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPhone SE</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone11-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=80&.v=1567022175704"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPhone 11</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div> --}}
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
        {{-- <div class="box">
                <div class="photo"><a href=""><img
                            src="https://www.apple.com/v/watch/shared/compare/e/images/overview/compare_se__crebhd9hhdea_large.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Apple Watch SE</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>

            </div>
            <div class="box">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/42-alu-space-sport-black-nc-s3-grid_GEO_TW?wid=270&hei=275&fmt=jpeg&qlt=95&.v=1594259810000"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Apple Watch Series 3</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MG213_VW_34FR+watch-44-stainless-silver-cell-hermes6s_VW_34FR_WF_CO+watch-face-44-hermes6s-encre_VW_34FR_WF_CO_GEO_TW?wid=375&hei=356&trim=1,0&fmt=p-jpg&qlt=95&.v=1599351644000,1600811023000,1618108900000"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Apple Watch Hermès
                        </h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div> --}}
    </div>
</div>
<div class="backtotop"><a href="#"><img
            src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt=""></a></div>
@endsection
