<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-box-1">
                    <img src="assets/images/logo.png">
                    <p>
                        <?php echo WEBSITE_NAME; ?> is a content agency that offers you the best of writing, design,
                        publishing, and
                        marketing. We have an expert team of dedicated and committed professionals to take on any
                        project
                        with our instant solutions for your books with worldwide marketing channels!
                    </p>
                    <ul class="clock-box-links">
                        <li><a href="<?php echo PHONE_HREF; ?>">
                                <?php echo PHONE; ?>
                            </a></li>
                        <li><a href="mailto:<?php echo ADMIN_EMAIL; ?>"><span class="">
                                    <?php echo ADMIN_EMAIL; ?>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <h6>
                        <?php echo ADDRESS; ?>
                    </h6>
                    <div class="social-links">
                        <h5>Social links</h5>
                        <ul class="social-links-list">
                            <li><a href="https://www.facebook.com/authorsstime"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/authors-time/"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/authorstime/"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.trustpilot.com/review/authorstime.com"><i class="fa fa-star"
                                        aria-hidden="true"></i></a></li>
                            <!--<li><a href="javascript:;"><i class="fa fa-twitter"></i></a>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="footer-box-2">
                    <h4>Services</h4>
                    <ul class="services-links">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="ghost-writing">Ghostwriting</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="website-content-writing">Website Content Writing</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="book-publishing">Publishing</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="proofreading">Proofreading</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="audio-book">Audio Book</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="book-cover">Book Cover</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="book-promotions">Book Promotion</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="formatting">Formatting</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="ebook-writing">ebook Writing</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="blog-writing">Blog Writing</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="book-editing">Editing</a>
                        </li>
                        <!--<li><i class="fa fa-chevron-right" aria-hidden="true"></i>-->
                        <!--  <a href="web-design-seo.php">Web Design & Seo</a>-->
                        <!--</li>-->
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="article-writing">Article Writing</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="book-video-trailer">Book Video Trailer</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <a href="author-website">Author Website</a>
                        </li>
                    </ul>
                    <ul class="awards-links">
                        <li><img src="assets/images/award-01.png"></li>
                        <li><img src="assets/images/award-02.png"></li>
                        <li><img src="assets/images/award-03.png"></li>
                        <li><img src="assets/images/award-04.png"></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="feather-img">
                    <img src="assets/images/feather.png">
                </div>
            </div>
        </div>
    </div>
</footer>
<!--  -->
<hr class="footer-hr">
<!--  -->
<section class="copyright-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul class="copyright-sec-list">
                    <!--<li class="first"><a href="javascript:;">Disclaimer</a></li>-->
                    <li><a href="terms-conditions">Terms And Conditions</a></li>
                    <li><a href="privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <p>© 2024
                    <?php echo WEBSITE_NAME; ?>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-3">
                <div class="payment">
                    <img src="assets/images/payment.png">
                </div>
            </div>
        </div>
    </div>
</section>


<script src="assets/js/jquery.js" defer></script>

<script>
$(document).ready(function() {
    $('img').each(function() {
        // Set the alt attribute to a desired value. Example: 'Image description'
        $(this).attr('alt', 'Authors Time');
    });
});
</script>
<script src="assets/js/owl.carousel.min.js" defer></script>
<script src="assets/js/owl.carousel.js" defer></script>
<script src="assets/js/clock.js" defer></script>
<script src="assets/js/custom.js" defer></script>
<script src="assets/js/wow.min.js" defer></script>

<style>
.overlay-bg {
    background: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
    display: none;
    z-index: 999;
}

.popupform.new-popup-form {
    max-width: 980px;
    padding: 0;
    overflow: visible;
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    width: 100%;
    background: #fff;
    height: max-content;
    z-index: 99999;
}

.popupform.new-popup-form::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 430px;
      background: url(images/pop-bg) no-repeat 0px 0px / 90%;
   }

