<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("SECOND_TITLE", "��������");
$APPLICATION->SetPageProperty("keywords", "������� ������� �������� � ������, ������������ ������� �������� � ������, �������� �������� ���������� � �������, �������, ������� �������� � �����, ���������, ������������� ����������� �����������, ��������, �����, �������, �������, �� ��� �����, ������� ������");
$APPLICATION->SetPageProperty("description", "��������� - ������������ ������� �������� � ������. ��������. ������� ��� �� ���������:  8 (495) 781-84-83.");
$APPLICATION->SetPageProperty("title", "�������� � ���������");
$APPLICATION->SetTitle("��������");
?><? $APPLICATION->IncludeFile("/include_areas/contacts_text.php", Array(), Array()); ?> 
<br />
 
<br />
 <a href="roznichnie_tochki/" >��������� �����</a> | <a href="distributori/" >������ ��������������</a> 
<br />
 
<br />
 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"contacts_city",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.80667712914572;s:10:\"yandex_lon\";d:37.31071811695977;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.310696659287636;s:3:\"LAT\";d:55.80674661553535;s:4:\"TEXT\";s:51:\"�����������###RN###���. �������, ��.�����������, 6�\";}}}",
		"MAP_WIDTH" => "600",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?> 
<br />
 
<style>
        td {
            padding: 8px 0;
            font-size: small;
        }


    </style>
 
<table width="100%" style="border-collapse: collapse;" border="0" cellspacing="0" cellpadding="4"> 
  <tbody style="border: 1px solid rgb(16, 123, 52); border-image: none;"> 
    <tr> <td width="20%">�������� �����</td> <td>��� &quot;������������� ����������� �����������&quot;</td> </tr>
    
    <tr> <td>����������� �����:</td> <td>143406 ���������� �������, �. �����������, ��������� �����, �.6</td> </tr>
   
    <tr> <td>���/���</td> <td>5024045659/502401001</td> </tr>
   
    <tr> <td>���</td> <td>044 525 593</td> </tr>
   
    <tr> <td>����</td> <td>1025002863599</td> </tr>
   </tbody>
 </table>
 <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>