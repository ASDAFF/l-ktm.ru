<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="news-detail">
	<?foreach($arResult["PROPERTIES"]["MAP"]["~DESCRIPTION"]as $description){?>
		<div style="margin-bottom: 10px;"><?=$description?></div>
	<?}?>
</div>