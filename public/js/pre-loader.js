;(function ($) {
    "use strict";

    /*============= preloader js css =============*/
    var cites = [];
    cites[0] = "We design KbDoc for the readers, optimizing not for page views or engagement";
    cites[1] = "KbDoc turns out that context is a key part of learning.";
    cites[2] = "You can create any type of product documentation with KbDoc";
    cites[3] = "Advanced visual search system powered by Ajax";
    var cite = cites[Math.floor(Math.random() * cites.length)];
    $('#preloader p').text(cite);
    $('#preloader').addClass('loading');

    $(window).on( 'load', function() {
        setTimeout(function () {
            $('#preloader').fadeOut(500, function () {
                $('#preloader').removeClass('loading');
            });
        }, 500);
    })

})(jQuery)