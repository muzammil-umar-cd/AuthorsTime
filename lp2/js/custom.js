
// Function to open the modal
    function openModal() {
        var modal = document.querySelector('.popup-modal');
        modal.style.display = 'flex';
    }

    // Function to close the modal
    function closeModal() {
        var modal = document.querySelector('.popup-modal');
        modal.style.display = 'none';
    }

    // Add click event listeners to open and close the modal
    $('.popup-btn').click(function(){
        openModal()
    })
    // var openButton = document.querySelector('.popup-btn');
    // openButton.addEventListener('click', openModal);

    var closeButton = document.querySelector('.close-popup');
    closeButton.addEventListener('click', closeModal);
AOS.init({
  disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
});
$(window).width() <= 991 && 0 != ".responsive-choose-slider".length && ($(".responsive-choose-slider").addClass("owl-carousel owl-theme"), 
$(".responsive-choose-slider").owlCarousel({
    loop: !1,
    margin: 0,
    nav: !1,
    dots: !0,
    mouseDrag: !0,
    responsive: {
        0: {
            items: 2,
            nav:false
        },
        576: {
            items: 3,
            nav:false
        },
        767: {
            items: 4,
            nav:false
        },
        991: {
            items: 5,
            nav:false
        }
    }
}));

if($( window ).width() <= 767){
    if($('.responsive-package-slider').length != 0){
        $('.responsive-package-slider').addClass('owl-theme owl-carousel');
        $('.responsive-package-slider').owlCarousel({
            loop:false,
            margin:0,
            nav:false,
            autoplay:false,
            rewind:true,
            dots:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                576:{
                    items:1
                },
                768:{
                    items:1
                }
            }
        })
    }
};
$(".process_slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay:true,
        autoplayTimeout:3500,
        autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
// Poppup JS
$('.openpopup').click(function () {
  $("#entry-popup").css('display', 'flex');
});

$("#entry-box_close").click(function () {
  $("#entry-popup").fadeOut()
});
// End Poppup JS

var currentTab = 0;


function showTab(t) {
    var e = document.getElementsByClassName("tab");
    e[t].style.display = "block", 0 == t ? 
    (document.getElementById("prevBtn").style.display = "none", 
    document.getElementById("signupBtn").style.display = "none", 
    document.getElementById("nextBtn").style.display = "inline") : 
    document.getElementById("prevBtn").style.display = "inline", 
    t == e.length - 1 ? (document.getElementById("nextBtn").style.display = "none", 
    document.getElementById("signupBtn").style.display = "inline") : 
    document.getElementById("nextBtn").innerHTML = "Next"
}

function nextPrev(t) {
    var e = document.getElementsByClassName("tab");
    if (1 == t && !validateForm()) return !1;
    e[currentTab].style.display = "none", showTab(currentTab += t)
}

function validateForm() {
    var t, e, a = !0;
    for (t = document.getElementsByClassName("tab")[currentTab].getElementsByTagName("input"), 
    e = 0; e < t.length; e++) "" == t[e].value && (t[e].className += " invalid", a = !1);
    return a
}

$(document).ready(function() {
    function blink_text() {
        $('.call-number').fadeOut(1000);
        $('.call-number').fadeIn(1100);
    }
    setInterval(blink_text, 1000);


});
$(document).ready(function() {
    // Function to perform the bounce effect
    function doBounce(element, times, distance, speed) {
        element.animate({ marginTop: '-=' + distance }, speed)
            .animate({ marginTop: '+=' + distance }, speed, function() {
                // Call doBounce recursively after the animation completes
                doBounce(element, times - 1, distance, speed);
            });
    }

    // Start the bouncing effect on load
    doBounce($(".float-btn"), Infinity, '10px', 100);
});




$(document).ready(function() {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function() {
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});



   



$('.logos-slider-main-wrap').owlCarousel({
    loop: true,
    dots: false,
    margin: 0,
    autoplay: false,
    nav: false,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })
  

$(".books-slider-2").owlCarousel({
    loop: true,
    dots: false,
    margin: 0,
    smartSpeed: 2000,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    nav: false,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 2
      },
      1000: {
        items: 5
      }
    }
})


var slider = $(".books-slider-2");

slider.on('mouseenter', function () {
    slider.trigger('stop.owl.autoplay');
});

slider.on('mouseleave', function () {
    slider.trigger('play.owl.autoplay');
});



$(".testimonials-sliders").owlCarousel({
    loop: true,
    dots: false,
    margin: 10,
    autoplay: false,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
})





