<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/catalog/kolgotki-dlja-malchikov/#",
		"RULE" => "",
		"PATH" => "/catalog/man.php",
	),
	array(
		"CONDITION" => "#^/catalog/kolgotki-dlja-devochek/#",
		"RULE" => "",
		"PATH" => "/catalog/gerl.php",
	),
	array(
		"CONDITION" => "#^/contacts/roznichnie_tochki/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/contacts/roznichnie_tochki/index.php",
	),
	array(
		"CONDITION" => "#^/contacts/distributori/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/contacts/distributori/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/catalog/index.php",
	),
	array(
		"CONDITION" => "#^/statii/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/statii/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>