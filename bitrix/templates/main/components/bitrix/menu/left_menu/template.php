<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (empty($arResult)) return; ?>

<div id="left">
    <ul>
        <?
        $previousLevel = 0;
        foreach ($arResult

        as $key => $arItem){
        if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) {
            echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
        }
        if ($arItem["IS_PARENT"]){
        if ($arItem["DEPTH_LEVEL"] == 1){
            echo '<li class="pseudo_h1"><a href="' . $arItem["LINK"] . '">' . $arItem["TEXT"] . '</a>';
            echo '<ul class="first_level l_' . $key . '">';
        }else{
        ?>

        <li><a href="<?= $arItem["LINK"] ?>" class="parent<? if ($arItem["SELECTED"]) {
                echo ' item-selected active';
            } ?>"><?= $arItem["TEXT"] ?></a>
            <ul>
                <? } ?>
                <? } else {
                    ?>
                    <? if ($arItem["PERMISSION"] > "D"): ?>
                        <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                            <? if ($arItem["PARAMS"]["NO_LINK"] == "Y"): ?>
                                <li class="pseudo_h1"><?= $arItem["TEXT"] ?></li>
                            <? else: ?>
                                <li class="pseudo_h1"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? endif; ?>
                        <? else: ?>
                            <? if ($arItem["PARAMS"]["NO_LINK"] == "Y"): ?>
                                <li class="sub_item no_link"><?= $arItem["TEXT"] ?></li>
                            <? else: ?>
                                <? if ($arItem["PARAMS"]["DOP_PARAM"] == "BIG_LINK"): ?>
                                    <li class="sub_item no_link"><a href="<?= $arItem["LINK"] ?>"
                                                            class="<? if ($arItem["SELECTED"]) {
                                                                echo 'active';
                                                            } ?>"><?= $arItem["TEXT"] ?></a></li>
                                <? else: ?>
                                    <li class="sub_item"><a href="<?= $arItem["LINK"] ?>"
                                                                    class="<? if ($arItem["SELECTED"]) {
                                                                        echo 'active';
                                                                    } ?>"><?= $arItem["TEXT"] ?></a></li>
                                <? endif; ?>
                            <? endif; ?>
                        <? endif ?>
                    <? else: ?>
                        <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                            <li><a href=""
                                   title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
                        <? else: ?>
                            <li><a href="" class="denied"
                                   title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
                        <? endif ?>
                    <? endif ?>
                <? } ?>
                <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
                <? } ?>
                <? if ($previousLevel > 1)://close last item tags?>
                    <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                <? endif ?>
            </ul>
</div>