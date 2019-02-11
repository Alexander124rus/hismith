$(document).ready(function() {

	/*document.ondragstart = noselect;
	document.onselectstart = noselect;
	document.oncontextmenu = noselect;
	function noselect() {return false;}

	/* =================================
			 	Отключение клавиши Ctrl                     
	=================================== */
	/*window.onkeydown = function(evt) {
		switch (evt.keyCode) {
			case 123:
			return false;
			break;
			case 67:
			return false;
			break;
		}
	};

	window.onkeypress = function(evt) {
		switch (evt.keyCode) {
			case 123:
			return false;
			break;
			case 67:
			return false;
			break;
		}
	};

	/** ========================
		Липкая панель навигации     
	============================**/
	var start_pos=$('nav').offset().top;
	$(window).scroll(function(){
		if ($(window).scrollTop()>=start_pos) {
			if ($('nav').hasClass()==false) $('nav').addClass('to_top');
		}
		else $('nav').removeClass('to_top');
	});

	/*var start_pos=$('#menu-on').offset().top;
	$(window).scroll(function(){
		if ($(window).scrollTop()>=start_pos) {
			if ($('#menu-on').hasClass()==false) $('#menu-on').addClass('menu_top');
		}
		else $('#menu-on').removeClass('menu_top');
	});*/

	/** ===================================
		Выдиление ссылок активных рубрик     
	======================================**/
	$(".sitebar-r .nav_link").each(function (i) {
		if(this.href==document.location.href){
		    // Присваиваем класс активному пункту меню li, а не ссылке.
		    // ul.nav li.nav_item.nav_active a.nav_link
		    $(this).parent('.nav_item').addClass('selected');
		}
	});

	/** ============================
		Кнопка Вверх       
	==============================**/
	// скрыть #back-top
	$("#scrollup").hide();
	
	// кнопка появляется и изчезает #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 400) {
				$('#scrollup').fadeIn();
			} 
			else {
				$('#scrollup').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#scrollup').click(function () {
			$('html,body').animate({scrollTop: 0}, 200);
			return false;
		});
	});

	/*$(function() {
		$("#search_button").click(function() {
		// получаем то, что написал пользователь
		var searchString    = $("#search_box").val();
		// формируем строку запроса
		var data            = 'search='+ searchString;

		// если searchString не пустая
		if(searchString) {
			// делаем ajax запрос
			$.ajax({
				type: "POST",
					//url: "http://<?php $_SERVER['HTTP_HOST'];?>172.16.2.11/v4/index.php/articles/filter",
					//url: "http://<?php $_SERVER['HTTP_HOST'];?>/v4/index.php/articles/filter",
			    	data: data,
			    	beforeSend: function(html) { // запустится до вызова запроса
			    	$("#results").html('');
			    		$("#searchresults").show();
			            $(".word").html(searchString);
			        },
			        success: function(html){ // запустится после получения резуотатов
			            $("#results").show();
			            $("#results").append(html);
			        }
			});
		}
			return false;
		});
	});*/


	$(function () {
		/*=====================================
			Включить версию для слабовидящих
		=======================================*/
		$('#on').click(function () {
			$.cookie("tools", "tools-on", { path: '/' });
			$.cookie("menu", "navigation2", { path: '/' });
			$.cookie("menu-on", "menu-on", { path: '/' });
			$.cookie("body", "contrast", { path: '/' });

			$('#tools').addClass('tools-on');
			$('#menu').addClass('navigation2');
			$('#menu-on').addClass('menu-on');	
			$('body').addClass('contrast');
		});

		var tools = $.cookie('tools');
		if(tools == "tools-on") {
	       	$('#tools').addClass('tools-on');
	       	$('#menu').addClass('navigation2');
	       	$('#menu-on').addClass('menu-on');
	       	$('body').addClass('contrast');
		}
		else {			
			$('#tools').addClass('tools-off');
			$('#menu').addClass('navigation');
			$('#menu-on').addClass('menu-off');
		}

		/*====================================
			Переключение размеров шрифта
		======================================*/
		$('#font100').click(function (){
			$('html').removeClass('font150 font200').addClass('font100');
			/*$(this).parents("li").find("button").removeClass("active");
        	$(this).addClass("active");*/
        	$.cookie("contrast_font_size", "font100", { path: '/' });
		});
		$('#font150').click(function (){
			$('html').removeClass('font100 font200').addClass('font150');
			$.cookie("contrast_font_size", "font150", { path: '/' });
		});
		$('#font200').click(function (){
			$('html').removeClass('font100 font150').addClass('font200');
			$.cookie("contrast_font_size", "font200", { path: '/' });
		});

		var contrast_font_size = $.cookie("contrast_font_size"); 
	    if(typeof(contrast_font_size) == "undefined") {
	        $("#font100").addClass("active");
	    }
	    else {			
	        $('html').addClass(contrast_font_size);
	        $('#' + contrast_font_size).addClass("active");
	    }

		/*==================================
			Переключение цветовой схемы
		====================================*/
		$('#black_white').click(function (){
			$('html').removeClass('white_black').addClass('black_white');
			$.cookie("contrast_color", "black_white", { path: '/' });
		});
		$('#white_black').click(function (){
			$('html').removeClass('black_white').addClass('white_black');
			$.cookie("contrast_color", "white_black", { path: '/' });
		});

		var contrast_color = $.cookie("contrast_color"); 
		if(typeof(contrast_color) == "undefined") {
        	$("#black_white").addClass("active");
	    }
	    else {
	        $('html').addClass(contrast_color);
	        $('#' + contrast_color).addClass("active");				
	    }

	    /*=======================================
			Отключить версию для слабовидящих
		=========================================*/
		$('#close').click(function () {
			var tools = document.getElementById('tools');
			$('body').removeClass();
	    	$.each("tools contrast_color contrast_font_size menu-on".split(" "), function(i, cookie){
		        $.removeCookie(cookie, { path: '/' });
		    });	
	    	document.location.reload();
		});
	});

});
