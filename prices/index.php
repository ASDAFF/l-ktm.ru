<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SECOND_TITLE", "Лукоморье. Продажа детской одежды - Заказ детской одежды");
$APPLICATION->SetPageProperty("keywords", "Продажа детских колготок и носков, производство детских колготок и носков, торговля детскими колготками и носками, дешевые, детские колготки и носки, Лукоморье, Красногорская трикотажная мануфактура, колготки, носки, носочки, колготы, всё для детей, детская одежда");
$APPLICATION->SetPageProperty("description", "Заказать оптовый прайс-лист на продукцию Лукоморье.");
$APPLICATION->SetPageProperty("title", "Онлайн-заявка на прайс-лист – Лукоморье");
$APPLICATION->SetTitle("Онлайн-заявка на прайс-лист");
?> <?$APPLICATION->IncludeFile("/include_areas/price_text.php", Array(), Array());?>  <?$APPLICATION->IncludeComponent("lktmru:main.feedback", "contacts_feedback", array(
	"FB_IBLOCK_ID" => "7",
	"FB_IBLOCK_SECTION_ID" => "13",
	"USE_CAPTCHA" => "N",
	"OK_TEXT" => "Спасибо, ваше сообщение принято.",
	"EMAIL_TO" => "mail@l-ktm.ru",
	"REQUIRED_FIELDS" => array(
		0 => "CITY",
		1 => "NAME",
		2 => "PHONE",
		3 => "EMAIL",
	),
	"EVENT_MESSAGE_ID" => array(
		0 => "7",
	)
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>