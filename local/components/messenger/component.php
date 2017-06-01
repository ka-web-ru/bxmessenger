<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("kav.messenger"))
	return;
CJSCore::Init(array("jquery")); //подключение JQuery из ядра Битрикс
CJSCore::Init("ajax");
//print('тест');
//var_dump($arResult);
//$messenger = new Messenger();
$arResult['COMPONENT_DIRECTORY'] = $this->GetPath();
print ($arResult['COMPONENT_DIRECTORY']);
//$this->ClearResultCache($additionalCacheID = False, $cachePath = False);
if($_REQUEST['login'] == 'y'){
    if($_REQUEST['messenger_nickname'] != ''){
        $this->setAutor($_REQUEST['messenger_nickname']);
        $this->setHello('n');
        $this->setActive('y');
        $this->setRegStart('n');
    }
}
if($_REQUEST['register'] == 'y'){
    $this->setHello('n');
    $this->setRegStart('y');
}
if($_REQUEST['back_to_login'] == 'y'){
    $this->setHello('y');
    $this->setRegStart('n');
}
if($_REQUEST['regstart'] == 'y'){
    $this->setHello('n');
    $this->setRegStart('y');
    if($_REQUEST['messenger_nickname'] != '') {
        $this->setAutor($_REQUEST['messenger_nickname']);
        $this->setLogin($_REQUEST['messenger_nickname']);
        $this->setRegStart('n');
        $this->setRegEnd('y');
    }
}
if($_REQUEST['regend'] == 'y'){
    $this->setAutor($_REQUEST['messenger_nickname']);
    $this->setHello('n');
    $this->setRegEnd('n');
    $this->setActive('y');
}
$arResult['HELLO'] = $this->isHello();
$arResult['ACTIVE'] = $this->isActive();
$arResult['REG_START'] = $this->isRegStart();
$arResult['REG_END'] = $this->isRegEnd();
$arResult["LOGIN"] = $this->isLogin();
$arResult["AUTOR"] = $this->getAutor();
print_r($_REQUEST);
print_r($arResult);
$this->IncludeComponentTemplate();
