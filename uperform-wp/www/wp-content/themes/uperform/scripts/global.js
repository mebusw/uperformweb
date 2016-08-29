// Ride the carousel...
jQuery(document).ready(function() {
    $('#slider1').bxSlider({
		auto: true, 
		autoHover: true,
		pause: 5000,
		pager: true,
		pagerSelector: '.slider-control',
		controls: false			
    });
		
	$('#slider2').bxSlider({
        mode: 'fade',
        auto: true,
		pause: 3000,
        controls: false
    });
	
	$('#nav li').hover(function(event){
		event.preventDefault();
		$(this).children('.secondary-nav').animate({opacity: 'show'}, 'fast');
	},function(){
		$(this).children('.secondary-nav').css('display', 'none');	
	});
});

