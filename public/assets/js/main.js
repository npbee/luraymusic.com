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

    //lightbox
    $('.lightbox-trigger').colorbox({
        scalePhotos: true,
        maxHeight: "100%",
        maxWidth: "100%",
        rel: "img"
    });

    /**********
     * $TABS
     **********/
    var $tabs = $('.tabs');

    $tabs.on('click', 'a', function(e) {
        var $link = $(this);
        var $links = $link.closest('ul').find('a');
        var targetHref = $link.attr('href');
        var $target = $(targetHref);
        var $contents = $target.closest('.tab__content').find('section');

        $links.each(function(index, link) {
            $(link).removeClass('tab--active');
        });

        $contents.each(function(index, content) {
            $(content).removeClass('tab--active');
        });

        $link.addClass('tab--active');
        $target.addClass('tab--active');

        if (history.pushState) {
            history.pushState(null, null, targetHref);
        }

        e.preventDefault();
    });

    if(window.location.hash) {
        var hash = window.location.hash;
        var $targetContent = $(hash);
        var $targetLink = $('[href=' + hash + ']');
        var $links = $targetLink.closest('ul').find('a');
        var $contents = $targetContent.closest('.tab__content').find('section');

        $links.each(function(index, link) {
            $(link).removeClass('tab--active');
        });

        $contents.each(function(index, content) {
            $(content).removeClass('tab--active');
        });

        $targetLink.addClass('tab--active');
        $targetContent.addClass('tab--active');

    }

    //PNG FALLBACK
    if(!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function() {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }

});
