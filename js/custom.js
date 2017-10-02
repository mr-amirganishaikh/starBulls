/*Call functions on document ready*/
$(document).ready(function () {
    //testimonial
    $(".testimonial-bullets span").click(function(){
        var gettestno = $(this).attr("testi");
        $(".testimonial-bullets span").removeClass("test-bullet-active");
        $(this).addClass("test-bullet-active");
        $(".testimonials").hide();
        $(gettestno).fadeIn(1000);
    });
});

/*Call functions on window load*/
$(window).load(function () {

});

/* Call function on window scroll */
$(window).scroll(function () {
    // Add class on scroll
    fixScrollNav({
        target: '.navbar',
        offset: 0
    });
});


/* Declare all Functions below */


// Start Add/remove class on scroll
var fixScrollNav = function (options) {
        // Target declaration
        var target = options.target;

        // offset and offsetHeight declaration
        var offset = options.offset;
        var offsetHeight = 0;
        if (isNaN(offset)) {
            offsetHeight = $(offset).outerHeight();
        } else {
            offsetHeight = offset;
        }

        if ($(window).scrollTop() > offsetHeight) {
            $(target).addClass("scrollFixed");
        } else {
            $(target).removeClass("scrollFixed");
        }
    }
    // End Add/remove class on scroll