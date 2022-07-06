$(document).ready(function () {
     $(window).on('load',function(){
        $('#exampleModalCenter').modal('show');
    });
    $('.main-menu-toggle').click(function () {

        $(this).parent('.container').children('.main-menu-container-collapse').first().slideToggle('1000');
    });
    /* **
     * Sub Menu
     **/
    $('nav .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-plus"></i> </span>');
    $('nav .page_item_has_children').append('<span class="sub-toggle-children"> <i class="fa fa-plus"></i> </span>');

    $('nav .sub-toggle').click(function () {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

    $('.navbar .sub-toggle-children').click(function () {
        $(this).parent('.page_item_has_children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

    $(".vert-slider").owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplayTimeout: 1500,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp'
    });

    $(".photo-slider-img").owlCarousel({
        loop: true,
        autoplay: true,
        items: 1,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplayTimeout: 4000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],

    });

    $('.subscribe-button').click(function() {
        $('.search-form-wrap').toggleClass('search-form-active');
    });

});