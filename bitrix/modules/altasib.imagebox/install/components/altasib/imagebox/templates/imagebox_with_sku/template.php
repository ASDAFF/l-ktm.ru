<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$ALX_IMAGEBOX = rand();?>
<?$num_prev = floor(($arParams["PREVIEW_HEIGHT"]-60)/$arResult["THUMBS_HEIGHT"])?>
<script>
	num_prev=<?=$num_prev?>;
</script>
<script src="<?=$this->__folder?>/js/jcarousellite_1.0.1.js"></script>
<?
function show_pict($big_pict, $small_pict, $width, $height, $id, $name, $zoom)
{
?>
	<a rel = "<?=$zoom?>" href="<?=$big_pict?>"   title="<?=$name?>" style = 'width: <?=$width?>px; height: <?=$height?>px; margin-top: -<?=$height/2?>px; margin-left: -<?=$width/2?>px; display: none;' data-value="photo_<?=$id?>">
	<img src = '<?=$small_pict?>'  />
	</a>
<?
}
function show_video_imgbx($video_code, $width, $height)
{
?>
	<a style = 'width: <?=$width?>px; height: <?=$height?>px; margin-top: -<?=$height/2?>px; margin-left: -<?=$width/2?>px'>
		<iframe src="<?=$video_code?>" width="<?=$width?>px" height="<?=$height?>px"></iframe>
	</a>
<?
}
$strMainIDOffr = 'bx_2344015009_'.$arParams['ELEMENT_ID'];
$arItemIDs = array(
	'ID' => $strMainIDOffr,
	'PICT' => $strMainIDOffr.'_pict',
	'DISCOUNT_PICT_ID' => $strMainIDOffr.'_dsc_pict',
	'STICKER_ID' => $strMainIDOffr.'_sticker',
	'BIG_SLIDER_ID' => $strMainIDOffr.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainIDOffr.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainIDOffr.'_slider_cont',
	'SLIDER_LIST' => $strMainIDOffr.'_slider_list',
	'SLIDER_LEFT' => $strMainIDOffr.'_slider_left',
	'SLIDER_RIGHT' => $strMainIDOffr.'_slider_right',
	'OLD_PRICE' => $strMainIDOffr.'_old_price',
	'PRICE' => $strMainIDOffr.'_price',
	'DISCOUNT_PRICE' => $strMainIDOffr.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainIDOffr.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainIDOffr.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainIDOffr.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainIDOffr.'_slider_right_',
	'QUANTITY' => $strMainIDOffr.'_quantity',
	'QUANTITY_DOWN' => $strMainIDOffr.'_quant_down',
	'QUANTITY_UP' => $strMainIDOffr.'_quant_up',
	'QUANTITY_MEASURE' => $strMainIDOffr.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainIDOffr.'_quant_limit',
	'BUY_LINK' => $strMainIDOffr.'_buy_link',
	'ADD_BASKET_LINK' => $strMainIDOffr.'_add_basket_link',
	'COMPARE_LINK' => $strMainIDOffr.'_compare_link',
	'PROP' => $strMainIDOffr.'_prop_',
	'PROP_DIV' => $strMainIDOffr.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainIDOffr.'_sku_prop',
	'OFFER_GROUP' => $strMainIDOffr.'_set_group_',
	'BASKET_PROP_DIV' => $strMainIDOffr.'_basket_prop',
);
?>
<div class="alx_imagebox alx_imagebox_<?=$ALX_IMAGEBOX?>">
<div class="alx_preview" style="float:left;">
<?

if ($arParams["SHOW_DETAIL_PICTURE"] == 1){?>
        <?if ($arResult["DETAIL_PICTURE"]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["DETAIL_PICTURE"]["WIDTH"] > $arParams["PREVIEW_WIDTH"]){?>
			<?show_pict(
				$arResult["DETAIL_PICTURE"]["SRC"], 
				$arResult["DETAIL_PICTURE"]["RESIZED"]["src"], 
				$arResult["DETAIL_PICTURE"]["RESIZED"]['width'],
				$arResult["DETAIL_PICTURE"]["RESIZED"]['height'], 
				$arResult["DETAIL_PICTURE"]["ID"], 
				$arResult["NAME"],
				"zoom"
			);?>
        <?}else{?>
			<?show_pict(
				$arResult["DETAIL_PICTURE"]["SRC"], 
				$arResult["DETAIL_PICTURE"]["SRC"], 
				$arResult["DETAIL_PICTURE"]['WIDTH'],
				$arResult["DETAIL_PICTURE"]['HEIGHT'],
				$arResult["DETAIL_PICTURE"]["ID"], 
				$arResult["NAME"]
			);
			?>
        <?}?>
		
<?}?>

