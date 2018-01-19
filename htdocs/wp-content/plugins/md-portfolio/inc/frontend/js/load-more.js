jQuery(document).ready(function ($) {

    var showMore = $('#show-more');
    showMore.on('click', function () {
        var length = $('.block-wrapper').length;
        var content = $('.content');


        $.post(
            mdLoadMore.ajaxurl,
            {
                action: 'get_more_items',
                offset: length
            },
            function (response) {
                var heightBefore = content.height();
                content.css('height', heightBefore + 'px');
                $(response).insertAfter($('.block-wrapper').last());
                $('img').load(function () {
                    var heightAfter = content.css({height:'auto'}).height();
                    content.css({height:heightBefore}).animate({
                        height: heightAfter
                    }, 500);

                    $('html, body').animate({
                        scrollTop: showMore.offset().top
                    }, 500);
                });
            }
        );
    })

});