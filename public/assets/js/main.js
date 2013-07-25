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


    $('.date-select').datepicker({
        format: "yyyy-mm-dd"
    });

    $('form[data-confirm]').submit(function() {
        if ( !confirm($(this).attr('data-confirm'))) {
            return false;
        }
    });



});