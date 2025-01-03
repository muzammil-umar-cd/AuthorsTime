
jQuery(document).ready(function() {
    var key = '5XpThOAEkfgOvEJ';
    var currentIP = jQuery("meta[name=ip2loc]").attr('content');
    var pgurl = jQuery("meta[name=page_url]").attr('content');

    jQuery.ajax({
        method: 'get',
        url: '//pro.ip-api.com/json/' + currentIP,
        data: { key: key },
        success: function(data) {
            if (data) {
                jQuery('input[name=ip2loc_ip]').val(data.query);
                jQuery('input[name=ip2loc_isp]').val(data.isp);
                jQuery('input[name=ip2loc_org]').val(data.org);
                jQuery('input[name=ip2loc_country]').val(data.country);
                jQuery('input[name=ip2loc_region]').val(data.regionName);
                jQuery('input[name=ip2loc_city]').val(data.city);
                jQuery('input[name=pageurl]').val(pgurl);
            }
        }
    });
});

jQuery(document).ready(function() {
    jQuery(".fancybox").fancybox();
});

jQuery('.pkg-slider').slick({
    slidesToShow: 3,
    dots: true,
    arrows: false,
    infinite: false,
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
                arrows: false,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true
            }
        }
    ]
});