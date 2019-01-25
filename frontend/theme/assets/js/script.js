$(document).ready(function () {
    $(".section-main .owl-carousel").owlCarousel({
            navText: ["",""],
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
            responsiveClass:true,
        }
    );
    $(".section-stock .owl-carousel").owlCarousel({
            navText: ["",""],
            loop:true,
            margin: 10,
            nav:true,
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
$(document).ready(function(){

    $(".girl").hover(function(){
        $(".catalog-present-collections_item").removeClass("active");
        $(".catalog-present-collections_item.girl").addClass('active')
    });
    $(".man").hover(function(){
        $(".catalog-present-collections_item").removeClass("active");
        $(".catalog-present-collections_item.man").addClass('active')
    });
    $(".travel").hover(function(){
        $(".catalog-present-collections_item").removeClass("active");
        $(".catalog-present-collections_item.travel").addClass('active')
    });

});
$(document).ready(function(){
    $(".astana").click(function(){
        $(".geo-cities_city").removeClass("active");
        $(".map-geo_yandex").removeClass("active");

        $(".geo-cities_city.astana").addClass('active');
        $(".map-geo_yandex.astana").addClass('active');
    });
    $(".karagandy").click(function(){
        $(".geo-cities_city").removeClass("active");
        $(".map-geo_yandex").removeClass('active');

        $(".geo-cities_city.karagandy").addClass('active');
        $(".map-geo_yandex.karagandy").addClass('active');
    });

});