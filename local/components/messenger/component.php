<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("kav.messenger"))
	return;
//print('тест');
//var_dump($arResult);
//$messenger = new Messenger();
$arResult['COMPONENT_DIRECTORY'] = $this->GetPath();
print ($arResult['COMPONENT_DIRECTORY']);

$arResult["AUTOR"] = $this->getAutor();
CJSCore::Init(array("jquery")); //подключение JQuery из ядра Битрикс
CJSCore::Init("ajax");
$this->IncludeComponentTemplate();
