<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent("lktmru:menu.element", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "/contacts/roznichnie_tochki/",
	"SECTION_PAGE_URL" => "",
	"DETAIL_PAGE_URL" => "#ELEMENT_CODE#/",
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "4",
	"DEPTH_LEVEL" => "2",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>