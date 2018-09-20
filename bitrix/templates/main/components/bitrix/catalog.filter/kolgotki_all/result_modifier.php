<?php
$arResult["COLORS"] = array();
// ���������� ������������ ���� ������ HighloadBlockTable � ��� ��� ��������� HLBT ��� ������� ������
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
// id highload-���������
const MY_HL_BLOCK_ID = 1;
//���������� ������ highloadblock
CModule::IncludeModule('highloadblock');
//������� ������� ��������� ���������� ������:
function GetEntityDataClass($HlBlockId) {
    if (empty($HlBlockId) || $HlBlockId < 1)
    {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}

const MY_HL_BLOCK_ID = 1;
CModule::IncludeModule('highloadblock');
$entity_data_class = GetEntityDataClass(MY_HL_BLOCK_ID);
$rsData = $entity_data_class::getList(array(
    'select' => array('*')
));
while($el = $rsData->fetch()){
    //p($el);
    $arResult["COLORS"][$el["UF_XML_ID"]] = $el["UF_NAME"];
}