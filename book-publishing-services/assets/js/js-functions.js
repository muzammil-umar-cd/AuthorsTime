$(document).ready(function() {
  
    //responsive menu
    $(".menu-bottom").on("click", function() {
        $("html").toggleClass("menu-open")
    });
    $(".menu-bottom").click(function() {
        $(this).toggleClass("click")
    });


     AOS.init({disable: 'mobile'});







 var currentIP = $("meta[name=ip2loc]").attr('content');
    var key = '5XpThOAEkfgOvEJ';

                $.ajax({
                    method: 'get',
                    url: 'https://pro.ip-api.com/json/' + currentIP,
                    data: {key: key},
                    success: function (data) {
                        if (data) {
                            $('input[name=ip2loc_ip]').val(data.query);
                            $('input[name=ip2loc_isp]').val(data.isp);
                            $('input[name=ip2loc_org]').val(data.org);
                            $('input[name=ip2loc_country]').val(data.country);
                            $('input[name=ip2loc_region]').val(data.regionName);
                            $('input[name=ip2loc_city]').val(data.city);
                        }
                    }
        });



        

    /*PORTFOLIO*/
    $('.various').click(function() {
        var leadprice = $(this).attr('name');
        $(".popupform .leadprice").val(leadprice)
    });
    

    $(".validate-banner").validate({});
    $(".app_contact_form").validate({});
    $(".validate-popupform").validate({});
    




    $('.lazy').lazy();

//owlcarousel
    $('.owl-testimonial').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:8000,
        autoplaySpeed: 800,
        margin:10,
        responsive:{
            0:{
                items:3,
            },
            600:{
                items:3,
            },
            1000:{
                items:3,
            },
            360:{
                items:1
            }
        }
    });
    $('.owl-process').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:8000,
        margin:30,
        autoplaySpeed: 800,
        responsive:{
            0:{
                items:4,
            },
            600:{
                items:4,
            },
            1000:{
                items:4,
            },
            360:{
                items:1
            }
        }
    });

AOS.init({disable: 'mobile'});

   

});

window.location.hash || setTimeout(function () {
    $("#autopop").trigger("click");
}, 10000)

