<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("iblock"))return;
?>
<div style="background-color: #fff; padding: 0; border-top: 1px solid #8E8E8E; border-bottom: 1px solid #8E8E8E;  margin-bottom: 15px;"><div style="background-color: #8E8E8E; height: 30px; padding: 7px; border: 1px solid #fff">
        <a href="http://www.is-market.ru?param=cl" target="_blank"><img src="/bitrix/components/altasib/imagebox/images/is-market.gif" style="float: left; margin-right: 15px;" border="0" /></a>
        <div style="margin: 13px 0px 0px 0px">
                <a href="http://www.is-market.ru?param=cl" target="_blank" style="color: #fff; font-size: 10px; text-decoration: none"><?=GetMessage("ALTASIB_IS")?></a>
        </div>
</div></div>
<?
$rsIBlockType = CIBlockType::GetList(array("sort"=>"asc"), array("ACTIVE"=>"Y"));
while ($arr=$rsIBlockType->Fetch())
{
   if($ar=CIBlockType::GetByIDLang($arr["ID"], LANGUAGE_ID))
                        $arIBlockType[$arr["ID"]] = "[".$arr["ID"]."] ".$ar["NAME"];
}
$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
   $arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];

$rsSection = CIBlockSection::GetList(Array("sort" => "asc"), Array('IBLOCK_ID'=>$arCurrentValues["IBLOCK_ID"], 'GLOBAL_ACTIVE'=>'Y'));
while($arr = $rsSection->Fetch())
   $arSection[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];

$thumbs_position = array (GetMessage("HORIZONTAL"), GetMessage("VERTICAL"));
$detail_picture = array (GetMessage("NO"), GetMessage("YES"));
$show_desc = array (GetMessage("NO"), GetMessage("YES"));
$detail_title = array ("over", "outside", "inside");
$arComponentParameters = array(
        "GROUPS" => array(
                        "BASE" => array("NAME" => GetMessage("BASE")),
                        ),
        "PARAMETERS" => array(
                        "ELEMENT_ID" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("ELEMENT_ID"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => '={$arResult["ID"]}',
                ),
                        "PREVIEW_HEIGHT" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("PREVIEW_HEIGHT"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "200",
                ),
                        "PREVIEW_WIDTH" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("PREVIEW_WIDTH"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "210",
                ),
                        "THUMBS_POSITION" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("THUMBS_POSITION"),
                        "TYPE" => "LIST",
                        "VALUES" => $thumbs_position,
                        "DEFAULT" => "0",
                ),
                        "SHOW_DETAIL_PICTURE" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("SHOW_DETAIL_PICTURE"),
                        "TYPE" => "LIST",
                        "VALUES" => $detail_picture,
                        "DEFAULT" => "1",
                ),
                        "NAME_PHOTO" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("NAME_PHOTO"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "MORE_PHOTO",
                ),
                        "SHOW_DESC" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("SHOW_DESC"),
                        "TYPE" => "LIST",
                        "VALUES" => $show_desc,
                        "DEFAULT" => "1",
                ),
                        "DONT_CUT_MINI" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("DONT_CUT_MINI"),
                        "TYPE" => "CHECKBOX",
                        "VALUES" => $show_desc,
                        "DEFAULT" => "1",
                ),
                        "DETAIL_TITLE" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("DETAIL_TITLE"),
                        "TYPE" => "LIST",
                        "VALUES" => $detail_title,
                        "DEFAULT" => "0",
                ),
                        "BG_PIC" => array(
                        "NAME" => GetMessage("BG_PIC"),
                        "TYPE" => "COLORPICKER",
                        "PARENT" => "BASE",
                        "DEFAULT" => "#ffffff"
                ),
                        "BORD_COL_MAIN" => array(
                        "NAME" => GetMessage("BORD_COL_MAIN"),
                        "TYPE" => "COLORPICKER",
                        "PARENT" => "BASE",
                        "DEFAULT" => "#CCCCCC"
               ),
                        "BORD_COL_MINI" => array(
                        "NAME" => GetMessage("BORD_COL_MINI"),
                        "TYPE" => "COLORPICKER",
                        "PARENT" => "BASE",
                        "DEFAULT" => "#ffffff"
               ),
                        "CUR_BORD_COL_MINI" => array(
                        "NAME" => GetMessage("CUR_BORD_COL_MINI"),
                        "TYPE" => "COLORPICKER",
                        "PARENT" => "BASE",
                        "DEFAULT" => "#333333"
				),
						"TURN_ON_ZOOM" => array(
                        "NAME" => GetMessage("TURN_ON_ZOOM"),
                        "TYPE" => "CHECKBOX",
                        "DEFAULT" => "N",
                ),
						"ZOOM_HEIGHT" => array(
                        "NAME" => GetMessage("ZOOM_HEIGHT"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "400",
                ),
						"ZOOM_WIDTH" => array(
                        "NAME" => GetMessage("ZOOM_WIDTH"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "500",
                ),
						"ZOOM_BORDER_WIDTH" => array(
                        "NAME" => GetMessage("ZOOM_BORDER_WIDTH"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "5",
                ),
						"ZOOM_SHADOW" => array(
                        "NAME" => GetMessage("ZOOM_SHADOW"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "10",
                )
				)
);
?>