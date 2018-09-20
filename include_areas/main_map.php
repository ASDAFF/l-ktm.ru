<?
	\Bitrix\Main\Loader::includeModule('iblock');
	
	$cache = new \CPHPCache();
	if($cache->StartDataCache(3600, false, '/main_map/'))
	{
		$res = \CIBlockElement::GetList(
			array(), 
			array(
				"IBLOCK_ID" => 4,
				"ID" => 159,
				"ACTIVE" => "Y"
			), 
			false, 
			false, 
			array(
				"ID",
				"IBLOCK_ID",
				"NAME",
				"PROPERTY_*"
			)
		);
		
		if($ob = $res->GetNextElement())
		{
			$arRes = $ob->GetFields();  
			$arRes["PROP"] = $ob->GetProperties();
			$cache->EndDataCache(array('arRes' => $arRes));
		}
		else
		{
			$cache->AbortDataCache();
		}
	}
	else
	{
		$arRes = $cache->GetVars();
		extract($arRes);
	}

	$coord_x = 0;
	$coord_y = 0;
	$MAP_DATA = array();

	foreach($arRes["PROP"]["MAP"]["VALUE"] as $value){
		$map_coord = explode(',', $value);
		$coord_x += $map_coord[0];
		$coord_y += $map_coord[1];
	}
	$coord_x = $coord_x/count($arRes["PROP"]["MAP"]["VALUE"]);
	$coord_y = $coord_y/count($arRes["PROP"]["MAP"]["VALUE"]);

	$MAP_DATA = array(
		"yandex_lat" => $coord_x,
		"yandex_lon" => $coord_y,
		"yandex_scale" => "8",
	);

	foreach($arRes["PROP"]["MAP"]["VALUE"] as $key=>$value){
		$map_coord = explode(',', $value);
		$MAP_DATA["PLACEMARKS"][] = array(
			"LON" => $map_coord[1],
			"LAT" => $map_coord[0],
			"TEXT" => $arRes["PROP"]["MAP"]["~DESCRIPTION"][$key],
		);
	}

	$MAP_DATA = serialize($MAP_DATA);
	?> 	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"contacts_roznichie_tochki",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:55.74244268984504;s:10:\"yandex_lon\";d:37.74941935287813;s:12:\"yandex_scale\";i:11;}",
		"MAP_WIDTH" => "850",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array("ZOOM"),
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM"),
		"MAP_ID" => ""
	)
);?>