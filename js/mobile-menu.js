var opener = document.getElementById('mobile-opener');
var menu = document.getElementById('mobile-menu');
var anim = document.getElementById('anim');

opener.addEventListener('click', function () {

    if (anim.classList.contains('fa-bars')){
        anim.classList.remove('fa-bars');
        anim.classList.add('fa-close');
    } else {
        anim.classList.add('fa-bars');
        anim.classList.remove('fa-close');
    }


    if (menu.classList.contains('open')){
        menu.classList.remove('open');
    } else {
        menu.classList.add('open');
    }
});