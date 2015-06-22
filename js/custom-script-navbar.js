(function(){
	var effect = 'hide-nav';	//Change to 'hide-nav' for hiding nav-bar and 'shrink-nav' for shrinking nav-bar

	var documentElem = $(document),
	nav = $('.navbar'),
	lastScrollTop = 0;

	

	var width = $(window).width();
	$(window).resize(function(){
		if($(this).width() != width){
			width = $(this).width();
		
		if(width > 800)
		{
			effect = 'shrink-nav';
			nav.addClass('wide-nav');
			nav.removeClass('normal-nav');
		}	
		else
		{
			effect = 'hide-nav';
			nav.removeClass('wide-nav');
			nav.addClass('normal-nav');
		}	

		}
	});

	documentElem.ready(function(){
		if(width > 800)
		{
			effect = 'shrink-nav';
			nav.addClass('wide-nav');
			nav.removeClass('normal-nav');
		}	
		else
		{
			effect = 'hide-nav';
			nav.removeClass('wide-nav');
			nav.addClass('normal-nav');
		}	
	});

	documentElem.on('scroll',function(){

		var currentScrollTop = $(this).scrollTop();

		if(currentScrollTop > lastScrollTop) 
			nav.addClass(effect);
		else
			nav.removeClass(effect);

		lastScrollTop = currentScrollTop;
	})

})();	