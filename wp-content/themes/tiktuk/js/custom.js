$(window).load(function() {
	var windowW = $( window ).width();

	
	$('.menu-btn').click(function() {
		$(this).toggleClass('active');
		$('.header-inner').toggleClass('show-menu');
	});



	$('#filter-submit').click(function() {
		var filtCat = $('#filter-cat').find(":selected").val();
		var filtTag = $('#filter-tag').find(":selected").val();
		window.location.replace(window.location.protocol + "/category/"+ filtCat +"/?tag=" + filtTag);
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

	
});