$(function(){

	function getUrlParameter(sParam){
		var sPageURL = window.location.search.substring(1);
		var sURLVariables = sPageURL.split('&');
		for (var i = 0; i < sURLVariables.length; i++) 
		{
			var sParameterName = sURLVariables[i].split('=');
			if (sParameterName[0] == sParam) 
			{
				return sParameterName[1];
			}
		}
	}
	
	var $hero = $('#home-hero');

	if($hero.length > 0){
		
		var $window = $(window),
				$body = $('body');

		$body.addClass('on-home');

		$hero.css({
			height: ($(window).height()) + 'px'
			// height: ($(window).height() + 134) + 'px'
		});
		
		$window.on('resize', function(){
			$hero.css({
				height: $(window).height() + 'px'
			});
		});
		$window.scroll(function(){
			if(!$body.is('.transitional')){
				$body.addClass('transitional');
			}
			if($window.scrollTop() > ($hero.height() / 2)){
				$body.addClass('show-nav');
			}else{
				$body.removeClass('show-nav');
			}
		});

		$hero.backstretch([
			'wp-content/themes/wp_diamondback/images/stock/gold-bridge-side.jpg',
			'wp-content/themes/wp_diamondback/images/stock/arial-island.jpg',
			'wp-content/themes/wp_diamondback/images/stock/under-dock.jpg'
		], {fade: 500});

	}

	var $eventPanels = $('.event-panel');

	if($eventPanels.length > 0){

		function setEventPanelHeight(){
			var maxHeight = 0;

			$.each($eventPanels, function(){
				var $panelBody = $(this).find('.panel-body');
				$panelBody.css('height', 'auto');
				maxHeight = Math.max(maxHeight, $panelBody.height());
			});

			$eventPanels.find('.panel-body').height(maxHeight);	
		}
		
		$('#event-callouts').imagesLoaded(setEventPanelHeight);
		$(window).resize(setEventPanelHeight);
	}

	$('[href="#contact-modal"]').on('click', function(e){
		e.preventDefault();
		$('#contact-modal').modal('toggle');
	});

});