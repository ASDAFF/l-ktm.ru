<?php
AddEventHandler('main', 'OnBeforeEventSend', array("FbackForm", "BeforeSend"));
class FbackForm
{
    function BeforeSend($arFields, $arTemplate)
    {
        if ($arTemplate["ID"]==10) //Если нужный шаблон
        {
            //подключаем модуль ИБ
            if(CModule::IncludeModule("iblock"))
            {
                $arElFields=array(
                    "IBLOCK_ID" => $arFields["FB_IBLOCK_ID"], //Нужный ИБ
                    "IBLOCK_SECTION_ID" => $arFields["FB_IBLOCK_SECTION_ID"], //Нужный раздел.
                    "NAME" => htmlspecialcharsbx($arFields["AUTHOR"]), //Название элемента
                    "PROPERTY_VALUES" => array(
                        "CITY" => htmlspecialcharsbx($arFields["CITY"]),
                        "NAME" => htmlspecialcharsbx($arFields["AUTHOR"]),
                        "TELEPHONE" => htmlspecialcharsbx($arFields["PHONE"]),
                        "EMAIL" => htmlspecialcharsbx($arFields["AUTHOR_EMAIL"]),
                        "QUESTION" => htmlspecialcharsbx($arFields["QUESTION"]),
                    ),
                );
                $oElement = new CIBlockElement();
                $idElement = $oElement->Add($arElFields, false, false, false);
            }
        }
        return false;
    }
}