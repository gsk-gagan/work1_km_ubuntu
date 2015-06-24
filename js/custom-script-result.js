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

/*Content hider - To hide a given content on screen resize below 992px, add the class hider*/
(function(){

	var wwidth = $(document).width();
	var hidePoint = 975;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('.hider').each(function(){
				$(this).addClass('hidden');
			});
		}	
		else
		{
			$('.hider').each(function(){
				$(this).removeClass('hidden');
			});
		}	
	});

	$(document).ready(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('.hider').each(function(){
				$(this).addClass('hidden');
			});
		}	
		else
		{
			$('.hider').each(function(){
				$(this).removeClass('hidden');
			});
		}	
	});
})();

/*Fixed Map*/
(function(){
	var lastScroll = 0;

	$(document).on('scroll',function(){
		var currentScroll = $(this).scrollTop();

		$('#map-canvas').css("margin-top",currentScroll);
		
		lastScroll = currentScroll;
	})
})();

/*Map Resize and Gradient hide*/
(function(){
	var wwidth = $(document).width();
	var hidePoint = 975;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('#map-canvas').css("width","100%");
			$('#map-canvas').css("left",0);
			$('#white-gradient').addClass('hidden');
		}	
		else
		{
			$('#map-canvas').css("width","50%");
			$('#map-canvas').css("left","50%");
			$('#white-gradient').removeClass('hidden');
		}	
	});

	$(document).ready(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('#map-canvas').css("width","100%");
			$('#map-canvas').css("left",0);
		}	
		else
		{
			$('#map-canvas').css("width","50%");
			$('#map-canvas').css("left","50%");
		}
	});
})();