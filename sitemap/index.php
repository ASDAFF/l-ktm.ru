<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SECOND_TITLE", "���������. ������� ������� ������ - ���� ������");
$APPLICATION->SetPageProperty("keywords", "������� ������� �������� � ������, ������������ ������� �������� � ������, �������� �������� ���������� � �������, �������, ������� �������� � �����, ���������, ������������� ����������� �����������, ��������, �����, �������, �������, �� ��� �����, ������� ������");
$APPLICATION->SetPageProperty("description", "��������� - ������������ ������� �������� � ������. ����� �����. ������� ��� �� ���������:  8 (495) 781-84-83.");
$APPLICATION->SetPageProperty("title", "����� ����� � ���������");
$APPLICATION->SetTitle("����� �����");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	".default",
	Array(
		"LEVEL" => "3",
		"COL_NUM" => "1",
		"SHOW_DESCRIPTION" => "N",
		"SET_TITLE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => ""
	)
);?><?$APPLICATION->IncludeComponent("bitrix:menu", "sitemap", array(
	"ROOT_MENU_TYPE" => "sitemap_menu",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "4",
	"CHILD_MENU_TYPE" => "sitemap_menu_child",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>