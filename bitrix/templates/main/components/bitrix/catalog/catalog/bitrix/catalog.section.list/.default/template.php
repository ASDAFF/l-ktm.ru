<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if (empty($arResult["SECTIONS"])) return;?>
<div id="CATALOG_div">
	<?foreach($arResult["SECTIONS"] as $arSection){?>
		<div style="width: 120px" class="CATALOG_ITEM">
			<p class="CATALOG_ITEM_IMG">
				<div class="detail_frame red">
					<a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arSection["PICTURE"]["src"]?>) no-repeat center center;" alt="<?=$arSection["NAME"]?>"></a>
				</div>
			</p>			
			<p class="CATALOG_ITEM_NAME"><a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860"><?=$arSection["NAME"]?></a></p>
		</div>
	<?}?>
	<div class="clearing"></div>
</div>