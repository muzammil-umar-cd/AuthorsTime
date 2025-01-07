<?php
session_start();

// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
   <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
   <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">
    <link class="lazy" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link class="lazy" rel="stylesheet" type="text/css" href="assets/css/style-web5e1f.css?v=2">
    <link class="lazy" rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link class="lazy" rel="stylesheet" type="text/css" href="assets/css/indent6040.css?v=123">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <title> BECOME A BEST SELLING AUTHOR AT 50% OFF! </title>

    <script>
        // Speed optimization plugin script
        (function() {
            // Minify CSS function
            function minifyCSS(css) {
                // Implement your CSS minification logic here
                // For example, you can use a library like CleanCSS
                return css; // Placeholder, replace with actual minified CSS
            }

            // Minify JavaScript function
            function minifyJS(js) {
                // Implement your JavaScript minification logic here
                // For example, you can use a library like UglifyJS
                return js; // Placeholder, replace with actual minified JS
            }

            // Compress image function
            function compressImage(image) {
                // Implement your image compression logic here
                // For example, you can use a library like TinyPNG
                return image; // Placeholder, replace with actual compressed image
            }

            // Execute optimization tasks when the page loads
            window.onload = function() {
                // Minify CSS
                var stylesheets = document.querySelectorAll('link[rel="stylesheet"]');
                stylesheets.forEach(function(stylesheet) {
                    stylesheet.href = minifyCSS(stylesheet.href);
                });

                // Minify JavaScript
                var scripts = document.querySelectorAll('script');
                scripts.forEach(function(script) {
                    script.innerHTML = minifyJS(script.innerHTML);
                });

                // Compress images
                var images = document.querySelectorAll('img');
                images.forEach(function(image) {
                    image.src = compressImage(image.src);
                });
            };
        })();
    </script>
    <style>
        footer img {
            max-width: 250px;
        }

        .phone-input {
            padding-left: 45px;
        }

        .iti {
            width: 100%;
            z-index: 99999999999 !important;
        }

        @media only screen and (max-width: 600px) {
            .indent_inn h1 b {
                font-size: 24px;
            }

            .indent_inn small {
                font-size: 14px;
            }
        }
    </style>

    <!-- Start of designneshelp Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132">
    </script>
    <!-- End of designneshelp Zendesk Widget script -->

</head>

