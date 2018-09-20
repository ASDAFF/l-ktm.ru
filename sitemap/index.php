<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SECOND_TITLE", "Лукоморье. Продажа детской одежды - Блок ссылок");
$APPLICATION->SetPageProperty("keywords", "Продажа детских колготок и носков, производство детских колготок и носков, торговля детскими колготками и носками, дешевые, детские колготки и носки, Лукоморье, Красногорская трикотажная мануфактура, колготки, носки, носочки, колготы, всё для детей, детская одежда");
$APPLICATION->SetPageProperty("description", "Лукоморье - производство детских колготок и носков. Карта сайта. Звоните нам по телефонам:  8 (495) 781-84-83.");
$APPLICATION->SetPageProperty("title", "Карта сайта – Лукоморье");
$APPLICATION->SetTitle("Карта сайта");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	".default",
	Array(
		"LEVEL" => "3",
		"COL_NUM" => "1",
		"SHOW_DESCRIPTION" => "N",
		"SET_TITLE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => ""
	)
);?><?$APPLICATION->IncludeComponent("bitrix:menu", "sitemap", array(
	"ROOT_MENU_TYPE" => "sitemap_menu",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "4",
	"CHILD_MENU_TYPE" => "sitemap_menu_child",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>