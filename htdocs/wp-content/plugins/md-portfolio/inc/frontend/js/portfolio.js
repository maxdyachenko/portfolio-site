jQuery(document).ready(function ($) {

    $('.block-wrapper').on('click', openPopup);
    $('#close-popup').on('click', closePopup);
    $('#popup-overlay').on('click', closePopup);
    var spinner = $('.spinner');
    function openPopup() {
        spinner.fadeIn(700);

        //response попадет содержимое, которое необходимо вставить в popup-container



        // $('#popup-overlay').fadeIn(700);
        // body.addClass('popup-open');
        //
        // $('.owl').owlCarousel({
        //     loop:true,
        //     margin:10,
        //     nav: true,
        //     navText: false,
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         600:{
        //             items:1
        //         },
        //         1000:{
        //             items:2
        //         }
        //     }
        // });
        spinner.fadeOut(700);
    }
    function closePopup(e) {
        if(!$(event.target).closest('.popup').length || $(this).is('#close-popup')) {
            $('#popup-overlay').fadeOut(700);
            body.removeClass('popup-open');
        }
    }

    jQuery.post(
        mdPortfolio.ajaxurl,
        {
            action: 'get_portfolio',
            name: "TEST"
        },
        function (response) {
            alert(response);
        });

});