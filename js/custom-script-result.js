(function( $ ){
	$.fn.myfunction = function() {

		$(this).css("padding-top",0);
		$(this).css("padding-bottom",0);
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);

		var height = $(this).outerHeight(true);
		var diff = (80 - height)/2;

		if(diff > 0)
		{
			$(this).css("padding-top",diff);
			$(this).css("padding-bottom",diff);
		}

		return this;
	};
})( jQuery );

$(document).ready(function(){
	$('.vcenter-text').each(function(){
		$(this).myfunction();
	});
});

$(window).load(function(){
	$('.vcenter-img').each(function(){
		$(this).myfunction();
	});
});

$(window).resize(function(){
	$('.vcenter-text').each(function(){
		$(this).myfunction();
	});
	$('.vcenter-img').each(function(){
		$(this).myfunction();
	});
});


/*Auto Scrolling and fix side bar*/
(function(){
	var lastScroll = 0;

	$(document).on('scroll',function(){
		var currentScroll = $(this).scrollTop();

		if(currentScroll > lastScroll) 
		{
			$('#right-sidebar').css("top",65);
		}	
		else
		{
			$('#right-sidebar').css("top",90);
		}

		lastScroll = currentScroll;
	})
})();

/*Fixed Cheapest-Quickest-Best Rated*/
(function(){
	var lastScroll = 0;

	$(document).on('scroll',function(){
		var currentScroll = $(this).scrollTop();

		$('#option-tab').css("margin-top",currentScroll);
		$('#content-tab').css("margin-top",-1*currentScroll);
		if(currentScroll > lastScroll) 
		{
			$('#result-parent').css("margin-top",-25);
		}	
		else
		{
			$('#result-parent').css("margin-top",0);
		}

		lastScroll = currentScroll;
	})
})();
