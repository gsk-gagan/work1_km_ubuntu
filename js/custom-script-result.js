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
		$('#content-tab').css("margin-top",-0.5*currentScroll);
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
			$('#white-gradient').addClass('hidden');
		}	
		else
		{
			$('#map-canvas').css("width","50%");
			$('#map-canvas').css("left","50%");
			$('#white-gradient').removeClass('hidden');
		}
	});
})();

/*800px shift up break point*/
(function(){
	var wwidth = $(document).width();
	var hidePoint = 800;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('#container-parent').css("padding-top","50px");
		}	
		else
		{
			$('#container-parent').css("padding-top","90px");
		}	
	});

	$(document).ready(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('#container-parent').css("padding-top","50px");
		}	
		else
		{
			$('#container-parent').css("padding-top","90px");
		}
	});
})();

/*To hide mobile-tabs initially and show later*/
(function(){

	var wwidth = $(document).width();
	var hidePoint = 975;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('.shower').each(function(){
				$(this).removeClass('hidden');
			});
		}	
		else
		{
			$('.shower').each(function(){
				$(this).addClass('hidden');
			});
		}	
	});

	$(document).ready(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('.shower').each(function(){
				$(this).removeClass('hidden');
			});
		}	
		else
		{
			$('.shower').each(function(){
				$(this).addClass('hidden');
			});
		}	
	});
})();

/*Mobile-tabs-show and hide*/
/*Map-Mobile*/
(function(){
	var hideMap = true;

	$('#cross-map').click(function(){
		$('#cross-map').addClass('hidden');
    	$('#map-canvas').css("z-index",-5);
    	$('#mobile-map-tab').css("z-index",1);
    	$('#trip-info').css("z-index",-1);
    	hideMap = true;
	});

	$("#mobile-map-tab").click(function(){
		if(hideMap)
	    {
	    	$('#cross-map').removeClass('hidden');
	    	$('#map-canvas').css("z-index",12);
	    	$('#mobile-map-tab').css("z-index",13);
	    	$('#trip-info').css("z-index",13);
	    	$('#trip-info').css("right",70);
	    	hideMap = false;
	    }
	    else
	    {
	    	$('#cross-map').addClass('hidden');
	    	$('#map-canvas').css("z-index",-5);
	    	$('#mobile-map-tab').css("z-index",1);
	    	$('#trip-info').css("z-index",-1);
	    	hideMap = true;
	    }
	});	

	var hidePoint = 975;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('#trip-info').css("right",70);
		}
		else
		{	
			$('#map-canvas').css("z-index",-5);
	    	$('#mobile-map-tab').css("z-index",1);
	    	$('#trip-info').css("right",30);
	    	hideMap = true;
		}
	});

	$(document).ready(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
			$('#trip-info').css("right",70);
		}	
		else
		{
			$('#trip-info').css("right",30);
		}	
	});
})();

/*From-to-Mobile*/
(function(){
	var hideFromTo = true;

	$('#cross-fromto').click(function(){
		$('#cross-fromto').addClass('hidden');
    	$('#from-to-mobile').css("z-index",-5);
    	$('#mobile-fromto-tab').css("z-index",1);
    	hideFromTo = true;
	});


	$("#mobile-fromto-tab").click(function(){
		if(hideFromTo)
	    {
	    	$('#cross-fromto').removeClass('hidden');
	    	$('#from-to-mobile').css("z-index",10);
	    	$('#mobile-fromto-tab').css("z-index",9);
	    	hideFromTo = false;
	    }
	    else
	    {
	    	$('#cross-fromto').addClass('hidden');
	    	$('#from-to-mobile').css("z-index",-5);
	    	$('#mobile-fromto-tab').css("z-index",1);
	    	hideFromTo = true;
	    }
	});	

	var hidePoint = 975;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
		}
		else
		{
			$('#cross-fromto').addClass('hidden');
			$('#from-to-mobile').css("z-index",-5);
	    	$('#mobile-fromto-tab').css("z-index",1);
	    	hideFromTo = true;
		}
	});
})();

/*Cab-Type-Mobile*/
(function(){
	var hideFromTo = true;

	$('#cross-filter').click(function(){
		$('#cross-filter').addClass('hidden');
    	$('#cab-type-mobile').css("z-index",-5);
    	$('#mobile-filter-tab').css("z-index",1);
    	hideFromTo = true;
	});

	$("#mobile-filter-tab").click(function(){
		if(hideFromTo)
	    {
	    	$('#cross-filter').removeClass('hidden');
	    	$('#cab-type-mobile').css("z-index",10);
	    	$('#mobile-filter-tab').css("z-index",9);
	    	hideFromTo = false;
	    }
	    else
	    {
	    	$('#cross-filter').addClass('hidden');
	    	$('#cab-type-mobile').css("z-index",-5);
	    	$('#mobile-filter-tab').css("z-index",1);
	    	hideFromTo = true;
	    }
	});	

	var hidePoint = 975;
	$(window).resize(function(){
		wwidth = $(document).width();
		if(wwidth < hidePoint)
		{
		}
		else
		{
			$('#cross-filter').addClass('hidden');
			$('#cab-type-mobile').css("z-index",-5);
	    	$('#mobile-filter-tab').css("z-index",1);
	    	hideFromTo = true;
		}
	});
})();