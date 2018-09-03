$(document).ready(function() {
    
    // Scroll Events
	$(window).scroll(function(){

		var wScroll = $(this).scrollTop();

		// Activate menu
		if (wScroll > 20) {
			$('#home #main-nav').addClass('active');
			$('#home #slide_out_menu').addClass('scrolled');
		}
		else {
			$('#home #main-nav').removeClass('active');
			$('#home #slide_out_menu').removeClass('scrolled');
		};

		// Activate menu
		if (wScroll > 20) {
			$('#inner-page #main-nav').addClass('active');
			$('#inner-page #slide_out_menu').addClass('scrolled');
		}
		else {
			$('#inner-page #main-nav').removeClass('active');
			$('#inner-page #slide_out_menu').removeClass('scrolled');
		};

		//Scroll Effects

	});    
    
    // Navigation
	$('#navigation').on('click', function(e){
		e.preventDefault();
		$(this).addClass('open');
		$('#slide_out_menu').toggleClass('open');

		if ($('#slide_out_menu').hasClass('open')) {
			$('.menu-close').on('click', function(e){
				e.preventDefault();
				$('#slide_out_menu').removeClass('open');
			})
		}
	});
    
    // Price Table
	var individual_account = $('#account-table').find('.individual');
	var company_account = $('#account-table').find('.company');


	$('.switch-toggles').find('.individual').addClass('active');
	$('#account-table').find('.individual').addClass('active');

	$('.switch-toggles').find('.individual').on('click', function(){
		$(this).addClass('active');
		$(this).closest('.switch-toggles').removeClass('active');
		$(this).siblings().removeClass('active');
		individual_account.addClass('active');
		company_account.removeClass('active');
	});

	$('.switch-toggles').find('.company').on('click', function(){
		$(this).addClass('active');
		$(this).closest('.switch-toggles').addClass('active');
		$(this).siblings().removeClass('active');
		company_account.addClass('active');
		individual_account.removeClass('active');			
	});

    
    
    // Wow Animations
    wow = new WOW(
      {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
    )
    wow.init();


    // Menu For Xs Mobile Screens
    if ($(window).height() < 450) {
    	$('#slide_out_menu').addClass('xs-screen');
    }

    $(window).on('resize', function(){
	    if ($(window).height() < 450) {
	    	$('#slide_out_menu').addClass('xs-screen');
	    } else{
	    	$('#slide_out_menu').removeClass('xs-screen');
	    }
    });
    
});