<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="NEW_div">
        <? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) { ?>
            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>"
                 style="margin-right: 20px;    float: left;">
        <? } elseif (!empty($arItem["DETAIL_PICTURE"]["SRC"])) { ?>
            <img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>"
                 style="margin-right: 20px;    float: left;">
        <? } else {
        } ?>
        <div class="NEWS_day_month"> <?= $arItem["DISPLAY_DATE_VALUE"][0] ?> </div>
        <div class="NEWS_year"> <?= $arItem["DISPLAY_DATE_VALUE"][1] ?> </div>
        <div class="NEWS_header">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                <span class="bold"><?= $arItem["NAME"] ?></span>
            </a>
        </div>
        <div class="NEWS_body">
            <p><?= $arItem["PREVIEW_TEXT"]; ?></p>

        </div>
    </div>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>