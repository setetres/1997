$(document).ready(function(){

    var offset = 260;
    $(window).scroll(function(){
        if ($(this).scrollTop() > offset) {
            $('.fuck-you').fadeIn(300);
        } else {
            $('.fuck-you').fadeOut(300);
        }
    });

    $('.fuck-you').click(function() {
        $('html, body').animate({scrollTop: 0}, 600,'easeOutExpo');
        return false;
    })

    function JSFX_StartEffects(){
        JSFX.MakeTextFlag("▄▀▄▀▄▀▄ 73 HP ▄▀▄", "#00FF00", "Comic Sans MS", 4);
    }
    JSFX_StartEffects();

});