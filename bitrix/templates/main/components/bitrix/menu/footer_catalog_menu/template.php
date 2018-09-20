<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (empty($arResult)) return;?>
<?
$i = 0;
$cnt = round(count($arResult)/2);
?>
<ul>
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?$i++;?>
		<?if($i == $cnt){?>
			</ul><ul>
		<?}?>
	<?endforeach?>
</ul>
