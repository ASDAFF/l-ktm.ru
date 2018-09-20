<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div id="scroll_ins_red" class="cfi" style="width: 210px;">
		<p class="CATALOG_ITEM_IMG">
			<span class="detail_frame green">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" alt="<?=$arItem["NAME"]?>"></a>
			</span>
		</p>
		<p class="cfi_name">
			<a style="color: #007B34" class="CATALOG_ITEM" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<?=$arItem["NAME"]?>
			</a>
		</p>
	</div>
<?endforeach;?>