<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/fancybox.js"></script>
      <script src="js/fontawesome.js"></script>

      <script src="js/slick.js"></script>
      <script src="js/accordian-jquery-ui.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
      
     <!-- Start of designneshelp Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
      <!-- End of designneshelp Zendesk Widget script -->
      
    <script>
    $('.livechat, .live_chatt, .chatt, .chats').click(function () {
            $zopim.livechat.window.toggle();
            return false;
          }
          );
          $(window).on('load', function() {
                $zopim.livechat.window.show();
          });
    zE(function() {
            zE.activate();
        });
        zE(function() {
            $zopim(function() {
              $zopim.livechat.setOnUnreadMsgs(unread);
                function unread(number) {
                if (number>=1)
                {
                    $zopim.livechat.window.toggle();
                    $zopim.livechat.window.show();
                }
                }
            });
        });
        
    </script>
    <script type="text/javascript">
   $('.popup-btn').on('click', function() {
    $('.popupform-main-new-popup').addClass('active');
    $('body').addClass('o-hidden');
    $('.overlay-bg-new-popup').fadeIn(500);
});

$('.close-btn, .overlay-bg-new-popup').on('click', function() {
    $('.popupform-main-new-popup').removeClass('active');
    $('body').removeClass('o-hidden');
    $('.overlay-bg-new-popup').fadeOut(500);
});
</script>
<script>


	$('.client-test-slider').slick({
    dots: false,
    infinite: false,
    arrows: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                arrows:false,
                dots:true,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows:false,
                dots:true,
                slidesToScroll: 1
            }
        }
    ]
});


	$('.popup-btn').on('click', function($) {
    $('.popupform-main-new-popup').addClass('active');
    $('body').addClass('o-hidden');
    $('.overlay-bg-new-popup').fadeIn(500);
    $('.close-btn').on('click', function($) {
        $('.popupform-main-new-popup').removeClass('active');
        $('body').removeClass('o-hidden');
        $('.overlay-bg-new-popup').fadeOut(500);
    });
    $('.overlay-bg-new-popup').click(function($) {
        $('.popupform-main-new-popup').removeClass('active');
        $('body').removeClass('o-hidden');
        $('.overlay-bg-new-popup').fadeOut(500);
    });
});

$(document).ready(function($) {
    //var currentIP;
    var key = '5XpThOAEkfgOvEJ';
    var currentIP = $("meta[name=ip2loc]").attr('content');
    var pgurl = $("meta[name=page_url]").attr('content');
    $.ajax({
        method: 'get',
        url: '//pro.ip-api.com/json/' + currentIP,
        data: {key: key},
        success: function (data) {
            if (data) {
                $('input[name=ip2loc_ip]').val(data.query);
                $('input[name=ip2loc_isp]').val(data.isp);
                $('input[name=ip2loc_org]').val(data.org);
                $('input[name=ip2loc_country]').val(data.country);
                $('input[name=ip2loc_region]').val(data.regionName);
                $('input[name=ip2loc_city]').val(data.city);
                $('input[name=pageurl]').val(pgurl);
            }
        }
    });
});

$(document).ready(function($) {
    $(".fancybox").fancybox();
});
function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8);
};
function order_now_value(objButton){
    x = objButton.name;
    document.getElementById('lead_area_popup1').value = x;
    document.getElementById('lead_text').innerHTML = x;
}

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 10000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
$('.partnerslider').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    pauseOnHover: false,
    cssEase: 'linear',
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: true
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
        }
    ]
});
$('.process-slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                arrows: true,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows:false,
                dots:true,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows:false,
                dots:true,
                slidesToScroll: 1
            }
        }
    ]
});
$(".chats").click(function($) {
    $zopim.livechat.window.show();
});
$('.pkg-slider').slick({
    slidesToShow: 3,
    dots: true,
    arrows:false,
    infinite: false,
    // autoplay:true,
    // autoplaySpeed:2000,
    // speed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
                dots: true
            }
        }
    ]
});
$('.clickbutton').on('click', function($) {
    $('.floatbutton').toggleClass("active");
});
$(document).scroll(function($) {
    myID = document.getElementById("floatbutton_st");
    var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 400) {
            myID.className = "floatbutton show"
        } else {
            myID.className = "floatbutton hide"
        }
    };
    window.addEventListener("scroll", myScrollFunc);
});
</script>
<script>
        $(document).ready(function () {
            $('input[name="phone"]').attr('placeholder', '(123) 123-1234*');
            $('input[name="phone"]').on('input', function () {
                // Remove non-numeric characters from input value
                var input = $(this).val().replace(/\D/g, '');

                // Format the input as (123) 123-1234 if there are at least 10 digits
                if (input.length >= 10) {
                    var formattedNumber = '(' + input.substr(0, 3) + ') ' + input.substr(3, 3) + '-' + input.substr(6, 4);
                    $(this).val(formattedNumber);
                }
                else {
                    // If the input is less than 10 digits, keep it as is
                    $(this).val(input);
                }
            });
        });
    </script>
</body>

   </html> 