<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
// p($arResult['NAV_RESULT']);
if(!$arResult['NAV_RESULT']->PAGEN || (($arResult['NAV_RESULT']->PAGEN == 1) && ($arResult['NAV_RESULT']->NavShowAll != 1))) {
    ?>
    <?=$arResult["DESCRIPTION"]?>
    <div class="clearing"></div>
<?}?>
<?$arr_SOCKS = $arr_OTHER = array();
foreach($arResult["ITEMS"] as $arElement){
    if(isset($arElement['DISPLAY_PROPERTIES']['SOCKS']['VALUE_XML_ID']) && $arElement['DISPLAY_PROPERTIES']['SOCKS']['VALUE_XML_ID'] == 'Y') {
        $arr_SOCKS[$arElement['ID']] = $arElement;
    } else {
        $arr_OTHER[$arElement['ID']] = $arElement;
    }
}?>
<?if(count($arr_SOCKS)) {?>
    <div id="CATALOG_div">
        <?foreach($arr_SOCKS as $arElement){?>
            <div style="width: 120px" class="CATALOG_ITEM">
                <p class="CATALOG_ITEM_IMG">
                <div class="detail_frame red">
                    <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" alt="<?=$arElement["NAME"]?>"></a>
                </div>
                </p>
                <p class="CATALOG_ITEM_NAME">
                    <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860"><?=$arElement["NAME"]?></a>
                </p>
            </div>
        <?}?>
        <div class="clearing"></div>
        <?/*<h2>������ ��������� ��� �������</h2>
        <p>�� ���������� ������� ������ ����� �� ���� �� 99 ������. ����������� ������ ������� ������� - �� 20 000 ������.
            �������� ������� ������ ��� ������� � ������� ����� ��� ���������� �� ������������� � ������ ����������� �� �������� 8 (495) 781-84-83.
            ������� ����� ���������� �������������� � �������� ����������� ������� �� ������� ������� ������� ������, ����� � ������ ��������� ������ ���������.</p>*/?>
        <?foreach($arr_OTHER as $arElement){?>
            <div style="width: 120px" class="CATALOG_ITEM">
                <p class="CATALOG_ITEM_IMG">
                <div class="detail_frame red">
                    <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" alt="<?=$arElement["NAME"]?>"></a>
                </div>
                </p>
                <p class="CATALOG_ITEM_NAME">
                    <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860"><?=$arElement["NAME"]?></a>
                </p>
            </div>
        <?}?>
        <div class="clearing"></div>
    </div>
<?} else {?>
    <div id="CATALOG_div">
        <?foreach($arResult["ITEMS"] as $arElement){?>
            <div style="width: 120px" class="CATALOG_ITEM">
                <p class="CATALOG_ITEM_IMG">
                <div class="detail_frame red">
                    <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="detail_img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["src"]?>) no-repeat center center;" alt="<?=$arElement["NAME"]?>"></a>
                </div>
                </p>
                <p class="CATALOG_ITEM_NAME">
                    <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="CATALOG_ITEM" style="color: #7e2860"><?=$arElement["NAME"]?></a>
                </p>
            </div>
        <?}?>
        <div class="clearing"></div>
    </div>
<?}?>
    <div class="panel-btn">
        <div class="misc-link"><a href="/prices/">��� ������?</a></div>
        <div class="misc-link"><a href="/usloviya_raboty_nashei_kompanii/">��� �������� �����?</a></div>
        <div class="misc-link"><a href="/news/detskiye-kolgotki2017.pdf" target="_blank">������� �������</a></div>
    </div>
<?=$arResult["NAV_STRING"]?>