<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

global $DB;
global $USER;
global $APPLICATION;

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["ID"] = intval($arParams["ID"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);

$arParams["DEPTH_LEVEL"] = intval($arParams["DEPTH_LEVEL"]);
if($arParams["DEPTH_LEVEL"]<=0)
	$arParams["DEPTH_LEVEL"]=1;

$arResult["SECTIONS"] = array();
$arResult["ELEMENT_LINKS"] = array();

if($this->StartResultCache())
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
	}
	else
	{
		$arSelect = array(
			"ID",
			"IBLOCK_ID",
			"NAME",
			"CODE",
			"LIST_PAGE_URL"
		);
		$arFilter = array(
			"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
			"ACTIVE_DATE"=>"Y",
			"ACTIVE"=>"Y"
		);
		$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
		while($ob = $res->Fetch()){
			$arResult[] = $ob;
		}
		$this->EndResultCache();
	}
}

$aMenuLinksNew = array();
foreach($arResult as $arItem){
	if(!empty($arItem)){
		$aMenuLinksNew[] = array(
			htmlspecialcharsbx($arItem["NAME"]),
			$arItem["LIST_PAGE_URL"].$arItem["CODE"].'/',
			$arResult["ELEMENT_LINKS"][$arSection["ID"]],
			array(
				"FROM_IBLOCK" => true,
				"IS_PARENT" => false,
				"DEPTH_LEVEL" => $arSection["DEPTH_LEVEL"],
			),
		);
	}
}

return $aMenuLinksNew;
?>
