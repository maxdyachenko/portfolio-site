jQuery(document).ready(function ($) {
    var menu = $('.menu'),
        isMenuOpen = false;
    $('.hamburger').click(function () {
        menu.toggleClass('active');
        isMenuOpen = true;
    });
    $(window).touchwipe({
        wipeLeft: closeMenu,
        min_move_x: 5,
        min_move_y: 5,
        preventDefaultEvents: false
    });
    $('.content').touchwipe({
        wipeUp: closeMenu,
        wipeDown: closeMenu,
        preventDefaultEvents: false
    });

    function closeMenu() {
        if (isMenuOpen) {
            menu.toggleClass('active');
            isMenuOpen = false;
        }
    }

    var body = $('body'), timer;

    body.on('touchstart', function (e) {
        body.addClass('can-touch');
        body.off('touchstart');
    });

    $(window).on('scroll', function () {
        clearTimeout(timer);
        body.addClass('disable-hover');

        timer = setTimeout(function () {
            body.removeClass('disable-hover')
        }, 500);
    });






});