.popupform.new-popup-form::after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      height: 486px;
      width: 326px;
      background: url(images/pop-img.png) no-repeat 0 0 / 100%;
   }



.popup-content h2 {
    font-family: 'Poppins';
    font-size: 24px;
    padding: 0;
    color: #313131;
    padding-left: 0;
    font-weight: 600;
    margin: 0 0 1px;
}

.popup-content h2::before {
    display: none;
}

.popup-content p {
    margin: 0 0 10px;
    color: #313131;
    font-weight: 500;
    font-size: 14px;
}

.custom-pop {
    padding: 30px 0;
}

.popup-content p.form_tagline {
    max-width: 100%;
    font-size: 11px;
    margin: 0;
    position: relative;
    padding-left: 15px;
}

.popup-content p.form_tagline input {
    vertical-align: middle;
    height: auto;
    position: absolute;
    left: 0;
}


.popup-content [class*='col-'] {
    padding: 0 7px;
    margin-top: 14px;
}

.popup-content [class*='col-'] input {
    color: #313131;
    font-weight: 400;
    font-size: 13px;
    height: 40px;
    margin-bottom: 12px;
    border-radius: 0;
    border-bottom: 1px solid #ced4da;
}

.popup-content [class*='col-'] input::placeholder,
.popup-content [class*='col-'] textarea::placeholder {
    color: #313131;
}

.popup-content [class*='col-'] textarea {
    color: #313131;
    font-weight: 400;
    font-size: 13px;
    height: 100%;
    border-radius: 0;
    resize: none;
}

.popup-content [class*='col-'] input.btn {
    background: #002868;
    color: #fff;
    margin: auto;
    padding: 0px 30px;
    /* color: #000; */
    letter-spacing: 1px;
    font-weight: 600;
}

.pop-txt {
    left: -44px;
    padding: 0;
}

.popup-content [class*='col-'] input:focus {
    box-shadow: none;
    outline: none;
}

.popupform.new-popup-form button.fancybox-button {
    background: #05c0ad;
    height: 30px;
    width: 30px;
    padding: 0;
    border-radius: 4px;
    opacity: 1;
    top: -10px;
    right: -10px;
}

.popupform.new-popup-form button.fancybox-button svg path {
    fill: #fff;
}

.popupform.new-popup-form button.fancybox-button svg {
    height: 26px;
}

.popupform.new-popup-form.active {
    display: block;
}

.close-btn.ta-center {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 16px;
    background: #002868;
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

@media(max-width: 767px) {
    .popupform.new-popup-form::after {
        display: none;
    }

    .popupform.new-popup-form {
        width: auto;
        padding: 0 10px;
        margin: auto;
        margin-left: 30px;
        margin-right: 30px;
    }

    .pop-txt {
        left: 0;
    }

    .custom-pop {
        width: 100%;
    }

    .custom-pop .row {
        width: 100%;
        margin: 0;
    }

    .custom-pop .col-md-5 {
        display: none;
    }

    .custom-pop .col-md-7 {
        width: 100%;
        max-width: 100%;
    }

    .popupform.new-popup-form::before {
        display: none;
    }

    .popup-content h2 {
        font-size: 18px !important;
    }

    .popup-content [class*='col-'] input {
        border: 1px solid #ced4da;
    }

    .popup-content p.form_tagline {
        text-align: left;
    }

    .popup-content p.form_tagline input {
        top: 5px;
    }
}
</style>


<div class="overlay-bg"></div>
<div class="popupform new-popup-form" id="popupform">
   <a href="javascript:;" class="close-btn ta-center">X</a>
   <div class="custom-pop">
      <div class="row">
         <div class="col-md-5">
         </div>
         <div class="col-md-7 pop-txt">
            <div class="popup-content">
               <h2>We Are the Book Publishing Experts</h2>
               <p class="pt-2">Introduce Your Book to the World Through Our World's Best Publishing Services!</p>
               <form method="Post" class="validate-popupform">
                  <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                  <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                  <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                  <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                  <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                  <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                  <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                  <input type="hidden" name="form_name" value="POPUP FORM" />
                  <input type="hidden" name="bot_detector" value="" />
                  <input type="hidden" name="privacy_policy" value="I have read the Terms & Conditions and Privacy Policy." />
                  <input type="hidden" name="policy" value="By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time." />
                  
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" class="required form-control" required name="name" maxlength="30"placeholder="Your Name">
                        <input type="tel" class="required  form-control ftpn" required name="phone" minlength="10" maxlength="10" placeholder="Phone No.">
                        <input type="email" class="required form-control" required name="email" placeholder="Your Email">
                     </div>
                     <div class="col-md-6">
                        <textarea autocomplete="nope" name="message" class="form-control" placeholder="Enter description"></textarea>
                     </div>
                     <div class="form-group text-dark pt-3">
                        <input type="checkbox" class="required" name="policy_check" id="policy_check" required>
                        By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time.
                    </div>
                    <div class="form-group text-dark">
                        <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required>
                        I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a> and <a href="privacy-policy" class="text-danger">Privacy Policy</a>.
                    </div>
                     <div class="col-md-12 text-center">
                        <input type="submit" class="btn" name="sendmail" value="Submit Now">
                     </div>
                </div>
               </form>
         </div>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});
