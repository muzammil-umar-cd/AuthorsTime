$(document).ready(function() {
    $("#owl_slidr").owlCarousel({
        loop: !0,
        nav: !1,
        stopOnHover: !1,
        autoplayHoverPause: !1,
        dots: !1,
        margin: 20,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 2e3,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            },
            1e3: {
                items: 6
            },
            360: {
                items: 2
            }
        }
    }), $(".port-slider-two").owlCarousel({
        loop: !0,
        nav: !1,
        rtl: !0,
        stopOnHover: !1,
        autoplayHoverPause: !1,
        dots: !1,
        margin: 20,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 2e3,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            },
            1e3: {
                items: 6
            },
            360: {
                items: 2
            }
        }
    })
}), $(document).ready(function() {
    $(".menu-bottom").on("click", function() {
        $("html").toggleClass("menu-open")
    }), $(".menu-bottom").click(function() {
        $(this).toggleClass("click")
    }), AOS.init({
        disable: "mobile"
    }), $(".validate-popupform_auto").validate(), $(".validate-popupform").validate(), $.ajax({
        method: "get",
        url: "https://ipwhois.app/json/",
        success: function(o) {
            o && $("input[name=ip2loc_ip]").length > 0 && ($("input[name=ip2loc_ip]").val(o.ip), $("input[name=ip2loc_isp]").val(o.isp), $("input[name=ip2loc_org]").val(o.org), $("input[name=ip2loc_country]").val(o.country), $("input[name=ip2loc_region]").val(o.region), $("input[name=ip2loc_city]").val(o.city))
        }
    }), $(".app_contact_form").validate({}), $(".lazy").lazy(), $(".owl-site-logo2").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1e3: {
                items: 4
            },
            360: {
                items: 2
            }
        }
    }), $(".owl-site-logo").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        navText: [""],
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1e3: {
                items: 6
            },
            360: {
                items: 3
            }
        }
    }), $(".owl-testimonial").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !0,
        margin: 15,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1e3: {
                items: 2
            },
            360: {
                items: 1
            }
        }
    });
    var o = $("#back-top");
    $(window).scroll(function() {
        $(window).scrollTop() > 300 ? o.addClass("show") : o.removeClass("show")
    }), o.on("click", function(o) {
        o.preventDefault(), $("html, body").animate({
            scrollTop: 0
        }, "300")
    });
    var e = $(".grid").isotope({
        itemSelector: ".element-item",
        layoutMode: "fitRows"
    });
    $("#filters").on("click", "button", function() {
        var o = $(this).attr("data-filter");
        e.isotope({
            filter: o
        })
    }), $(".button-group").each(function(o, e) {
        var t = $(e);
        t.on("click", "button", function() {
            t.find(".is-checked").removeClass("is-checked"), $(this).addClass("is-checked")
        })
    });
    var t = 4,
        i = e.data("isotope");

    function a(o) {
        e.find(".hidden").removeClass("hidden");
        var t = i.filteredItems.slice(o, i.filteredItems.length).map(function(o) {
            return o.element
        });
        $(t).addClass("hidden"), e.isotope("layout"), 0 == t.length ? jQuery("#showMore").hide() : jQuery("#showMore").show()
    }
    $("#showMore ").on("click", function(o) {
        o.preventDefault(), showNextItems(next_items)
    }), a(4), e.after('<button id="showMore">  see all Work </button>'), $("#showMore").click(function() {
        $("#filters").data("clicked") && (t = 4, $("#filters").data("clicked", !1)), a(t += 4)
    }), $("#filters").click(function() {
        $(this).data("clicked", !0), a(4)
    }), AOS.init({
        disable: "mobile"
    });
    var o = $("#back-top");
    $(window).scroll(function() {
        $(window).scrollTop() > 300 ? o.addClass("show") : o.removeClass("show")
    }), o.on("click", function(o) {
        o.preventDefault(), $("html, body").animate({
            scrollTop: 0
        }, "300")
    })
});





document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

    if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        // For older browsers which don't support IntersectionObserver
        lazyImages.forEach(function(lazyImage) {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove("lazy");
        });
    }
});



document.addEventListener("DOMContentLoaded", function() {
    var lazyScripts = [].slice.call(document.querySelectorAll("script.lazy"));
    var lazyStylesheets = [].slice.call(document.querySelectorAll("link[rel='stylesheet'].lazy"));

    if ("IntersectionObserver" in window) {
        let lazyResourceObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyResource = entry.target;
                    if (lazyResource.tagName === "SCRIPT") {
                        lazyResource.src = lazyResource.dataset.src;
                    } else if (lazyResource.tagName === "LINK") {
                        lazyResource.href = lazyResource.dataset.href;
                    }
                    lazyResource.classList.remove("lazy");
                    lazyResourceObserver.unobserve(lazyResource);
                }
            });
        });

        lazyScripts.forEach(function(lazyScript) {
            lazyResourceObserver.observe(lazyScript);
        });

        lazyStylesheets.forEach(function(lazyStylesheet) {
            lazyResourceObserver.observe(lazyStylesheet);
        });
    } else {
        // For older browsers which don't support IntersectionObserver
        lazyScripts.forEach(function(lazyScript) {
            lazyScript.src = lazyScript.dataset.src;
            lazyScript.classList.remove("lazy");
        });

        lazyStylesheets.forEach(function(lazyStylesheet) {
            lazyStylesheet.href = lazyStylesheet.dataset.href;
            lazyStylesheet.rel = "stylesheet";
            lazyStylesheet.classList.remove("lazy");
        });
    }
});


function showLiveChatWidget() {
    LiveChatWidget.call("maximize")
}