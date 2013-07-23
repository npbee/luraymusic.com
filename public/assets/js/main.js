$(function() {

    $('.nav-toggle').on('click', function() {
        $("#nav").toggleClass('nav--open');
        $(this).toggleClass("nav-toggle--open");
    });

});