<body>
    <header class="sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="javascript:;" class="logo">
                        <img src="assets/images/logo-lh.png" width="180" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tel:(929) 379-9764" class="btn btn-blue" title="Contact Number" ><img src="http://localhost/Authors-Time/lp3/assets/images/phone.png" alt="" style="max-width: 36px;margin-bottom: 0px;vertical-align: inherit;margin-right: 0px;"> (929) 379-9764</a>
                </div>
                <div class="col-md-5">
                    <ul class="text-right">

                        <li>
                            <img src="assets/images/chat.png" alt="">
                            <a href="javascript:" class="chat" onclick="showLiveChatWidget()">Live Chat</a>
                        </li>
                        <li>
                            <a href="javascript:" class="btn btn-blue various" data-fancybox="" data-options='{"touch" : false}' title="Activate Your Coupon" data-src="#popupform">Activate Your Coupon</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="our-banner">
        <div class="container">
            <h1>Get Your Book Successfully <br> <span>Published Today!</span></h1>
            <h2>Get expert publishing services now at a <span>50% discount</span> and become a published author today!
            </h2>
            <ul>
                <li><img src="assets/images/check.png" alt="">Trusted By 400+ Authors Globally</li>
                <li><img src="assets/images/check.png" alt="">2.5k+ Writers And Editors</li>
                <li><img src="assets/images/check.png" alt="">86% Of Customers Rehire</li>
                <li><img src="assets/images/check.png" alt="">100% Satisfaction Guaranteed</li>
            </ul>
            <div class="btn-block">

                <a href="javascript:$zopim.livechat.window.toggle();" class=" btn btn-yellow various" onclick="showLiveChatWidget()">Live Chat</a>

                <a href="javascript:;" class="btn btn-transparent various" data-fancybox="" data-options='{"touch" : false}' title="Activate Your Coupon" data-src="#popupform"> Activate Your
                    Coupon</a>
            </div>
            <div class="star">
                <img src="assets/images/star.png" alt="">
                <h6>90% Positive Reviews </h6>
            </div>
        </div>
        <div class="top-logo">
            <div class="container">
                <div class="item">
                    <a href="https://www.trustpilot.com/review/authorstime.com" target="_blank">
                        <img src="assets/images/trustpilot.png">
                    </a>
                </div>
                <div class="item">
                    <div class="item">
                        <a href="https://www.sitejabber.com/reviews/authorstime.com" target="_blank">
                            <img class="martop" src="assets/images/sitejabber.png">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img class="clutchh" src="assets/images/clutch.png">
                </div>

            </div>
        </div>
        <div class="our-guarante">
            <div class="container">
                <ul>
                    <li>
                        <img src="assets/images/guarante1.png" alt="">
                        <span>100% Guaranteed <br> customer satisfaction</span>
                    </li>
                    <li>
                        <img src="assets/images/guarante2.png" alt="">
                        <span>Qualified Experts <br> Around the Globe</span>
                    </li>
                    <li>
                        <img src="assets/images/guarante3.png" alt="">
                        <span>Secure <br> Ownership</span>
                    </li>
                    <li>
                        <img src="assets/images/guarante4.png" alt="">
                        <span>Reasonable <br> Pricing</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="our-education sizee">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="z-index: 3;">
                    <h2>Exclusive Ghostwriting, Editing, Proofreading, and Publishing Services.</h2>
                    <p>At Authors Time, we offer a wide variety of services to help you become a
                        successfully published bestselling author in the literary sphere. We have a team of professional
                        ghostwriters who take their job very seriously
                        and are versatile enough to write on any kind of book genre. Our team of writers is backed by
                        our talented quality assurance team consisting of editors and proofreaders who make sure that no
                        stone is left unturned in terms of quality.
                        From writing your book and editing and proofreading it, we’ll also ensure that your book is
                        successfully published and marketed to jumpstart your career as a bestselling writer.</p>
                    <div class="btn-block">
                        <a href="javascript:;" class="btn btn-yellow various" data-fancybox="" data-options='{"touch" : false}' data-src="#popupform" title="Activate Your Coupon">Book
                            Consultation</a>
                        <a href="javascript:$zopim.livechat.window.toggle();" class="btn btn-blue chat" onclick="showLiveChatWidget()"><img src="assets/images/chat.png" alt="">
                            Chat with us</a>
                        <a href="tel:(929) 379-9764" class="btn btn-blue various" title="Contact Number"> (929) 379-9764</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-published">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <h2>Have a draft and are looking <br> to get it published?</h2>
                    <div class="btn-block">
                        <a href="javascript:;" class="btn btn-grey various" data-fancybox="" data-options='{"touch" : false}' data-src="#popupform" title="Get a Free Quote">Get a Free
                            Quote</a>
                        <a href="javascript:$zopim.livechat.window.toggle();" class="btn btn-yellow chat" onclick="showLiveChatWidget()">Live Chat</a>
                        <a href="tel:(929) 379-9764" class="btn btn-blue various" title="Contact Number"> (929) 379-9764</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio porfilio-slider px-md-5  text-center" id=portfolio>
        <div class=container-fluid>
            <h2>We Have Helped Thousands Of Writers Get Their Work Published</h2>
            <p class="py-4 pb-md-5 px-md-5"> Our diversified talent pool with multiple unique skillsets has enabled us
                to specialize in various genres and cater to the ghostwriting needs of clients from varying industries
                and professional spheres.
            </p>
            <div class=row>
                <div class=col-md-12>
                    <div id=owl_slidr class="port-slider-one owl-carousel owl-theme pb-3">
                        <div class=item>
                            <img src=assets/images/portfolio/1.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/2.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/3.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/4.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/5.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/6.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/7.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/8.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/14.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/10.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/11.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/12.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/13.png>
                        </div>
                        <div class=item>
                            <img src=assets/images/portfolio/9.png>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="btm-bg">
        <div class="our-ghost">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <h2>Here’s All Our Services</h2>
                        <p>We have a myriad of services that we offer to our clients. <br> Take a look down below to see
                            what we can do for you!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="/ghost-writing" class="text-dark">
                            <div class="box">
                                <img src="assets/images/ghost-1.png" alt="">
                                <h4>Ghostwriting</h4>
                                <p>Our team of writers are professional and versatile.</p>
                                <h6>01</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/book-cover" class="text-dark">
                            <div class="box">
                                <img src="assets/images/ghost-1.png" alt="">
                                <h4>Cover <br> Design
                                </h4>
                                <p>An eye-catching cover design for your immersive book.</p>
                                <h6>02</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/audio-book" class="text-dark">
                            <div class="box">
                                <img src="assets/images/ghost-1.png" alt="">
                                <h4>Audio <br> Book
                                </h4>
                                <p>Avail the services of our talented readers for your audio book.</p>
                                <h6>03</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/book-video-trailer" class="text-dark">
                            <div class="box">
                                <img src="assets/images/ghost-1.png" alt="">
                                <h4>Book <br> Trailer</h4>
                                <p>We’ll help market your book with an impressive book trailer.</p>
                                <h6>04</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/author-website" class="text-dark">
                            <div class="box">
                                <img src="assets/images/ghost-1.png" alt="">
                                <h4>Author <br> Website</h4>
                                <p>Get your own website developed for all your books.</p>
                                <h6>05</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/book-publishing" class="text-dark">
                            <div class="box">
                                <img src="assets/images/ghost-1.png" alt="">
                                <h4>Publishing &amp; <br> Printing
                                </h4>
                                <p>Get your finished book published and flip the pages in real life.</p>
                                <h6>06</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/book-promotions" class="text-dark">    
                        <div class="box">
                            <img src="assets/images/ghost-1.png" alt="">
                            <h4>Book <br> Promotion
                            </h4>
                            <p>For maximum reach, we'll effectively promote your book.</p>
                            <h6>07</h6>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/proofreading" class="text-dark">    
                        <div class="box">
                            <img src="assets/images/ghost-1.png" alt="">
                            <h4>Proofreading &amp; <br> Formatting:
                            </h4>
                            <p>The finishing touches of your complete book.</p>
                            <h6>08</h6>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="btn-block text-center sizee">
                    <a href="javascript:;" class="btn btn-yellow various" data-fancybox="" data-options='{"touch" : false}' data-src="#popupform">Activate Your Coupon</a>
                    <a href="jjavascript:$zopim.livechat.window.toggle();" class="btn btn-blue chat" onclick="showLiveChatWidget()"><img src="assets/images/chat.png" alt="">
                        Chat with us</a>
                    <a href="tel:(929) 379-9764" class="btn btn-blue various" title="Contact Number" > (929) 379-9764</a>
                </div>
            </div>
        </div>
        <div class="cta">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <h4>When it comes to the world of book writing, <br> we’ve got your backs every step of the way!
                        </h4>
                        <h3>BECOME A PUBLISHED <br> AUTHOR NOW </h3>
                        <h2>50</h2>
                        <ul>
                            <li>
                                <a href="javascript:;" class="chat">
                                    <img src="assets/images/cta1.png" alt="">
                                    Lets Talk</a>
                            </li>

                        </ul>
                        <div class="btn-block ">
                            <a style="background-color: #973024;" href="javascript:;" class="btn btn-blue various" data-fancybox="" data-options='{"touch" : false}' data-src="#popupform" title="Get a Free Quote">Get a
                                Free Quote</a>

                            <a href="javascript:$zopim.livechat.window.toggle();" class="btn btn-transparent chat" onclick="showLiveChatWidget()"><img src="assets/images/blue-chat.png" alt="">
                                Chat with us</a>
                            <a style="background-color: #973024;" href="tel:(929) 379-9764" class="btn btn-blue various" title="Contact Number"> (929) 379-9764</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <h2>Our Client’s Feedback <br> Means the World To Us.</h2>
            <h3>Our clients make us feel tingly on the inside <br> when they send us positive feedback for our hard
                work.</h3>
            <div class="owl-carousel owl-testimonial owl-theme">
                <div class="item">
                    <img src="assets/images/tes-star.png" alt="">
                    <i class="fas fa-quote-left"></i>
                    <p>“GREAT EXPERIENCE!! I had worked with another company prior to Kevin and his team at Amazon
                        Publishing and that had been a disaster. My current team with Kevin leading has been such a
                        professional and beautiful experience. The website
                        they created is absolutely amazing! I have sent it out to others for their opinions and all my
                        feedback has been stellar! I cannot recommend this team highly enough.”</p>
                    <h4>Richard Upshaw</h4>
                </div>
                <div class="item">
                    <img src="assets/images/tes-star.png" alt="">
                    <i class="fas fa-quote-left"></i>
                    <p>“As and independent writer and self publishing author It's important to find people who really
                        know what they're doing at an affordable price. These guys are terrific. I got my book published
                        in record time. The quality is good. And
                        it was easy to proof the book. I highly recommend using these guys.”</p>
                    <h4>Harry Knickerbocker</h4>
                </div>
                <div class="item">
                    <img src="assets/images/tes-star.png" alt="">
                    <i class="fas fa-quote-left"></i>
                    <p>“Kevin and Walton are very professional,kind,helpful and friendly..They have made my experience a
                        positive journey into Amazon publishing.I highly recommend this association.”</p>
                    <h4>Heather Whittaker</h4>
                </div>
                <div class="item">
                    <img src="assets/images/tes-star.png" alt="">
                    <i class="fas fa-quote-left"></i>
                    <p>“Authors Time is amazing. Awesome Austin & Kevin was professional, knowledgeable,
                        and chill to work with! Kindle Direct Publishing is an incredible, user-friendly platform.
                        Everything has been completed with perfect
                        knowledge and attention. Thank you, Amazon. I am very happy with everything. Publishing with
                        Amazon has been an exciting and overall great experience.”</p>
                    <h4>Autumn Kay</h4>
                </div>
                <div class="item">
                    <img src="assets/images/tes-star.png" alt="">
                    <i class="fas fa-quote-left"></i>
                    <p>“Ever since I have known, my friend has always struggled hard when it came to writing and
                        publishing her book. There have been times when she actually had mental breakdowns, and we all
                        had to look after her. But ever since a mutual
                        friend of ours connected us to Authors Time, her (read: our) life is at peace.
                        She now finally has a platform that is literally at her back anytime she needs help. Be it about
                        book writing, publishing, marketing,
                        or even managing her website, Authors Time has become her place, and I am so
                        relieved. Too glad about this decision of ours!”</p>
                    <h4>Whitney Krause</h4>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <a href="javascript:;" class="logo">
                        <img src="assets/images/logo-lh.png" alt="">
                    </a>
                    <p>At Authors Time we take our role as proponents of the written word very
                        seriously. We not only offer professional ghostwriting services for those that haven’t the time
                        to write their books, but we also provide expert
                        editing and proofreading services alongside publication and marketing. Whether you’re just
                        starting out as a writer or are already established, we can cater to you with our range of
                        services.</p>
                </div>
                <div class="col-md-4">
                    <ul>

                        <li>
                            <img src="assets/images/ftr-mail.png" alt="">
                            <a class="d-block mb-1" href="mailto:info@authorstime.com"><img src="http://localhost/Authors-Time/lp3/assets/images/email.png" alt="" style="max-width: 36px;margin-bottom: 0px;vertical-align: inherit;margin-right: 0px;">
                                info@authorstime.com</a>
                            <a class="d-block mb-1" href="tel:(929) 379-9764"><img src="http://localhost/Authors-Time/lp3/assets/images/phone.png" alt="" style="max-width: 36px;margin-bottom: 0px;vertical-align: inherit;margin-right: 0px;">
                                (929) 379-9764</a>
                            <a class="d-block mb-1" href="javascript:;"><img src="http://localhost/Authors-Time/lp3/assets/images/address.png" alt="" style="max-width: 36px;margin-bottom: 0px;vertical-align: inherit;">112 West 34th Street 18th & 17th
                                Floors 10120 New York United States

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyrights © 2024 Authors Time.<br> All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-conditions">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <style>
        .popupform.bfriday,
        div#bouncepopupform.popupform.bfriday {
            width: 100%;
            max-width: 824px;
            border: none;
            transform: scale(0.8);
            padding: 34px 0;
            box-shadow: none;
            background: url(assets/images/nyk_bg85.png) no-repeat scroll right top;
            background-size: contain;
        }

        div#bouncepopupform.popupform.bfriday {
            height: auto;
            left: 0;
            margin: 0 auto;
            right: 0;
        }

        .popupform.bfriday .custom-pop {
            padding: 30px;
            width: 100%;
            position: relative;
            border-radius: 20px;
            max-width: 400px;
            float: right;
        }

        .popupform.bfriday h2,
        div#bouncepopupform.popupform.bfriday h2 {
            font-size: 24px;
            font-weight: 600;
            color: #fff;
            border: none;
            margin-top: 0;
            text-transform: none;
            text-align: center;
            padding: 0;
            margin-bottom: 10px;
        }

        .popupform.bfriday h2 span,
        div#bouncepopupform.popupform.bfriday h2 span {
            color: #f53230;
            vertical-align: baseline;
            font-weight: bold;
            display: inline-block;
            font-size: inherit;
        }

        .popupform.bfriday h3 span,
        div#bouncepopupform.popupform.bfriday h3 span {
            background: #ff950b;
            padding: 0px 10px;
            display: inline-block;
        }

        .popupform.bfriday li {
            margin-bottom: 10px !important;
            width: 100% !important;
            margin-left: 0;
            margin-right: 0;
            margin-top: 0;
        }

        .popupform.bfriday li input,
        .popupform.bfriday li textarea {
            width: 100% !important;
            background: #fff;
            padding: 10px !important;
            font-size: 14px;
        }

        .popupform.bfriday li input[type="submit"],
        div#bouncepopupform.popupform.bfriday li input[type="submit"] {
            background: #dd2b2b;
            color: #fff;
            font-size: 18px;
            border-radius: 30px;
            border-color: #dd2b2b;
            margin-top: 0;
            margin-right: 0;
            text-transform: none;
            margin-left: 0;
            letter-spacing: normal;
            font-weight: 500;
        }

        .popupform.bfriday h3,
        div#bouncepopupform.popupform.bfriday h3 {
            width: 100%;
            font-size: 20px;
            text-align: center;
            font-weight: 600;
            color: #fff;
            margin-top: 0;
            margin-left: 0;
            margin-bottom: 18px;
        }

        .popupform.bfriday h6 span {
            vertical-align: baseline;
            background: #f9b128;
            display: inline-block;
            color: #000;
            padding: 0 5px;
            font-weight: bold;
        }

        .popupform.bfriday li textarea,
        div#bouncepopupform.popupform.bfriday li textarea {
            height: 90px;
        }

        .popupform.bfriday li:last-child {
            margin-bottom: 0 !important;
        }

        .popupform.bfriday .fancybox-close-small {
            top: 20px;
            border: none;
            text-align: center;
            background: #f53230;
        }

        .popupform.bfriday .fancybox-close-small:after {
            right: 0;
            left: 0;
            width: 100%;
            top: 5px;
            color: #fff;
        }

        .popupform.bfriday form.validate-popupform {
            padding-right: 0;
        }

        @media only screen and (max-width:850px) {
            .indent-pop ul li.ind-line {
                width: 100%;
            }

            .indent-pop ul li.ind-line.last {
                width: 100%;
            }

            .popupform.bfriday,
            div#bouncepopupform.popupform.bfriday {
                width: 90%;
                background: #080800;
                transform: none;
            }

            .popupform.bfriday .custom-pop {
                max-width: 100%;
                float: none;
                box-shadow: none;
                border: 5px solid #b59c3e;
            }

            .popupform.bfriday h3 {
                font-size: 18px;
            }

            .popupform.bfriday h2 {
                font-size: 20px;
                line-height: normal;
            }
        }
    </style>
    <div class="popupform bfriday" id="popupform" style="display: none;">
        <div class="custom-pop">
            <div class="popup-content">
                <h2>This New Year your way to the Author Spotlight</h2>
                <h3>Offering <span>50% OFF</span> this Holiday</h3>
                <form action="/sendmail/send_mail_lp3.php" method="POST" class="validate-popupform">
                    <!--hidden required values-->
                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                    <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                    <ul>
                        <li><input type="text" class="required form-control" required name="name" placeholder="Your Name"></li>
                        <li><input type="tel" class="required form-control phone-input" required name="phone" minlength="10" maxlength="10" placeholder="Phone No."></li>
                        <li><input type="email" class="required form-control" required name="email" placeholder="Your Email"></li>
                        <li><textarea autocomplete="nope" name="message" class="required form-control" required placeholder="Enter a brief description about your book"></textarea></li>
                        <li>
                            <input type="submit" class="btn" name="send_reserve_req" value="Submit Now">
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="mainPopup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg-cs modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="custom-pop">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="popup-bann">
                                    <img src="assets/images/popup-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 pop-txt">
                                <div class="popup-content">
                                    <h2>Activate Your Coupon</h2>
                                    <p>You are just one step away from becoming a great author. Share your idea with us
                                        today!</p>
                                    <form action="/sendmail/send_mail_lp3.php" method="POST" class="validate-popupform_auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="required form-control" required name="name" placeholder="Your Name">
                                                <input type="email" class="required form-control" required name="email" placeholder="Your Email">
                                                <input type="tel" class="required form-control phone-input" required name="phone" minlength="7" maxlength="20" placeholder="Phone No.">
                                            </div>
                                            <div class="col-md-6">
                                                <textarea autocomplete="nope" name="message" class="required form-control" required placeholder="Enter a brief description about your book"></textarea>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <input type="submit" class="btn" name="send_data" value="Submit Now">
                                                <div class="d-none">
                                                    <div class="ip2locfields">
                                                        <input type="hidden" name="ip2loc_ip" value="" class="ip2loc_ip">
                                                        <input type="hidden" name="ip2loc_isp" value="" class="ip2loc_isp">
                                                        <input type="hidden" name="ip2loc_org" value="" class="ip2loc_org">
                                                        <input type="hidden" name="ip2loc_country" value="" class="ip2loc_country">
                                                        <input type="hidden" name="ip2loc_region" value="" class="ip2loc_region">
                                                        <input type="hidden" name="ip2loc_city" value="" class="ip2loc_city">
                                                        <input type="hidden" name="landing_page" value="">
                                                        <input type="hidden" name="server_ip" value=''>
                                                        <input type="hidden" name="referrer_url" value="">
                                                        <input type="hidden" name="campaign_name" value="">
                                                        <input type="hidden" name="campaign_email" value="">
                                                        <input type="hidden" name="source" value="">
                                                        <input type="hidden" name="campaign_category" value="">
                                                        <input type="hidden" name="campaign_country" value="">
                                                        <input type="hidden" name="campaign_phone" value="">
                                                        <input type="hidden" name="campaign_offer" value="">
                                                    </div>
                                                    <input type="hidden" name="package_name" value="Get A Quote">
                                                    <input type="hidden" name="lead_amount" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <script class="lazy" type="text/javascript" src="assets/js/libs.js"></script>
    <!-- <script class="lazy" type="text/javascript" src="assets/js/functions30f4.js?v=3"></script> -->
    <script class="lazy" type="text/javascript" src="assets/js/indent.js"></script>

    <style>
        .iti.iti--allow-dropdown.iti--show-flags.iti--inline-dropdown {
            width: 100%;
            margin-bottom: 12px;
            margin-top: 0px;
        }

        .iti__flag-box,
        .iti__country-name {
            color: black;
        }

        .iti--allow-dropdown input.iti__tel-input,
        .iti--allow-dropdown input.iti__tel-input[type=text],
        .iti--allow-dropdown input.iti__tel-input[type=tel],
        .iti--show-selected-dial-code input.iti__tel-input,
        .iti--show-selected-dial-code input.iti__tel-input[type=text],
        .iti--show-selected-dial-code input.iti__tel-input[type=tel] {
            padding-left: 45px !important;
        }
    </style>

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
    $(document).ready(function(){
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
</html>