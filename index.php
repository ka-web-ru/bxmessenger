<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мессенджер");
?><!--Пустая страница. <a href="/bitrix/admin/">Перейти в Панель Управления</a>.-->&nbsp;<?$APPLICATION->IncludeComponent(
	"messenger",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>