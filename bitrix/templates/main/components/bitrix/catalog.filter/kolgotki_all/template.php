<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? /*prn_($arResult);
<form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get">
    <? foreach ($arResult["ITEMS"] as $arItem):
        if (array_key_exists("HIDDEN", $arItem)):
            echo $arItem["INPUT"];
        endif;
    endforeach; ?>
    <table class="data-table" cellspacing="0" cellpadding="2">
        <thead>
        <tr>
            <td colspan="2" align="center"><?= GetMessage("IBLOCK_FILTER_TITLE") ?></td>
        </tr>
        </thead>
        <tbody>
        <? foreach ($arResult["ITEMS"] as $code => $arItem): ?>
            <? if (!array_key_exists("HIDDEN", $arItem)): ?>
                <tr><? //p($arItem);?>
                    <td valign="top"><?= $arItem["NAME"] ?>:</td>
                    <td valign="top"><?= $arItem["INPUT"] ?></td>
                </tr>
            <? endif ?>
        <? endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">
                <input type="submit" name="set_filter" value="<?= GetMessage("IBLOCK_SET_FILTER") ?>"/><input
                        type="hidden" name="set_filter" value="Y"/>&nbsp;&nbsp;<input type="submit" name="del_filter"
                                                                                      value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>"/>
            </td>
        </tr>
        </tfoot>
    </table>
</form>*/ ?>
<? //p($arResult);?>
<form id="filter_form_id" name="<? echo $arResult["FILTER_NAME"] . "_form" ?>"
      action="<? echo $arResult["FORM_ACTION"] ?>" method="get">
    <? foreach ($arResult["ITEMS"] as $arItem):
        if (array_key_exists("HIDDEN", $arItem)):
            echo $arItem["INPUT"];
        endif;
    endforeach; ?>

    <? /* foreach ($arResult["ITEMS"] as $code => $arItem): ?>
        <? if (!array_key_exists("HIDDEN", $arItem)): ?>
            <input name="<?= $arItem["INPUT_NAME"] ?>" type="hidden" value="<?= $arItem["INPUT_VALUE"] ?>"
                   id="<?= $code ?>_input">
            <? //p($arItem); ?>
        <? endif ?>
    <? endforeach; */ ?>
    <div class="kolgotki__filter">
        <div class="kolgotki__filter_item">
            <div class="kolgotki__filter_item-name">По цветам</div>
            <div class="kolgotki__filter_item-values">
                <? foreach ($arResult["COLORS"] as $code_color => $name_color) {
                    ?>
                    <input class="checkbox_filter" name="<?= $arResult["ITEMS"]['PROPERTY_1']["INPUT_NAME"] ?>"
                           type="checkbox"
                           <? if ($arResult["ITEMS"]['PROPERTY_1']["INPUT_VALUE"] == $code_color){ ?>checked<? } ?>
                           value="<?= $code_color ?>"
                           id="<?= $code_color ?>_input">
                    <label for="<?= $code_color ?>_input"><?= $name_color ?></label> <?
                } ?>
            </div>
        </div>
        <div class="kolgotki__filter_item">
            <div class="kolgotki__filter_item-name">По видам</div>
            <div class="kolgotki__filter_item-values">
                <?php
                //убираем верхний раздел и разделы других товаров(не колготок)
                unset($arResult["arrSection"][0]);
                unset($arResult["arrSection"][5]);
                unset($arResult["arrSection"][7]);
                foreach ($arResult["arrSection"] as $code_section => $name_section) {
                    ?><a
                    class="filter_a<? if (!empty($arResult["ITEMS"]['SECTION_ID']['INPUT_VALUE']) && $arResult["ITEMS"]['SECTION_ID']['INPUT_VALUE'] == $code_section) { ?> a_checked<? } ?>"
                    href="#" data-id="<?= $code_section ?>"
                    data-code="SECTION_ID_input" rel="canonical"><?= substr($name_section, 2); ?></a> <?
                } ?>
            </div>
        </div>
        <div class="kolgotki__filter_item">
            <div class="kolgotki__filter_item-name">Для кого</div>
            <div class="kolgotki__filter_item-values">
                <a class="filter_a<? if (!empty($arResult["ITEMS"]['PROPERTY_3']['INPUT_VALUE']) && $arResult["ITEMS"]['PROPERTY_3']['INPUT_VALUE'] == "1") { ?> a_checked<? } ?>"
                   href="#" data-id="1" data-code="PROPERTY_3_input" rel="canonical">Для мальчиков</a>
            </div>
            <div class="kolgotki__filter_item-values">
                <a class="filter_a<? if (!empty($arResult["ITEMS"]['PROPERTY_4']['INPUT_VALUE']) && $arResult["ITEMS"]['PROPERTY_4']['INPUT_VALUE'] == "2") { ?> a_checked<? } ?>"
                   href="#" data-id="2" data-code="PROPERTY_4_input" rel="canonical">Для девочек</a>
            </div>
        </div>
    </div>
    <input type="hidden" name="set_filter" value="Y"/>
    <input class="input_submit-dell_filter" type="submit" name="del_filter"
           value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>"/>
</form>

<script>
    $('.checkbox_filter').change(function () {
        if ($(this).prop('checked')) {
            alert(1);
            $('#filter_form_id').trigger('submit');
        }
    });
    $(".filter_a").click(function () {
        var code = $(this).data('code');
        var id = $(this).data('id');
        $("#" + code).val(id);
        $('#filter_form_id').trigger('submit');
        return false;
    })
</script>
