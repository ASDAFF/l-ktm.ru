<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["SECTIONS"] as $key => $arSection){
	$arResult["SECTIONS"][$key]["PICTURE"] = CFile::ResizeImageGet(
		$arSection["PICTURE"]["ID"],
		array('width'=>108, 'height'=>148),
		BX_RESIZE_IMAGE_PROPORTIONAL
	);
}
?>