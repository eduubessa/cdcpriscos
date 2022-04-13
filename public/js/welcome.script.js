$(function(){
    var $body       = $('body');
    var $videos     = $('.videos');
    var $hideVideo  = $('div.video > div');
    var $i = 0;
    var $value = 0;

    /** Menu fixed **/
    var $navigation = $('.navbar-custom');
    var $distance = $navigation.offset().top;
    var $window = $(window);

    $window.scroll(function(){
        if($window.scrollTop() >= $distance){
            $navigation.addClass('navbar-fixed');
        }else{
            $navigation.removeClass('navbar-fixed');
        }
    });

    var pos = 0;

    /** Botões para mostrar mais videos **/
    $('body').on('click', '.button-videos-next', function(){
        pos = pos - 300;

        $('div.video').animate({
            left: pos + "px"
        }, 500);

    });

    $('body').on('click', '.button-videos-prev', function(){
        pos = pos + 300;
        if(pos > 0){
            pos = 0;
        }
        $('div.video').animate({
            left: pos + "px"
        }, 500);
    });

    setInterval(function(){
        if(pos >= 0)
        {
            $('.button-videos-prev').removeClass('button-videos-show');
        }else{
            $('.button-videos-prev').addClass('button-videos-show');
        }
    }, 10);

    if($('div.video').length <= 3)
    {
        $('.button-videos-prev').addClass('button-videos-hide');
        $('.button-videos-next').addClass('button-videos-hide');
    }else{
        $('.button-videos-next').addClass('button-videos-show');
    }
});
