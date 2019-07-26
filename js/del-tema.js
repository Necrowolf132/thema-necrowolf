;(function($){
    "use strict"
	
	
	var nav_offset_top = $('header').height() + 50; 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header").addClass("navbar_fixed");
                } else {
                    $(".header").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
	
	/*----------------------------------------------------*/
    /*  Super-home banner height js
    /*----------------------------------------------------*/
    function  SuperHomHeight(){
        var bannerHeight = $(window).height() + "px";
        $('.super-home').css("height", bannerHeight);
        $(window).on('resize', ()=>{
            var bannerHeight = $(window).height() + "px";
        $('.super-home').css("height", bannerHeight);
        })
    }
    SuperHomHeight();
	/*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
	function parallaxEffect() {
    	$('.bg-parallax').parallax();
	}
	parallaxEffect();
	
	var dropToggle = $('.widgets_inner .list li').has('ul').children('a');
    dropToggle.on('click', function() {
        dropToggle.not(this).closest('li').find('ul').slideUp(200);
        $(this).closest('li').children('ul').slideToggle(200);
        return false;
    });
	/*----------------------------------------------------*/
    /*  Slider productos mas vendidos home
    /*----------------------------------------------------*/
    function product_slider(){
        if ( $('.feature_p_slider').length ){
            $('.feature_p_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 4,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots:true, 
//				navContainer: '.testimonials_area',
//                navText: ['<i class="lnr lnr-arrow-up"></i>','<i class="lnr lnr-arrow-down"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1, 
                    },
                    360: {
                        items: 2, 
                    },
                    576: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                }
            })
        }
    }
    product_slider();
	

})(jQuery)