<?foreach ($arResult['OFFERS'] as $key => $arOneOffer){?>
	<?foreach ($arOneOffer["MORE_PHOTO"] as $keyOff => $value){?>

	<?if ($arOneOffer["MORE_PHOTO"][$keyOff]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arOneOffer["MORE_PHOTO"][$keyOff]["WIDTH"] > $arParams["PREVIEW_WIDTH"]){?>
		<?if ($keyOff == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0){?>
			<?show_pict(
					$arOneOffer["MORE_PHOTO"][$keyOff]["SRC"],
					$arOneOffer["MORE_PHOTO"][$keyOff]["RESIZED"]["src"], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["RESIZED"]['width'], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["RESIZED"]['height'], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["ID"],
					$arOneOffer["NAME"],
					"zoom"
				);
				?>
		<?}else{?>	
				<?show_pict(
					$arOneOffer["MORE_PHOTO"][$keyOff]["SRC"],
					$arOneOffer["MORE_PHOTO"][$keyOff]["RESIZED"]["src"], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["RESIZED"]['width'], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["RESIZED"]['height'], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["ID"],
					$arOneOffer["NAME"],
					"zoom"
				);
				?>
		<?}?>
					
	<?}else{?>
					<?if ($keyOff == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0){?>
			<?show_pict(
					$arOneOffer["MORE_PHOTO"][0]["SRC"], 
					$arOneOffer["MORE_PHOTO"][0]["SRC"], 
					$arOneOffer["MORE_PHOTO"][0]['WIDTH'], 
					$arOneOffer["MORE_PHOTO"][0]['HEIGHT'], 
					$arOneOffer["MORE_PHOTO"][0]["ID"],
					$arOneOffer["NAME"]
				);
				?>
			<?}else{?>
				<?show_pict(
					$arOneOffer["MORE_PHOTO"][$keyOff]["SRC"], 
					$arOneOffer["MORE_PHOTO"][$keyOff]["SRC"], 
					$arOneOffer["MORE_PHOTO"][$keyOff]['WIDTH'], 
					$arOneOffer["MORE_PHOTO"][$keyOff]['HEIGHT'], 
					$arOneOffer["MORE_PHOTO"][0]["ID"],
					$arOneOffer["NAME"]
				);
				?>
					<?}?>
	<?}?>
	<?}?>
<?
}?>

<?foreach ($arResult["MORE_PHOTO"] as $key => $value){?>

	<?if($value['ID']){?>
	<?if ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["MORE_PHOTO"][$key]["WIDTH"] > $arParams["PREVIEW_WIDTH"]){?>
		<?if ($key == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0){?>
			<?show_pict(
					$arResult["MORE_PHOTO"][0]["SRC"],
					$arResult["MORE_PHOTO"][$key]["RESIZED"]["src"], 
					$arResult["MORE_PHOTO"][$key]["RESIZED"]['width'], 
					$arResult["MORE_PHOTO"][$key]["RESIZED"]['height'], 
					$arResult["MORE_PHOTO"][$key]["ID"], 
					$arResult["NAME"],
					"zoom"
				);
				?>
		<?}else{?>	
				<?show_pict(
					$arResult["MORE_PHOTO"][$key]["SRC"],
					$arResult["MORE_PHOTO"][$key]["RESIZED"]["src"], 
					$arResult["MORE_PHOTO"][$key]["RESIZED"]['width'], 
					$arResult["MORE_PHOTO"][$key]["RESIZED"]['height'], 
					$arResult["MORE_PHOTO"][$key]["ID"], 
					$arResult["NAME"],
					"zoom"
				);
				?>
		<?}?>
					
	<?}else{?>
					<?if ($key == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0){?>
			<?show_pict(
					$arResult["MORE_PHOTO"][0]["SRC"], 
					$arResult["MORE_PHOTO"][0]["SRC"], 
					$arResult["MORE_PHOTO"][0]['WIDTH'], 
					$arResult["MORE_PHOTO"][0]['HEIGHT'], 
					$arResult["MORE_PHOTO"][0]['ID'], 
					$arResult["NAME"]
				);
				?>
			<?}else{?>
				<?show_pict(
					$arResult["MORE_PHOTO"][$key]["SRC"], 
					$arResult["MORE_PHOTO"][$key]["SRC"], 
					$arResult["MORE_PHOTO"][$key]['WIDTH'], 
					$arResult["MORE_PHOTO"][$key]['HEIGHT'], 
					$arResult["MORE_PHOTO"][$key]['ID'], 
					$arResult["NAME"]
				);
				?>
					<?}?>
	<?}?>
<?}?>
<?}?>

