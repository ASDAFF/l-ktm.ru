<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div id="CATALOG_div">

	<?$APPLICATION->IncludeComponent("altasib:imagebox", "catalog_detail", array(
	"ELEMENT_ID" => $arResult["ID"],
	"PREVIEW_HEIGHT" => "320",
	"PREVIEW_WIDTH" => "240",
	"THUMBS_POSITION" => "0",
	"SHOW_DETAIL_PICTURE" => "0",
	"NAME_PHOTO" => "MORE_PHOTO",
	"SHOW_DESC" => "1",
	"DONT_CUT_MINI" => "Y",
	"DETAIL_TITLE" => "0",
	"BG_PIC" => "#ffffff",
	"BORD_COL_MAIN" => "#CCCCCC",
	"BORD_COL_MINI" => "#ffffff",
	"CUR_BORD_COL_MINI" => "#333333",
	"MARGIN_H" => "1",
	"MARGIN_V" => "1",
	"THUMBS_COUNT" => "2",
	"TURN_ON_ZOOM" => "Y",
	"ZOOM_HEIGHT" => "300",
	"ZOOM_WIDTH" => "300",
	"ZOOM_BORDER_WIDTH" => "5",
	"ZOOM_SHADOW" => "10"
	),
	false
);?>	
	<div style="clear:both;"></div>
	<div style="margin-top: 10px; margin-bottom: 10px;"><?=$arResult["DETAIL_TEXT"]?></div>
	
</div>