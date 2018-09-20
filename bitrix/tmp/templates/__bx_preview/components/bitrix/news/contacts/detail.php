<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	Array(
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
		"DETAIL_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"META_KEYWORDS" => $arParams["META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
		"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
		"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"USE_SHARE" 			=> $arParams["USE_SHARE"],
		"SHARE_HIDE" 			=> $arParams["SHARE_HIDE"],
		"SHARE_TEMPLATE" 		=> $arParams["SHARE_TEMPLATE"],
		"SHARE_HANDLERS" 		=> $arParams["SHARE_HANDLERS"],
		"SHARE_SHORTEN_URL_LOGIN"	=> $arParams["SHARE_SHORTEN_URL_LOGIN"],
		"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
		"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : '')
	),
	$component
);?>

<?
$arSelect = array(
	"ID",
	"IBLOCK_ID",
	"NAME",
	"PROPERTY_*"
);
$arFilter = array(
	"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
	"ID"=>$ElementID,
	"ACTIVE_DATE"=>"Y",
	"ACTIVE"=>"Y"
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){ 
	$arRes = $ob->GetFields();  
	$arRes["PROP"] = $ob->GetProperties();
}

$coord_x = 0;
$coord_y = 0;
$MAP_DATA = array();

foreach($arRes["PROP"]["MAP"]["VALUE"] as $value){
	$map_coord = explode(',', $value);
	$coord_x += $map_coord[0];
	$coord_y += $map_coord[1];
}
$coord_x = $coord_x/count($arRes["PROP"]["MAP"]["VALUE"]);
$coord_y = $coord_y/count($arRes["PROP"]["MAP"]["VALUE"]);

$MAP_DATA = array(
	"yandex_lat" => $coord_x,
	"yandex_lon" => $coord_y,
	"yandex_scale" => "10",
);

foreach($arRes["PROP"]["MAP"]["VALUE"] as $key=>$value){
	$map_coord = explode(',', $value);
	$MAP_DATA["PLACEMARKS"][] = array(
		"LON" => $map_coord[1],
		"LAT" => $map_coord[0],
		"TEXT" => $arRes["PROP"]["MAP"]["~DESCRIPTION"][$key],
	);
}

$MAP_DATA = serialize($MAP_DATA);
?>

<?$APPLICATION->IncludeComponent("bitrix:map.yandex.view", "contacts_city", Array(
	"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
	"MAP_DATA" => $MAP_DATA,	// Данные, выводимые на карте
	"MAP_WIDTH" => "600",	// Ширина карты
	"MAP_HEIGHT" => "500",	// Высота карты
	"CONTROLS" => array(	// Элементы управления
		0 => "ZOOM",
		1 => "MINIMAP",
		2 => "TYPECONTROL",
		3 => "SCALELINE",
	),
	"OPTIONS" => array(	// Настройки
		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DBLCLICK_ZOOM",
		2 => "ENABLE_DRAGGING",
	),
	"MAP_ID" => "",	// Идентификатор карты
	),
	false
);?>