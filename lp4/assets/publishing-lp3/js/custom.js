$(function () {
    AOS.init({
        disable: function () {
            return window.innerWidth < 800;
        },
    }),
        $(window).width() <= 767 &&
            0 != ".process-responsive-slider".length &&
            ($(".process-responsive-slider").addClass("owl-carousel owl-theme"),
            $(".process-responsive-slider").owlCarousel({
                loop: !1,
                margin: 0,
                nav: !0,
                dots: !1,
                autoplay: !0,
                autoplayTimeout: 4e3,
                autoplayHoverPause: !0,
                mouseDrag: !0,
                responsive: {
                    0: { items: 1 },
                    460: { items: 1 },
                    767: { items: 2 },
                    991: { items: 3 },
                },
            })),
        $(".our-promising").owlCarousel({
            loop: !1,
            margin: 10,
            nav: !0,
            dots: !1,
            autoplay: !1,
            mouseDrag: !0,
            responsive: {
                0: { items: 1 },
                767: { items: 2 },
                1100: { items: 3 },
            },
        }),
        $(".we-have").owlCarousel({
            loop: !1,
            margin: 10,
            nav: !0,
            dots: !1,
            responsive: { 0: { items: 2 }, 1440: { items: 2 } },
        });
});

$(".books_slides .row").slick({
    slidesToShow: 3,
    autoplay: false,
    dots: true,
    slidesToScroll: 3,
    adaptiveHeight: true,
    arrows: false,
    responsive: [
        {
            breakpoint: 1370,
            settings: {
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 3,
            },
        },
        {
            breakpoint: 999,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 450,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".slides_bookplatform")
    .not(".slick-initialized")
    .slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 540,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });

if ($(window).width() <= 768) {
    $(".responsive-slider").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: false,
        adaptiveHeight: true,
    });

    $(".process_steps .row").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: false,
        adaptiveHeight: true,
    });
}
$("[data-targetit]").on("click", function (e) {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
    var target = $(this).data("targetit");
    $("." + target)
        .siblings('[class^="box-"]')
        .hide();
    $("." + target).fadeIn();
    $(".package_slider .row").slick("setPosition");
    $(".books_slides .row").slick("setPosition");
});

//bottum-bar
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var width = $(window).width();
    if (width <= 991) {
        if (scroll >= 960) {
            document.getElementById("bbar").style.display = "flex";

            document.getElementById("bbar").style.position = "fixed";

            // $(".bottum-bar").addClass("darkHeader");
        } else {
            document.getElementById("bbar").style.display = "none";

            // $(".clearHeader").removeClass("darkHeader");
        }
    }
});

// $(window).on('load', function () {
//     // setTimeout(function () {
//     //
//     // }, 1500)
//     $('#popupform').modal("show")
// })

$(".packag-slider3").owlCarousel({
    loop: !1,
    nav: true,
    margin: 0,
    navText: [
        '<img src="assets/images/leftarrow.png">',
        '<img src="assets/images/rightarrow.png">',
    ],
    dots: false,
    autoplay: !1,
    autoplayTimeout: 4e3,
    autoplayHoverPause: !0,
    mouseDrag: !0,
    responsiveClass: !0,
    responsive: {
        0: {
            items: 1,
            dots: true,
            nav: false,
        },
        768: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});
