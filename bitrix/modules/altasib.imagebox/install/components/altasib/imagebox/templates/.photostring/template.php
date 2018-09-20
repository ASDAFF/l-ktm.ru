<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$ALX_IMAGEBOX = rand();?>
<?$PlayerID = rand();?>

<?
function show_pict($big_pict, $small_pict, $width, $height, $id, $name, $zoom)
{
?>
	<a data-value="photo_<?=$id?>" rel = "<?=$zoom?>" href="<?=$big_pict?>"   title="<?=$name?>" style = 'width: <?=$width?>px; height: <?=$height?>px; margin-top: -<?=$height/2?>px; margin-left: -<?=$width/2?>px'>
	<img src = '<?=$small_pict?>'  />
	</a>
<?
}

?>
<?$frame = $this->createFrame('alx_imagebox_div')->begin();?>
<div id="alx_imagebox_div">
	<div class="alx_imagebox alx_imagebox_<?=$ALX_IMAGEBOX?>">
	<div class="alx_preview">
	<?
	if ($arParams["SHOW_DETAIL_PICTURE"] == 1):?>
					<?if ($arResult["DETAIL_PICTURE"]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["DETAIL_PICTURE"]["WIDTH"] > $arParams["PREVIEW_WIDTH"]):?>
				<?show_pict(
					$arResult["DETAIL_PICTURE"]["SRC"], 
					$arResult["DETAIL_PICTURE"]["RESIZED"]["src"], 
					($arResult["DETAIL_PICTURE"]["RESIZED"]['width']),
					$arResult["DETAIL_PICTURE"]["RESIZED"]['height'], 
					$arResult["DETAIL_PICTURE"]["ID"],
					$arResult["NAME"],
					"zoom"
				);?>
		
			
					<?else:?>
				<?show_pict(
					$arResult["DETAIL_PICTURE"]["SRC"], 
					$arResult["DETAIL_PICTURE"]["SRC"], 
					$arResult["DETAIL_PICTURE"]['WIDTH'],
					$arResult["DETAIL_PICTURE"]['HEIGHT'],
					$arResult["DETAIL_PICTURE"]["ID"],
					$arResult["NAME"]
				);
				?>
					<?endif;?>
			
	<?endif;?>

	<?foreach ($arResult["MORE_PHOTO"] as $key => $value):?>
	<?if($value['ID']){?>
	<?if ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["MORE_PHOTO"][$key]["WIDTH"] > $arParams["PREVIEW_WIDTH"]):?>
		<?if ($key == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0):?>
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
		<?else:?>	
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
		<?endif;?>
					
	<?else:?>
					<?if ($key == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0):?>
			<?show_pict(
					$arResult["MORE_PHOTO"][0]["SRC"], 
					$arResult["MORE_PHOTO"][0]["SRC"], 
					$arResult["MORE_PHOTO"][0]['WIDTH'], 
					$arResult["MORE_PHOTO"][0]['HEIGHT'], 
					$arResult["MORE_PHOTO"][0]['ID'], 
					$arResult["NAME"]
				);
				?>
			<?else:?>
				<?show_pict(
					$arResult["MORE_PHOTO"][$key]["SRC"], 
					$arResult["MORE_PHOTO"][$key]["SRC"], 
					$arResult["MORE_PHOTO"][$key]['WIDTH'], 
					$arResult["MORE_PHOTO"][$key]['HEIGHT'], 
					$arResult["MORE_PHOTO"][$key]['ID'], 
					$arResult["NAME"]
				);
				?>
					<?endif;?>
	<?endif;?>
	<?}?>
	<?endforeach;?>

	</div>

	<div class = 'alx_zoom'>

	</div>
	</div>

	<div id="alx_photostring_<?=$PlayerID?>">
					<div class="nav_blocks_alx_photostring" id="nav_blocks_<?=$PlayerID?>">
									<table cellpadding="0" cellspacing="0" border="0" width="<?=$arParams["PREVIEW_WIDTH"]?>">
									<tr>
													<td align="left" width="<?=$arParams["ARROW_L"]?>">
																	<div id="jcar_prev1_<?=$PlayerID?>" class="jcarousel-prev1_alx_photostring"><img src="<?=$templateFolder?>/images/spacer.gif" alt="<" /></div>
													</td>
													<td width="<?=$arParams["PREVIEW_WIDTH"] - $arParams["ARROW_L"] - $arParams["ARROW_R"]?>">
																	<?$wrap = $arResult["WRAP"];?>
																					<?$count_el = count($arResult["MORE_PHOTO"]);
																					$num_visible = $arParams["PREVIEW_WIDTH"] / ($arResult["THUMBS_WIDTH"] + $arParams["INTERVAL"]);
																					$num_vis_half = (integer)($num_visible / 2);
																									if($arParams["LISTING"] == "ONE")
																													$listing = 1;
																									else $listing = $arParams["THUMBS_COUNT_PS"];?>
																													<div class="block_show_cont_alx_photostring">
																																	<div id="link_<?=$PlayerID?>"  onmousewheel="MouseScroll_<?=$PlayerID?>(event);return false;">
																																					<div id="mycarousel_front_<?=$PlayerID?>" class="jcarousel-front"></div>
																																					<div class="alx_thumbs">
																																					<div id="mycarousel_<?=$PlayerID?>" class="jcarousel-skin-tango_alx_photostring"  style="display:none">
																																									<div class="sel_item_block_alx_photostring" style="width:<?=$arResult["THUMBS_WIDTH"]+4?>px; margin-left:<?=($arResult["THUMBS_WIDTH"]+2)*$num_vis_half+$arParams["INTERVAL"]*$num_vis_half -1?>px"></div>
																																									<ul>
																																													<?if (!empty($arResult["MORE_PHOTO"])):?>
																																																	<?for($i=0; (($i<$num_vis_half)&&($wrap == null)); $i++):?>
																																																					<li><div class="jcarousel-item-pict_alx_photostring a_hov_m" id="a_<?=$PlayerID?>_<?=$i?>" style="background-image:url('<?=$templateFolder?>/images/spacer.gif'); width:<?=$arResult["THUMBS_WIDTH"]?>px; height:<?=$arResult["THUMBS_HEIGHT"]?>px;"></div></li>
																																																	<?endfor;?>
																																																					<?if ($arParams["SHOW_DETAIL_PICTURE"] == 1 && count($arResult["MORE_PHOTO"]) >= 1):?>
																																																									<li><a data-value="photo_" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="jcarousel-item-pict_alx_photostring a_hov_m" style="background-image:url(<?=$arResult["DETAIL_PICTURE"]["thumb_src"]["src"]?>); width:<?=$arResult["THUMBS_WIDTH"]?>px; height:<?=$arResult["THUMBS_HEIGHT"]?>px;" title="<?=$arResult["MORE_PHOTO"][0]["NAME"]?>" rel="0"></a></li>
																																																					<?endif;?>
																																																	<?for($i=0; $i<$count_el; $i++):?>
																																																			<?if($arResult["MORE_PHOTO"][$i]['ID']){?>
																																																					<li><a data-value="photo_<?=$arResult["MORE_PHOTO"][$i]['ID']?>" href="<?=$arResult["MORE_PHOTO"][$i]["SRC"]?>" class="jcarousel-item-pict_alx_photostring a_hov_m" id="a_<?=$PlayerID?>_<?=$i+$num_vis_half?>" style="background-image:url(<?=$arResult["MORE_PHOTO"][$i]["thumb_src"]["src"]?>); width:<?=$arResult["THUMBS_WIDTH"]?>px; height:<?=$arResult["THUMBS_HEIGHT"]?>px;" title="<?=$arResult["MORE_PHOTO"][$i]["NAME"]?>" rel="<?if ($arParams["SHOW_DETAIL_PICTURE"] == 1):?><?=$i+1;?><?else:?><?=$i;?><?endif;?>"></a></li>
																																																			<?}?>
																																																	<?endfor;?>
																																																	<?for($i=0; (($i<$num_vis_half)&&($wrap == null)); $i++):?>
																																																					<li><div class="jcarousel-item-pict_alx_photostring a_hov_m" id="a_<?=$PlayerID?>_<?=$i+$num_vis_half+$count_el?>" style="background-image:url('<?=$templateFolder?>/images/spacer.gif'); width:<?=$arResult["THUMBS_WIDTH"]?>px; height:<?=$arResult["THUMBS_HEIGHT"]?>px;"></div></li>
																																																	<?endfor;?>
																																													<?endif;?>
																																									</ul>
																																					</div>
																																					</div>
																																	</div>
																													</div>
																	</td>
																	<td align="right" width="<?=$arParams["ARROW_R"]?>">
																					<div id="jcar_next1_<?=$PlayerID?>" class="jcarousel-next1_alx_photostring"><img src="<?=$templateFolder?>/images/spacer.gif" alt=">" /></div>
																	</td>
																	</tr>
							</table>
									</div>
	</div>