</div>
<div class = 'alx_zoom'>

</div>
<div class="alx_thumbs">

<?if(isset($arResult['OFFERS']) && !empty($arResult['OFFERS'])){
				foreach ($arResult['OFFERS'] as $key => $arOneOffer)
				{
					if (!isset($arOneOffer['MORE_PHOTO_COUNT']) || 0 >= $arOneOffer['MORE_PHOTO_COUNT'])
						continue;
					$strVisible = ($key == $arResult['OFFERS_SELECTED'] ? '' : 'none');
						$strClass = 'bx_slider_conteiner';
						$strOneWidth = '100px';
						$strWidth = '100%';
						$strSlideStyle = 'display: none;';
						$cnt_prevws_offrs = 0;
		?>
			<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['SLIDER_CONT_OF_ID'].$arOneOffer['ID']; ?>" style="display: <? echo $strVisible; ?>;" rel="<?=$arOneOffer['ID']?>">
				<div class="carousel" id="carousel_<? echo $arItemIDs['SLIDER_CONT_OF_ID'].$arOneOffer['ID']; ?>">
				<ul><?
				foreach ($arOneOffer['MORE_PHOTO'] as &$arOnePhoto)
				{
				?>
					<li>
						<a href="<? echo $arOnePhoto['SRC']; ?>" class="alx_thumbs_item" rel="photo_<?=$arOnePhoto['ID']?>">
							<span style="background-image:url(<? echo $arOnePhoto["thumb_src"]["src"]; ?>); width: <? echo $arOnePhoto["thumb_src"]["width"]; ?>px; height: <? echo $arOnePhoto["thumb_src"]["height"]; ?>px">
								<img src="<?=$templateFolder?>/images/spacer.gif" alt=""/>
							</span>
						</a>
					</li>
					<?$cnt_prevws_offrs++;?>
				<?
				}
				?></ul>
				</div>
				<?if($num_prev <= $cnt_prevws_offrs){?>
					<div class="btn_up" rel="btn_up_<?=$arOneOffer['ID']?>"></div>
					<div class="btn_dwn" rel="btn_dwn_<?=$arOneOffer['ID']?>"></div>
				<?}?>
				<?unset($arOnePhoto);?>
			</div>
		<?
				}
			}else{
?>
<?if ($arParams["SHOW_DETAIL_PICTURE"] == 1 && count($arResult["MORE_PHOTO"]) >= 1):?>
        <a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"class="alx_thumbs_item"><span style="background-image:url(<?=$arResult["DETAIL_PICTURE"]["thumb_src"]["src"]?>)"><img src="<?=$templateFolder?>/images/spacer.gif" alt="" /></span></a>
<?endif;?>

<?if (count($arResult["MORE_PHOTO"]) > 1 || $arParams["SHOW_DETAIL_PICTURE"] == 1):?>
<?
						$strClass = 'bx_slider_conteiner';
						$cnt_prevws = 0;
?>
			<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['SLIDER_CONT_OF_ID'].$arOneOffer['ID']; ?>" style="display: <? echo $strVisible; ?>;" rel="<?=$arOneOffer['ID']?>">
				<div class="carousel" id="carousel_<? echo $arItemIDs['SLIDER_CONT_OF_ID'].$arOneOffer['ID']; ?>"><ul>
				<?foreach ($arResult["MORE_PHOTO"] as $key => $value){?>
				<?if($value['ID']){?>
          <li>
						<a href="<?=$value["SRC"]?>" class="alx_thumbs_item" rel="photo_<?=$value['ID']?>">
							<span style="background-image:url(<?=$value["thumb_src"]["src"]?>)">
								<img src="<?=$templateFolder?>/images/spacer.gif" alt="" />
							</span>
						</a>
					</li>
					<?$cnt_prevws++;?>
        <?}?>
        <?}?>
				</ul>
				</div>
				<?if($num_prev <= $cnt_prevws){?>
					<div class="btn_up" rel="btn_up_<?=$arOneOffer['ID']?>"></div>
					<div class="btn_dwn" rel="btn_dwn_<?=$arOneOffer['ID']?>"></div>
				<?}?>
			</div>
<?endif;?>

<?}?>
</div>
<?$detail_title = array ("over", "outside", "inside"); ?>

