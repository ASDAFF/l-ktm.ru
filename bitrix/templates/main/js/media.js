/*
  $(document).ready(function(){
	 if($(window).width()<600) {
        var div = document.createElement('div');
  div.className = "mob_menu_btn";
  div.innerHTML = '<img src="/bitrix/templates/main/images/sand_menu.gif">';
  header.appendChild(div);
    }
  });
*/
 $(document).ready(function(){
	var mob_menu = $("#mob_menu");
	$('.mob_menu_btn').click(function (e) {

			e.preventDefault();
			e.stopPropagation();

			buildMenu();
			//mob_menu.css({display: 'block'});
			mob_menu.css({'display': 'block', 'position': 'absolute'});
			mob_menu.show().stop().animate({
				left: 0
			}, 250, function() {
			$('.special_bg').css({display: 'none'});
			mob_menu.css({position: 'relative'});
			});
		});
	function buildMenu()
	{
		if($('.menu_content').html().length>10) return;
		mContent = $('.left_foot_menu').html();
		/*mContent = '<div class="menuTopInfo"><div class="regionSel"><b>Ваш регион: <span class="regg">'+$('#mycity').text()+'</span></b></div>';
		mContent += '<div class = "regimm">'+$('.regim').html()+'</div>';
		mContent += '<div class = "adresm">'+$('.adres span').html()+'</div>';
		mContent += '<div class = "phonem">'+$('.phone').html()+'</div>';
		mContent += '<div class = "m">e-mail: <a href="mailto:elf@wrs.ru">elf@wrs.ru</a></div>';


		mContent += '</div>';*/

	/*	mContent =	'<ul class="mMenu">'+
				'<li><a href="/about/">О компании</a></li>'+
				'<li><a href="/catalog/">Каталог</a></li>'+
				'<li><a href="/news/">Новости</a></li>'+
				'<li><a href="/faq/">Вопрос-ответ</a></li>'+
				'<li><a href="/contacts/">Контакты</a></li>'+
				'<li><a href="/usloviya_raboty_nashei_kompanii/">Оптовым клиентам</a></li>'+
				'<li><a href="/statii/">Статьи</a></li>'+

				'<li>'+
					'<a href="#" class="sb_menu_over">Другое<span class="ctl"></span></a>'+
					'<ul class="catalog_nav">'+
						'<li><a href="/size/">Таблица размеров</a></li>'+
						'<li><a href="/sitemap/">Карта сайта</a></li>'+
						'<li><a href="/prices/">Online-заказ</a></li>'+
					'</ul>'+
				'</li>	'+
			'</ul>';*/
		//mContent += '<ul class="mMenu">'+$('ul.nav').html();
		//mContent += $('.top_menu ul').html()+'</ul>';
		a =	'<li class="o_client"><a href="/usloviya_raboty_nashei_kompanii/">Оптовым клиентам</a>'+
			'<ul class="first_level">'+
			'<li style="padding-left: 0px;"><a href="/size/">Таблица размеров детских колготок</a></li>'+
			'<li style="padding-left: 0px;"><a href="/sitemap/">Карта сайта</a></li>'+
			'<li style="padding-left: 0px;"><a href="/prices/">Online-заказ</a></li>'+
			'</ul>'+
			'</li>';

		$('.menu_content').html(mContent);
		$('.f_menu_2').append($('.l_1'));
		$('.menu_content .left-menu').append(a);
		$('.f_menu_2 > a').append($('<span></span>'));
		$('.o_client > a').append($('<span></span>'));

		$( "#mob_menu .f_menu_2 a span" ).click(function() {
			//$( "#mob_menu .f_menu_2 ul" ).toggle();
			$(this).parent().parent().toggleClass('act_item_men');
			return false;
		});

		$( "#mob_menu .o_client a span" ).click(function() {
			//$( "#mob_menu .f_menu_2 ul" ).toggle();
			$(this).parent().parent().toggleClass('act_item_men');
			return false;
		});

	}
	$('.mob_menu_close').click(function() {
		//mob_menu.css({'width' : $( window ).width()});
		mob_menu.css({position: 'absolute'});
		mob_menu.stop().animate({
		left: - $( window ).width(),
	  }, 250, function() {
		$('.special_bg').css({display: 'block'});
		mob_menu.css({'display': 'none', 'position': 'relative'});
	  });

	});


});