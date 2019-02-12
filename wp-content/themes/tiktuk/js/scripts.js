$(document).ready(function() {
	var windowW = $( window ).width();

	$('.page-banner').owlCarousel({
		items:1,
		autoplay:true,
		dots:false,
		loop:false,
		mouseDrag:false,
		touchDrag:false,
		nav:false,
		margin:0,
		autoplayTimeout:6000,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		stagePadding:0
	});
	
	$('.menu-btn').click(function() {
		$(this).toggleClass('active');
		$('.header-inner').toggleClass('show-menu');
	});



	$(".fancybox").fancybox();

	$('.home-video-thumbs').owlCarousel({
        items:3,
        autoplay:false,
		dots:true,
		navSpeed: 800,
		dragEndSpeed: 1000,
        loop:false,
        nav:false,
		margin:15,
		navText : ["<span class='car-left'></span>","<span class='car-right'></span>"],
		stagePadding:0,
		responsiveClass:true,
        responsive:{
            0:{
              items:1,
              margin:10,
            },
            768:{
				nav:false,
				mouseDrag:false,
				margin:15
            },
            1024:{
				margin:20
            },
            2500:{
				margin:30,
            }
        }
	});



	$('header .menu-item-has-children').append('<span class="menu-more"><i class="fas fa-angle-down"></i></span>')

	$("header nav > ul > .menu-item").mouseenter(function() {
        $(this).find('.menu-more').addClass('active');
        $(this).addClass('expanded');
        var subMenuElement = $(this).find('.sub-menu');
        $(subMenuElement).show();

    }).mouseleave(function() {
        $(this).find('.menu-more').removeClass('active');
        $(this).removeClass('expanded');
        var subMenuElement = $(this).find('.sub-menu');
        $(subMenuElement).hide();
	});
	
	$('header .menu-more').click(function(){
		$(this).parent().find('.sub-menu').slideToggle();
	});



	$(".menu-item a").click(function(evc) {
		evc.preventDefault();
		if( windowW <= 1515 ){
		var offset = -80;
		$( ".menu-btn" ).trigger( "click" );
		}	
		if( windowW > 1515 ){
		var offset = -150;
		}
	
		var ancLink = $(this).attr('href');
	
		$('html, body').animate({
			scrollTop: $(ancLink).offset().top + offset
		}, 400);
	});

	var cusOptions = {
        animateThreshold: 100,
        scrollPollInterval: 4
    }
	$('.aniview').AniView(cusOptions);





	
});