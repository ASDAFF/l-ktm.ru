<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("��� ��������");
$APPLICATION->SetDirProperty("robots", "noindex, nofollow");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include_areas/kolgotki_all.php",
		"EDIT_TEMPLATE" => ""
	)
);?><?/*$APPLICATION->IncludeComponent("bitrix:catalog.filter", "kolgotki_all", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "SECTION_ID",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "FOR_GIRL",
		1 => "FOR_BOY",
		2 => "COLOR",
		3 => "",
	),
	"LIST_HEIGHT" => "5",
    //"AJAX_MODE" => "Y",
	"TEXT_WIDTH" => "20",
	"NUMBER_WIDTH" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
	)
	),
	false
);*/?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "kolgotki_all", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"FILTER_NAME" => "arrFilter",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"INSTANT_RELOAD" => "Y",
	"XML_EXPORT" => "N",
	"SECTION_TITLE" => "-",
	"SECTION_DESCRIPTION" => "-",
	"TEMPLATE_THEME" => "yellow"
	),
	false
);?>
<?
/*start-��� ���������� ������ canonical*/
//����������� ��� ������ ��� �������, ����� � ��� ���������� ������.
if(!empty($arrFilter)){
$APPLICATION->AddHeadString('<link href="https://l-ktm.ru/catalog/kolgotki/" rel="canonical" />');
}
/*end-��� ���������� ������ canonical*/
//��������� ������ ��������. ������ �������� � ��������� �� ����.
//��������� � ������ ������ ����� ���������� canonical
$arrFilterDop = array("ACTIVE" => "Y", "!SECTION_ID" => array(5, 7));
$arrFilter = array_merge($arrFilter, $arrFilterDop);

?> 
<div> <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "catalog_list_color_filter", Array(
	"IBLOCK_TYPE" => "catalog",	// ��� ���������
	"IBLOCK_ID" => "1",	// ��������
	"SECTION_ID" => "",	// ID �������
	"SECTION_CODE" => "",	// ��� �������
	"SECTION_USER_FIELDS" => array(	// �������� �������
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",	// �� ������ ���� ��������� ��������
	"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ���������
	"ELEMENT_SORT_FIELD2" => "id",	// ���� ��� ������ ���������� ���������
	"ELEMENT_SORT_ORDER2" => "desc",	// ������� ������ ���������� ���������
	"FILTER_NAME" => "arrFilter",	// ��� ������� �� ���������� ������� ��� ���������� ���������
	"INCLUDE_SUBSECTIONS" => "A",	// ���������� �������� ����������� �������
	"SHOW_ALL_WO_SECTION" => "Y",	// ���������� ��� ��������, ���� �� ������ ������
	"PAGE_ELEMENT_COUNT" => "30",	// ���������� ��������� �� ��������
	"LINE_ELEMENT_COUNT" => "6",	// ���������� ��������� ��������� � ����� ������ �������
	"PROPERTY_CODE" => array(	// ��������
		0 => "COLOR",
		1 => "",
	),
	"OFFERS_LIMIT" => "5",	// ������������ ���������� ����������� ��� ������ (0 - ���)
	"TEMPLATE_THEME" => "blue",	// �������� ����
	"ADD_PICT_PROP" => "-",	// �������������� �������� ��������� ������
	"LABEL_PROP" => "-",	// �������� ����� ������
	"MESS_BTN_BUY" => "������",	// ����� ������ "������"
	"MESS_BTN_ADD_TO_BASKET" => "� �������",	// ����� ������ "�������� � �������"
	"MESS_BTN_SUBSCRIBE" => "�����������",	// ����� ������ "��������� � �����������"
	"MESS_BTN_DETAIL" => "���������",	// ����� ������ "���������"
	"MESS_NOT_AVAILABLE" => "��� � �������",	// ��������� �� ���������� ������
	"SECTION_URL" => "/catalog/#SECTION_CODE#/",	// URL, ������� �� �������� � ���������� �������
	"DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",	// URL, ������� �� �������� � ���������� �������� �������
	"SECTION_ID_VARIABLE" => "SECTION_CODE",	// �������� ����������, � ������� ���������� ��� ������
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "86400",	// ����� ����������� (���.)
	"CACHE_GROUPS" => "Y",	// ��������� ����� �������
	"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
	"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
	"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
	"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
	"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
	"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
	"DISPLAY_COMPARE" => "N",	// �������� ������ ���������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"SET_STATUS_404" => "N",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
	"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
	"PRICE_CODE" => "",	// ��� ����
	"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
	"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
	"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
	"BASKET_URL" => "/personal/basket.php",	// URL, ������� �� �������� � �������� ����������
	"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
	"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
	"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
	"ADD_PROPERTIES_TO_BASKET" => "Y",	// ��������� � ������� �������� ������� � �����������
	"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
	"PARTIAL_PRODUCT_PROPERTIES" => "N",	// ��������� ��������� � ������� ������, � ������� ��������� �� ��� ��������������
	"PRODUCT_PROPERTIES" => "",	// �������������� ������
	"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
	"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
	"PAGER_TITLE" => "������",	// �������� ���������
	"PAGER_SHOW_ALWAYS" => "Y",	// �������� ������
	"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
	"PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
	"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
	),
	false
);?></div>
 <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>