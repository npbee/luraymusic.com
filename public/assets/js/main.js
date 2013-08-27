$(function() {

    //Nav Toggle
    $('.nav-toggle').on('click', function() {
        $("#nav").toggleClass('nav--open');
        $(this).toggleClass("nav-toggle--open");
        return false;
    });




    //Tour Dates Review
    $('table tr').on('click', function(e) {
        if ($(this).hasClass('reviewed')) {
            var     review = "#" + $(this).attr("data-review"),
                  $rowPosition = $(this).position();
            $(this).toggleClass('active');
            $(review).css({
                left: "0",
                top: $rowPosition.top + $(this).height()
            }).slideToggle(100);
            e.preventDefault;
        }
    });
    // $('.reviewed').on("click", function() {
    //     var     review = "#" + $(this).attr("data-review"),
    //               $rowPosition = $(this).position();
    //     $(this).toggleClass('active');
    //     $(review).css({
    //         left: "0",
    //         top: $rowPosition.top + $(this).height()
    //     }).slideToggle(100);
    // });





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
             currentTab = '#' + hash,
             $tabNav = $('.tab-nav a');
        $('.tabs__content').removeClass('tab--active');
        $tabNav.removeClass('tab-nav--active');

        $(currentTab).addClass('tab--active');
        $('.tab-nav a').each(function() {
            if ($(this).attr("href") == currentTab) {
                $(this).addClass('tab-nav--active');
            }
        });
    }

    $('.tab-nav a').on('click', function(e) {
        var     target = $(this).attr('href'),
                  tabContent = $('.tabs__content'),
                  tabNav = $('.tab-nav a'),
                  windowWidth = $(window).width();
        tabContent.removeClass('tab--active');
        tabNav.removeClass('tab-nav--active');
        $(target).addClass('tab--active');
        $(this).addClass('tab-nav--active');
        e.preventDefault();

        if ( windowWidth > 1000) {
            $('html, body').stop().animate({
                'scrollTop': 0
            }, 300, 'swing', function () {
                window.location.hash = target;
            });
        } else {
            $('html, body').stop().animate({
                'scrollTop': $(target).offset().top
            }, 600, 'swing', function () {
                window.location.hash = target;
            });
        }
    });


});