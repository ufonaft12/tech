jQuery(document).ready(function($){
	if(window.matchMedia('(max-width: 768px)').matches) {
		$('body').append('<div class="menu-bg"></div>');
		
		$('.mobile-menu-btn').click(function(e){
			e.preventDefault();
			$(this).toggleClass('active');
			$('#menu').toggleClass('active');
			$('.menu-bg').toggleClass('active');
			$('body').toggleClass('menu-active');
			$('#menu .menu-item-has-children.active').removeClass('active')	
		});
		
		$('#menu .menu-item-has-children').on('click', function(e){
			if (e.offsetX < 34) {
				if($(this).hasClass('active')) {
					$('#menu .menu-item-has-children.active').removeClass('active')
				} else {
					$('#menu .menu-item-has-children.active').removeClass('active')
					$(this).addClass('active');
				}
				e.preventDefault();
			}
		});
		
		$('.menu-bg').click(function(){
			$('#menu .menu-item-has-children.active').removeClass('active')
			$(this).toggleClass('active');
			$('#menu').toggleClass('active');
			$('.mobile-menu-btn').toggleClass('active');
			$('body').toggleClass('menu-active');
		});
	}

    $('.gallery-slider').owlCarousel({
        loop:true,
        nav:true,
        navText:['<span class="lnr lnr-chevron-left"></span>','<span class="lnr lnr-chevron-right"></span>'],
        dots:false,
        margin: 15,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            900:{
                items:1,
            }
        }
    });

    $(".four-slider").owlCarousel({
        loop: true,
        margin: 10,
        responsive: true,
        nav: true,
        dots: false,
        navText: ["עוד כתבות בנושא","|"],
        rtl: true,
        responsive: {
            0: {
                items:1
            },
            600: {
                items:2
            },
            1000: {
                items:3
            }
        }
    });

});