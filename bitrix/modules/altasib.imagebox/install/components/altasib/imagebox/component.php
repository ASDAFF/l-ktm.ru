<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init(array("jquery"));
if(!CModule::IncludeModule("iblock"))die();
$arParams["THUMBS_COUNT"] = intval($arParams["THUMBS_COUNT"]);
if ($arParams["THUMBS_COUNT"] == 0) $arParams["THUMBS_COUNT"] = 5;
$arParams["ALLX"] = intval($arParams["ALLX"]);
$arParams["ALLY"] = intval($arParams["ALLY"]);
$arParams["INTERVAL"]=intval($arParams["INTERVAL"]);
$arParams["PREVIEW_HEIGHT"] = intval($arParams["PREVIEW_HEIGHT"]);
$arParams["MARGIN_H"] = intval($arParams["MARGIN_H"]);
$arParams["MARGIN_V"] = intval($arParams["MARGIN_V"]);
$arParams["PREVIEW_WIDTH"] = intval($arParams["PREVIEW_WIDTH"])+4;
$arParams["TURN_ON_ZOOM"] = $arParams["TURN_ON_ZOOM"] == 'Y';
$arParams["ZOOM_HEIGHT"] = intval($arParams["ZOOM_HEIGHT"]);
$arParams["ZOOM_WIDTH"] = intval($arParams["ZOOM_WIDTH"]);
$arParams["ZOOM_BORDER_WIDTH"] = intval($arParams["ZOOM_BORDER_WIDTH"]);
$arParams["ZOOM_SHADOW"] = intval($arParams["ZOOM_SHADOW"]);

        $arResult["THUMBS_WIDTH"] = intval(($arParams["PREVIEW_WIDTH"]-(2*$arParams["THUMBS_COUNT"]+$arParams["MARGIN_H"]*2*$arParams["THUMBS_COUNT"])) / $arParams["THUMBS_COUNT"]);
if ($this->__templateName == ".default")
        $arResult["THUMBS_WIDTH"] = intval(($arParams["PREVIEW_WIDTH"]-(2*$arParams["THUMBS_COUNT"]+$arParams["MARGIN_H"]*2*$arParams["THUMBS_COUNT"])) / $arParams["THUMBS_COUNT"]);
else if ($this->__templateName == ".photostring")
        $arResult["THUMBS_WIDTH"] = intval(($arParams["PREVIEW_WIDTH"]-($arParams["INTERVAL"]*($arParams["THUMBS_COUNT_PS"]-1))-($arParams["ARROW_L"]+$arParams["ARROW_R"]+4+$arParams["THUMBS_COUNT_PS"])) / $arParams["THUMBS_COUNT_PS"]);

if ($this->__templateName == "")$this->__templateName = ".default";
		{
			echo '<script src="', $this->__path, '/plugins/fancybox/jquery.fancybox-1.3.4.pack.js"></script>';
			echo '<link rel="stylesheet" type="text/css" href="', $this->__path, '/templates/.default/style_.css" />';
			echo '<link rel="stylesheet" type="text/css" href="', $this->__path, '/plugins/fancybox/jquery.fancybox-1.3.4.css" media="screen" />';
			echo '<script src="', $this->__path, '/plugins/jquery.jcarousel.js"></script>';
			echo '<script src="', $this->__path, '/plugins/easyzoom/easyzoom.js"></script>';
		}
		
if($this -> __templateName == ".photostring")
        {
			echo '<link rel="stylesheet" type="text/css" href="', $this->__path, '/plugins/fancybox/jquery.fancybox-1.3.4.css" media="screen" />';
			echo '<link rel="stylesheet" type="text/css" href="', $this->__path, '/templates/.photostring/style_.css" />';
			echo '<script src="', $this->__path, '/plugins/jquery.jcarousel.js"></script>';
			echo '<script src="', $this->__path, '/plugins/easyzoom/easyzoom.js"></script>';
		}

