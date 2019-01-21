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
    $('.girl_collection').show();
    $(".men").hover(function(){
        $('.men_collection').show();
        $('.girl_collection').hide();
    },function(){
        $('.men_collection').hide();
        $('.girl_collection').show();
    });
    $(".travel").hover(function(){
        $('.travel_collection').show();
        $('.girl_collection').hide();
    },function(){
        $('.travel_collection').hide();
        $('.girl_collection').show();
    });

});