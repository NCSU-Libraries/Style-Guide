var nav = {
	init : function(){
		nav.handleMenuToggle();

		// on resize time to turn off navigation is screen size changes
		var resizeTimer;
		$(window).resize(function() {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(nav.onResize, 10);
		});
	},

	handleMenuToggle : function(){
		$('.toggle-topbar.menu-icon').on('click', function(e){
			if($('body').hasClass('nav-expanded')){
				nav.closeNav();
			} else{
				nav.openNav();
			}

			e.preventDefault();
		})
	},

	openNav : function(){
		$('body').addClass('nav-expanded');

		var p = $('body').position();
		$('#my-menu').css({
			'left' : $('body').width(),
			'height': $('body').height(),
			'width' : p.left*-1
		});

		// scroll to top of page
		$(document).scrollTop(0);

		// move header over is sticky class is applied
		if($('header').hasClass('sticky')){
			$('header').css({'left' : p.left, 'position' : 'static'});
			$('body.is-sticky').addClass('nav-open');
		}
	},

	closeNav : function(){
		$('body').removeClass('nav-expanded');
		$('#my-menu').css({
			'left' : 'auto',
			'height': 'auto',
			'width' : 'auto'
		});
		if($('header').hasClass('sticky')){
			$('header').css({'left' : '0px', 'position' : 'fixed'});
			$('body.is-sticky').removeClass('nav-open');
		}
	},

	onResize : function(){
		// nav.closeNav();
	}
}

$(function(){
	nav.init();
})

