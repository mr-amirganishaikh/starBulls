/*Call functions on document ready*/
$(document).ready(function () {
    //testimonial
    $(".testimonial-bullets span").click(function () {
        var gettestno = $(this).attr("testi");
        $(".testimonial-bullets span").removeClass("test-bullet-active");
        $(this).addClass("test-bullet-active");
        $(".testimonials").hide();
        $(gettestno).fadeIn(1000);
    });

    $('.backtotop').on('click', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        });
});

/*Call functions on window load*/
$(window).load(function () {
    var img_height = $(".img-height").height();
    var quote_height = $(".quote-height").height();
    var height_diff = img_height - quote_height;
    $(".quote-height").css("margin-top", height_diff / 2);
});

/* Call function on window scroll */
$(window).scroll(function () {
    // Add class on scroll
    fixScrollNav({
        target: '.navbar',
        offset: 0
    });
    var conthead_height = $(".contact-header").height();
    var headscroll = $(window).scrollTop();
    //    alert(conthead_height);
    //    alert(headscroll);
    if (headscroll > 500) {
        $('.backtotop').show();
    } else {
        $('.backtotop').hide();
    }
    
    if (headscroll > conthead_height) {
        $("#myNavbar").addClass("fix-navbar");
        $("#myNavbar").addClass("scrollFixed");
        $("#switch-cont").addClass("container-fluid").removeClass("container");
        $(".fix-logo-top").css("top","0");
    } else {
        $("#myNavbar").removeClass("fix-navbar");
        $("#myNavbar").removeClass("scrollFixed");
        $("#switch-cont").addClass("container").removeClass("container-fluid");
        $(".fix-logo-top").css("top","-100px");
    }
    
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