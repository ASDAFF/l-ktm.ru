<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (empty($arResult)) return;?>
<?$cnt = count($arResult);?>
<?$i = 0;?>
<div id="menu_clip">
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<?if($arItem["SELECTED"]):?>
			<a href="<?=$arItem["LINK"]?>" class="MENU_link_act"><?=$arItem["TEXT"]?></a>
		<?else:?>
			<a href="<?=$arItem["LINK"]?>" class="MENU_link"><?=$arItem["TEXT"]?></a>
		<?endif?>
		<?$i++;?>
		<?if($i != $cnt){?>
			&nbsp;/
		<?}?>
	<?endforeach?>
</div>