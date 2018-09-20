<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $key => $arItem){
	$arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = CFile::ResizeImageGet(
		$arItem["PREVIEW_PICTURE"]["ID"],
		array('width'=>108, 'height'=>148),
		BX_RESIZE_IMAGE_PROPORTIONAL
	);
	
	$IBLOCK_SECTION_ID = $arItem["IBLOCK_SECTION_ID"];	
}

$arFilter = array(
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"CODE" => $arParams["SECTION_CODE"],	
);
$db_list = CIBlockSection::GetList(array(), $arFilter, false, array("ID", "IBLOCK_ID", "NAME", "UF_SECOND_TITLE"));
if($ar_result = $db_list->Fetch()){
	$APPLICATION->SetPageProperty('SECOND_TITLE', $ar_result["UF_SECOND_TITLE"]);
}

?>