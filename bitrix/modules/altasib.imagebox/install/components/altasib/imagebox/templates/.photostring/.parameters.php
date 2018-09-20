<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arWrap = Array(
         "WRAP_NO"      => GetMessage("WRAP_NO"),
         "WRAP_BOTH"    => GetMessage("WRAP_BOTH")
         );
$arListing = Array(
         "ONE"      => GetMessage("ONE"),
         "ALL"    => GetMessage("ALL")
         );
$arTemplateParameters = array(
        "BG_COL_MINI" => array(
                        "NAME" => GetMessage("BG_COL_MINI"),
                        "TYPE" => 'COLORPICKER',
                        "PARENT" => "BASE",
                        "DEFAULT" => "#FFFFFF"
        ),
        "INTERVAL" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("INTERVALX"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "15",
                        "COLS" => "3"
    ),
        "WRAP" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("WRAP"),
                        "TYPE" => "LIST",
                        "VALUES" => $arWrap,
                        "DEFAULT" => "WRAP_BOTH",
                        "REFRESH" => "N",
    ),
        "THUMBS_COUNT_PS" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("THUMBS_COUNT_PS"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "4",
        ),
        "LISTING" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("LISTING"),
                        "TYPE" => "LIST",
                        "VALUES" => $arListing,
                        "DEFAULT" => "",
                        "REFRESH" => "N",
                ),
        "ALLX" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("ALLX"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "5",
                        "COLS" => "4"
                ),
        "ALLY" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("ALLY"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "5",
                        "COLS" => "4"
                ),

        "ARROW_L" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("ARROW_L"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "30",
                        "COLS" => "3"
                ),
        "ARROW_R" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("ARROW_R"),
                        "TYPE" => "STRING",
                        "DEFAULT" => "30",
                        "COLS" => "3"
                )
);
?>