@extends('layout.template')

@section('css')
<link rel="stylesheet" href="{{mix('css/searchlist.css')}}">
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    const app = new Vue({
        el: '#app',
        data: {
            search: "",
            products: []
        },
        mounted() {
            // 抓API網址記得前面要加/api/
            axios.get('/api/search').then(response => {
                this.products = response.data;
            })
        },

        watch: {
            search(val) {
                this.products = axios.get('/api/search?search=' + val).then(response => {
                this.products = response.data;
                })
            },
        },
    })
</script>
@endsection

@section('main')
<div id="app">
    <div class="search_input">
        輸入產品名稱: <input type="text" id="search"  v-model.trim="search" >
    </div>
    <div class="search" id="search-list" v-for="product in products">
        <div class="item">
            <div class="photo">
                <img v-bind:src="'/' + product.img" alt="">
            </div>
            <div class="iteminfo">
                <div class="name">產品:@{{product.name}}</div>
                <div class="item_price">單價: NT$ @{{product.price}}</div>
            </div>
            <div class="item_quantity">剩餘 @{{product.quantity}} 件</div>
            <div class="link">
                <div v-if="product.quantity > 0">
                    <div class="link-text"><a v-bind:href="`/shoppingcart/store/${product.id}`">加入購物車</a></div>
                </div>
                <div v-else>
                    <div class="soldout">已售完</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
