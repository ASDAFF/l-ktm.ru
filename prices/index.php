<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SECOND_TITLE", "���������. ������� ������� ������ - ����� ������� ������");
$APPLICATION->SetPageProperty("keywords", "������� ������� �������� � ������, ������������ ������� �������� � ������, �������� �������� ���������� � �������, �������, ������� �������� � �����, ���������, ������������� ����������� �����������, ��������, �����, �������, �������, �� ��� �����, ������� ������");
$APPLICATION->SetPageProperty("description", "�������� ������� �����-���� �� ��������� ���������.");
$APPLICATION->SetPageProperty("title", "������-������ �� �����-���� � ���������");
$APPLICATION->SetTitle("������-������ �� �����-����");
?> <?$APPLICATION->IncludeFile("/include_areas/price_text.php", Array(), Array());?>� <?$APPLICATION->IncludeComponent("lktmru:main.feedback", "contacts_feedback", array(
	"FB_IBLOCK_ID" => "7",
	"FB_IBLOCK_SECTION_ID" => "13",
	"USE_CAPTCHA" => "N",
	"OK_TEXT" => "�������, ���� ��������� �������.",
	"EMAIL_TO" => "mail@l-ktm.ru",
	"REQUIRED_FIELDS" => array(
		0 => "CITY",
		1 => "NAME",
		2 => "PHONE",
		3 => "EMAIL",
	),
	"EVENT_MESSAGE_ID" => array(
		0 => "7",
	)
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>