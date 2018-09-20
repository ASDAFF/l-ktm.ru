<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="NEW_div">
		<div class="NEWS_header">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
			<br>
		</div>
		<div class="NEWS_body" style="min-height: 100px;">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["src"]?>" style="width: <?=$arItem["PREVIEW_PICTURE"]["width"]?>; height: <?=$arItem["PREVIEW_PICTURE"]["height"]?>; margin-right: 3px; margin-bottom: 1px; margin-top: 3px; float:left;" alt="<?= $arItem["NAME"] ?>">
			<p><?=$arItem["PREVIEW_TEXT"];?></p>
		</div>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>



