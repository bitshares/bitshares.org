//SMOOTH TOP DOWN SCROLLING



//Desktop Navigation Scroll
$(document).ready(function() {

    $(".scroll-link").click(function() {
        var ScrollOffset = $(this).attr('data-soffset');
        //alert(ScrollOffset);
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top-ScrollOffset + "px"
        }, {
            duration: 1800,
            easing: "easeInOutExpo"
        });
       

        return false;
    });

});