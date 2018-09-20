<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Такой страницы не существует");
?>

Ошибка 404: Такой страницы не существует.
<br>
Извините, страница с указанным адресом (<?=$APPLICATION->GetCurDir()?>) отсутствует.
<br>
Вы можете перейти на любую другую страницу сайта. Вы можете попробовать начать с <a href="/">Главной</a> или воспользоваться <a href="/sitemap/">Картой сайта</a>.

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>