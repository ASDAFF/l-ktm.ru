<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $key => $arItem)
{
	$arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = CFile::ResizeImageGet(
		$arItem["PREVIEW_PICTURE"]["ID"],
		array('width'=>160, 'height'=>170),
		BX_RESIZE_IMAGE_PROPORTIONAL
	);
}
?>