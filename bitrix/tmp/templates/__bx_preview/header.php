<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$dir = $APPLICATION->GetCurDir();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle();/*$APPLICATION->ShowTitle("SECOND_TITLE")*/?></title>
	<?$APPLICATION->ShowHead();?>
	<?CUtil::InitJSCore("jquery");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/fancybox-2.1.5/jquery.fancybox.css');
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/js/gal/jquery.fancybox.css');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scrolls/scrolls.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/fancybox-2.1.5/jquery.fancybox.js');
	//$APPLICATION->AddHeadScript('/bitrix/components/altasib/imagebox/plugins/fancybox/jquery.fancybox-1.3.4.pack.js');
	//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/gal/jquery.fancybox-1.2.1.pack.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/gal/init.js');?>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body 
<? if ($APPLICATION->GetCurPage(false) === '/'): ?>
class="main-page"
<? endif; ?> 
onload="init_scrolls()" onResize="init_scrolls()">
	<?$APPLICATION->ShowPanel()?>
	<div class="special_bg">
		<div id="container" class="<?if($dir != '/'){?>is_inner_page<?}?>">
			<div id="inner_container">
				<div id="header">
				<div id="flash">
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="45" height="105">
						<param name="wmode" value="opaque"/>
						<param name="movie" value="<?=SITE_TEMPLATE_PATH?>/images/1.swf"/>
						<embed src="<?=SITE_TEMPLATE_PATH?>/images/1.swf" width="45" height="105" wmode="opaque"></embed>
					</object>
				</div>
				<a id="logo" href="/"></a>
				<div id="menu">
					<div style="float: right; font-family: 'Helvetica'; margin: 25px 150px 0px 0px; font-size: 26px;"><?$APPLICATION->IncludeFile("/include_areas/phone.php", Array(), Array());?></div>
					<div id="menu_left"></div>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
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
			</div>
			<div id="content">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", Array(
					"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
					"MENU_CACHE_TYPE" => "A",	// Тип кеширования
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MAX_LEVEL" => "2",	// Уровень вложенности меню
					"CHILD_MENU_TYPE" => "left_child",	// Тип меню для остальных уровней
					"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
					false
				);?>
				<div id="center">
					<h1><?$APPLICATION->ShowTitle(false)?></h1>
					<?if($dir != "/" && $dir != "/size/"){?>
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", array(
							"START_FROM" => "0",
							"PATH" => "",
							"SITE_ID" => "s1"
							),
							false
						);?>
					<?}?>