</div>
<?$frame->beginStub();?>
	<?=GetMessage("ALX_LOADING_TEXT")?>
<?$frame->end();?>
<script>
<?$detail_title = array ("over", "outside", "inside"); ?>
alx_lastimg_rel = '';
alx_lastimg_obj = '';
mov_now = '';

isTouch		= document.body.ontouchstart !== undefined;
var flagmoveclick = false;
        $(document).ready(function(){

        $(".alx_thumbs a").mousemove(function(){
           if (flag_mousedown)
                mov_now = $(this).attr('rel');
        });
        $(".alx_thumbs a").click(function(){

        if (mov_now != $(this).attr('rel'))flagmoveclick = false;
        if (!flagmoveclick){
                        var idx = $(this).attr('rel');
                        if(idx == alx_lastimg_rel)return false;

                        //console.log(idx);
												var ind = $(this).attr('data-value');
												alx_lastimgObj = $(".alx_preview a").eq(alx_lastimg_rel);
                        $(".alx_preview a").hide();
                        elm = $(".alx_preview a[data-value='"+ind+"']");
                        //console.log(elm);
                        alx_lastimgObjTmb = $(".alx_thumbs a").eq(alx_lastimg_rel);

                        if (alx_lastimg_obj == '')
                                alx_lastimg_obj = $("#mycarousel_<?=$PlayerID?> ul li:first a");

                        $(alx_lastimg_obj).toggleClass('sel');
                        $(this).toggleClass('sel');
                        $(alx_lastimgObj).fadeOut("10000");
                        $(elm).fadeIn("10000");

                        alx_lastimg_rel = idx;
                        alx_lastimg_obj = $(this);
                        flagmoveclick = false;
						<?if($arParams["TURN_ON_ZOOM"]):?>
						  $(".alx_preview a").removeAttr('class');
						  a_atr = $(elm).attr('rel');
						  if(a_atr == 'zoom' && !isTouch)
						  {
							  $(elm).attr('class', 'zoom');
							  $('a.zoom').easyZoom({parent: '.alx_zoom'});
							}
					  <?endif;?>
                        return false;
        }
        else{
                        flagmoveclick = false;
                        return false;
            }
        });
        $(".alx_preview a").fancybox({
                        'transitionIn' : 'none',
                        'transitionOut' : 'none',
                        <?if ($arParams["SHOW_DESC"] == 1):?>
                        'titlePosition' : '<?=$detail_title[$arParams["DETAIL_TITLE"]]?>',
                        'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
                        return '<span id="fancybox-title-over">' + (title.length ? '' + title : '') + '</span>';},
                        'titleShow' : 'none'
                        <?endif;?>
                        });
        <?if ($arParams["SHOW_DESC"] != 1):?>
        $('[title]').removeAttr('title');
        <?endif;?>


        height_all = <?=$arResult["THUMBS_HEIGHT"]?>;
        width_all = <?=$arParams["PREVIEW_WIDTH"]?>;

                var flag_mousedown = false;
                var start_x = 0;

                $('#mycarousel_<?=$PlayerID?>').css('display', 'block');
                $('#nav_blocks_<?=$PlayerID?>').css('visibility', 'visible');
                $('#mycarousel_<?=$PlayerID?>').mousedown(function(e){
                                        flag_mousedown = true;
                                        $('#mycarousel_<?=$PlayerID?> a').removeClass("a_hov_m");
                                        start_x = e.pageX;
                                        return false;
                });
                $('.jcarousel-item-pict_alx_photostring').click(function(e){
                                        if (flagmoveclick) {
                                                flagmoveclick = false;
                                                return false;
                                        }
                                });
                $('#mycarousel_<?=$PlayerID?>').mousemove(function(e){
                    if(flag_mousedown){
                        flagmoveclick = true;
                        if(e.pageX > parseInt(start_x)+10)
                        {
                                start_x = e.pageX;
                                $('#jcar_prev1_<?=$PlayerID?>').click();
                        }
                        else if(e.pageX < parseInt(start_x)-10)
                        {
                                start_x = e.pageX;
                                $('#jcar_next1_<?=$PlayerID?>').click();
                        }
                    }
                    return false;
                });
                $('#mycarousel_<?=$PlayerID?>').mouseup(function(e){

                    flag_mousedown = false;
                    $('#mycarousel_<?=$PlayerID?> a').addClass("a_hov_m");
                    return false;

                });
                $('#mycarousel_<?=$PlayerID?>').mouseleave(function(){
                    flag_mousedown = false;
                    $('#mycarousel_<?=$PlayerID?> a').addClass("a_hov_m");
                    return false;
                });

                var elem = document.getElementById ("link_<?=$PlayerID?>");
                if (elem.addEventListener)
                    elem.addEventListener ("DOMMouseScroll", MouseScroll_<?=$PlayerID?>, false);

                var k = <?=$num_vis_half?>;
                $('#jcar_prev1_<?=$PlayerID?>').click(function () {
                    if (!jQuery("#mycarousel_<?=$PlayerID?>").data("jcarousel").animating)
                    {
                        if ("<?=$wrap?>" == "circular")
                            if (k == 0)
                                k = <?=$count_el?>-1;
                            else
                                k = k - 1;
                        else
                            if (k > <?=$num_vis_half?>)
                                k = k - 1;
                        jQuery("#mycarousel_<?=$PlayerID?>").data("jcarousel").buttonPrev.click();
                    }
                    return false;
                });
                $("#jcar_next1_<?=$PlayerID?>").click(function () {
                    if (!jQuery("#mycarousel_<?=$PlayerID?>").data("jcarousel").animating)
                    {
                        if ("<?=$wrap?>" == "circular")
                            if (k == <?=$count_el?>-1)
                                k = 0;
                            else
                                k = k + 1;
                        else
                            if (k < <?=$count_el?>+<?=$num_vis_half?>-1)
                                k = k + 1;
                        jQuery("#mycarousel_<?=$PlayerID?>").data("jcarousel").buttonNext.click();
                    }
                    return false;
                });
                jQuery("#mycarousel_<?=$PlayerID?>").jcarousel({
                                        scroll     : <?=$listing?>,
                                        start      : 1,
                                        wrap      : "<?=$wrap;?>",
                                        containerWidth : <?=$arParams["PREVIEW_WIDTH"] - $arParams["ARROW_L"]-$arParams["ARROW_R"]?>,
                                        containerHeight : <?=$arResult["THUMBS_HEIGHT"]+2;?>,
                                        containerPadding : 0,
                                        clipWidth : <?=$arParams["PREVIEW_WIDTH"] - $arParams["ARROW_L"]-$arParams["ARROW_R"]?>,
                                        clipHeight : <?=$arResult["THUMBS_HEIGHT"]+3;?>,   //add any
                                        itemWidth : <?=$arResult["THUMBS_WIDTH"]+2;?>,
                                        itemHEight : <?=$arResult["THUMBS_HEIGHT"]+2;?>,
                                        interval : <?=$arParams["INTERVAL"];?>,
                                        scroll_buttons : false
                });
        $("#mycarousel_<?=$PlayerID?> ul li:first a").toggleClass('sel');
		
		a_atr = $(".alx_preview a:first").attr('style');
		$(".alx_preview a:first").attr('style', ('display: block; '+a_atr));
		
		<?if($arParams["TURN_ON_ZOOM"]):?>
			a_atr = $(".alx_preview a:first").attr('rel');
			if(a_atr == 'zoom' && !isTouch)
			{
				$(".alx_preview a:first").attr('class', 'zoom');
				$('a.zoom').easyZoom({parent: '.alx_zoom'});
			}
		<?endif;?>	
});
function MouseScroll_<?=$PlayerID?>(event)
{
    var rolled = 0;
    if (event.wheelDelta === undefined)
    {
        rolled = -1 * event.detail;
        event.preventDefault();
    }
    else
    {
        rolled = event.wheelDelta;
    }
    if(rolled > 0)
        $("#jcar_next1_<?=$PlayerID?>").click();
    else
        $("#jcar_prev1_<?=$PlayerID?>").click();
    return false;
};
</script>
<style type="text/css">
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs
{
        width: <?=$arParams["PREVIEW_WIDTH"]?>px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a
{
        width: <?=$arResult["THUMBS_WIDTH"]?>px;
        height: <?=$arResult["THUMBS_HEIGHT"]?>px;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a.alx_thumbs_item
{
        margin: 0px <?=$arParams["MARGIN_H"]?>px <?=$arParams["MARGIN_V"]?>px <?=$arParams["MARGIN_H"]?>px;
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
		position: relative;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_preview a
{
       /* width: <?=$arParams["PREVIEW_WIDTH"]-4?>px;
        height: <?=$arParams["PREVIEW_HEIGHT"]?>px;*/
		position: absolute;
		top: 50%;
		left: 50%;
}
.alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_zoom
{
	position: absolute;
	margin-left: <?=$arParams["PREVIEW_WIDTH"]+20?>px;
	margin-top: -<?=$arParams["PREVIEW_HEIGHT"]+5?>px;
}
#alx_photostring_<?=$PlayerID?> .block_show_cont_alx_photostring
{
        width:<?=$arParams["PREVIEW_WIDTH"]-$arParams["ARROW_L"]-$arParams["ARROW_R"]?>px;
        height:<?=$arResult["THUMBS_HEIGHT"]+4?>px;
        padding: <?=$arParams["ALLY"]?>px <?=$arParams["ALLX"]?>px;
        margin: 0 0 0 0;
        background:<?=$arParams["BG_COL_MINI"]?>;
        text-align:center;
}
#alx_photostring_<?=$PlayerID?> .nav_blocks_alx_photostring
{
        width:<?=$arParams["PREVIEW_WIDTH"]?>px;
        margin-top:9px;
        margin-bottom:9px;
}
#alx_photostring_<?=$PlayerID?> .block_show_cont_alx_photostring ul li:before
{
        content: "" !important;
}
#alx_photostring_<?=$PlayerID?> .nav_blocks_alx_photostring .jcarousel-prev1_alx_photostring
{
        cursor:pointer;
        cursor:hand;
        width:<?=$arParams["ARROW_L"]?>px;
        height:80px;
        float:left;
        margin-left:0px;
        background: transparent url(<?=$templateFolder?>/images/arrowL.png) no-repeat;
}
*html #alx_photostring_<?=$PlayerID?> .nav_blocks_alx_photostring .jcarousel-prev1_alx_photostring
{
        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$templateFolder?>/images/arrowL.png', sizingMethod='crop');
        background:none;
}
#alx_photostring_<?=$PlayerID?> .nav_blocks_alx_photostring .jcarousel-next1_alx_photostring
{
        cursor:pointer;
        cursor:hand;
        width:<?=$arParams["ARROW_R"]?>px;
        height:80px;
        float:right;
        background: transparent url(<?=$templateFolder?>/images/arrowR.png) no-repeat;
}
*html #alx_photostring_<?=$PlayerID?> .nav_blocks_alx_photostring .jcarousel-next1_alx_photostring
{
        overflow:hidden;
        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$templateFolder?>/images/arrowR.png', sizingMethod='crop');
        background:none;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-direction-rtl
{
        direction: rtl;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-container
{
        text-align:center;
        margin: 0px auto;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item a
{
        background-color:<?=$arParams["BG_COL_MINI"]?> !important;
        background-repeat:no-repeat !important;
        background-position:center center !important;
        border:1px solid <?=$arParams["BORD_COL_MINI"]?> !important;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item a.sel
{
        background-color:<?=$arParams["BG_COL_MINI"]?> !important;
        background-repeat:no-repeat !important;
        background-position:center center !important;
        border:1px solid <?=$arParams["CUR_BORD_COL_MINI"]?> !important;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item .jcarousel-item-pict_alx_photostring
{
        display:block;
        overflow:hidden;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item a.jcarousel-item-pict_alx_photostring:hover
{
        border: 1px solid <?=$arParams["CUR_BORD_COL_MINI"]?> !important;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item a.page_nav_selected
{
        border: 1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>!important;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring a:focus
{
        outline:none;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item-horizontal
{
        margin-left: 0;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-direction-rtl .jcarousel-item-horizontal
{
        margin-left: 10px;
        margin-right: 0;
}
#alx_photostring_<?=$PlayerID?> .jcarousel-skin-tango_alx_photostring .jcarousel-item-placeholder
{
        background: #fff;
        color: #000;
}
#alx_photostring_<?=$PlayerID?> .block_show_cont_alx_photostring .clear_block
{
        padding: 0px;
        margin: 0px;
        height:1px;
        clear:both;
        overflow:hidden;
}
#alx_photostring_<?=$PlayerID?> .no_pic_load
{
        position:absolute;
        z-index:20;
        display:block;
}
#alx_photostring_<?=$PlayerID?> #mycarousel_<?=$PlayerID?>
{
        background:url(<?=$templateFolder?>/images/spacer.gif) 0px 0px;
        z-index:100;
        margin:0px auto;
        text-align:left;
        position:relative;
}
#alx_photostring_<?=$PlayerID?> .sel_item_block_alx_photostring
{
        position:absolute;
        z-index:4;
        margin-top:-13px;
        left: 0px;
        top: 0px;
        text-align:center;
        padding-right:2px;
        padding-bottom:1px;
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
	text-align:center;
}
</style>