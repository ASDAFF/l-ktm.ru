<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
						<div id='upbutton'>Вверх</div>
					</div>
					<div class="clearing">&nbsp;</div>
				</div>
				<div id="bottom">
					<!-- Yandex.Share -->
						<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
						<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir"></div> 
					<!-- /Yandex.Share -->
					<div id="footer_menu">
						<div class="left_foot_menu">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
								"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
								"MENU_CACHE_TYPE" => "A",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								),
								false
							);?>
						</div>
						<!--div class="catalog_foot_menu">
							<div class="title_catalog_menu">Каталог</div>
							<!--?$APPLICATION->IncludeComponent("bitrix:menu", "footer_catalog_menu", Array(
								"ROOT_MENU_TYPE" => "footer",	// Тип меню для первого уровня
								"MENU_CACHE_TYPE" => "A",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "footer",	// Тип меню для остальных уровней
								"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								),
								false
							);?-->
						</div-->
					</div>
					<div style="margin-top: 5px; float: right; line-height:18px;">
						2010-<?=date("Y")?> &copy; "Лукоморье" <br/>Все права защищены. <br/>
						Звоните: <?$APPLICATION->IncludeFile("/include_areas/phone.php", Array(), Array());?> <br/>
						Пишите: <?$APPLICATION->IncludeFile("/include_areas/email.php", Array(), Array());?>
					</div><?/*
					<!--LiveInternet counter-->
						<script type="text/javascript">
							<!--
							document.write("<a href='http://www.liveinternet.ru/click' "+
							"target=_blank><img src='http://counter.yadro.ru/hit?t21.15;r"+
							escape(document.referrer)+((typeof(screen)=="undefined")?"":
							";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
							screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
							";h"+escape(document.title.substring(0,80))+";"+Math.random()+
							"' alt='' title='LiveInternet: показано число просмотров за 24"+
							" часа, посетителей за 24 часа и за сегодня' "+
							"border='0' width='0' height='0'><\/a>")
							//-->
						</script>
					<!--/LiveInternet-->
					*/?>
					<!--LiveInternet counter--><script type="text/javascript"><!--
					document.write("<a href='//www.liveinternet.ru/click' "+
					"target=_blank><img src='//counter.yadro.ru/hit?t52.6;r"+
					escape(document.referrer)+((typeof(screen)=="undefined")?"":
					";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
					screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
					";"+Math.random()+
					"' alt='' title='LiveInternet: показано число просмотров и"+
					" посетителей за 24 часа' "+
					"border='0' width='88' height='31'><\/a>")
					//--></script><!--/LiveInternet-->
					<!-- Yandex.Metrika counter -->
					<script type="text/javascript">
						(function (d, w, c) {
								(w[c] = w[c] || []).push(function() {
									try {
										w.yaCounter19581646 = new Ya.Metrika({id:19581646,
											webvisor:true,
											clickmap:true,
											trackLinks:true,
											accurateTrackBounce:true});
									} catch(e) { }
								});
								var n = d.getElementsByTagName("script")[0],
									s = d.createElement("script"),
									f = function () { n.parentNode.insertBefore(s, n); };
								s.type = "text/javascript";
								s.async = true;
								s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
								if (w.opera == "[object Opera]") {
									d.addEventListener("DOMContentLoaded", f, false);
								} else {
									f();
								}
						})(document, window, "yandex_metrika_callbacks");
					</script>
					<noscript><div><img src="//mc.yandex.ru/watch/19581646" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
					<!-- /Yandex.Metrika counter-->
					<script type='text/javascript'> 
						var liveTex = true,
							liveTexID = 53327,
							liveTex_object = true;
						(function() {
							var lt = document.createElement('script');
							lt.type ='text/javascript';
							lt.async = true;
									lt.src = 'http://cs15.livetex.ru/js/client.js';
							var sc = document.getElementsByTagName('script')[0];
							if ( sc ) sc.parentNode.insertBefore(lt, sc);
							else  document.documentElement.firstChild.appendChild(lt);
						})();
					</script>
					<div class="clearing"></div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$(window).scroll(function(){
					if($(this).scrollTop()> 300 ){
						if($('#upbutton').is(':hidden')){
							$('#upbutton').fadeIn('slow');
						}
					}else{
						$('#upbutton').fadeOut();
					}
				});
				$('#upbutton').click(function(){
					$('html, body').animate({scrollTop: 0}, 300);
				});
			});
		</script>
	</div><!--Special_bg_div-->
</body>
</html>