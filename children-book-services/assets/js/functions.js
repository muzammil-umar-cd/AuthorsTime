$(document).ready(function () {

    AOS.init();
    AOS.init({ disable: 'mobile' });
    $(".menu-btn").click(function () {
        $(".mobile-In").fadeIn();
        $(".mobile-In").css("transform", "translateX(0px)");
    });
    $(".close-btn").click(function () {
        $(".mobile-In").fadeOut();
        $(".mobile-In").css("transform", "translateX(2000px)");
    });


    $('.port-slider-one').owlCarousel({
        loop: true,
        nav: true,
        stopOnHover: false,
        autoplayHoverPause: false,
        dots: true,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 800,
        navText: ["<i class='fad fa-chevron-left'></i>", "<i class='fad fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            },
            360: {
                items: 2
            }
        }
    });
    $('.port-slider-two').owlCarousel({
        loop: true,
        nav: true,
        rtl: true,
        stopOnHover: false,
        autoplayHoverPause: false,
        dots: true,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 800,
        navText: ["<i class='fad fa-chevron-left'></i>", "<i class='fad fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            },
            360: {
                items: 2
            }
        }
    });
    $(function(){
    $('.am-pub-slider').owlCarousel({
        stagePadding: 150,
        loop: true,
        center: true,
        nav: false,
        dots: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            360: {
                items: 1
            }
        }
    });
    $('.am-pub-slider').on('initialized.owl.carousel translate.owl.carousel', function(e){
        idx = e.item.index;
        $('.owl-item.big').removeClass('big');
        $('.owl-item.medium').removeClass('medium');
        $('.owl-item').eq(idx).addClass('big');
        $('.owl-item').eq(idx-1).addClass('medium');
        $('.owl-item').eq(idx+1).addClass('medium');
    });
});
    $('.location-ser-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 5,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            360: {
                items: 1
            }
        }
    });
    $('.book-sell-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 6,
            },
            360: {
                items: 3
            }
        }
    });
    $('.footer-mar').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 10000,
        autoplaySpeed: 35000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            360: {
                items: 1
            }
        }
    });
    $('.tel-story-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            360: {
                items: 2
            }
        }
    });
    $('.pub-process').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            360: {
                items: 2
            }
        }
    });
    // Header Sticky Position

    var offset = $(".nav-bar").offset();
    checkOffset();

    $(window).scroll(function () {
        checkOffset();
    });

    function checkOffset() {
        if ($(document).scrollTop() > offset.top) {
            $('.nav-bar').addClass('sticky-nav-bar');
        } else {
            $('.nav-bar').removeClass('sticky-nav-bar');
        }
    }

    // if ($(".nav-bar").hasClass("sticky-nav-bar")) {

    //     $("#siteLogo").attr('src', 'assets/images/flogo.png');

    // } else {
    //     $("#siteLogo").attr('src', 'assets/images/logo.png');
    // }
    // Publishing process content
    // const content = document.querySelectorAll(".publishing-icons .icon-content");
    // content.forEach((div, index) => {
    //     setTimeout(() => {
    //         div.style.opacity = 1;
    //     }, 6000 + index * 1000);
    // });
    // Publishing process content End

    // Header Sticky Position
    // ******************************************************
    // When the switch button is toggled
    $("#mySwitch").on("change", function () {
        // If the switch is on
        if ($(this).is(":checked")) {
            // Show the section that will change
            $("#mySection").show();
        } else {
            // Hide the section that will change
            $("#mySection").hide();
        }
    });

    // ******************************************************
    // Validation Form******************************************
    $(".validate-bottom-form").validate({});
    $(".validate-letsget").validate({});
    $(".contact-form").validate({});
    // End Validation***********************************

    $('#list-btn').click(function () {
        document.getElementById('list-btn').style.display = "none";
        document.getElementById('cross').style.display = "block";
        document.getElementById('menu-list').style.left = "0px";
        // document.getElementById('form-cross').style.display = "none";
        // document.getElementById('cpyRight-cross').style.display = "none";
    });
    $('#cross').click(function () {
        document.getElementById('list-btn').style.display = "block";
        document.getElementById('cross').style.display = "none";
        document.getElementById('menu-list').style.left = "150%";
        // document.getElementById('form-cross').style.display = "block";
        // document.getElementById('cpyRight-cross').style.display = "none";
    });

    // Arrow Btn goto up
    var scrollBtn = $('#goto-top');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            scrollBtn.addClass('show');
        } else {
            scrollBtn.removeClass('show');
        }
    });
    scrollBtn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });

    // Get the <span> element that closes the modal
    // var span = document.getElementsByClassName("close")[0];

    // // When the user clicks on <span> (x), close the modal
    // span.onclick = function () {
    //     modal.style.display = "none";
    // }


    //****************************
    // Isotope Load more button
    //****************************
    var initShow = 8; //number of items loaded on init & onclick load more button
    var counter = initShow; //counter for load more button
    var iso = $container.data('isotope'); // get Isotope instance

    // loadMore(initShow); //execute function onload //Error In console this is why committed

    function loadMore(toShow) {
        $container.find(".hidden").removeClass("hidden");

        var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function (item) {
            return item.element;
        });
        $(hiddenElems).addClass('hidden');
        $container.isotope('layout');

        //when no more to load, hide show more button
        if (hiddenElems.length == 0) {
            jQuery("#showMore").hide();
        } else {
            jQuery("#showMore").show();
        };

    }

    /*
    end*/
    // Select all <img> elements without an alt attribute
    // $('img:not([alt])').each(function () {
    //     // Get the image's file name without extension
    //     var filename = $(this).attr('src').split('/').pop().split('.')[0];

    //     // Capitalize the first letter of each word in the filename
    //     var altText = filename.replace(/(?:^|\s)\S/g, function (a) {
    //         return a.toUpperCase();
    //     });

    //     // Set the alt attribute with the generated alt text
    //     $(this).attr('alt', altText);
    // });
    // OR
    //     document.addEventListener('DOMContentLoaded', function () {
    //         var images = document.querySelectorAll('img:not([alt])');
    //         images.forEach(function (image) {
    //             var filename = image.src.split('/').pop().split('.')[0];
    //             var altText = filename.replace(/(?:^|\s)\S/g, function (a) {
    //                 return a.toUpperCase();
    //             });
    //             image.setAttribute('alt', altText);
    //         });
    //     });

});


// Tabs Click To Remove active class 
var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
$('#menu-list .menu li a').each(function () {
    if (this.href === path) {
        $(this).addClass('active');
        e.preventDefault();
    }
});
// Tabs Click To Remove active class End
