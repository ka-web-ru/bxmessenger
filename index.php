<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мессенджер");
?><!--Пустая страница. <a href="/bitrix/admin/">Перейти в Панель Управления</a>.-->&nbsp;<?$APPLICATION->IncludeComponent(
	"messenger",
	"",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>