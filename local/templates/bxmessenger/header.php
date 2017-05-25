<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
$bIsMainPage = $APPLICATION->GetCurPage(false)  == SITE_DIR;
?>
    <!DOCTYPE html>
    <!--[if lt IE 8]>  <html class="no-js lt-ie9 lt-ie8"><![endif]-->
    <!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
    <!--[if gt IE 8]>  <html class="no-js"><![endif]-->
    <head>
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?$APPLICATION->ShowTitle();?></title>
        <?$APPLICATION->ShowHead();?>

        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css")?>
        <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">

        <!--[if lt IE 9]>
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/modernizr-html5shiv-respond.min.js');?>"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/modernizr.min.js');?>"></script>
        <!--<![endif]-->

    </head>
    <body>
    <!--[if lt IE 8]>
    <p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
        href="http://browsehappy.com/">
        обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
        Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
    <![endif]-->
<?$APPLICATION->ShowPanel();?>