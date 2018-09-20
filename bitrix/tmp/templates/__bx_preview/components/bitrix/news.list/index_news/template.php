<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="NEW_div">
		<div class="NEWS_day_month"><?=$arItem["DISPLAY_DATE_VALUE"][0]?>.<?=$arItem["DISPLAY_DATE_VALUE"][1]?></div>
		<!--div class="NEWS_year"></div-->
		<div class="NEWS_header">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<span class="bold"><?=$arItem["NAME"]?></span>
			</a>
		</div>
		<div class="NEWS_body">
			<p>
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img class="preview_picture" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" style="float:left" /></a>&nbsp;
				<?else:?>
					<img class="preview_picture" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" style="float:left" />&nbsp;
				<?endif;?>
			<?endif?>
				<?=$arItem["PREVIEW_TEXT"];?><br /><br />
			</p>
		</div>		
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>