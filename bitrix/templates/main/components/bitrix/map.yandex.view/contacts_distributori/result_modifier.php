<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSelect = array(
	"ID",
	"NAME",
	"PROPERTY_MAP"
);
$arFilter = array(
	"IBLOCK_ID"=>6,
	"ACTIVE"=>"Y"
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($ob = $res->Fetch()){
	if($ob["PROPERTY_MAP_VALUE"]) {
		$map_coordinates = explode(',', $ob["PROPERTY_MAP_VALUE"]);
		$PLACEMARKS["LON"] = $map_coordinates[1];
		$PLACEMARKS["LAT"] = $map_coordinates[0];
		$PLACEMARKS["TEXT"] = $ob["NAME"];
		$arResult["POSITION"]["PLACEMARKS"][] = $PLACEMARKS;
	}
}
?>