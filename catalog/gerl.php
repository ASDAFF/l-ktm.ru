<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "������ ������� ��������� ������� �������� ��� ������� ����� �� ������������� ��������� � ������");
$APPLICATION->SetPageProperty("description", "�������� ��� ������� ����� &#10003;����� 10 ����� ��������&#9992;������� ��������&#8599;������� �������� ������ &#10148;����������!");
$APPLICATION->SetTitle("�������� ��� �������");
$APPLICATION->SetPageProperty("title", "������� �������� ��� ������� ����� - ����������.");
$APPLICATION->AddChainItem("�������� ��� �������", "/catalog/kolgotki-dlja-devochek/");?> 
<!--<div> 
  <p>��� � ������� � ������� ������� - ��������� �������. � �������� ������������ ����� �� ���������. ������� ������� �������� ��� ������� ����� �������������. �������� &laquo;������������&raquo; ������� ��� �����, ������� ����� ��� � ������� ��������� � ������� ����� ��������� ��������. ������� ��� ������� ������ ���� �������� ��������, ����� ��� �������� ������ �, ������� ��, ��� �������� ���� ���� ����. �������� ������� �� ������ �������� ���������������� �������, �� � ������� � ����� �������� ������� ����������. </p>
 
  <h2>�������� ��� ������� �����</h2>
 
  <p>�������� ���������� �������� �������������� ������� �������� � ���������������� �� ������� ������ � �������� ��� ������� � ��������� �����. ����������� ���� � ��������� ��������, � ����� ������� ������ � ����� ������� ��� �������� ��������������, � ���� ������������ ������� � ��������� �������� �� ���� ������ � ���. ������ �������� ��� ������� ����� � ������� ����� � ����� �������� �������. <a href="/prices/" >�������� ������ �����</a> �� ������� �������� ��� ������� ��� ��������� �� �������� 8 (495) 781-84-83.</p>
<h3>���������� ������ �������� ��������� ��� �������</h3>
 </div>-->
<div> 
  <p>��� ������� ����� �������� ������ � �������� � ��� ������ ���� �����. �������, ��� ������� ��� ������������. �� �������, ��� ������ ������� ���� �������� �������� � �������� ������� ����� �����. ����������� �������� ������� ���������������� ��������� ���������, � ������� �� � �������� ������, ������� ��� ����������. </p>
 
  <h2>�������� ��� ������� �����</h2>
 
	<p>�������� ���������� ���������� ������� ������ � ���������� ���� ��������� �����, ��� ������� � �����������. ��� ����, ��������� ��������, � ������� ������ � �����, ������� ��� �������� ��������������, ���������� �  �������� � ���������� ���������� �� ���� ������ � ���. </p>
	<p>������ �������� ��� ������� ����� � ������� ����� � ����� �������� �������. <a href="/prices/" >�������� ������ �����</a> �� ������� �������� ��� ������� ��� ��������� �� �������� 8 (495) 781-84-83.</p>
<h3>���������� ������ �������� ��������� ��� �������</h3>
 </div>
 <?$APPLICATION->IncludeComponent(
	"lktmru:news.list.check",
	"pseudo_catalog",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
		"CHECK_PROPERTY" => "FOR_GIRL",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?> 
<div style="clear: both;"></div>
 
<div></div>
<div class="panel-btn">
	<div class="misc-link"><a href="/prices/">��� ������?</a></div>
	<div class="misc-link"><a href="/usloviya_raboty_nashei_kompanii/">��� �������� �����?</a></div>
	<div class="misc-link"><a href="/news/detskiye-kolgotki2017.pdf" target="_blank">������� �������</a></div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>