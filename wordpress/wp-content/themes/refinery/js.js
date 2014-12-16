function autoSize() {

	currentWidth = $(window).width();

	if (currentWidth<1000) {
		currentWidth = 1000;
	}
	$('#wrapper').css('width',currentWidth);
	$('#first_page').width(currentWidth);
	$('.bg_wrapper,#main_content').css('width',currentWidth-250);



	currentHeight = $(window).height();
	if (currentHeight<615) {
		currentHeight = 615;
	}
	$('#first_page,.main_bar').height(currentHeight);
	main_height = currentHeight ;
	$('#main_content,.bg_wrapper').height(main_height-75);
	$('#gray_box').height(main_height-210);
	$('.scroll_holder').height(main_height-134-30);
	$('#gray_scroll').height(main_height-190-30);
	$('.wrapper_box').height(main_height-75-15);
	
}

$(document).ready(function(){
	//$('#wrapper').css('width',$(window).width());
	if ($('#sub_bg').is('div')) {
		$('#first_page .bg').html($('#sub_bg').html());
	}
	autoSize();
	$.event.add(window,'load',autoSize);
	$.event.add(window,'resize',autoSize);


	$('.main_menu a').not('#map_link').click(function(){

		if ($(this).hasClass('selected')) {

		} else {
			$('.alt_menu').hide();
			$('#bar_content').show();
			$('.selected').removeClass('selected');
			$(this).addClass('selected');
			type_bg = $(this).attr('data-bg');

			if (!$('.'+type_bg).hasClass('current')) {
				$('.current').removeClass('current');
				$('.'+type_bg).addClass('current');
				if ($(".current img").size()<2) {
					$('#next_photo,#prev_photo').hide();
				} else {
					$('#next_photo,#prev_photo').show();
				}
			}

			run_slideshow();
			//siderun = window.clearInterval(sliderun);
			box = $(this).attr('data-box');
			url = $(this).attr('data-url');

			

			$('.close_button').hide();

			if (box==="green") {
				placeholder = $('#green_box');
				//$('#green_box').stop(0,0).animate({"left":"0px"},500);
				//$('#green_box .close_button').show();
			}
			
			else if (box==="brown") {
				placeholder = $('#brown_box');
				//$('#blue_box').stop(0,0).animate({"left":"0px"},500);
				//$('#blue_box .close_button').show();

			}
			
			else if (box==="yellow") {
				placeholder = $('#yellow_box');
				//$('#blue_box').stop(0,0).animate({"left":"0px"},500);
				//$('#blue_box .close_button').show();

			}

			if ($(placeholder).offset().left!='250') {
				$('.wrapper_box').stop(0,0).removeAttr('style').find('.content_placeholder').html('');
				$(placeholder).stop(0,0).animate({"left":"0px"},500);
				$(placeholder).find('.close_button').show();
				autoSize();
			}

			if (url) {
				$(placeholder).find('.content_placeholder').html('<p><img src="/wordpress/wp-content/themes/refinery/images/loading.gif" style="width:15px;"/></p>').load(url,function() {
					//if ($('#sub_bg').is('div')) {
					//	$('#first_page .bg').html($('#sub_bg').html());
					//}

				});
			}
		}
	});

	$('#map_link').click(function(){
		if ($(this).hasClass('selected')) {

		} else {
			$('.selected').removeClass('selected');
			$(this).addClass('selected');
			$('.wrapper_box').stop(0,0).removeAttr('style').find('.content_placeholder').html('');		
			$('.alt_menu').hide();
			$('#bar_content').show();	
			type_bg = $(this).attr('data-bg');

			if (!$('.'+type_bg).hasClass('current')) {
				$('.current').removeClass('current');
				$('.'+type_bg).addClass('current');
				if ($(".current img").size()<2) {
					$('#next_photo,#prev_photo').hide();
				} else {
					$('#next_photo,#prev_photo').show();
				}
			}
		}
	});


	$('#menu_a').click(function(){
		$('.alt_menu').hide();
		$('#bar_content').hide();
		$('#menu_content').show();
		$('#menu_content .menu a.selected').removeClass('selected');
		$('#menu_content .menu a:first').addClass('selected');
		placeholder = $('#green_box .content_placeholder');
		url = $('#menu_content .menu a:first').attr('data-url');
		$(placeholder).html('<p><img src="/wordpress/wp-content/themes/refinery/images/loading.gif" style="width:15px;"/></p>').load(url,function(){

		});
	});

	$('.menu a').click(function(){
		$('.menu a').removeClass('selected');
		$(this).addClass('selected');
		run_slideshow();
		placeholder = $("#green_box .content_placeholder");
		url = $(this).attr('data-url');
		$(placeholder).html('<p><img src="/wordpress/wp-content/themes/refinery/images/loading.gif" style="width:15px;"/></p>').load(url,function(){

		});
	});

	$('#brunch_a,#brunch_alt').click(function(){
		$('.alt_menu').hide();
		$('#bar_content').hide();
		$('#brunch_content').show();
		$('#menu_a').removeClass('selected');
		$('#brunch_a').addClass('selected');
		$('#brunch_content .menu a.selected').removeClass('selected');
		$('#brunch_content .menu a:first').addClass('selected');
		placeholder = $('#green_box .content_placeholder');
		url = $('#brunch_content .menu a:first').attr('data-url');
		$(placeholder).html('<p><img src="/wordpress/wp-content/themes/refinery/images/loading.gif" style="width:15px;"/></p>').load(url,function(){

		});
	});

	

	$('.close_button').click(function(){
		$(this).parent('.wrapper_box').animate({"left":"-682px"},500);
		$('.close_button').hide();
		$('.selected').removeClass('selected');
		$('.current').removeClass('.current');
		$('.index').addClass('current');
		run_slideshow();

	});
	$('#next_photo').click(function(){
			run_slideshow();
		});

	$('#prev_photo').click(function(){
		back_slide();
	});

});

window.onload = function () {
$('.scroll_holder').jScrollPane({autoReinitialise:true,maintainPosition:true});
//sliderun = window.setInterval('run_slideshow()',4000);
//siderun = window.clearInterval(sliderun);
}

function run_slideshow() {

 	var cur_image = $('.current img:visible');


  	$(cur_image).fadeOut();
  	if ($(cur_image).next('img').is('img')) {
  		$(cur_image).next('img').stop(0,0).fadeIn('slow');
	} else {
		$('.current img:first').stop(0,0).fadeIn('slow');
	}

}

function back_slide() {
	var cur_image = $('.current img:visible');


  	$(cur_image).fadeOut();
  	if ($(cur_image).prev('img').is('img')) {
  		$(cur_image).prev('img').stop(0,0).fadeIn('slow');
	} else {
		$('.current img:last').stop(0,0).fadeIn('slow');
	}
}
