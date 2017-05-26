<?php
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Kav\Messenger\Lib\MessengerTable;

Loc::loadMessages(__FILE__);

if (class_exists('kav_messenger')) {
    return;
}

class kav_messenger extends CModule
{
    /** @var string */
    public $MODULE_ID;

    /** @var string */
    public $MODULE_VERSION;

    /** @var string */
    public $MODULE_VERSION_DATE;

    /** @var string */
    public $MODULE_NAME;

    /** @var string */
    public $MODULE_DESCRIPTION;

    /** @var string */
    public $MODULE_GROUP_RIGHTS;

    /** @var string */
    public $PARTNER_NAME;

    /** @var string */
    public $PARTNER_URI;

    public function __construct()
    {
        $this->MODULE_ID = 'kav.messenger';
        $this->MODULE_VERSION = '0.0.1';
        $this->MODULE_VERSION_DATE = '2014-07-17 16:23:14';
        $this->MODULE_NAME = Loc::getMessage('MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('MODULE_DESCRIPTION');
        $this->MODULE_GROUP_RIGHTS = 'N';
        $this->PARTNER_NAME = "Калинин А.В.";
        $this->PARTNER_URI = "http://www.kav.ru";
    }

    function InstallFiles(){
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/local/modules/kav.messenger/install/components", $_SERVER["DOCUMENT_ROOT"]."/local/components", true, true);
    }

    function UnInstallFiles(){
        DeleteDirFilesEx("/local/components/messenger");
    }

    public function doInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
        $this->installDB();
        $this->installFiles();
    }

    public function doUninstall()
    {
        $this->uninstallDB();
        $this->UnInstallFiles();
        ModuleManager::unregisterModule($this->MODULE_ID);
    }

    public function installDB()
    {
        if (Loader::includeModule($this->MODULE_ID)) {
            MessengerTable::getEntity()->createDbTable();
//            $result = MessengerTable::add(array(
//                'autor' => 'админ',
//                'message' => 'тестовое сообщение',
//            ));
        }
    }

    public function uninstallDB()
    {
        if (Loader::includeModule($this->MODULE_ID)) {
            $connection = Application::getInstance()->getConnection();
            if($connection){
//                AddMessage2Log(
//                    "есть соединение с БД"
//                );
            }
            $connection->dropTable(MessengerTable::getTableName());
        }
    }

}
