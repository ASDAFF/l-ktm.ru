<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php $cc = 0; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?php $cc = $cc+1; ?>
	<div <?php if ($cc == '1') { ?>id="scroll_ins_red"<?php } ?> class="cfi scroll_ins_red">
		<p class="CATALOG_ITEM_IMG">
			<span class="detail_frame green">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;"></a>
			</span>
		</p>
		<p class="cfi_name"><a class="CATALOG_ITEM" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></p>
	</div>
<?endforeach;?>
