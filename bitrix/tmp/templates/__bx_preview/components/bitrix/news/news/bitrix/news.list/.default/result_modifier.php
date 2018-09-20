<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $key=>$value){
	$arResult["ITEMS"][$key]["DISPLAY_DATE_VALUE"][] = substr($value["ACTIVE_FROM"], 0, strrpos($value["ACTIVE_FROM"], '.'));
	$arResult["ITEMS"][$key]["DISPLAY_DATE_VALUE"][] = substr($value["ACTIVE_FROM"], (strrpos($value["ACTIVE_FROM"], '.')+1));
}
?>