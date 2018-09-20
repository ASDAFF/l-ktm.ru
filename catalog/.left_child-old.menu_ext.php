<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$aMenuLinks = Array(
	Array(
		"Колготки для мальчиков", 
		"/catalog/kolgotki-dlja-malchikov/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Колготки для девочек", 
		"/catalog/kolgotki-dlja-devochek/", 
		Array(), 
		Array(), 
		"" 
	),
);

$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "/catalog/",
	"SECTION_PAGE_URL" => "#SECTION_CODE#/",
	"DETAIL_PAGE_URL" => "#SECTION_CODE#/",
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"DEPTH_LEVEL" => "2",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>