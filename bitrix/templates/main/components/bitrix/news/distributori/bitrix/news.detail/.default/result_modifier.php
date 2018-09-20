<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->SetPageProperty('SECOND_TITLE', 'Лукоморье. Продажа детской одежды - '.$arResult["NAME"].' (дистрибуторы)');
$APPLICATION->SetPageProperty('title', $arResult["NAME"].' (дистрибуторы)');

$sText = $arResult['DETAIL_TEXT'];
$arLinks = array();
$arMatch = array();
if (preg_match_all('/<img[^>]+?(src=["\'].*?["\'])[^>]*?>/is', $sText, $arMatch)) {
    foreach ($arMatch[0] as $key=>$sLink) {
        if (!in_array($arLinks, $sLink)) {
            if (strpos($sLink, 'alt=') === false || strpos($sLink, 'alt=""') !== false || strpos($sLink, "alt=''") !== false) {
                $arLinks[] = $sLink;
                $sLinkNew = str_replace(array(' alt=""', " alt=''"), '', $sLink);
                $sLinkNew = str_replace($arMatch[1][$key], 'alt="'.str_replace('"', "'", $arResult["NAME"]).'" '.$arMatch[1][$key], $sLinkNew);
                $sText = str_replace($sLink, $sLinkNew, $sText);
            }
        }
    }
}
$arResult['DETAIL_TEXT'] = $sText;
?>