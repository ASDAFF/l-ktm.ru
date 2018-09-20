<?
#################################################
#   Company developer: ALTASIB                  #
#   Developer: Alexander Shipilov               #
#   Site: http://www.altasib.ru                 #
#   E-mail: dev@altasib.ru                      #
#   Copyright (c) 2006-2012 ALTASIB             #
#################################################
?>
<?
global $MESS;
$PathInstall = str_replace("\\", "/", __FILE__);
$PathInstall = substr($PathInstall, 0, strlen($PathInstall)-strlen("/index.php"));
IncludeModuleLangFile(__FILE__);

Class altasib_imagebox extends CModule
{
        var $MODULE_ID = "altasib.imagebox";
        var $MODULE_VERSION;
        var $MODULE_VERSION_DATE;
        var $MODULE_NAME;
        var $MODULE_DESCRIPTION;
        var $MODULE_CSS;
        var $MODULE_GROUP_RIGHTS = "Y";
        function altasib_imagebox()
        {
                $arModuleVersion = array();
                $path = str_replace("\\", "/", __FILE__);
                $path = substr($path, 0, strlen($path) - strlen("/index.php"));
                include($path."/version.php");
                if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
                {
                        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
                        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
                }
                else
                {
                        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
                        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
                }
                $this->MODULE_NAME = GetMessage("ALTASIB_IMAGEBOX_MODULE_NAME");
                $this->MODULE_DESCRIPTION = GetMessage("ALTASIB_IMAGEBOX_MODULE_DESCRIPTION");
                $this->PARTNER_NAME = "ALTASIB";
                $this->PARTNER_URI = "http://www.altasib.ru/";
        }
        function DoInstall()
        {
                global $APPLICATION, $step;
                $step = IntVal($step);
                $this->InstallFiles();
                RegisterModule("altasib.imagebox");
                $GLOBALS["errors"] = $this->errors;
                $APPLICATION->IncludeAdminFile(GetMessage("ALTASIB_IMAGEBOX_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/altasib.imagebox/install/step1.php");
        }
        function DoUninstall()
        {
                global $APPLICATION, $step;
                $step = IntVal($step);
                if($step<2)
                {
                        $APPLICATION->IncludeAdminFile(GetMessage("ALTASIB_IMAGEBOX_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/altasib.imagebox/install/unstep1.php");
                }
                elseif($step==2)
                {
                        $this->UnInstallFiles();
                        UnRegisterModule("altasib.imagebox");
                        $APPLICATION->IncludeAdminFile(GetMessage("ALTASIB_IMAGEBOX_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/altasib.imagebox/install/unstep2.php");
                }
        }
        function InstallFiles()
        {
                CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/altasib.imagebox/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
                return true;
        }
        function UnInstallFiles()
        {
                DeleteDirFilesEx("/bitrix/components/altasib/imagebox");
                                return true;
        }
}
?>