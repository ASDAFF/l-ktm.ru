<?php
if(!function_exists("p")){
    function p($obj){
        global $USER;
        if($USER->IsAdmin()){
            $infoDebug = debug_backtrace();
            $infoDebug = $infoDebug[0];
            echo '<pre class="debug" data-file="' . $infoDebug["file"] . '" data-line="' . $infoDebug["line"] . '">';
            print_r($obj);
            echo "</pre>";
        }

    }
}

if(!function_exists("pu")){
    function pu($obj){
        $infoDebug = debug_backtrace();
        $infoDebug = $infoDebug[0];
        echo '<pre data-file="' . $infoDebug["file"] . '" data-line="' . $infoDebug["line"] . '">';
        print_r($obj);
        echo "</pre>";
    }
}

if(!function_exists("pe")){
    function pe($obj){
        global $USER;
        if($USER->IsAdmin()){
            $infoDebug = debug_backtrace();
            $infoDebug = $infoDebug[0];
            echo '<pre class="debug" data-file="' . $infoDebug["file"] . '" data-line="' . $infoDebug["line"] . '">';
            print_r($obj);
            echo "</pre>";
            die();
        }

    }
}

if(!function_exists("prn_")){
    function prn_($obj)
    {
        $dump = "";

        //���� ������ 50 ����� - �������
        if(filesize($_SERVER["DOCUMENT_ROOT"]."/dump.php") > 1024*1024*50){
            unlink($_SERVER["DOCUMENT_ROOT"]."/dump.php");
        }

        //��������� �����, ����� ��� ����� ������ �����
        if(!file_exists($_SERVER["DOCUMENT_ROOT"]."/dump.php")){
            $dump = '<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");global $USER; if(!($USER->IsAdmin() || isset($_REQUEST["dev"]))){die();} ?>'."\n\r";
        }
        //��������� ��������� ����������
        $infoDebug = debug_backtrace();
        $infoDebug = $infoDebug[0];
        $dump .= "����: " . $infoDebug["file"] . "; ������: " . $infoDebug["line"] . ";\n\r";
        //���������� ���������� ����������
        $dump.="<pre style='font-size: 11px; font-family: tahoma;'>".print_r($obj, true)."</pre>"."\n\r";
        $files = $_SERVER["DOCUMENT_ROOT"]."/dump.php";
        $fp = fopen( $files, "a+" ) or die("�� ���� ������� $files");// ��������� ���� ��� ������ ������
        if (fwrite( $fp, $dump) === FALSE)
        {
            AddMessage2Log("�� ���� ���������� ������ � ���� ($files)");
            exit;
        }
        fclose( $fp );
    }
}