<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $arItem){	
	if($arItem["CODE"] != $arParams["CURRENT_ELEMENT_CODE"]){
		$arItem["PREVIEW_PICTURE"] = CFile::ResizeImageGet(
			$arItem["PREVIEW_PICTURE"]["ID"],
			array('width'=>92, 'height'=>117),
			BX_RESIZE_IMAGE_PROPORTIONAL
		);
		$ar_Result[] = $arItem;
	}
}

$arResult["ITEMS"] = array();
$arResult["ITEMS"] = $ar_Result;


?>