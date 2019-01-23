$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
            navText: ["",""],
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
        responsiveClass:true,
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