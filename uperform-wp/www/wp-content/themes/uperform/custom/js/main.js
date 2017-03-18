$(document).ready(function(){


// site preloader -- also uncomment the div in the header and the css style for #preloader
jQuery(document).ready(function($) {  

    $(window).on('load',function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });

    });


// Bootstrap Scroll Spy
  $('body').scrollspy({
    target:'.navbar-collapse',
    offset:95,
  });

// Counter Up Plugin
  $('.counter').counterUp({
      delay: 10,
      time: 3500
  });


// Team Member Carousel
$(".all-member").owlCarousel({
        
        items: 4,
        itemsDesktop:  [1199,4],
        itemsDesktopSmall:  [979,3],
        itemsTablet:  [768,2],
        itemsMobile:   [479,1],
        pagination: true,
        autoPlay: false,
      });


// Testimonial Slider
$(".testimonial-slide").owlCarousel({
        
        items: 1,
        itemsDesktop:  [1199,1],
        itemsDesktopSmall:  [979,1],
        itemsTablet:  [768,1],
        itemsMobile:   [479,1],
        pagination: true,
        autoPlay: true
      });

// Sponsor Company Logo
$(".client-company").owlCarousel({
        
        items: 3,
        itemsDesktop:  [1199,3],
        itemsDesktopSmall:  [979,2],
        itemsTablet:  [768,1],
        itemsMobile:   [479,1],
        pagination: true,
        autoPlay: true,
      });


// Smooth scroll
  $('.navbar-default .navbar-nav li a, .req-btn-are a').smoothScroll({
    speed: 1500,
    offset: -92,
  });


// Navbar
(function() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 80) {
            $(".navbar").addClass('navbar-active');
            $(".navbar").css('min-height', '70px');
        } else {
            $(".navbar").removeClass('navbar-active');
            $(".navbar").css('min-height', '105px');
        }
      });
}());

});

// Portfolio
$(window).on('load',function(){
    var $container = $('.portfolio-item');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.portfolio-menu a').on('click',function(){
        $('.portfolio-menu .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});

// Skillbar
jQuery(document).ready(function(){
  jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar-1, .skillbar-bar-2, .skillbar-bar-3, .skillbar-bar-4 ').animate({
      width:jQuery(this).attr('data-percent')
    },3000);
  });
});


// Team Single Portfolio Carousel
$(".portfolio-present").owlCarousel({
        
        items: 1,
        itemsDesktop:  [1199,1],
        itemsDesktopSmall:  [979,1],
        itemsTablet:  [768,1],
        itemsMobile:   [479,1],
        autoPlay: false,
        paginationSpeed: 1500,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i> ","<i class='fa fa-angle-right'></i>"],
});


// Sidebar Project Slide
$(".sidebar-project-show").owlCarousel({
        
        items: 1,
        itemsDesktop:  [1199,1],
        itemsDesktopSmall:  [979,1],
        itemsTablet:  [768,1],
        itemsMobile:   [479,1],
        pagination: true,
        autoPlay: true
});


// Personal Skillbar
$('.circle').circleProgress({
        size: 120
    });

$('.first-value').circleProgress({
        emptyFill: 'rgba(213, 255, 233, 1)'
    });

$('.second-value').circleProgress({
        emptyFill: 'rgba(242, 224, 215, 1)'
    });

$('.third-value').circleProgress({
        emptyFill: 'rgba(222, 244, 255, 1)'
    });

$('.fourth-value').circleProgress({
        emptyFill: 'rgba(236, 216, 228, 1)'
});
