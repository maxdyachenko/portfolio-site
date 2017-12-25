$(document).ready(function () {
    var menu = $('.menu'),
        isMenuOpen = false;
   $('.hamburger').click(function () {
       menu.toggleClass('active');
       isMenuOpen = true;
   });
    $(window).touchwipe({
        wipeLeft: closeMenu,
        min_move_x: 5,
        min_move_y: 5
    });
    $('.content').touchwipe({
        wipeUp: closeMenu,
        wipeDown: closeMenu
    });
    function closeMenu() {
        if (isMenuOpen) {
            menu.toggleClass('active');
            isMenuOpen = false;
        }
    }
});