
<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
                        "NAME" => GetMessage("ALX_DESC_IMAGEBOX_NAME"),
                        "DESCRIPTION" => GetMessage("ALX_DESC_IMAGEBOX_DESC"),
                        "ICON" => "/images/icon.gif",
                        "SORT" => 20,
                        "CACHE_PATH" => "Y",
                        "PATH" => array(
                                        "ID" => "IS-MARKET.RU",
                                        "NAME" => GetMessage("ALTASIB_DESC_SECTION_NAME"),
                                        "CHILD" => array(
                                                        "ID" => "altasib_catalog",
                                                        "NAME" => GetMessage("ALX_DESC_SERVICES_SECTION_NAME"),
                                                        "SORT" => 10,
                                                        "CHILD" => array(
                                                                        "ID" => "altasib_imagebox"
                                                        ),
                                        ),
                        ),
);
?>