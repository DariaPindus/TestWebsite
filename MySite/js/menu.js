var main = function(){
    $('.icon-menu').click(function(){
        $('.menu').animate({
            left: '0%'}, 200);
        $('.icon-menu img').css({'visibility':'hidden'});
    });
    $('.icon-close').click(function(){
        $('.menu').animate({left: '-20%'}, 200);
        $('.icon-menu img').css({'visibility':'visible'})
    });
};
$(document).ready(main);