<script>
        alx_lastimg = 0;
        $(document).ready(function(){
					isTouch		= document.body.ontouchstart !== undefined;
					var lngth_dv = $('div.alx_thumbs div').length;
					if(lngth_dv == 0)
					{
						$('.alx_preview a:first').css('display','block');
						$('.alx_preview a:first').attr('class', 'zoom');;
						$('.alx_thumbs a:first').css("border","1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>");
						$('a.zoom').easyZoom({parent: '.alx_zoom'});
					}

					$("body").on('click','.alx_thumbs a',function(){
							var idx = $("div.alx_thumbs a").index(this);
							if(idx == alx_lastimg)return false;
							alx_lastimgObj = $(".alx_preview a").eq(alx_lastimg);
							elm = $(".alx_preview a[data-value='"+$(this).attr('rel')+"']");
							alx_lastimgObjTmb = $(".alx_thumbs a").eq(alx_lastimg);
							$('div.alx_thumbs a').css("border","");
							$(this).css("border","1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>");
							$('div.alx_preview a').fadeOut("10000");
							$(elm).fadeIn("10000");
							alx_lastimg = idx;
								<?if($arParams["TURN_ON_ZOOM"]):?>
									$(".alx_preview a").removeAttr('class');
									a_atr = $(elm).attr('rel');
									if(a_atr == 'zoom')
									{
										$(elm).attr('class', 'zoom');
										if(!isTouch){
											$('a.zoom').easyZoom({parent: '.alx_zoom'});
										}
									}
								<?endif;?>
							return false;
						});
						$("body").on('click','.alx_preview a',function(){
							var src = $(this).attr('href');
							$.fancybox({
								'href':	src,
								'transitionIn': 'none',
								'transitionOut': 'none',
								<?if ($arParams["SHOW_DESC"] == 1){?>
									'titlePosition': '<?=$detail_title[$arParams["DETAIL_TITLE"]]?>',
									'titleFormat': function(title, currentArray, currentIndex, currentOpts) {
																		return '<span id="fancybox-title-over">' + (title.length ? '' + title : '') + '</span>';
									},
									'titleShow': 'none'
								<?}?>
							});
							return false;
						});

						$(".alx_thumbs div:visible a:first").css("border", "1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>");
						a_atr = $(".alx_preview div:visible a:first").attr('style');
						$(".alx_preview div:visible a:first").attr('style', ('display: block; '+a_atr));
						<?if($arParams["TURN_ON_ZOOM"]):?>
							a_atr = $(".alx_preview div:visible a:first").attr('rel');
							if(a_atr == 'zoom' && !isTouch)
							{
								$(".alx_preview div:visible a:first").attr('class', 'zoom');
								$('a.zoom').easyZoom({parent: '.alx_zoom'});
							}
						<?endif;?>
					
						<?if ($arParams["SHOW_DESC"] != 1):?>
							$('[title]').removeAttr('title');
						<?endif;?>
						<?if($arParams['IN_NEW_BLOCK']!=''){?>
							var html_new_sldr = $('div.alx_imagebox').html();
							$('div.alx_imagebox').detach();
							$('div<?=$arParams['IN_NEW_BLOCK']?>').html('<div class="alx_imagebox alx_imagebox_<?=$ALX_IMAGEBOX?>">' + html_new_sldr + '</div>');
						<?}?>
						<?if($arParams["TURN_ON_ZOOM"]){?>
							if(!isTouch)
							{
								$(".alx_preview a:first").attr('class', 'zoom');
								$('a.zoom').easyZoom({parent: '.alx_zoom'});
							}
						<?}?>
						$(".alx_preview a:first").css('display', 'block');
						<?if(!empty($arResult['OFFERS'])){?>
						var first_block_id = $(".alx_thumbs div.bx_slider_conteiner:first").attr('rel');
						$(".alx_thumbs div.bx_slider_conteiner:first div.carousel").jCarouselLite({
							btnNext: "div.btn_dwn[rel='btn_dwn_"+first_block_id+"']",
							btnPrev: "div.btn_up[rel='btn_up_"+first_block_id+"']",
							vertical: true,
							scroll: <?=$num_prev?>,
							circular: true,
						});
						<?}else{?>
						var id_cont = '';
						$('div.alx_thumbs div.carousel').jCarouselLite({
							btnNext: "div.btn_dwn[rel='btn_dwn_"+id_cont+"']",
							btnPrev: "div.btn_up[rel='btn_up_"+id_cont+"']",
							vertical: true,
							scroll: num_prev,
							circular: true,
						});
						<?}?>
					});
