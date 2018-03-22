var opener = document.getElementById('mobile-opener');
var menu = document.getElementById('mobile-menu');
var anim = document.getElementById('anim');
var topline = document.getElementById('topline');
var ham = document.getElementById('mobile-hamburger');
var desc = document.getElementById('desctop-opener');
var navigation = document.getElementById('navigation');
var headerLogo = document.getElementById('header-logo');
var descOp = document.getElementById('desc-op');

desc.addEventListener('click', function(){
    if (navigation.classList.contains('open')){
        navigation.classList.remove('open');
        descOp.src = "img/close-light.png";
    } else {
        navigation.classList.add('open');
        descOp.src = "img/hamburger-light.png";
    }
});

opener.addEventListener('click', function () {

    if (anim.classList.contains('fa-bars')){
        anim.classList.remove('fa-bars');
        anim.classList.add('fa-times');
        anim.src = "img/close-light.png";
    } else {
        anim.classList.add('fa-bars');
        anim.classList.remove('fa-times');
        anim.src = "img/hamburger-light.png";
    }


    if (menu.classList.contains('open')){
        menu.classList.remove('open');
    } else {
        menu.classList.add('open');
    }
});

var first = true;
var nav = document.getElementById('navigation');
window.onscroll = function(){
    var top = (window.pageYOffset || document.scrollTop)  - (document.clientTop || 0);
    if (top > 50){
        nav.classList.add('background');
        if (first){
            nav.classList.add('open');
            first = false;
        }
        topline.classList.add('background');
        ham.classList.add('background');
        headerLogo.classList.add('open');
        desc.classList.add('open');
        nav.classList.add('opacity');
        nav.classList.remove('visible');
    } else {
        nav.classList.remove('background');
        topline.classList.remove('background');
        ham.classList.remove('background');
        headerLogo.classList.remove('open');
        desc.classList.remove('open');
        nav.classList.remove('opacity');
        nav.classList.add('visible');
    }
}
