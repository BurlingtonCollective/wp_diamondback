function setEventPanelHeight(){
	var maxHeight = 0,
			$eventPanels = $('.event-panel');

	$.each($eventPanels, function(){
		var $panelBody = $(this).find('.panel-body');
		$panelBody.css('height', 'auto');
		console.log($panelBody.outerHeight());
		maxHeight = Math.max(maxHeight, $panelBody.height() + (parseInt($panelBody.css('padding-top')) * 2));
	});

	$eventPanels.find('.panel-body').css('height', maxHeight);	
}

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
			setBackstretch();
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

		var setBackstretch = function(){
			var screenSize = window.getComputedStyle(document.body, ':after').getPropertyValue('content');
			console.log(screenSize);
			if($hero.data('backstretch')){
				$hero.backstretch("destroy");
			}
			switch (screenSize){
				case 'screen-lg':
					$hero.backstretch([
						'wp-content/themes/wp_diamondback/images/stock/gold-bridge-side.jpg',
						'wp-content/themes/wp_diamondback/images/stock/arial-island.jpg',
						'wp-content/themes/wp_diamondback/images/stock/under-dock.jpg'
					], {fade: 500});
					break;
				case 'screen-md':
					$hero.backstretch([
						'wp-content/themes/wp_diamondback/images/stock/gold-bridge-side-1200.jpg',
						'wp-content/themes/wp_diamondback/images/stock/arial-island-1200.jpg',
						'wp-content/themes/wp_diamondback/images/stock/under-dock-1200.jpg'
					], {fade: 500});
					break;
				case 'screen-sm':
					$hero.backstretch([
						'wp-content/themes/wp_diamondback/images/stock/gold-bridge-side-800.jpg'
					]);
					break;
				case 'screen-xs':
					$hero.backstretch([
						'wp-content/themes/wp_diamondback/images/stock/gold-bridge-side-400-alt.jpg'
					]);
					break;
				default:
					break;
			}
		}

		setBackstretch();
	}

	$('[href="#contact-modal"]').on('click', function(e){
		e.preventDefault();
		$('#contact-modal').modal('toggle');
	});

});

$(window).resize(setEventPanelHeight);

$(window).load(function(){
	var $eventPanels = $('.event-panel');

	if($eventPanels.length > 0){
		setEventPanelHeight();
		$('#event-callouts').addClass('ready');
	}
});