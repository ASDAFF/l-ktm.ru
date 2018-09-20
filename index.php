<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("SECOND_TITLE", "Детские колготки оптом в Москве | Купить детские носки и колготы оптом со склада по низким ценам – Лукоморье");
$APPLICATION->SetPageProperty("description", "Детские колготы от производителя&#10003;80% хлопковой пряжи&#10003;Большой выбор колготок&#9992;Быстрая Доставка&#8599;Высокое качество товара &#10148;Заходите!");
$APPLICATION->SetPageProperty("title", "Детский трикотаж, носки и колготки оптом от производителя ™Лукоморье.");
$APPLICATION->SetTitle("Детские колготки и носки «Лукоморье» ");
?>



<div class="CHAPTER descr_block"> 	
	<?$APPLICATION->IncludeFile("/include_areas/index_second_text.php", Array(), Array());?> 
</div>

<div class="CHAPTER descr_block"> 	
	<?$APPLICATION->IncludeFile("/include_areas/catalog.php", Array(), Array());?> 
</div>


<div class="CHAPTER FIRST-CHAPTER"><?$APPLICATION->IncludeFile("/include_areas/index_text.php", Array(), Array());?> </div>





<div id="redframe" class="coolframe coolframe_green img_large">
  <div id="frame_red" class="coolframe_red_ins">
    <div id="scroll_clip_red" class="coolframe_red_clip">
      <div id="scroll_content_red0" class="coolframe_red_content"><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"index_slider",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
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
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
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
);?></div>





<div id="scroll_content_red1" style="display: none;" class="coolframe_red_content"> 				<?$APPLICATION->IncludeComponent(
	"lktmru:news.list.check",
	"index_slider",
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
);?></div>
<div id="scroll_content_red2" style="display: none;" class="coolframe_red_content"><?$APPLICATION->IncludeComponent(
	"lktmru:news.list.check",
	"index_slider_for_boy",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
		"CHECK_PROPERTY" => "FOR_BOY",
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
);?></div>
</div>
</div>

<div id="arr_left_red" class="coolframe_arrow_left_red" onclick="scrollDivToLeftRed()"></div>
<div id="arr_right_red" class="coolframe_arrow_right_red" onclick="scrollDivToRightRed(max=10)"></div>
<div id="tab0" class="coolframe_tab0 active-tab">
    <p onclick="ShowTab(0)" class="coolframe_tab_content0">Наша продукция</p>
   	</div>
<div id="tab1" class="coolframe_tab1">
    <p onclick="ShowTab(1)" class="coolframe_tab_content1">Для девочек
      <br />
     </p>
   	</div>
<div id="tab2" class="coolframe_tab2">
    <p onclick="ShowTab(2)" class="coolframe_tab_content2">Для мальчиков
      <br />
     </p>
   	</div>
 </div>

<div class="CHAPTER descr_block"> 	
	<?$APPLICATION->IncludeFile("/include_areas/secrets.php", Array(), Array());?> 
</div>


<div class="CHAPTER descr_block"> 	
	<?$APPLICATION->IncludeFile("/include_areas/howtobuy.php", Array(), Array());?> 
</div>




<div id="news" class="news_list">
	<h2>Новости, специальные предложения и акции</h2>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"index_news",
		Array(
			"IBLOCK_TYPE" => "news",
			"IBLOCK_ID" => "2",
			"NEWS_COUNT" => "2",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "SORT",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(0=>"",1=>"",),
			"PROPERTY_CODE" => array(0=>"",1=>"",),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
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
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"PAGER_TEMPLATE" => "modern",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"AJAX_OPTION_ADDITIONAL" => ""
		)
	);?>
</div>

<div class="main_info">
  <div class="main_map">
  	<?$APPLICATION->IncludeFile('/include_areas/main_map.php');?>
    <div class="orange-block">
      <h3>Розничные точки по продаже трикотажа в Москве </h3>
      <p>Оформите заказ по телефону:
        <br />
       8 (495) 781-84-83 </p>
       <p>ТМ &laquo;Лукоморье&raquo;.
        <br />
       Более 10 лет с вами!</p>

      <p style="font-size: 13px;">Посмотреть карту <a href="/contacts/roznichnie_tochki/moskva/" >розничных точек по Москве</a></p>
      <p style="font-size: 13px;">Посмотреть карту <a href="/contacts/roznichnie_tochki/" >розничных точек по России</a></p>

     </div>
   </div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>