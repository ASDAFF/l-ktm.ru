<?
//сохранение результатов форм обратной связи в инфоблок.
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/FBackForm.php");

redir_301();
function redir_301()
{
	$arr_from = array(
		"/statii/uhod_za_trikotajem%3A_osnovnie_uslovnie_oboznacheniya/", 
		"/statii/trikotaj%3A_sostav_poloten_i_svoystva_volokon/", 
		"/statii/uhod_za_trikotajem%3A_dopolnitelnie_uslovnie_oboznacheniya/", 
		"/catalog/kolgotki_detskie_s_risunkom/?SHOWALL_1=0"
		);
	$arr_to  = array(
		"/statii/uhod_za_trikotajem:_osnovnie_uslovnie_oboznacheniya/", 
		"/statii/trikotaj:_sostav_poloten_i_svoystva_volokon/", 
		"/statii/uhod_za_trikotajem:_dopolnitelnie_uslovnie_oboznacheniya/", 
		"/catalog/kolgotki_detskie_s_risunkom/"
		);
	
	//echo $pos;
	foreach ($arr_from as $key => $value){
		if(strpos($_SERVER['REQUEST_URI'], $arr_from[$key]) === 0){
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: ".$arr_to[$key]);
			exit(); 		
		}

	}
}
function p($p,$u)
{
        global $USER;
        if($u>0 && $USER->GetID() == $u)
        {
                echo "<pre>"; print_r($p); echo "</pre>";
        }
        elseif($USER->IsAdmin() && $u<=0)
        {
                echo "<pre>"; print_r($p); echo "</pre>";
        }
}

function pe($p,$u)
{
        global $USER;
        if($u>0 && $USER->GetID() == $u)
        {
                echo "<pre>"; print_r($p); echo "</pre>";
        }
        elseif($USER->IsAdmin() && $u<=0)
        {
                echo "<pre>"; print_r($p); echo "</pre>";
        }
        exit;
}
function prn_($obj,$file=false)
{
    define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");
    if(!$file){
        $file="/dump.html";
    }
    $dump="<pre style='font-size: 11px; font-family: tahoma;'>".print_r($obj, true)."</pre>";
    $files = $_SERVER["DOCUMENT_ROOT"].$file;
    $fp = fopen( $files, "a+" ) or die("Не могу открыть $temp");// открываем файл для записи данных
    if (fwrite( $fp, $dump) === FALSE) {// добавляем запись в файл
        AddMessage2Log("Не могу произвести запись в файл ($filename)");
        exit;
    }
   fclose( $fp );
}

?>