define(function(require){
	require('../plugins/slick');
	require('../plugins/jquery.circliful');

	var _initSlickCar = function()
	{
		$('.slick-testimony').slick({
			slidesToShow : 1,
			infinite : true,
			arrows : true,
			prevArrow : '<span class="btn-prev icon a-dark-blue-l"></span>',
			nextArrow : '<span class="btn-next icon a-dark-blue-r"></span>',
			appendArrows: $('.slick-testimony-navigation'),
			dots : false,
			autoplay : false,
			autoplaySpeed : 4000,
			responsive: [
				{
					breakpoint: 768,
					settings: 
					{
						prevArrow : '<span class="btn btn-arrow prev"><span class="icon a-s-white-l"></span></span>',
						nextArrow : '<span class="btn btn-arrow next"><span class="icon a-s-white-r"></span></span>'
					}
				}
		  	]
		});

		$('.slick-skills').slick({
			slidesToShow : 4,
			infinite : true,
			arrows : true,
			prevArrow : '<span class="btn btn-arrow prev"><span class="icon a-s-white-l"></span></span>',
			nextArrow : '<span class="btn btn-arrow next"><span class="icon a-s-white-r"></span></span>',
			appendArrows: $('.slick-skills-navigation'),
			dots : false,
			autoplay : false,
			autoplaySpeed : 4000,
			responsive: [
				{
					breakpoint: 530,
					settings: 
					{
						slidesToShow: 3
					}
				},
				{
					breakpoint: 375,
					settings: 
					{
						slidesToShow: 2
					}
				}
		  	]
		});

		$('.slick-cases').slick({
			slidesToShow : 3,
			infinite : true,
			arrows : true,
			prevArrow : '<span class="btn btn-arrow prev"><span class="icon a-s-white-l"></span></span>',
			nextArrow : '<span class="btn btn-arrow next"><span class="icon a-s-white-r"></span></span>',
			appendArrows: $('.slick-cases-navigation'),
			dots : false,
			autoplay : false,
			autoplaySpeed : 4000,
			responsive: [
				{
					breakpoint: 600,
					settings: 
					{
						slidesToShow: 2
					}
				},
				{
					breakpoint: 400,
					settings: 
					{
						slidesToShow: 1
					}
				}
		  	]
		});
	};

	var _initCircleChart = function()
	{
		$('.circle-chart').each(function(){
			var t = $(this),
			perc = parseInt(t.attr('data-percent'));

			//console.log(perc);

			t.circliful({
			    animationStep : 2,
			    foregroundBorderWidth : 5,
			    backgroundBorderWidth : 5,
			    foregroundColor : '#feef64',
			    backgroundColor : '#8fa9d5',
			    fontColor : '#202b4f',
			    percentageTextSize : 32,
			    //animateInView : true,
			    percent: perc
			});
		});
	};

	var init = function(){
		_initSlickCar();
		_initCircleChart();
	};

	return {
		init : init
	};
});