</script>

<style type="text/css">
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs {
        width: <?=intval($arResult["THUMBS_WIDTH"])+25?>px;
        height: <?=$arParams["PREVIEW_HEIGHT"]?>px;
				float: left;
				margin-left:10px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a {
        width: <?=$arResult["THUMBS_WIDTH"]?>px;
        height: <?=$arResult["THUMBS_HEIGHT"]?>px;
        border: solid 1px <?=$arParams["BORD_COL_MINI"]?>;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs  a.alx_thumbs_item
{
        margin: 0px auto <?=$arParams["MARGIN_V"]?>px auto;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a span
{
        width: <?=$arResult["THUMBS_WIDTH"]-2?>px;
        height: <?=$arResult["THUMBS_HEIGHT"]-2?>px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_preview
{
		height: <?=$arParams["PREVIEW_HEIGHT"]?>px;
		width: <?=$arParams["PREVIEW_WIDTH"]-4?>px;
		border: 1px solid <?=$arParams["BORD_COL_MAIN"]?>;
		background-color: <?=$arParams["BG_PIC"]?>;
		position: relative;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_preview a
{
    	position: absolute;
		top: 50%;
		left: 50%;
}
.alx_thumbs a:hover {
        border: 1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>!important;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_zoom
{
	position: absolute;
	z-index: 10000;
	margin-left: <?=$arParams["PREVIEW_WIDTH"]+20?>px;
	margin-top: 0px;
}
#easy_zoom
{
	width: <?=$arParams["ZOOM_WIDTH"]?>px;
	height: <?=$arParams["ZOOM_HEIGHT"]?>px;	
	border: <?=$arParams["ZOOM_BORDER_WIDTH"]?>px solid #eee;
	background:#fff;
	color:#333;
	position:absolute;
	overflow:hidden;
	-moz-box-shadow:0 0 <?=$arParams["ZOOM_SHADOW"]?>px #777;
	-webkit-box-shadow:0 0 <?=$arParams["ZOOM_SHADOW"]?>px #777;
	box-shadow:0 0 <?=$arParams["ZOOM_SHADOW"]?>px #777;
	line-height:<?=($arParams["ZOOM_HEIGHT"])?>px;
	text-align: center;
	
}
div.btn_up
{
  background: transparent url(<?=$templateFolder?>/images/arrowU.png) no-repeat center;
  width: <?=intval($arResult["THUMBS_WIDTH"])+25?>px;
	height: 30px;
	cursor:pointer;
	position: absolute;
	clear: both;
	top: 0;
}
div.btn_dwn
{
  background: transparent url(<?=$templateFolder?>/images/arrowD.png) no-repeat center;
  width: <?=intval($arResult["THUMBS_WIDTH"])+25?>px;
	height: 30px;
	cursor:pointer;
	clear: both;
	position: absolute;
	bottom: 0;
}
div.bx_slider_conteiner
{
	text-align: center;
	height: <?=intval($arParams["PREVIEW_HEIGHT"])+2-(30+intval($arParams["PREVIEW_HEIGHT"]-60+$arParams["MARGIN_V"]-($arResult["THUMBS_HEIGHT"]+$arParams["MARGIN_V"])*$num_prev)/2)?>px;
	position: relative;
	padding-top: <?=30+intval($arParams["PREVIEW_HEIGHT"]-60+$arParams["MARGIN_V"]-($arResult["THUMBS_HEIGHT"]+$arParams["MARGIN_V"])*$num_prev)/2?>px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs div.carousel {
	width: <?=intval($arResult["THUMBS_WIDTH"])+25?>px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs ul {
	width: <?=intval($arResult["THUMBS_WIDTH"])+25?>px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs ul li {
  width: <?=intval($arResult["THUMBS_WIDTH"])+25?>px;
  margin-bottom: <?=$arParams["MARGIN_V"]?>px;
	text-align: center;
}
</style>

</div>
<div style="clear:both;"></div>