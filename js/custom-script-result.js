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

$('#more-filter').click(function(){
	var hidden = $('.hidden');
    if (hidden.hasClass('visible')){
        hidden.animate({"left":"-1000px"}, "slow").removeClass('visible');
        hidden.addClass('hidden');
    } else {
    	hidden.removeClass('hidden');
        hidden.animate({"left":"0px"}, "slow").addClass('visible');
    }
});
