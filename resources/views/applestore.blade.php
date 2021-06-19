@extends('template.template')

@section('css')
<style>
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
        width: 100%;
        height: auto;
        margin: auto;
    }

    .content1 {
        width: 100%;
    }

    .content1 img {
        width: 100%;
        margin: auto;
    }

    .group-photo img {
        height: 300px;
        object-fit: contain;
    }

    .content1 .group-photo {
        width: 70%;
        display: flex;
        justify-content: space-between;
        margin: auto;
        margin-top: 10px;
    }

    .content1 .group-photo .text a {
        color: black;
    }

    .content1 .group-photo a {
        text-decoration: none;
    }

    .content1 .box1 {
        width: 23%;
        /* background-color: lemonchiffon; */
    }

    .content1 .box1 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content1 .box1 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content1 .box1 .text {
        word-break: keep-all;
    }

    .content1 .box1 .link {
        width: 35%;
        display: flex;
    }

    .content1 .box1 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content1 .box1 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content1 .box1 .link:hover .link-icon {
        left: 10px;
    }

    .content1 .box1 .link:hover .link-text {
        text-decoration: underline;
    }

    .content1 .box1 :hover img {
        opacity: 0.9;
    }

    .content1 .box2 {
        width: 23%;
    }

    .content1 .box2 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content1 .box2 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content1 .box2 .link {
        display: flex;
        flex-wrap: wrap;
    }

    .content1 .box2 .link2 {
        margin-left: 40px;
    }


    .content1 .box2 .link1,
    .link2 {

        display: flex;
    }

    .content1 .box2 .link1 .link-text,
    .link2 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content1 .box2 .link1 .link-icon,
    .link2 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content1 .box2 .link1:hover .link-icon,
    .box2 .link2:hover .link-icon {
        left: 10px;
    }

    .content1 .box2 .link1:hover .link-text,
    .box2 .link2:hover .link-text {
        text-decoration: underline;
    }

    .content1 .box3 {
        width: 23%;
        /* background-color: lightcoral; */
    }

    .content1 .box3 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content1 .box3 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content1 .box3 .link {
        width: 35%;
        display: flex;
    }

    .content1 .box3 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content1 .box3 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content1 .box3 .link:hover .link-icon {
        left: 10px;
    }

    .content1 .box3 .link:hover .link-text {
        text-decoration: underline;
    }

    .content1 .box4 {
        width: 23%;
        /* background-color: blue; */
    }

    .content1 .box4 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content1 .box4 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content1 .box4 .link {
        width: 35%;
        display: flex;
    }

    .content1 .box4 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content1 .box4 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content1 .box4 .link:hover .link-icon {
        left: 10px;
    }

    .content1 .box4 .link:hover .link-text {
        text-decoration: underline;
    }

    .content1 .box1 :hover,
    .box2 :hover,
    .box3 :hover,
    .box4 :hover img {
        opacity: 0.95;
    }

    .content1 .link-text a,
    .content1 .link-icon {
        color: #0067B8;
    }

    .content2 {
        margin: 50px 0;
    }

    .content2 img {
        width: 100%;
        margin: auto;
    }

    .content2 .group-photo {
        width: 70%;
        display: flex;
        justify-content: space-between;
        margin: auto;
        margin-top: 50px;
    }

    .content2 .group-photo .text a {
        color: black;
    }

    .content2 .group-photo a {
        text-decoration: none;
    }

    .content2 .box1 {
        width: 23%;
        /* background-color: lemonchiffon; */
    }

    .content2 .box1 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content2 .box1 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content2 .box1 .text {
        word-break: keep-all;
    }

    .content2 .box1 .link {
        width: 35%;
        display: flex;
    }

    .content2 .box1 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content2 .box1 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content2 .box1 .link:hover .link-icon {
        left: 10px;
    }

    .content2 .box1 .link:hover .link-text {
        text-decoration: underline;
    }

    .content2 .box1 :hover img {
        opacity: 0.9;
    }

    .content2 .box2 {
        width: 23%;
    }

    .content2 .box2 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content2 .box2 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content2 .box2 .link {
        display: flex;
        flex-wrap: wrap;
    }

    .content2 .box2 .link2 {
        margin-left: 40px;
    }


    .content2 .box2 .link1,
    .link2 {

        display: flex;
    }

    .content2 .box2 .link1 .link-text,
    .link2 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content2 .box2 .link1 .link-icon,
    .link2 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content2 .box2 .link1:hover .link-icon,
    .box2 .link2:hover .link-icon {
        left: 10px;
    }

    .content2 .box2 .link1:hover .link-text,
    .box2 .link2:hover .link-text {
        text-decoration: underline;
    }

    .content2 .box3 {
        width: 23%;
        /* background-color: lightcoral; */
    }

    .content2 .box3 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content2 .box3 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content2 .box3 .link {
        width: 35%;
        display: flex;
    }

    .content2 .box3 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content2 .box3 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content2 .box3 .link:hover .link-icon {
        left: 10px;
    }

    .content2 .box3 .link:hover .link-text {
        text-decoration: underline;
    }

    .content2 .box4 {
        width: 23%;
        /* background-color: blue; */
    }

    .content2 .box4 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content2 .box4 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content2 .box4 .link {
        width: 35%;
        display: flex;
    }

    .content2 .box4 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content2 .box4 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content2 .box4 .link:hover .link-icon {
        left: 10px;
    }

    .content2 .box4 .link:hover .link-text {
        text-decoration: underline;
    }

    .content2 .box1 :hover,
    .box2 :hover,
    .box3 :hover,
    .box4 :hover img {
        opacity: 0.95;
    }

    .content2 .link-text a,
    .content2 .link-icon {
        color: #0067B8;
    }

    .content3 {
        margin: 50px 0;
    }

    .content3 img {
        width: 100%;
        margin: auto;
    }

    .content3 .group-photo {
        width: 70%;
        display: flex;
        justify-content: space-between;
        margin: auto;
        margin-top: 50px;
    }

    .content3 .group-photo .text a {
        color: black;
    }

    .content3 .group-photo a {
        text-decoration: none;
    }

    .content3 .box1 {
        width: 23%;
        /* background-color: lemonchiffon; */
    }

    .content3 .box1 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content3 .box1 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content3 .box1 .text {
        word-break: keep-all;
    }

    .content3 .box1 .link {
        width: 35%;
        display: flex;
    }

    .content3 .box1 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content3 .box1 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content3 .box1 .link:hover .link-icon {
        left: 10px;
    }

    .content3 .box1 .link:hover .link-text {
        text-decoration: underline;
    }

    .content3 .box1 :hover img {
        opacity: 0.9;
    }

    .content3 .box2 {
        width: 23%;
    }

    .content3 .box2 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content3 .box2 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content3 .box2 .link {
        display: flex;
        flex-wrap: wrap;
    }

    .content3 .box2 .link2 {
        margin-left: 40px;
    }


    .content3 .box2 .link1,
    .link2 {

        display: flex;
    }

    .content3 .box2 .link1 .link-text,
    .link2 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content3 .box2 .link1 .link-icon,
    .link2 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content3 .box2 .link1:hover .link-icon,
    .box2 .link2:hover .link-icon {
        left: 10px;
    }

    .content3 .box2 .link1:hover .link-text,
    .box2 .link2:hover .link-text {
        text-decoration: underline;
    }

    .content3 .box3 {
        width: 23%;
        /* background-color: lightcoral; */
    }

    .content3 .box3 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content3 .box3 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content3 .box3 .link {
        width: 35%;
        display: flex;
    }

    .content3 .box3 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content3 .box3 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content3 .box3 .link:hover .link-icon {
        left: 10px;
    }

    .content3 .box3 .link:hover .link-text {
        text-decoration: underline;
    }

    .content3 .box4 {
        width: 23%;
        /* background-color: blue; */
    }

    .content3 .box4 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content3 .box4 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content3 .box4 .link {
        width: 35%;
        display: flex;
    }

    .content3 .box4 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content3 .box4 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content3 .box4 .link:hover .link-icon {
        left: 10px;
    }

    .content3 .box4 .link:hover .link-text {
        text-decoration: underline;
    }

    .content3 .box1 :hover,
    .box2 :hover,
    .box3 :hover,
    .box4 :hover img {
        opacity: 0.95;
    }

    .content3 .link-text a,
    .content3 .link-icon {
        color: #0067B8;
    }

    .content4 {
        margin: 50px 0;
    }

    .content4 img {
        width: 100%;
        margin: auto;
    }

    .content4 .group-photo {
        width: 70%;
        display: flex;
        justify-content: space-between;
        margin: auto;
        margin-top: 50px;
    }

    .content4 .group-photo .text a {
        color: black;
    }

    .content4 .group-photo a {
        text-decoration: none;
    }

    .content4 .box1 {
        width: 23%;
        /* background-color: lemonchiffon; */
    }

    .content4 .box1 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content4 .box1 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content4 .box1 .text {
        word-break: keep-all;
    }

    .content4 .box1 .link {
        width: 35%;
        display: flex;
    }

    .content4 .box1 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content4 .box1 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content4 .box1 .link:hover .link-icon {
        left: 10px;
    }

    .content4 .box1 .link:hover .link-text {
        text-decoration: underline;
    }

    .content4 .box1 :hover img {
        opacity: 0.9;
    }

    .content4 .box2 {
        width: 23%;
    }

    .content4 .box2 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content4 .box2 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content4 .box2 .link {
        display: flex;
        flex-wrap: wrap;
    }

    .content4 .box2 .link2 {
        margin-left: 40px;
    }


    .content4 .box2 .link1,
    .link2 {

        display: flex;
    }

    .content4 .box2 .link1 .link-text,
    .link2 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content4 .box2 .link1 .link-icon,
    .link2 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content4 .box2 .link1:hover .link-icon,
    .box2 .link2:hover .link-icon {
        left: 10px;
    }

    .content4 .box2 .link1:hover .link-text,
    .box2 .link2:hover .link-text {
        text-decoration: underline;
    }

    .content4 .box3 {
        width: 23%;
        /* background-color: lightcoral; */
    }

    .content4 .box3 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content4 .box3 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content4 .box3 .link {
        width: 35%;
        display: flex;
    }

    .content4 .box3 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content4 .box3 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content4 .box3 .link:hover .link-icon {
        left: 10px;
    }

    .content4 .box3 .link:hover .link-text {
        text-decoration: underline;
    }

    .content4 .box4 {
        width: 23%;
        /* background-color: blue; */
    }

    .content4 .box4 img {
        width: 100%;
        margin-bottom: 30px;
    }

    .content4 .box4 .text h3 {
        margin-top: 0;
        margin-bottom: 0;

    }

    .content4 .box4 .link {
        width: 35%;
        display: flex;
    }

    .content4 .box4 .link-text {
        font-size: 15px;
        font-weight: bold;
        margin: 10px 0;
    }

    .content4 .box4 .link-icon {
        font-size: 25px;
        position: relative;
        top: 7px;
        left: 5px;
        transition: 0.5s;
    }

    .content4 .box4 .link:hover .link-icon {
        left: 10px;
    }

    .content4 .box4 .link:hover .link-text {
        text-decoration: underline;
    }

    .content4 .box1 :hover,
    .box2 :hover,
    .box3 :hover,
    .box4 :hover img {
        opacity: 0.95;
    }

    .content4 .link-text a,
    .content4 .link-icon {
        color: #0067B8;
    }

    .backtotop {
        width: 100%;
        position: relative;
    }

    .backtotop img {
        width: 50px;
        position: fixed;
        right: 50px;
        bottom: 50px;
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
</style>
@endsection

@section('main')
    <div id="c1" class="content1">
        <div class="banner"><img
                src="https://www.apple.com/v/home/z/images/heroes/imac/hero_imac__dqh65mwjj04m_largetall.jpg"
                alt=""></div>
        <div class="group-photo">
            <div class="box1">
                <div class="photo"><a href=""><img
                            src="https://img.ltn.com.tw/Upload/3c/page/2021/04/26/210426-44119-1.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>MacBook</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box2">
                <div class="photo"><a href=""><img
                            src="https://mrmad.com.tw/wp-content/uploads/2021/04/apple-imac-2021-color-4.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iMac</h3>
                    </a></div>
                <div class="link">
                    <div class="link1">
                        <div class="link-text"><a href="">加入購物車</a> </div>
                        <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="box3">
                <div class="photo"><a href=""><img
                            src="https://support.apple.com/library/content/dam/edam/applecare/images/en_US/macpro/id-mac-pro-2019.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Mac Pro</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box4">
                <div class="photo"><a href=""><img
                            src="https://cdn1.techbang.com/system/images/467276/original/19766dee860df4e7b45497d77ca54f22.png?1540913095"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Mac mini</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="c2" class="content2">
        <div class="banner"><img
                src="https://www.apple.com/v/home/z/images/heroes/ipad-pro/hero_ipad_pro_non_avail__fcrsmhs4b7ma_largetall.jpg"
                alt="">
        </div>
        <div class="group-photo">
            <div class="box1">
                <div class="photo"><a href=""><img
                            src="https://d2lfcsub12kx0l.cloudfront.net/tw/article/img/202106/202106020555029382_ExtraLargeSize-640x640.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPad Pro</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box2">
                <div class="photo"><a href=""><img
                            src="https://s.yimg.com/zp/MerchandiseImages/bb2fdfc50a-Gd-9238370.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPad Air</h3>
                    </a></div>
                <div class="link">
                    <div class="link1">
                        <div class="link-text"><a href="">加入購物車</a> </div>
                        <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="box3">
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
            <div class="box4">
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
            </div>
        </div>
    </div>
    <div id="c3" class="content3">
        <div class="banner"><img
                src="https://content.vodafone.co.nz/dims4/default/d98478e/2147483647/strip/true/crop/2360x640+0+0/resize/1640x445!/quality/90/?url=http%3A%2F%2Fvodafonenz-brightspot.s3.amazonaws.com%2F3d%2F7e%2Fbc19d8a74fcea1c2532b2199c4b0%2Fcbu-presale-family-page-hello-banner-desktop-banner-iphone-12-pro-no-cta-copy-2x.png"
                alt="">
        </div>
        <div class="group-photo">
            <div class="box1">
                <div class="photo"><a href=""><img
                            src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-12-pro-max-family-hero-all?wid=940&hei=1112&fmt=jpeg&qlt=80&.v=1604021663000"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPhone 12 Pro</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box2">
                <div class="photo"><a href=""><img
                            src="https://s.yimg.com/zp/MerchandiseImages/3279D4BDC1-SP-9795825.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>iPhone 12</h3>
                    </a></div>
                <div class="link">
                    <div class="link1">
                        <div class="link-text"><a href="">加入購物車</a> </div>
                        <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="box3">
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
            <div class="box4">
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
            </div>
        </div>
    </div>
    <div id="c4" class="content4">
        <div class="banner"><img
                src="https://mac24h.vn/images/companies/1/untitled%20folder%201/untitled%20folder/banner-watch-seri4.jpg?1537526795127"
                alt="">
        </div>
        <div class="group-photo">
            <div class="box1">
                <div class="photo"><a href=""><img
                            src="https://www.apple.com/tw/watch/shared/images/overview/compare_s6__evsi0wlzp4ya_large.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Apple Watch Series 6</h3>
                    </a></div>
                <div class="link">
                    <div class="link-text"><a href="">加入購物車</a> </div>
                    <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="box2">
                <div class="photo"><a href=""><img
                            src="https://www.apple.com/v/watch/shared/compare/e/images/overview/compare_se__crebhd9hhdea_large.jpg"
                            alt=""></a></div>
                <div class="text"><a href="">
                        <h3>Apple Watch SE</h3>
                    </a></div>
                <div class="link">
                    <div class="link1">
                        <div class="link-text"><a href="">加入購物車</a> </div>
                        <div class="link-icon"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="box3">
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
            <div class="box4">
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
            </div>
        </div>
    </div>
<div class="backtotop"><a href="#"><img src="https://icon-library.com/images/back-to-top-icon-png/back-to-top-icon-png-8.jpg" alt=""></a></div>
@endsection

@section('js')
    <script>
        var navbar = document.querySelector("nav")

        window.onscroll = function(){
            if(document.documentElement.scrollTop > 80 || document.body.scrollTop > 80){
                navbar.classList.add("sm")
            }else{
                navbar.classList.remove("sm")
            }
        }
    </script>
@endsection





