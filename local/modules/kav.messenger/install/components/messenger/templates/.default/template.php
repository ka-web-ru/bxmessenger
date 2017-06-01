<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<div class="mess-container">
    <div class="mess-show"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
    <div class="messenger-wrapper">

        <? if ($arResult['HELLO'] == 'y'): ?>
            <div class="btn-panel">
                <span class="messenger-close">X</span>
            </div>
            <span class="messenger-hello">
                Войдите или зарегистрируйтесь:
            </span>
            <form action="<?=POST_FORM_ACTION_URI?>" method="post">
                <input class="messenger-nickname" type="text" name="messenger_nickname" placeholder="Ваш ник">
                <input class="messenger-pass" type="text" name="messenger_pass" placeholder="Пароль">
                <input type="hidden" name="login" value="y">
                <input class="btn-messenger-enter" type="submit" value="Войти в чат">
            </form>
            <form action="<?=POST_FORM_ACTION_URI?>" method="post">
                <input type="hidden" name="register" value="y">
                <input class="btn-messenger-register" type="submit" value="Регистрация">
            </form>
        <? endif; ?>

        <? if ($arResult['REG_START'] == 'y'): ?>
            <div class="btn-panel">
                <span class="messenger-close">X</span>
            </div>
            <span class="messenger-enter-title">
                Ваш ник (псевдоним):
            </span>
            <form action="<?=POST_FORM_ACTION_URI?>" method="post">
                <input class="messenger-nickname" type="text" name="messenger_nickname" value="">
                <span class="messenger-tooltip">
                    (придумайте ник, который будет виден вашим собеседникам)
                </span>
                <input type="hidden" name="regstart" value="y">
                <input class="btn-messenger-enter" type="submit" value="Регистрация">
            </form>
            <form action="<?=POST_FORM_ACTION_URI?>" method="post">
                <input type="hidden" name="back_to_login" value="y">
                <input class="btn-messenger-login" type="submit" value="Вход">
            </form>
        <? endif; ?>

        <? if ($arResult['REG_END'] == 'y'): ?>
            <div class="btn-panel">
                <span class="messenger-close">X</span>
            </div>
            <span class="reginfo">
                Запомните или запишите!
            </span>
            <form action="<?=POST_FORM_ACTION_URI?>" method="post">
                <span class="messenger-login-label">Логин:</span>
                <input type="text" class="messenger-login-value" name="messenger_login_value" value="<?=$arResult['LOGIN'] ?>">
                <input class="messenger-nickname" type="hidden" name="messenger_nickname" value="<?=$arResult['AUTOR'] ?>">
                <span class="messenger-pass-label">Пароль:</span>
                <span class="messenger-pass-value">12345678</span>
                <input type="hidden" name="regend" value="y">
                <input class="btn-messenger-enter" type="submit" value="Войти в чат">
            </form>
        <? endif; ?>

        <? if ($arResult['ACTIVE'] == 'y'): ?>
        <div class="btn-panel">
            <span class="messenger-myself"><?=$arResult['AUTOR']?></span>
            <span class="messenger-exit">выход</span>
            <span class="messenger-close">X</span>
        </div>
        <textarea class="mess-view" name="mess_view" readonly></textarea>
        <textarea rows="3" class="mess-input" name="mess_input" placeholder="ваше сообщение"></textarea>
        <div class="btn-send">Отправить</div>
        <? endif; ?>
    </div>
</div>
