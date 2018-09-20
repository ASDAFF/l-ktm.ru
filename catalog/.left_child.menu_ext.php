<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

if($USER->IsAdmin()){

    $aMenuLinks = Array(
        Array(
            "Колготки",
            "/catalog/kolgotki/",
            Array(),
            Array(
                "DOP_PARAM"=>"BIG_LINK"
            ),
            ""
        ),
        Array(
            "Колготки для мальчиков",
            "/catalog/kolgotki-dlja-malchikov/",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Колготки для девочек",
            "/catalog/kolgotki-dlja-devochek/",
            Array(),
            Array(),
            ""
        ),
    );
} else {
    $aMenuLinks = Array(
        Array(
            "Колготки",
            "",
            Array(),
            Array(
                "NO_LINK"=>"Y"
            ),
            ""
        ),
        Array(
            "Колготки для мальчиков",
            "/catalog/kolgotki-dlja-malchikov/",
            Array(),
            Array(),
            ""
        ),
        Array(
            "Колготки для девочек",
            "/catalog/kolgotki-dlja-devochek/",
            Array(),
            Array(),
            ""
        ),
    );
}

$aMenuLinksExt=$APPLICATION->IncludeComponent("ga:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "/catalog/",
	"SECTION_PAGE_URL" => "#SECTION_CODE#/",
	"DETAIL_PAGE_URL" => "#SECTION_CODE#/",
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"SECTION_ID" => array(
		0 => "6",
		1 => "1",
		2 => "4",
	),
	"DEPTH_LEVEL" => "2",
	"CACHE_TYPE" => "N",
	"CACHE_TIME" => "36000000"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
$aMenuColorLinks = Array(
    Array(
        "По цветам",
        "",
        Array(),
        Array(
            "NO_LINK"=>"Y"
        ),
        ""
    ),
    Array(
        "Белый",
        "/catalog/white/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Жёлтый",
        "/catalog/yellow/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Синий",
        "/catalog/blue/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Чёрный",
        "/catalog/black/",
        Array(),
        Array(),
        ""
    ),
    Array(
        "Прочее",
        "",
        Array(),
        Array(
            "NO_LINK"=>"Y"
        ),
        ""
    ),
);
$aMenuColorLinksExt=$APPLICATION->IncludeComponent("ga:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "/catalog/",
	"SECTION_PAGE_URL" => "#SECTION_CODE#/",
	"DETAIL_PAGE_URL" => "#SECTION_CODE#/",
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"SECTION_ID" => array(
		0 => "5",
		1 => "7",
	),
	"DEPTH_LEVEL" => "2",
	"CACHE_TYPE" => "N",
	"CACHE_TIME" => "36000000"
	),
	false
);
$aMenuColorLinks = array_merge($aMenuColorLinks, $aMenuColorLinksExt);
$aMenuLinks = array_merge($aMenuLinks, $aMenuColorLinks);
?>