$(document).ready(function(){
	$('body').append("<div id='overlay'><h1><a href='http://expre.me/' title='Expre.me | Encurtador de URL's'>Expre.me | Encurtador de URL's</a></h1><p>Olá, <strong>WallaceErick</strong>!</p></div>");
	
	function fixHeight() {
		var headerHeight = $('#overlay').height();    	
		$('#iframe').attr('height', (($(window).height()) - headerHeight) + 'px');
		$('body#hide #iframe').attr('height', ($(window).height()) + 'px');
	}
	
	$(window).resize(function () {
		fixHeight();
	}).resize();
	
	var theme_url = $('iframe').attr('src');
	
	$('a.close').click(function(){
	   document.location.href = theme_url;
	})

	
});