wow.init();
</script>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#pop-form').click();
    }, 3000);
});
</script>
<script>
// $('#submit-btn').on('click', function() {
//     $('#form-submit').click();
// })
</script>
<script>
$('.livechat, .live_chatt, .chatt, .chat').click(function() {
    $zopim.livechat.window.toggle();
    return false;
});
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
            if (number >= 1) {
                $zopim.livechat.window.toggle();
                $zopim.livechat.window.show();
            }
        }
    });
});
</script>
<script>
zE(function() {
    $zopim(function() {
        // chat popup on new message
        $zopim.livechat.setOnUnreadMsgs(function(numUnread) {
            console.log("New message received", numUnread);
            if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                $zopim.livechat.window.show();
            }
        });
    });
});
</script>
<script>
$(document).ready(function() {
    var header = $("header");
    var sticky = header.offset().top;

    $(window).scroll(function() {
        if ($(window).scrollTop() > sticky) {
            header.addClass("sticky");
        } else {
            header.removeClass("sticky");
        }
    });

    // Trigger scroll event to initialize header state
    $(window).trigger('scroll');
});
$('input[name="phone"]').on('keypress', function(event) {
    var keyCode = event.keyCode || event.which;
    var keyValue = String.fromCharCode(keyCode);
    var isValid = /^\d+$/.test(keyValue);

    if (!isValid) {
        $('#phone-error').show();
        event.preventDefault();
    } else {
        $('#phone-error').hide();
    }
});
</script>
<script>
// $(document).ready(function () {
//     // Create an empty string to store the styles
//     var css = '';

//     // Loop through all elements with inline styles
//     $('[style]').each(function () {
//         // Get the inline style attribute
//         var styleAttr = $(this).attr('style');

//         // Remove the inline style attribute
//         $(this).removeAttr('style');

//         // Generate a unique class name
//         var className = 'style-' + Math.floor(Math.random() * 100000);

//         // Add the class to the element
//         $(this).addClass(className);

//         // Add the style to the CSS string
//         css += '.' + className + ' {' + styleAttr + '}\n';
//     });

//     // Create a new file
//     var file = new File([css], 'styles.css', { type: 'text/css' });

//     // Create a new URL object
//     var url = URL.createObjectURL(file);

//     // Create a new link element
//     var link = $('<link>').attr({
//         rel: 'stylesheet',
//         type: 'text/css',
//         href: url
//     }).appendTo('head');
// });
</script>
</body>

</html>