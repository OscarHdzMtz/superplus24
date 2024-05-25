$(window).on('load', function() {
    setTimeout(function() {
        $(".loader-page").css({
            visibility: "hidden",
            opacity: "0"
        })
    }, 2000);
    setTimeout(function() {
        $(".loader-page-img").css({
            visibility: "hidden",
            opacity: "0"
        })
    }, 2000);
    setTimeout(function() {
        $("#preloader").css({
            visibility: "hidden",
            opacity: "0"
        })
    }, 2000);

});