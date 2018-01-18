jQuery(document).ready(function ($) {
    var spinner = $('.spinner'),
        body = $('body'),
        zoomContainer = $('.zoom-container');


    $('.block-wrapper').on('click', openPopup);
    $('#popup-overlay').on('click', closePopup);


    function openPopup() {
        spinner.fadeIn(700);

        var id  = $(this).data('id');
        $.post(
            mdPortfolio.ajaxurl,
            {
                action: 'get_portfolio',
                id: id
            },
            function (response) {
                $('.popup-container').html(response);
                $('#popup-overlay').fadeIn(700);
                body.addClass('popup-open');

                initCarousel();

                $('#close-popup').on('click', closePopup);
                $('.thumb-zoom').on('click', openZoom);


                insertZoomImages();
            }
        );

        spinner.fadeOut(700);
    }
    function closePopup(e) {
        if(!$(event.target).closest('.popup').length || $(this).is('#close-popup')) {
            $('#popup-overlay').fadeOut(700);
            body.removeClass('popup-open');
        }
    }

    $('#close-zoom').on('click', closeZoom);
    zoomContainer.on('click', closeZoom);


    var zoomStartPos = 1;
    function openZoom() {
        zoomContainer.fadeIn(700);
        zoomStartPos = $(this).data('id');
        body.addClass('zoom-open');
        initZoomCarousel();
    }

    function closeZoom() {
        if(!$(event.target).closest('.zoom-carousel').length) {
            body.removeClass('zoom-open');
            setTimeout(function() {$('.zoom-carousel').trigger('destroy.owl.carousel')}, 700);
            zoomContainer.fadeOut(700);
        }
    }


    function initCarousel() {
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
    }

    function initZoomCarousel(zoomStartPos) {
       $('.zoom-carousel').owlCarousel({
            startPosition: zoomStartPos,
            nav: true,
            navText: false,
            items: 1,
            loop:true
        });
    }

    function insertZoomImages() {
        var html = "<div class='item'><img src=''></div>";
        var wrapper = document.createElement('div');
        $(wrapper).html(html)
        var imagesSrcs = $('#zoom-images-fetch').html().split(',');
        var src = $('#zoom-images-src').html();

        var htmlToPaste = "";

        for (var i = 0; i < imagesSrcs.length; i++) {
            $(wrapper).find('img').attr('src', src + imagesSrcs[i]);
            htmlToPaste += wrapper.innerHTML;
        }
        $('.zoom-carousel').html(htmlToPaste);
    }
});