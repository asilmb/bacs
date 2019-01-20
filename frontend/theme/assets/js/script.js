$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
            navText: ["<div class='slider-item_nav'><div class='slider-item-nav_arrow slider-item-nav_arrow--left'></div></div>",
                "<div class='slider-item_nav'><div class='slider-item-nav_arrow slider-item-nav_arrow--right'></div></div>"],
            loop: true,
            margin: 0,
            nav: true,
            items: 1
        }
    );

});