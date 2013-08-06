$(function() {

    //Nav Toggle
    $('.nav-toggle').on('click', function() {
        $("#nav").toggleClass('nav--open');
        $(this).toggleClass("nav-toggle--open");
    });




    //Tour Dates Review
    $('.reviewed').on("click", function() {
        var     review = "#" + $(this).attr("data-review"),
                  $rowPosition = $(this).position();
        $(this).toggleClass('active');
        $(review).css({
            left: "0",
            top: $rowPosition.top + $(this).height()
        }).slideToggle(100);
    });





    //lightbox
    $('.lightbox-trigger').colorbox({
        scalePhotos: true,
        maxHeight: "100%",
        maxWidth: "100%",
        rel: "img"
    });




    //Tabs
    if(window.location.hash) {
        var hash = window.location.hash.substring(1),
             currentTab = '#' + hash;
        $('.tabs__content').removeClass('tab-active');
        $(currentTab).addClass('tab-active');
    }

    $('.tabs-nav a').on('click', function(e) {
        var     target = $(this).attr('href'),
                  tabContent = $('.tabs__content');
        tabContent.removeClass('tab-active');
        $(target).addClass('tab-active');
        e.preventDefault();

        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, 300, 'swing', function () {
            window.location.hash = target;
        });
    });







    $('.date-select').datepicker({
        format: "yyyy-mm-dd"
    });

    $('form[data-confirm]').submit(function() {
        if ( !confirm($(this).attr('data-confirm'))) {
            return false;
        }
    });



});