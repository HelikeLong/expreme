$(function(){

	//Menus Header 
	$('ul.aditional li ul li a').append('<span class="bar"></span><span class="icon"></span>');
	$('.wrapper nav, #shortener, .logo, #main, header#header h2').hover(function(){
		$('.register').hide();
		$('.remember').hide();
	});
	$('ul.aditional li a.user').mouseover(function(){
		$('.register').fadeIn(150);
		$('.remember').hide();
	});
	$('ul.aditional li a.pass').mouseover(function(){
		$('.remember').fadeIn(150);
		$('.register').hide();
	});
	$('ul.aditional li a.user').click(function(){
		$('.register').toggle();
	});
	$('ul.aditional li a.pass').click(function(){
		$('.remember').toggle();
	});
	 

	//Tabs [Home]
	$("ul.navigation li a.single").click(function(){
		$("ul.navigation li a").removeClass('current');
		$(this).addClass('current');
		$('#multiple').slideUp();
		$('#single').slideDown();
	});
	$(".navigation li a.multiple").click(function(){
		$("ul.navigation li a").removeClass('current');
		$(this).addClass('current');
		$('#single').slideUp();
		$('#multiple').slideDown();
	});

	//Editable TextInputs
	$('.edit').click(function(){
		$(this).hide();
		$(this).prev().hide();
		$(this).next().show();
		$(this).next().select();
	});
	$('input.editable').blur(function() {  
		if ($.trim(this.value) == ''){  
			this.value = (this.defaultValue ? this.defaultValue : '');  
		}
		else {
			$(this).prev().prev().html(this.value);
		}
		$(this).hide();
		$(this).prev().show();
		$(this).prev().prev().show();
     });
	$('input.editable').keypress(function(event) {
		if (event.keyCode == '13') {
			if ($.trim(this.value) == ''){  
				this.value = (this.defaultValue ? this.defaultValue : '');  
			}
			else {
				$(this).prev().prev().html(this.value);
			}
			$(this).hide();
			$(this).prev().show();
			$(this).prev().prev().show();
		}
	});

	//Change/Upload Images on Profile
	$('#links article figure, #user figure, .uploader').hover(function(){
		$(this).find('a').stop().show();
	}, function(){
		$(this).find('a').stop().hide();
	});

	//Delete Links
	$('#links article').hover(function(){
		$(this).find('a.close, input.delete, a.enter').stop().fadeIn(300);
	}, function(){
		$(this).find('a.close, input.delete, a.enter').hide();
	});

	$('#links article a.close').click(function(){
		alert('Abre popup para confirmação de exclusão!');
	});

	$('#links article .pasta a.open').click(function(){
		alert('Abre popup com as pastas!');
	});

	//Sidebar Show/Hide Field
	$('ul.options li.showSingle, textarea.multiLink').hide();

	$('ul.options li.showSingle a').click(function(){
		$('textarea.multiLink, ul.options li.showSingle').hide();
		$('input.singleLink, ul.options li.showMulti').fadeIn(200);
	});
	$('ul.options li.showMulti a').click(function(){
		$('input.singleLink, ul.options li.showMulti').hide();
		$('textarea.multiLink, ul.options li.showSingle').fadeIn(200);
	});

	//Accordion
	$('ul#accordion li h3').click(function(){
		$('ul#accordion li h3').removeClass('active');
		$(this).parent().siblings().children().next().slideUp();
        $(this).addClass('active').next('.panel').slideDown(300);

        return false;
    });


	/*
	//Filter Links
	$('#links').listFilter('#filter', {
		listElement: 'article', 
		transition: 'toggle', 
		speed: 300
	});
	//Pagination
	$('#list').pajinate({
		items_per_page : 5,
		item_container_id : '#links',
		nav_panel_id : '.pagination',
		nav_label_prev : '<',
		nav_label_next : '>'
	});
	*/
	//Click to open Folders
	//$("#links.folders article).click(function(){
    	//window.location = $(this).find("a.enter").attr("href");
		//return false;
	//});

});