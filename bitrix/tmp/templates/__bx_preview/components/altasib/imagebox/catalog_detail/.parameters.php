<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
        "MARGIN_H" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("MARGIN_H"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "1",
                ),
        "MARGIN_V" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("MARGIN_V"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "1",
                ),
        "THUMBS_COUNT" => array(
                        "PARENT" => "BASE",
                        "NAME" => GetMessage("THUMBS_COUNT"),
                        "TYPE" => "STRING",
                        "VALUES" => "",
                        "DEFAULT" => "4",
    )
);
?>