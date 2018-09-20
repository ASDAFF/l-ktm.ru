<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$dir = $APPLICATION->GetCurDir();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle();/*$APPLICATION->ShowTitle("SECOND_TITLE")*/ ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <? if ($APPLICATION->GetCurPage(true) == SITE_DIR . "index.php") { ?>
        <meta name="yandex-verification" content="e24a504202e327d0"/>
        <meta name="google-site-verification" content="egIB6PTFzZnLYqSS0Lhc88_sWblUA4FaRdLWwMX0Yy4"/>
        <meta name='wmail-verification' content='633490f3ed83358996fc6d04d94a8c96'/>
    <? } ?>
    <? if ($_GET['SHOWALL_1'] || intval($_GET['PAGEN_1']) > 1) { ?>
        <meta name="robots" content="noindex, follow">
    <? } ?>


</head>
<body <? if ($APPLICATION->GetCurPage(false) === '/'): ?> class="main-page" <? endif; ?>onload="init_scrolls()"
                                                          onResize="init_scrolls()">
<? $APPLICATION->ShowPanel() ?>
<div class="special_bg">
    <div id="container" class="<? if ($dir != '/') { ?>is_inner_page<? } ?>">
        <div id="inner_container">
            <div id="header">

                <a href="tel:+74957818483" class="mob_phone" style="display:none;">8 (495) 781-84-83</a>
                <? /*
				<div id="flash">
					<iframe style="border:none; position: relative;" src="/1.html"></iframe>
				</div>
				*/ ?>

                <?
                if ($APPLICATION->GetCurPage(false) === '/'):
                    echo "<div id=\"logo\"></div>";
                else:
                    echo "<a id=\"logo\" href=\"/\"></a>";
                endif;
                ?>

                <div id="menu">
                    <div class="phone"><? $APPLICATION->IncludeFile("/include_areas/phone.php", Array(), Array()); ?></div>
                    <div id="menu_left"></div>
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                        "MAX_LEVEL" => "1",    // Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                        "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    ),
                        false
                    ); ?>

                </div>
            </div>
            <div id="content">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "left_menu", array(
	"ROOT_MENU_TYPE" => "left",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "2",
	"CHILD_MENU_TYPE" => "left_child",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
); ?>
                <div id="center">

                    <? if ($dir != "/" && $dir != "/size/") { ?>
                        <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        ),
                            false
                        ); ?>
                    <? } ?>

                    <? $propertyH = $APPLICATION->GetProperty("h1");
                    if (empty($propertyH)): ?>
                        <h1><? $APPLICATION->ShowTitle(false) ?></h1>
                    <? else: ?>
                        <h1><?= $propertyH; ?></h1>
                    <? endif; ?>