$arFilter = Array("ID"=>$arParams["ELEMENT_ID"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, $arSelect);
while($ob = $res->GetNextElement())
        {
        $arFields = $ob->GetFields();
        $arProps[] = $ob->GetProperties();
        $arElements[] = $arFields;
        $arResult["PROPERTIES"] = $ob->GetProperties();

				$arOffers = CIBlockPriceTools::GetOffersArray(
					array(
						'IBLOCK_ID' => $arFields["IBLOCK_ID"],
					)
					,array($arParams["ELEMENT_ID"])
					,array(
						'sort'	=>	'asc',
						'id'	=>	'asc',
					)
					,$arParams["OFFERS_FIELD_CODE"]
					,array('MORE_PHOTO','DOP_VIDEO')
					,$arParams["OFFERS_LIMIT"]
					,$arResult["CAT_PRICES"]
					,$arParams['PRICE_VAT_INCLUDE']
					,$arConvertParams
				);
				foreach($arOffers as $arOffer)
				{
					$arResult["OFFERS"][] = $arOffer;
				}

        }
        foreach ($arElements as $key => $value){
        $arResult["DETAIL_PICTURE"] =  CFile::GetFileArray((int)$arElements[$key]["DETAIL_PICTURE"]);
        $arResult["NAME"] = $arElements[$key]["NAME"];
}
	$arNewOffers = array();
	foreach ($arResult['OFFERS'] as $keyOffer => $arOffer)
	{
		$arOffer['MORE_PHOTO'] = array();
		$arOffer['MORE_PHOTO_COUNT'] = 0;
		if($arOffer["DETAIL_PICTURE"] > 0)
		{
			$offerSlider1 = array();
			$rsFile = CFile::GetByID($arOffer["DETAIL_PICTURE"]);
			$offerSlider1 = $rsFile->Fetch();
			$offerSlider1["SRC"] = CFile::GetPath($arOffer['DETAIL_PICTURE']);
			$offerSlider1["RESIZED"] = CFile::ResizeImageGet($arOffer['DETAIL_PICTURE'], array('width'=>($arParams["PREVIEW_WIDTH"]-4), 'height'=>($arParams["PREVIEW_HEIGHT"]-4)), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$offerSlider1["thumb_src"] = CFile::ResizeImageGet($arOffer['DETAIL_PICTURE'], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_WIDTH"]), BX_RESIZE_IMAGE_EXACT, true);
		}
		$offerSlider = CIBlockPriceTools::getSliderForItem($arOffer, $arParams['NAME_PHOTO'], 'Y' == $arParams['ADD_DETAIL_TO_SLIDER']);
		foreach($offerSlider as $ind=>$ph)
		{
			$offerSlider[$ind]["RESIZED"] = CFile::ResizeImageGet($ph['ID'], array('width'=>($arParams["PREVIEW_WIDTH"]-4), 'height'=>($arParams["PREVIEW_HEIGHT"]-4)), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$offerSlider[$ind]["thumb_src"] = CFile::ResizeImageGet($ph['ID'], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_WIDTH"]), BX_RESIZE_IMAGE_EXACT, true);
		}
		if($arOffer["DETAIL_PICTURE"] > 0)
		{
			array_unshift($offerSlider, $offerSlider1);
		}
		
		if(is_array($arOffer['DISPLAY_PROPERTIES']['DOP_VIDEO']))
		{
			$video_code = $arOffer['DISPLAY_PROPERTIES']['DOP_VIDEO']['VALUE']['TEXT'];
			if(preg_match("/(?:(?:watch\?.*?v=)|(?:youtu.be\/)|(?:\/embed\/))(.*?)(?:(?:&)|(?:\?)|(?:$))/is", $video_code, $arMatch)){
				$URL    = "http://www.youtube.com/embed/".$arMatch[1]."?rel=0";
				$imgURL = "http://img.youtube.com/vi/".$arMatch[1]."/default.jpg";
				$xml = file_get_contents('https://gdata.youtube.com/feeds/api/videos/'.$arMatch[1]);
				if(strlen($xml) != 0){
					$entry = new SimpleXMLElement($xml);
					$durationEl = reset($entry->xpath('media:group/yt:duration[@seconds]'));
					$seconds = (int)$durationEl->attributes()->seconds;
					$seconds = floor($seconds/60).':'.sprintf("%02s", ($seconds - 60*(floor($seconds/60))));
					$bNeedVideo = true;
				}
			}
			$offerSliderVideo = array();
			$offerSliderVideo['RESIZED']['src'] = $URL;
			$offerSliderVideo['thumb_src']['src'] = $imgURL;
			$offerSliderVideo['IS_VIDEO'] = 1;
		}
		if(!empty($offerSliderVideo))
		{
			array_push($offerSlider, $offerSliderVideo);
		}
		
		$arOffer['MORE_PHOTO'] = $offerSlider;
		$arOffer['MORE_PHOTO_COUNT'] = count($offerSlider);
		$arNewOffers[$keyOffer] = $arOffer;
	}
	$arResult['OFFERS'] = $arNewOffers;

$p = $arParams["NAME_PHOTO"];
$arResult["MORE_PHOTO"] = array();
		$arResult["MORE_PHOTO"][] = $arResult["DETAIL_PICTURE"];
		if(isset($arResult["PROPERTIES"][$p]["VALUE"]))
		{
			if(is_array($arResult["PROPERTIES"][$p]["VALUE"]))
			{
				foreach($arResult["PROPERTIES"][$p]["VALUE"] as $FILE)
				{
					$FILE = CFile::GetFileArray($FILE);
					if(is_array($FILE))
						$arResult["MORE_PHOTO"][]=$FILE;
				}
		}
		else {
			$FILE = CFile::GetFileArray($arResult["PROPERTIES"][$p]["VALUE"]);
			if(is_array($FILE))
				$arResult["MORE_PHOTO"][]=$FILE;
			}
		}
		/*if(is_array($arResult['DISPLAY_PROPERTIES']['DOP_VIDEO']))
		{
			$video_code = $arResult['DISPLAY_PROPERTIES']['DOP_VIDEO']['VALUE']['TEXT'];
			if(preg_match("/(?:(?:watch\?.*?v=)|(?:youtu.be\/)|(?:\/embed\/))(.*?)(?:(?:&)|(?:\?)|(?:$))/is", $video_code, $arMatch)){
				$URL    = "http://www.youtube.com/embed/".$arMatch[1]."?rel=0";
				$imgURL = "http://img.youtube.com/vi/".$arMatch[1]."/default.jpg";
				$xml = file_get_contents('https://gdata.youtube.com/feeds/api/videos/'.$arMatch[1]);
				if(strlen($xml) != 0){
					$entry = new SimpleXMLElement($xml);
					$durationEl = reset($entry->xpath('media:group/yt:duration[@seconds]'));
					$seconds = (int)$durationEl->attributes()->seconds;
					$seconds = floor($seconds/60).':'.sprintf("%02s", ($seconds - 60*(floor($seconds/60))));
					$bNeedVideo = true;
				}
			}
			$arResSliderVideo = array();
			$arResSliderVideo['RESIZED']['src'] = $URL;
			$arResSliderVideo['thumb_src']['src'] = $imgURL;
			$arResSliderVideo['IS_VIDEO'] = 1;
		}*/

		if ($arParams["THUMBS_POSITION"] == 1)
        $p = 1.20;
else
        $p = 0.75;
$arResult["THUMBS_HEIGHT"] = intval($arResult["THUMBS_WIDTH"]*$p);
if ($arParams["SHOW_DETAIL_PICTURE"] == 1 && strlen($arResult["DETAIL_PICTURE"]["SRC"]) == 0)
        $arParams["SHOW_DETAIL_PICTURE"] = 0;
if($arParams["DONT_CUT_MINI"] == "Y"){
        foreach ($arResult["MORE_PHOTO"] as $key => $value){
                        if ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arResult["MORE_PHOTO"][$key]["WIDTH"] ||
                        $arResult["MORE_PHOTO"][$key]["HEIGHT"] < $arResult["MORE_PHOTO"][$key]["WIDTH"] ||
                        ($arResult["MORE_PHOTO"][$key]["HEIGHT"] == $arResult["MORE_PHOTO"][$key]["WIDTH"] && $arParams["THUMBS_POSITION"] == 1) ||
                        ($arResult["MORE_PHOTO"][$key]["HEIGHT"] == $arResult["MORE_PHOTO"][$key]["WIDTH"] && $arParams["THUMBS_POSITION"] == 0)){
                                        $arResult["MORE_PHOTO"][$key]["thumb_src"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL  , true);
                                        }
                        }
        if ($arResult["DETAIL_PICTURE"]["HEIGHT"] > $arResult["DETAIL_PICTURE"]["WIDTH"] ||
                $arResult["DETAIL_PICTURE"]["HEIGHT"] < $arResult["DETAIL_PICTURE"]["WIDTH"] ||
                $arResult["DETAIL_PICTURE"]["HEIGHT"] == $arResult["DETAIL_PICTURE"]["WIDTH"]){

                        $arResult["DETAIL_PICTURE"]["thumb_src"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_PROPORTIONAL  , true);
                        }
}
else{
        foreach ($arResult["MORE_PHOTO"] as $key => $value){
                        if ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arResult["MORE_PHOTO"][$key]["WIDTH"] && $arParams["THUMBS_POSITION"] == 0){
                                        $arResult["MORE_PHOTO"][$key]["thumb_src"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_WIDTH"]), BX_RESIZE_IMAGE_EXACT  , true);
                                        }
                        elseif ($arResult["MORE_PHOTO"][$key]["HEIGHT"] < $arResult["MORE_PHOTO"][$key]["WIDTH"]){
                                        $arResult["MORE_PHOTO"][$key]["thumb_src"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT  , true);
                                        }
                        elseif ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arResult["MORE_PHOTO"][$key]["WIDTH"] && $arParams["THUMBS_POSITION"] == 1){
                                        $arResult["MORE_PHOTO"][$key]["thumb_src"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>$arResult["THUMBS_HEIGHT"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT  , true);
                                        }

                        elseif ($arResult["MORE_PHOTO"][$key]["HEIGHT"] == $arResult["MORE_PHOTO"][$key]["WIDTH"] && $arParams["THUMBS_POSITION"] == 1){
                                        $percent = $arResult["MORE_PHOTO"][$key]["HEIGHT"]/100;
                                        $thumbs_percent = $arResult["THUMBS_HEIGHT"]/$percent/100;
                                        $wigth = ($thumbs_percent*$arResult["MORE_PHOTO"][$key]["HEIGHT"])-1;
                                        $arResult["MORE_PHOTO"][$key]["thumb_src"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>$wigth, 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT  , true);
                                        }
                        elseif ($arResult["MORE_PHOTO"][$key]["HEIGHT"] == $arResult["MORE_PHOTO"][$key]["WIDTH"] && $arParams["THUMBS_POSITION"] == 0){
                                        $percent = $arResult["MORE_PHOTO"][$key]["WIDTH"]/100;
                                        $thumbs_percent = $arResult["THUMBS_WIDTH"]/$percent/100;
                                        $height = ($thumbs_percent*$arResult["MORE_PHOTO"][$key]["WIDTH"])-1;
                                        $arResult["MORE_PHOTO"][$key]["thumb_src"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$height), BX_RESIZE_IMAGE_EXACT  , true);
                                        }
                        }

if ($arResult["DETAIL_PICTURE"]["HEIGHT"] > $arResult["DETAIL_PICTURE"]["WIDTH"] && $arParams["THUMBS_POSITION"] == 0){
        $arResult["DETAIL_PICTURE"]["thumb_src"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_WIDTH"]), BX_RESIZE_IMAGE_EXACT  , true);
        }
elseif ($arResult["DETAIL_PICTURE"]["HEIGHT"] < $arResult["DETAIL_PICTURE"]["WIDTH"]){
        $arResult["DETAIL_PICTURE"]["thumb_src"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT  , true);
        }
elseif ($arResult["DETAIL_PICTURE"]["HEIGHT"] > $arResult["DETAIL_PICTURE"]["WIDTH"] && $arParams["THUMBS_POSITION"] == 1){
        $arResult["DETAIL_PICTURE"]["thumb_src"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT  , true);
        }
elseif ($arResult["DETAIL_PICTURE"]["HEIGHT"] == $arResult["DETAIL_PICTURE"]["WIDTH"] && $arParams["THUMBS_POSITION"] == 0){
        $arResult["DETAIL_PICTURE"]["thumbs_height"] = ($arResult["THUMBS_WIDTH"]*$arResult["DETAIL_PICTURE"]["HEIGHT"]/$arResult["DETAIL_PICTURE"]["WIDTH"])-1;
        $arResult["DETAIL_PICTURE"]["thumb_src"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>$arResult["THUMBS_WIDTH"], 'height'=>$arResult["DETAIL_PICTURE"]["thumbs_height"]), BX_RESIZE_IMAGE_EXACT  , true);
        }
elseif ($arResult["DETAIL_PICTURE"]["HEIGHT"] == $arResult["DETAIL_PICTURE"]["WIDTH"] && $arParams["THUMBS_POSITION"] == 1){
        $arResult["DETAIL_PICTURE"]["thumbs_width"] = ($arResult["DETAIL_PICTURE"]["WIDTH"]*$arResult["THUMBS_HEIGHT"]/$arResult["DETAIL_PICTURE"]["HEIGHT"])-1;
        $arResult["DETAIL_PICTURE"]["thumb_src"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>$arResult["DETAIL_PICTURE"]["thumbs_width"], 'height'=>$arResult["THUMBS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT  , true);
        }
}
foreach ($arResult["MORE_PHOTO"] as $key => $value){
        if ($arResult["MORE_PHOTO"][$key]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["MORE_PHOTO"][$key]["WIDTH"] > $arParams["PREVIEW_WIDTH"])
                $arResult["MORE_PHOTO"][$key]["RESIZED"] = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$key], array('width'=>($arParams["PREVIEW_WIDTH"]-4), 'height'=>($arParams["PREVIEW_HEIGHT"]-4)), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        }
if ($arParams["SHOW_DETAIL_PICTURE"] == 1 && $arResult["DETAIL_PICTURE"]["HEIGHT"] > $arParams["PREVIEW_HEIGHT"] || $arResult["DETAIL_PICTURE"]["WIDTH"] > $arParams["PREVIEW_WIDTH"])
        $arResult["DETAIL_PICTURE"]["RESIZED"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>($arParams["PREVIEW_WIDTH"]-4), 'height'=>($arParams["PREVIEW_HEIGHT"]-4)), BX_RESIZE_IMAGE_PROPORTIONAL, true);

switch ($arParams["WRAP"])
        {
            case "WRAP_NO":
                $arResult["WRAP"] = null;
                break;
            case "WRAP_BOTH":
                $arResult["WRAP"] = 'circular';
                break;
        }
		$video_arr = $arParams["NAME_VIDEO"];
		if(is_array($arResult["PROPERTIES"][$video_arr]["VALUE"]))
		{
			$video_code = $arResult["PROPERTIES"][$video_arr]['VALUE']['TEXT'];
			if(preg_match("/(?:(?:watch\?.*?v=)|(?:youtu.be\/)|(?:\/embed\/))(.*?)(?:(?:&)|(?:\?)|(?:$))/is", $video_code, $arMatch)){
				$URL    = "http://www.youtube.com/embed/".$arMatch[1]."?rel=0";
				$imgURL = "http://img.youtube.com/vi/".$arMatch[1]."/default.jpg";
				$xml = file_get_contents('https://gdata.youtube.com/feeds/api/videos/'.$arMatch[1]);
				if(strlen($xml) != 0){
					$entry = new SimpleXMLElement($xml);
					$durationEl = reset($entry->xpath('media:group/yt:duration[@seconds]'));
					$seconds = (int)$durationEl->attributes()->seconds;
					$seconds = floor($seconds/60).':'.sprintf("%02s", ($seconds - 60*(floor($seconds/60))));
					$bNeedVideo = true;
				}
			}
			$arResSliderVideo = array();
			$arResSliderVideo['RESIZED']['src'] = $URL;
			$arResSliderVideo['thumb_src']['src'] = $imgURL;
			$arResSliderVideo['IS_VIDEO'] = 1;
		}
		if(!empty($arResSliderVideo))
		{
			array_push($arResult["MORE_PHOTO"], $arResSliderVideo);
		}
$this->IncludeComponentTemplate();
?>