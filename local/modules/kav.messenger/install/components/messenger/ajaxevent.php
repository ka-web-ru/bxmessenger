<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(!CModule::IncludeModule("kav.messenger"))
return;
?>
<?
if(isset($_POST['nick'])){
$nick = $_POST['nick'];
//$this->setAutor($nick);
//Messenger->setAutor($nick);
echo ok;
$arResult["AUTOR"] = $nick;
}
?>


<?//отправка почты
//if($_POST['name'] && $_POST['phone'] && $_POST['email'] && $_POST['text']){
//$PROP = array();
//$PROP['NAME'] = $_POST['name'];
//$PROP['PHONE'] = $_POST['phone'];
//$PROP['EMAIL'] = $_POST['email'];
//$PROP['TEXT'] = $_POST['text'];
//$arFields = $PROP;
//CEvent::Send("ZAKAZ_FOR_SERVICES", 's1', $arFields, 'N');
//}
//echo 'ok';
//?>
