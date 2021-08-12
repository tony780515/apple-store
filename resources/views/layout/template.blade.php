<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{mix('css/template.css')}}">
    @yield('css')
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <a href="/">
                    <img src="{{asset('images/Apple_Logo.png')}}" alt="">
                </a>
            </div>
            <div class="navbar-left">
                <a href="/#c1">Mac</a>
                <a href="/#c2">iPad</a>
                <a href="/#c3">iPhone</a>
                <a href="/#c4">Watch</a>
            </div>
            <div class="navbar-right">
                <form class="search" action="/searchlist" method="GET">
                    <input type="search" name="search" required  autocomplete="off">
                    <button><i class="fas fa-search"></i></button>
                </form>
                <div class="icon">
                    <a href="/shoppingcart">
                        <i class="fas fa-shopping-cart">
                            @if($count)
                              <div class="item-count">{{$count}}</div>
                            @endif
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('main')
    </main>
    <footer>
        <h5>Copyright © 2021 Apple Inc. 保留一切權利。</h5>
    </footer>

    <script src="{{mix('js/app.js')}}" type="text/javascript"></script>
</body>

</html>
