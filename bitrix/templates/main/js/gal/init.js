$(document).ready(function() {
	
	$("a.fancy").fancybox({
		helpers : {
            overlay : {
                locked : false
            }
        }	
	});
	
});

function scrollToElement() {
	destination = $("#contacts_form").offset().top;	
	if ($.browser.safari || $.browser.chrome) {	
		$('body').stop().animate({ scrollTop:destination }, 1100);	
	} else {	
		$('html').stop().animate({ scrollTop:destination }, 1100);	
	}	
}


// Переключение стилей слайдера
$(document).ready(function() {
	$( ".coolframe_tab0" ).click(function() {
		$('.active-tab').removeClass("active-tab");
		$('.coolframe_tab0').addClass("active-tab");
		$('#redframe').css('background', '#F8C02B');
		$('#redframe').css('box-shadow', 'inset 0px 10px 5px 0px #f1ad20');
	});
	
	$( ".coolframe_tab1" ).click(function() {
		$('.active-tab').removeClass("active-tab");
		$('.coolframe_tab1').addClass("active-tab");
		$('#redframe').css('background', '#e486cd');
		$('#redframe').css('box-shadow', 'inset 0px 10px 5px 0px #F26FD1');
	});
	
	$( ".coolframe_tab2" ).click(function() {
		$('.active-tab').removeClass("active-tab");
		$('.coolframe_tab2').addClass("active-tab");
	    $('#redframe').css('background', '#41a0e4');
		$('#redframe').css('box-shadow', 'inset 0px 10px 5px 0px #2F79EF');
	});
});