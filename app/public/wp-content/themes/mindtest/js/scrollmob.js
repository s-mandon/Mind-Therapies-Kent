$(window).scroll(function() {
    if($(this).scrollTop() > 100) {
        $('.mobmenu').addClass('opaque');
    } else {
        $('.mobmenu').removeClass('opaque');
    }
});