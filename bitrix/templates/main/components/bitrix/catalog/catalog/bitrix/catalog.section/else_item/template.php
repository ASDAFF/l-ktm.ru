<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (empty($arResult["ITEMS"])) return;?>
<div class="catalog_inner_banner">
	<p class="pseudo_h1">Похожие товары</p>
	<div class="coolframe">
		<div id="frame" class="coolframe_ins">
			<div id="scroll_clip" class="coolframe_clip">
				<div id="scroll_content" class="coolframe_content">
					<?foreach($arResult["ITEMS"] as $arItem){?>
						<div id="scroll_ins" class="cfi" style="width: 120px">
							<p class="CATALOG_ITEM_IMG">
								<span class="detail_frame red">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" alt="<?=$arItem["NAME"]?>"></a>
								</span>
							</p>
							<p class="cfi_name">
								<a class="CATALOG_ITEM" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<?=$arItem["NAME"]?>
								</a>
							</p>
						</div>
					<?}?>
				</div>
			</div>
		</div>
		<div id="arr_left" class="coolframe_arrow_left" onclick="scrollDivToLeft()"></div>
		<div id="arr_right" class="coolframe_arrow_right" onclick="scrollDivToRight(max=10)"></div>
	</div>
</div>