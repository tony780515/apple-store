// require('./bootstrap');
var navbar = document.querySelector("nav")

window.onscroll = function () {
    if (document.documentElement.scrollTop > 30 || document.body.scrollTop > 30) {
        navbar.classList.add("sm")
    } else {
        navbar.classList.remove("sm")
    }
}
