
$(function() {
    //AOS.init();

    $('.fa-bars').click( function() {
        $('.mobile_menu_homepage').slideToggle(250);
        $('.mobile_menu').slideToggle(250);
    });

    // $(document).ready(function(){
       $(window).bind('scroll', function() {
       var navHeight = 200;
             if ($(window).scrollTop() > navHeight) {
                $('.homepage_nav').addClass('fixed');
                $('.mobile_menu_homepage').addClass('fixed_mobile');
             }
             else {
                $('.homepage_nav').removeClass('fixed');
                $('.mobile_menu_homepage').removeClass('fixed_mobile');
             }
        });
    // });

    tinymce.init({
        selector:   ".ti_edit",
        themes:     "modern",
        plugins:    "lists image imagetools media link",
        language:   "nl"
    });
    
    $('.iframe-btn').fancybox({ 
        'width'     : 900,
        'height'    : 600,
        'type'      : 'iframe',
        'autoScale'     : false
    });

    function close_window() {
        parent.$.fancybox.close();
    } 
});
