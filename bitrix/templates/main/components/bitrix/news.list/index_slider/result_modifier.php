<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/*global $USER;
$arParRes = array('width'=>92, 'height'=>117);
if($USER->IsAdmin()){
	$arParRes = array('width'=>160, 'height'=>170);
}*/

foreach($arResult["ITEMS"] as $key => $arItem)
{
	$arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = CFile::ResizeImageGet(
		$arItem["PREVIEW_PICTURE"]["ID"],
		/*$arParRes,*/
		array('width'=>160, 'height'=>170),
		BX_RESIZE_IMAGE_PROPORTIONAL
	);
}
?>