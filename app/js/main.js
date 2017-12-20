$(document).ready(function () {
    var menu = $('.menu'),
        isMenuOpen = false;
   $('.hamburger').click(function () {
       menu.toggleClass('active');
       isMenuOpen = true;
   });
    $(window).touchwipe({
        wipeLeft: closeMenu,
        min_move_x: 10,
        min_move_y: 10
    });
    $('.content').touchwipe({
        wipeUp: closeMenu,
        wipeDown: closeMenu,
        min_move_x: 10,
        min_move_y: 10
    });
    function closeMenu() {
        if (isMenuOpen)
            menu.toggleClass('active');
    }
});