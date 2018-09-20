<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (empty($arResult)) return;?>
<div id="left">
	<ul>
		<?
		$previousLevel = 0;
		foreach($arResult as $arItem):?>
			<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?><?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?><?endif?>
			<?if ($arItem["IS_PARENT"]):?>
				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li class="pseudo_h1"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
						<ul class="first_level">
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>" class="parent<?if ($arItem["SELECTED"]):?> item-selected<?endif?>"><?=$arItem["TEXT"]?></a>
						<ul>
				<?endif?>
			<?else:?>
				<?if ($arItem["PERMISSION"] > "D"):?>
					<?if ($arItem["DEPTH_LEVEL"] == 1):?>
						<li class="pseudo_h1"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
						<li style="padding-left: 0px;">
							<a href="<?=$arItem["LINK"]?>" style="font-weight: normal;"><?=$arItem["TEXT"]?></a>
						</li>
					<?endif?>
				<?else:?>	
					<?if ($arItem["DEPTH_LEVEL"] == 1):?>
						<li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
						<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
				<?endif?>
			<?endif?>
			<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
		<?endforeach?>
		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
		<?endif?>
	</ul>
</div>