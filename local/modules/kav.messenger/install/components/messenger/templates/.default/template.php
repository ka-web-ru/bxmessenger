<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<div class="mess-container">
    <div class="mess-show"></div>
    <div class="messenger-wrapper">

<!--        <span>-->
<!--            --><?//=$arResult['AUTOR'] ?>
<!--        </span>-->
        <? if ($arResult['AUTOR'] == ''): ?>
            <span class="messenger-enter-title">
                Ваш ник (псевдоним):
            </span>
            <input class="messenger-nickname" type="text" name="messenger_nickname">
            <span class="messenger-tooltip">
                (придумайте ник, который будет виден вашим собеседникам)
            </span>
            <a class="btn-messenger-enter" href="<?=$_SERVER["REQUEST_URI"]?>">Войти в чат</a>
        <? else: ?>
        <div class="btn-panel">
            <span class="messenger-exit">выход</span>
            <span class="messenger-close">X</span>
        </div>
        <textarea class="mess-view" name="mess_view" readonly></textarea>
        <textarea rows="3" class="mess-input" name="mess_input" placeholder="ваше сообщение"></textarea>
        <div class="btn-send">Отправить</div>
        <? endif; ?>
    </div>
</div>
