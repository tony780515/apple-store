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
    {{-- <style>
        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: black;
        }

        nav {
            width: 100%;
            height: 100px;
            background-color: black;
            display: flex;
            justify-content: center;
            position: fixed;
            z-index: 1;
            transition: 0.5s;
        }

        nav.sm {
            height: 60px;
            background-color: black;
            position: fixed;
            transition: 0.5s;
        }

        .navbar {
            width: 70%;
            display: flex;
            align-items: center;
            position: relative;
        }

        .logo {
            width: 10%;

        }

        .logo img {
            height: 70%;
            position: absolute;
            left: 30px;
            top: 10px;

        }

        .navbar-left {
            width: 55%;
            /* background-color: white; */
            display: flex;
            justify-content: space-around;
        }

        .navbar-left a {
            color: gray;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .navbar-left a::after {
            content: '';
            position: absolute;
            left: 50%;
            right: 50%;
            bottom: -3px;
            height: 0;
            border-bottom: 1px solid white;
            transition: 0.3s;
        }

        .navbar-left a:hover {
            color: white;
        }

        .navbar-left a:hover:after {
            left: 0;
            right: 0;
        }

        .navbar-right {
            display: flex;
            width: 35%;
            justify-content: flex-end;

        }

        .navbar-right .search {
            display: flex;
        }

        .navbar-right .icon i{
            font-size: 25px;
            color: white;
            margin: 0 15px;
        }

        main {
            height: 90vh;
        }

        footer {
            width: 100%;
            height: 50px;
            background-color: black;
            color: white;
            text-align: center;
        }

        footer h5 {
          position: relative;
          top: 15px;
        }
    </style> --}}
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <a href="/">
                    <img src="http://4.bp.blogspot.com/-uKViBqvNSZU/Ve4gpgCrmTI/AAAAAAAAaAI/JAkVTADYdDo/s1600/Apple_Computer_Logo_rainbow.svg.png" alt="">
                </a>
            </div>
            <div class="navbar-left">
                <a href="/#c1">Mac</a>
                <a href="/#c2">iPad</a>
                <a href="/#c3">iPhone</a>
                <a href="/#c4">Watch</a>
            </div>
            <div class="navbar-right">
                <form class="search" action="">
                    <input type="search">
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
