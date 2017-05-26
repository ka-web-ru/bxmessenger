$(document).ready(function() {
    $(document).on("click",".mess-show,.messenger-close",function(){
        $('.messenger-wrapper').slideToggle();
    });
    $('.btn-messenger-enter').click(function(){
        var nick = $('.messenger-nickname').val().trim();
        if(nick == ''){
            $('.messenger-nickname').addClass('error');
            $('.messenger-nickname').attr('placeholder','Укажите ник');
            return;
        } else {
            $('.messenger-nickname').removeClass('error');
            $('.messenger-nickname').attr('placeholder',null);
        }
        $.ajax({
            type: 'POST',
            cache: false,
            url: '/local/components/messenger/component.php',
            data: {nick: nick},
            success: function(result){ //Если всё хорошо
                $('.messenger-tooltip').html(result);
            },
            error: function(result) { //Если ошибка
                $('.messenger-tooltip').html('Ошибка');
            }
        });
    });
});
