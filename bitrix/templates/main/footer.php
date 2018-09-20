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
						<div class="left_foot_menu">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
								"ROOT_MENU_TYPE" => "footer2",	// Тип меню для первого уровня
								"MENU_CACHE_TYPE" => "A",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "footer2",	// Тип меню для остальных уровней
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								),
								false
							);?>
						</div>
					</div>

					<div style="margin-top: 5px; float: right; line-height:18px;">
						2010-<?=date("Y")?> &copy; "Лукоморье" <br/>Все права защищены. <br/>
						Звоните: <?$APPLICATION->IncludeFile("/include_areas/phone.php", Array(), Array());?> <br/>
						Пишите: <?$APPLICATION->IncludeFile("/include_areas/email.php", Array(), Array());?>
					</div>

				</div>
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
									SendYMEvents();
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
					function SendYMEvents() {
						<?
						// lktm_ym_events задаются в шаблонах форм для отправки событий после успешного заполнения
						?>
						console.log('send');
						<?$APPLICATION->ShowViewContent("lktm_ym_events")?>
					}
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
<!--</div>-->
<!--Special_bg_div-->
<?CUtil::InitJSCore("jquery");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/template.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/media.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/fancybox-2.1.5/jquery.fancybox.css');
//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/gal/jquery.fancybox.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scrolls/scrolls.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/media.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/fancybox-2.1.5/jquery.fancybox.js');
//$APPLICATION->AddHeadScript('/bitrix/components/altasib/imagebox/plugins/fancybox/jquery.fancybox-1.3.4.pack.js');
//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/gal/jquery.fancybox-1.2.1.pack.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/gal/init.js');?>

<div class="mob_menu_btn"></div>
<div id='mob_menu'>
		<div class='menu_wrapper'>
			<div class='menu_header'>
				<div class='container'>
					<div class='mob_menu_close'></div>
					<div class='sm_logo'>
						<a href="/"><img src="/bitrix/templates/main/images/mob_logo1.png" alt="Лукоморье" /></a>
					</div>
				</div>
			</div>
			<div style="text-align: center;margin-top: 20px; font-size: 18px; color: #007b34; font-weight: bold;">тел: <a href="tel:+74957818483">8 (495) 781-84-83</a></div>
			<div class='menu_content container'></div>
		</div>
</div>

</body>
</html>