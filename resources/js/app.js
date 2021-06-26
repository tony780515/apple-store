// require('./bootstrap');
var navbar = document.querySelector("nav")

window.onscroll = function(){
    if(document.documentElement.scrollTop > 80 || document.body.scrollTop > 80){
        navbar.classList.add("sm")
    }else{
        navbar.classList.remove("sm")
    }
}
