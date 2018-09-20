<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?=$arResult["DESCRIPTION"]?>
<div class="clearing"></div>

<?$arr_SOCKS = $arr_OTHER = array();
foreach($arResult["ITEMS"] as $arElement){
	if(isset($arElement['DISPLAY_PROPERTIES']['SOCKS']['VALUE_XML_ID']) && $arElement['DISPLAY_PROPERTIES']['SOCKS']['VALUE_XML_ID'] == 'Y') {
		$arr_SOCKS[$arElement['ID']] = $arElement;
	} else {
		$arr_OTHER[$arElement['ID']] = $arElement;
	}
}?>

<?if(count($arr_SOCKS)) {?>
<div id="CATALOG_div">
	<?foreach($arr_SOCKS as $arElement){?>		
		<div style="width: 120px" class="CATALOG_ITEM">
			<p class="CATALOG_ITEM_IMG">
				<div class="detail_frame red">
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;"></a>
				</div>
			</p>
			<p class="CATALOG_ITEM_NAME">
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860">
					<?=$arElement["NAME"]?>
				</a>
			</p>
		</div>
	<?}?>
	<div class="clearing"></div>
<h2>Купить детские гольфы оптом</h2>
<p>Предлагаемые изделия гипоаллергенны. Детские гольфы бывают самого разного вида дизайнерской идеи и цветовой гаммы, белые гольфы, с узорами или без, на любой вкус маленькой дамы. Купить детские гольфы в полоску или высокие детские гольфы оптом по низкой цене, предлагает компания «Лукоморье». Мы знаем, как важно подвижному ребёнку чувствовать себя комфортно.  Закажите детские гольфы для девочек на нашем сайте, или обратитесь за консультацией о покупке детских гольф к нашему специалисту по телефону <b>8 (495) 781-84-83</b>.</p>

	<?foreach($arr_OTHER as $arElement){?>		
		<div style="width: 120px" class="CATALOG_ITEM">
			<p class="CATALOG_ITEM_IMG">
				<div class="detail_frame red">
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" ></a>
				</div>
			</p>
			<p class="CATALOG_ITEM_NAME">
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860">
					<?=$arElement["NAME"]?>
				</a>
			</p>
		</div>
	<?}?>
	<div class="clearing"></div>
</div>

<?} else {?>
<div id="CATALOG_div">
	<?foreach($arResult["ITEMS"] as $arElement){?>		
		<div style="width: 120px" class="CATALOG_ITEM">
			<p class="CATALOG_ITEM_IMG">
				<div class="detail_frame red">
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" ></a>
				</div>
			</p>
			<p class="CATALOG_ITEM_NAME">
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860">
					<?=$arElement["NAME"]?>
				</a>
			</p>
		</div>
	<?}?>
	<div class="clearing"></div>
</div>
<?}?>

<?=$arResult["NAV_STRING"]?>