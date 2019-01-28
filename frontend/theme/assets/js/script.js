$(document).ready(function () {
    $(".section-main .owl-carousel").owlCarousel({
            navText: ["", ""],
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
            responsiveClass: true,
        }
    );
    $(".section-stock .owl-carousel").owlCarousel({
            navText: ["", ""],
            loop: false,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1480: {
                    items: 3
                },
            }
        }
    );
    $(".catalog-views .owl-carousel").owlCarousel({
            navText: ["", ""],
            loop: false,
            margin: 20,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1480: {
                    items: 3
                },
            }
        }
    );
});
$(document).ready(function () {
    $(".catalog-present-collections_selector.girl").hover(function () {
        $(".catalog-present-collections_item").removeClass("active");
        $(".catalog-present-collections_item.girl").addClass('active')
    });
    $(".catalog-present-collections_selector.man").hover(function () {
        $(".catalog-present-collections_item").removeClass("active");
        $(".catalog-present-collections_item.man").addClass('active')
    });
    $(".catalog-present-collections_selector.travel").hover(function () {
        $(".catalog-present-collections_item").removeClass("active");
        $(".catalog-present-collections_item.travel").addClass('active')
    });

    $(".astana").click(function () {
        $(".geo-cities_city").removeClass("active");
        $(".map-geo_yandex").removeClass("active");

        $(".geo-cities_city.astana").addClass('active');
        $(".map-geo_yandex.astana").addClass('active');
    });
    $(".karagandy").click(function () {
        $(".geo-cities_city").removeClass("active");
        $(".map-geo_yandex").removeClass('active');

        $(".geo-cities_city.karagandy").addClass('active');
        $(".map-geo_yandex.karagandy").addClass('active');
    });

    $(".girl").click(function () {
        $(".catalog-views").addClass("active");
        $(".catalog-present").removeClass("active");
        $(".catalog-views_close-btn").addClass('active')
        $(".views_navigator_selector").removeClass("active");
        $(".views_navigator_selector.girl").addClass('active');
        $(".custom-catalog").removeClass("active");
        $(".custom-catalog.catalog-women").addClass('active')
    });
    $(".man").click(function () {
        $(".catalog-views").addClass("active");
        $(".catalog-present").removeClass("active");
        $(".catalog-views_close-btn").addClass('active')
        $(".views_navigator_selector").removeClass("active");
        $(".views_navigator_selector.man").addClass('active');
        $(".custom-catalog").removeClass("active");
        $(".custom-catalog.catalog-man").addClass('active')
    });
    $(".travel").click(function () {
        $(".catalog-views").addClass("active");
        $(".catalog-present").removeClass("active");
        $(".catalog-views_close-btn").addClass('active')
        $(".views_navigator_selector").removeClass("active");
        $(".views_navigator_selector.travel").addClass('active');
        $(".custom-catalog").removeClass("active");
        $(".custom-catalog.catalog-travel").addClass('active')
    });


    $(".girl").click(function () {
        $(".catalog-views").addClass("active");
        $(".catalog-present").removeClass("active");
        $(".catalog-views_close-btn").addClass('active')
        $(".views_navigator_selector").removeClass("active");
        $(".views_navigator_selector.girl").addClass('active');
        $(".custom-catalog").removeClass("active");
        $(".custom-catalog.catalog-women").addClass('active')
    });
    $(".man").click(function () {
        $(".catalog-views").addClass("active");
        $(".catalog-present").removeClass("active");
        $(".catalog-views_close-btn").addClass('active')
        $(".views_navigator_selector").removeClass("active");
        $(".views_navigator_selector.man").addClass('active');
        $(".custom-catalog").removeClass("active");
        $(".custom-catalog.catalog-man").addClass('active')
    });
    $(".travel").click(function () {
        $(".catalog-views").addClass("active");
        $(".catalog-present").removeClass("active");
        $(".catalog-views_close-btn").addClass('active')
        $(".views_navigator_selector").removeClass("active");
        $(".views_navigator_selector.travel").addClass('active');
        $(".custom-catalog").removeClass("active");
        $(".custom-catalog.catalog-travel").addClass('active')
    });
    $(".catalog-views_close-btn").click(function () {
        $(".catalog-views").removeClass("active");
        $(".catalog-views_close-btn").removeClass('active');
        $(".custom-catalog").removeClass("active");
        $(".catalog-present").addClass('active')
    });


    $(".navigation-vertical-left").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });

    $(document).scroll(function () {
        if (($(document).scrollTop() >= $('#to-custumers').position().top) && ($(document).scrollTop() <= $('#to-custumers').position().top + $('#to-custumers').height())) {
            $('.menu-section-pagination_item').removeClass('active');
            $('#pagination-main').addClass('active');
            $('#current-page').empty()
            $('#current-page').append('01')
        }
        if (($(document).scrollTop() >= $('#collection').position().top) && ($(document).scrollTop() <= $('#collection').position().top + $('#collection').height())) {

            $('.menu-section-pagination_item').removeClass('active');
            $('#pagination-collection').addClass('active');
            $('#current-page').empty()
            $('#current-page').append('02')
        }
        if (($(document).scrollTop() >= $('#section-stock').position().top) && ($(document).scrollTop() <= $('#section-stock').position().top + $('#section-stock').height())) {

            $('.menu-section-pagination_item').removeClass('active');
            $('#pagination-stock').addClass('active');
            $('#current-page').empty()
            $('#current-page').append('03')
        }
        if (($(document).scrollTop() >= $('#about').position().top) && ($(document).scrollTop() <= $('#about').position().top + $('#about').height())) {

            $('.menu-section-pagination_item').removeClass('active');
            $('#pagination-about').addClass('active');
            $('#current-page').empty()
            $('#current-page').append('04')
        }
    })
});