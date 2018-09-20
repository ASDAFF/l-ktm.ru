<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $ALX_IMAGEBOX = rand(); ?>
<? function show_pict($big_pict, $small_pict, $width, $height, $name, $zoom)
{ ?>
<a rel="<?= $zoom ?>" href="<?= $big_pict ?>" title="<?= $name ?>"
   style='width: <?= $width ?>px; height: <?= $height ?>px; margin-top: -<?= $height / 2 ?>px; margin-left: -<?= $width / 2 ?>px'>
    <img src='<?= $small_pict ?>' alt='<?= $name ?>'/>
    </a><?
}

$frame = $this->createFrame('alx_imagebox_div')->begin(); ?>
    <div class="alx_imagebox alx_imagebox_<?= $ALX_IMAGEBOX ?>" id="alx_imagebox_div">
        <div class="alx_preview">
            <? if ($arParams["SHOW_DETAIL_PICTURE"] == 1): ?>
                <? if ($arResult["DETAIL_PICTURE"]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["DETAIL_PICTURE"]["WIDTH"] > $arParams["PREVIEW_WIDTH"]): ?>
                    <? show_pict(
                        $arResult["DETAIL_PICTURE"]["SRC"],
                        $arResult["DETAIL_PICTURE"]["RESIZED"]["src"],
                        $arResult["DETAIL_PICTURE"]["RESIZED"]['width'],
                        $arResult["DETAIL_PICTURE"]["RESIZED"]['height'],
                        $arResult["NAME"],
                        "zoom"); ?>
                <? else: ?>
                    <? show_pict(
                        $arResult["DETAIL_PICTURE"]["SRC"],
                        $arResult["DETAIL_PICTURE"]["SRC"],
                        $arResult["DETAIL_PICTURE"]['WIDTH'],
                        $arResult["DETAIL_PICTURE"]['HEIGHT'],
                        $arResult["NAME"]); ?>
                <? endif; ?>
            <? endif; ?>
            <? foreach ($arResult["MORE_PHOTO"] as $key => $value): ?>
                <? if ($value['ID']) { ?>
                    <? if ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["MORE_PHOTO"][$key]["WIDTH"] > $arParams["PREVIEW_WIDTH"]): ?>
                        <? if ($key == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0): ?>
                            <? show_pict(
                                $arResult["MORE_PHOTO"][0]["SRC"],
                                $arResult["MORE_PHOTO"][$key]["RESIZED"]["src"],
                                $arResult["MORE_PHOTO"][$key]["RESIZED"]['width'],
                                $arResult["MORE_PHOTO"][$key]["RESIZED"]['height'],
                                $arResult["NAME"],
                                "zoom");
                            ?>
                        <? else: ?>
                            <? show_pict(
                                $arResult["MORE_PHOTO"][$key]["SRC"],
                                $arResult["MORE_PHOTO"][$key]["RESIZED"]["src"],
                                $arResult["MORE_PHOTO"][$key]["RESIZED"]['width'],
                                $arResult["MORE_PHOTO"][$key]["RESIZED"]['height'],
                                $arResult["NAME"],
                                "zoom");
                            ?>
                        <? endif; ?>
                    <? else: ?>
                        <? if ($key == 0 && $arParams["SHOW_DETAIL_PICTURE"] == 0): ?>
                            <? show_pict(
                                $arResult["MORE_PHOTO"][0]["SRC"],
                                $arResult["MORE_PHOTO"][0]["SRC"],
                                $arResult["MORE_PHOTO"][0]['WIDTH'],
                                $arResult["MORE_PHOTO"][0]['HEIGHT'],
                                $arResult["NAME"]
                            );
                            ?>
                        <? else: ?>
                            <? show_pict(
                                $arResult["MORE_PHOTO"][$key]["SRC"],
                                $arResult["MORE_PHOTO"][$key]["SRC"],
                                $arResult["MORE_PHOTO"][$key]['WIDTH'],
                                $arResult["MORE_PHOTO"][$key]['HEIGHT'],
                                $arResult["NAME"]
                            );
                            ?>
                        <? endif; ?>
                    <? endif; ?>
                <? } ?>
            <? endforeach; ?>
        </div>
        <div class='alx_zoom'>
        </div>
        <div class="alx_thumbs">
            <? if ($arParams["SHOW_DETAIL_PICTURE"] == 1 && count($arResult["MORE_PHOTO"]) >= 1): ?>
                <a href="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" class="alx_thumbs_item"><span
                            style="background-image:url(<?= $arResult["DETAIL_PICTURE"]["thumb_src"]["src"] ?>)"><img
                                src="<?= $templateFolder ?>/images/spacer.gif" alt="<?= $arResult["NAME"] ?>" /></span></a>
            <? endif; ?>
            <? if (count($arResult["MORE_PHOTO"]) > 1 || $arParams["SHOW_DETAIL_PICTURE"] == 1): ?>
                <? foreach ($arResult["MORE_PHOTO"] as $key => $value): ?>
                    <? if ($value['ID']) { ?>
                        <a href="<?= $arResult["MORE_PHOTO"][$key]["SRC"] ?>" class="alx_thumbs_item"><span
                                    style="background-image:url(<?= $arResult["MORE_PHOTO"][$key]["thumb_src"]["src"] ?>)"><img
                                        src="<?= $templateFolder ?>/images/spacer.gif" alt="<?= $arResult["NAME"] ?>" /></span></a>
                    <? } ?>
                <? endforeach; ?>
            <? endif; ?>
            <br/></div>
        <br/>
        <br/>
        <? $detail_title = array("over", "outside", "inside"); ?>
        <script>
            alx_lastimg = 0;
            isTouch = document.body.ontouchstart !== undefined;
            $(document).ready(function () {
                $(".alx_thumbs a").click(function () {
                    var idx = $(this).index();
                    if (idx == alx_lastimg) return false;
                    alx_lastimgObj = $(".alx_preview a").eq(alx_lastimg);
                    elm = $(".alx_preview a").eq(idx);
                    alx_lastimgObjTmb = $(".alx_thumbs a").eq(alx_lastimg);
                    $(alx_lastimgObjTmb).css("border", "1px solid <?=$arParams["BORD_COL_MINI"]?>");
                    $(this).css("border", "1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>");
                    $(alx_lastimgObj).fadeOut("10000");
                    $(elm).fadeIn("10000");
                    alx_lastimg = idx;
                    <?if($arParams["TURN_ON_ZOOM"]):?>
                    $(".alx_preview a").removeAttr('class');
                    a_atr = $(elm).attr('rel');
                    if (a_atr == 'zoom' && !isTouch) {
                        $(elm).attr('class', 'zoom');
                        $('a.zoom').easyZoom({parent: '.alx_zoom'});
                    }
                    <?endif;?>
                    return false;
                });
                $(".alx_preview a").fancybox({
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    <?if ($arParams["SHOW_DESC"] == 1):?>
                    'titlePosition': '<?=$detail_title[$arParams["DETAIL_TITLE"]]?>',
                    'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                        return '<span id="fancybox-title-over">' + (title.length ? '' + title : '') + '</span>';
                    },
                    'titleShow': 'none'
                    <?endif;?>
                });
                $(".alx_thumbs a:first").css("border", "1px solid <?=$arParams["CUR_BORD_COL_MINI"]?>");
                a_atr = $(".alx_preview a:first").attr('style');
                $(".alx_preview a:first").attr('style', ('display: block; ' + a_atr));
                <?if($arParams["TURN_ON_ZOOM"]):?>
                a_atr = $(".alx_preview a:first").attr('rel');
                if (a_atr == 'zoom' && !isTouch) {
                    $(".alx_preview a:first").attr('class', 'zoom');
                    $('a.zoom').easyZoom({parent: '.alx_zoom'});
                }
                <?endif;?>
                <?if ($arParams["SHOW_DESC"] != 1):?>
                $('[title]').removeAttr('title');
                <?endif;?>
            });
        </script>
        <style type="text/css">
            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs {
                width: <?=$arParams["PREVIEW_WIDTH"]?>px;
                overflow: hidden;
            }

            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a {
                width: <?=$arResult["THUMBS_WIDTH"]?>px;
                height: <?=$arResult["THUMBS_HEIGHT"]?>px;
                border: solid 1px<?=$arParams["BORD_COL_MINI"]?>;
            }

            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a.alx_thumbs_item {
                margin: 0px <?=$arParams["MARGIN_H"]?>px <?=$arParams["MARGIN_V"]?>px <?=$arParams["MARGIN_H"]?>px;
                float: left;
            }

            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_thumbs a span {
                width: <?=$arResult["THUMBS_WIDTH"]-2?>px;
                height: <?=$arResult["THUMBS_HEIGHT"]-2?>px;
            }

            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_preview {
                height: <?=$arParams["PREVIEW_HEIGHT"]?>px;
                width: <?=$arParams["PREVIEW_WIDTH"]-4?>px;
                border: 1px solid<?=$arParams["BORD_COL_MAIN"]?>;
                background-color: <?=$arParams["BG_PIC"]?>;
                position: relative;
            }

            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_preview a {
                position: absolute;
                top: 50%;
                left: 50%;
            }

            .alx_thumbs a:hover {
                border: 1px solid <?=$arParams["CUR_BORD_COL_MINI"]?> !important;
            }

            .alx_imagebox_<?=$ALX_IMAGEBOX?> .alx_zoom {
                position: absolute;
                margin-left: <?=$arParams["PREVIEW_WIDTH"]+20?>px;
                margin-top: -<?=$arParams["PREVIEW_HEIGHT"]+15?>px;
            }

            #easy_zoom {
                width: <?=$arParams["ZOOM_WIDTH"]?>px;
                height: <?=$arParams["ZOOM_HEIGHT"]?>px;
                border: <?=$arParams["ZOOM_BORDER_WIDTH"]?>px solid #eee;
                background: #fff;
                color: #333;
                position: absolute;
                overflow: hidden;
                -moz-box-shadow: 0 0 <?=$arParams["ZOOM_SHADOW"]?>px #777;
                -webkit-box-shadow: 0 0 <?=$arParams["ZOOM_SHADOW"]?>px #777;
                box-shadow: 0 0 <?=$arParams["ZOOM_SHADOW"]?>px #777;
                line-height: <?=($arParams["ZOOM_HEIGHT"])?>px;
                text-align: center;

            }
        </style>
    </div>
<? $frame->beginStub(); ?>
<?= GetMessage("ALX_LOADING_TEXT") ?>
<? $frame->end(); ?>