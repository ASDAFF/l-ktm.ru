<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Все Колготки");
$APPLICATION->SetDirProperty("robots", "noindex, nofollow");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include_areas/kolgotki_all.php",
		"EDIT_TEMPLATE" => ""
	)
);?><?/*$APPLICATION->IncludeComponent("bitrix:catalog.filter", "kolgotki_all", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "SECTION_ID",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "FOR_GIRL",
		1 => "FOR_BOY",
		2 => "COLOR",
		3 => "",
	),
	"LIST_HEIGHT" => "5",
    //"AJAX_MODE" => "Y",
	"TEXT_WIDTH" => "20",
	"NUMBER_WIDTH" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
	)
	),
	false
);*/?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "kolgotki_all", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"FILTER_NAME" => "arrFilter",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"INSTANT_RELOAD" => "Y",
	"XML_EXPORT" => "N",
	"SECTION_TITLE" => "-",
	"SECTION_DESCRIPTION" => "-",
	"TEMPLATE_THEME" => "yellow"
	),
	false
);?>
<?
/*start-для добавления ссылки canonical*/
//прописываем его только для случаев, когда у нас установлен фильтр.
if(!empty($arrFilter)){
$APPLICATION->AddHeadString('<link href="https://l-ktm.ru/catalog/kolgotki/" rel="canonical" />');
}
/*end-для добавления ссылки canonical*/
//фильтруем только колготки. Раздел носочков и трикотажа не берём.
//добавляем в фильтр только после прописания canonical
$arrFilterDop = array("ACTIVE" => "Y", "!SECTION_ID" => array(5, 7));
$arrFilter = array_merge($arrFilter, $arrFilterDop);

?> 
<div> <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "catalog_list_color_filter", Array(
	"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
	"IBLOCK_ID" => "1",	// Инфоблок
	"SECTION_ID" => "",	// ID раздела
	"SECTION_CODE" => "",	// Код раздела
	"SECTION_USER_FIELDS" => array(	// Свойства раздела
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
	"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
	"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
	"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
	"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
	"INCLUDE_SUBSECTIONS" => "A",	// Показывать элементы подразделов раздела
	"SHOW_ALL_WO_SECTION" => "Y",	// Показывать все элементы, если не указан раздел
	"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
	"LINE_ELEMENT_COUNT" => "6",	// Количество элементов выводимых в одной строке таблицы
	"PROPERTY_CODE" => array(	// Свойства
		0 => "COLOR",
		1 => "",
	),
	"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
	"TEMPLATE_THEME" => "blue",	// Цветовая тема
	"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
	"LABEL_PROP" => "-",	// Свойство меток товара
	"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
	"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
	"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
	"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
	"SECTION_URL" => "/catalog/#SECTION_CODE#/",	// URL, ведущий на страницу с содержимым раздела
	"DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",	// URL, ведущий на страницу с содержимым элемента раздела
	"SECTION_ID_VARIABLE" => "SECTION_CODE",	// Название переменной, в которой передается код группы
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "86400",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
	"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
	"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"PRICE_CODE" => "",	// Тип цены
	"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
	"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
	"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
	"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
	"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
	"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
	"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
	"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
	"PRODUCT_PROPERTIES" => "",	// Характеристики товара
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	"PAGER_TITLE" => "Товары",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
	),
	false
);?></div>
 <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>