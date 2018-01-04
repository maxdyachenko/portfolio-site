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

    $('#close-popup').on('click', closePopup);
    $('#popup-overlay').on('click', closePopup);
    $('#close-zoom').on('click', closeZoom);
    $('.zoom-container').on('click', closeZoom);

    $('.thumb-zoom').on('click', openZoom);
    $('.block-wrapper').on('click', openPopup);

    function openPopup() {
        $('#popup-overlay').fadeIn(700);
        body.addClass('popup-open');
    }
    function closePopup(e) {
        if(!$(event.target).closest('.popup').length || $(this).is('#close-popup')) {
            $('#popup-overlay').fadeOut(700);
            body.removeClass('popup-open');
        }
    }

    var zoomStartPos = 1;
    function openZoom() {
        zoomStartPos = $(this).data('id');
        $('.zoom-container').fadeIn(700);
        body.addClass('zoom-open');
    }
    
    function closeZoom() {
        if(!$(event.target).closest('.zoom-carousel').length) {
            $('.zoom-container').fadeOut(700);
            body.removeClass('zoom-open');
        }
    }

    $('.owl').owlCarousel({
        loop:true,
        margin:10,
        nav: true,
        navText: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });

    $('.zoom-carousel').owlCarousel({
        startPosition: zoomStartPos,
        nav: true,
        navText: false,
        items: 1,
        loop:true
    })


});