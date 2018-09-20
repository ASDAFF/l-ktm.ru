<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$sTitle = '';

if ($arResult['CODE'] == 'detskie-noski') {
    $sTitle = "Детские носки и гольфы оптом";
} elseif ($arResult["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != "") {
    $sTitle = $arResult["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"];
} elseif(isset($arResult["NAME"])) {
    $sTitle = $arResult["NAME"];

}

if ($sTitle) {
    $APPLICATION->SetTitle($sTitle);
}

?>