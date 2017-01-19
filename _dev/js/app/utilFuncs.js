define(function(require){

	var _setAutoMinHeight = function()
	{
		$(window).resize(function(){
			var w_h = $(window).height();

			if(w_h<400)
			{
				$('.auto-height').css({
					'min-height' : '400px'
				});
			}
			else
			{
				$('.auto-height').css({
					'min-height' : w_h+'px'
				});
			}

			$('.auto-height-force').css({
				'height' : w_h+'px'
			});

			$('.auto-height-scroll').css({
				'height' : w_h*0.8+'px'
			});


			$('.auto-height-force.auto-height-plus').css({
				'height' : (w_h+200)+'px'
			});
			$('.auto-height.auto-height-plus').css({
				'height' : (w_h+200)+'px'
			});
			
		});
	};

	var _setAutoMinWidth = function()
	{
		$(window).resize(function(){
			var w_w = $(window).width();

			$('.auto-width').css({
				'min-width' : w_w+'px'
			});

			$('.auto-width-force').css({
				'width' : w_w+'px'
			});
			
		});
	};

	var _verticalCenter = function(el, box, h)
	{
		var e = el, b = box, new_h, new_w;

		$(window).resize(function (){
			new_h = (box.height() - e.outerHeight())/2;
			new_w = (box.width() - e.outerWidth())/2;

	        e.css({
	            top: new_h+'px'
	        });

	        if(h)
	        {
	        	e.css({
		            left: new_w+'px'
		        });
	        }
	    });

	    setTimeout(function(){
	    	$(window).resize();
	    }, 200);
	    setTimeout(function(){
	    	$(window).resize();
	    }, 500);
	};

	var _equalHeight = function(el, box)
	{
		var e = el, b = box, new_h;

		new_h = b.height()+2;

		e.css({
			'height' : new_h+'px'
		});

		$(window).resize(function (){
			new_h = b.height()+2;

			e.css({
				'height' : new_h+'px'
			});
	    });

	    setTimeout(function(){
	    	$(window).resize();
	    }, 200);
	    setTimeout(function(){
	    	$(window).resize();
	    }, 500);
	};

	var _openMenu = function(noAni)
	{
		var main = $('.sct-main'),
		body = $('.sct-body, .sct-header'),
		menu = $('.sct-menu'),
		windowWidth = window.innerWidth || $(window).width(),
		perc = (windowWidth > 768) ? '30%' : '80%';

		main.addClass('opened');

		if(noAni)
		{
			menu.css({
				'left': '0%'
			}, 200);

			body.css({
				'margin-left': perc
			}, 300);
		}
		else
		{
			menu.stop().animate({
				'left': '0%'
			}, 200);

			body.stop().animate({
				'margin-left': perc
			}, 300);
		}
	};

	var _closeMenu = function(noAni)
	{
		var main = $('.sct-main'),
		body = $('.sct-body, .sct-header'),
		menu = $('.sct-menu'),
		windowWidth = window.innerWidth || $(window).width(),
		perc = (windowWidth > 768) ? '-31%' : '-81%';
		
		main.removeClass('opened');

		if(noAni)
		{
			menu.css({
				'left': perc
			}, 300);

			body.css({
				'margin-left': '0%'
			}, 200);
		}
		else
		{
			menu.stop().animate({
				'left': perc
			}, 300);

			body.stop().animate({
				'margin-left': '0%'
			}, 200);
		}
	};

	var _correctMenuOnResize = function()
	{
		$(window).resize(function(){
			var main = $('.sct-main'),
			body = $('.sct-body'),
			menu = $('.sct-menu'),
			windowWidth = window.innerWidth || $(window).width(),
			perc = (windowWidth > 768) ? '-31%' : '-81%';

			if(main.hasClass('opened'))
			{
				_openMenu(true);
			}
			else
			{
				_closeMenu(true);
			}
		});
	};

	var _toggleMenu = function()
	{
		$('.toggle-menu').on('click', function(){
			var t = $(this),
			main = $('.sct-main');

			if(main.hasClass('opened'))
			{
				_closeMenu();
			}
			else
			{
				_openMenu();
			}

			return false;
		});

		$('.sct-body, .sct-header').on('click', function(){
			_closeMenu();
		});

		_correctMenuOnResize();
	};

	var _goToByHash = function()
	{
		if(window.location.hash)
		{
			var hash = window.location.hash;
			if(hash.indexOf("anchor") > -1){}
			else
			{
				hash =  hash.replace('#', '');
				
				setTimeout(function() {
					_goToAnimate(hash);
				}, 150);
			}
		}
	};

	var _goToAnimate = function(anchor)
	{
		var el_anch = $('.target-'+anchor);

		if(el_anch.length)
		{
			h_final = el_anch.offset().top;

			$('html, body').animate({
	            scrollTop: h_final
	        }, 500, function(){
	        	_closeMenu();
	        });
		}	
	};

	var _animateScrollMenu = function()
	{
		$('body').on('click', '.go-to', function(){
			var t = $(this),
			hash = t.attr('data-anchor');

			if($('.target-'+hash).length)
			{
				_goToAnimate(hash);

				return false;
			}

			return true;
		});
	};

	var _scrolledHeader = function()
	{
		$(window).scroll(function(){
			var s_w = $(window).scrollTop(),
			w_h = $(window).height();

			var desc = (w_h*0.75);

			if(s_w>desc)
			{
				$('.sct-header').addClass('scrolled');
			}
			else
			{
				$('.sct-header').removeClass('scrolled');
			}
		});
		$(window).scroll();
	};

	var _aniChildHover = function()
	{
		$('.ani-child-hover').on('mouseenter', function(){
			var t = $(this),
			hover = t.find('.hover');

			_equalHeight(t.find('.height-child'), t);
			_verticalCenter(t.find('.center-child'), t.find('.center-parent'));

			hover.stop().animate({ 
				top : '0px'
			}, 300);
		});

		$('.ani-child-hover').on('mouseleave', function(){
			var t = $(this),
			hover = t.find('.hover');

			hover.stop().animate({ 
				'top' : '400px'
			}, 300);
		});

		$('.ani-child-click').on('click', function(){
			var t = $(this),
			hover = t.find('.hover');

			if(hover.hasClass('opened'))
			{
				hover.stop().animate({ 
					top : '400px'
				}, 300, function(){
					hover.removeClass('opened');
				});
			}
			else
			{
				_equalHeight(t.find('.height-child'), t);
				_verticalCenter(t.find('.center-child'), t.find('.center-parent'));

				hover.stop().animate({ 
					top : '0px'
				}, 300, function(){
					hover.addClass('opened');
				});
			}
			
		});
	};

	var _autoParallax = function()
	{
		$(window).scroll(function(){
			var $banner = $('.auto-parallax'),
				d_scroll = $(document).scrollTop(),
				r_srcoll = Math.round(d_scroll*0.5),
				c_srcoll = Math.round(d_scroll*0.2),
				banner_h = $banner.height(),
				opc 	 = (banner_h - d_scroll) / banner_h;

			var p = (r_srcoll>0) ? r_srcoll : 0;

			$banner.find('.paralax-child-delay').css({
				'-ms-transform' : 'translateY('+c_srcoll+'px)',
   				'-webkit-transform' : 'translateY('+c_srcoll+'px)',
   				'-moz-transform' : 'translateY('+c_srcoll+'px)',
    			'transform' : 'translateY('+c_srcoll+'px)'
			});

			$banner.css({
				'background-position' : 'center '+p+'px'
			});
		});
	};

	var init = function()
	{
		_setAutoMinHeight();
		_setAutoMinWidth();
		_toggleMenu();

		$('.center-parent').each(function(){
			var t = $(this);
			_verticalCenter(t.find('.center-child'), t);
		});

		$('.center-parent-all').each(function(){
			var t = $(this);
			_verticalCenter(t.find('.center-child-all'), t, true);
		});

		$('.height-parent').each(function(){
			var t = $(this);
			_equalHeight(t.find('.height-child'), t);
		});

		_goToByHash();
		_animateScrollMenu();
		_scrolledHeader();
		_aniChildHover();
		_autoParallax();
	};

	return {
		init : init
	};
});