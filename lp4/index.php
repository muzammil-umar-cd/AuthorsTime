<?php 
include ('sendmail/sendmail.php');

// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the current URL (including query parameters)
$currentURL = $_SERVER['REQUEST_URI'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get affordable Christian Book Publishers By The Experts At Authors Time
    </title>

    <meta name="description"
        content="Got a plot idea and want to turn it into a book? Hire Authors Time to write your next book and we will manifest reality to your book writing dream.">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Writing blogs and articles just got easy with the help of expert content writers at Authors Time. Place an order today and you can get the best articles and blogs written at a discounted rate.">
    <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
    <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">
    <link
        href="css?family=Playfair+Display:400,500,600,700,800,900|Poppins:400,500,600,700,800,900|Roboto:400,500,700,900&display=swap"
        rel="stylesheet import preload" as="style" async="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet import preload" type="text/css" href="assets/publishing-lp3/css/plugin.css" as="style"
        async="">
    <link rel="stylesheet import preload" type="text/css" href="assets/publishing-lp3/css/custom.css" as="style"
        async="">
    <link rel="stylesheet import preload" type="text/css" href="assets/publishing-lp3/css/responsive.css" as="style"
        async="">
    <link rel="stylesheet import preload" type="text/css" href="assets/publishing-lp3/css/sweetalert.css" as="style"
        async="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header start-->
    <div class="marqbar">
        <div class="container">
            <marquee class="text-white">
                Our mission is to discover and market unknown Christian-based authors who aspire to craft the greatest
                spiritual impact imaginable via the written word.
            </marquee>
        </div>
    </div>
    <header class="sticky">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-3">
                    <div class="brand-logo">
                        <a href="/"><img src="assets/logo.png" style="max-width: 60%;" class="img-fluid "
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <ul class="call-us-wraper">
                        <li>
                            <a href="tel:(929) 379-9764">
                                <img src="assets/publishing-lp3/images/phone-icon.webp" class="img-fluid ">
                                <div class="call-us">
                                    <span>TALK TO US</span>
                                    (929) 379-9764
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;" data-fancybox="" data-target="#popupform" data-toggle="modal"
                                class="custombtn">Get a free
                                quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- banner start -->
    <section class="banner lazy-background ">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="banner-left">
                        <!-- <h1><span> Bring Your </span> Ideas<br>
                        to Life With Our Expert<br>
                        <strong> Authors Time! </strong>
                    </h1> -->
                        <h1>Redefining <span>Book Publishing</span> and <span>Empowering Authors'</span> Growth
                            <span class="starting-from-text">50% Discount </span>

                            <!-- <strong> Authors Time! </strong> -->
                        </h1>
                        <p>Elevating Manuscripts into Best-Sellers</p>
                        <p class="m-0">What Makes us Better:</p>
                        <ul class="bnr-point lazy-background ">
                            <li>We Take Zero Commissions.</li>
                            <li>15 Days Turn Around Time.</li>
                            <li>10,000+ Publishing Platforms.</li>
                            <li>Pocket-Friendly Pricing.</li>
                            <li>100% Money-Back Guarantee!</li>
                            <li>No Hidden Charges</li>
                        </ul>
                    </div>
                    <div class="banner-button">
                        <a href="javascript:;" class="chat custombtn bnr-btn">Start Your Journey</a>
                        <!-- <a href="javascript:;" class="custombtn bnr-btn-talk  chat">Start Your Journey</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">

                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    <!-- logos start-->
    <section class="brands_logos bg_grey">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8 col-md-7 ">
                    <div class="row brand-badge-row">
                        <div class="col-sm-3 col-5">
                            <img src="assets/images/satisfaction.png" alt="">
                        </div>
                        <div class="col-sm-9 col-7">
                            <div class="badge-sec">
                                <h3>Your Satisfaction, Our Guarantee</h3>
                                <p>If our work doesn't thrill you, we'll persist until it does. This is our unwavering
                                    commitment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="form-back"></div>

                    <div class="banner-right">
                        <div class="bannerForm">
                            <div class="banFormTp">
                                <h2>Don't Miss Out!</h2>
                                <h3>50% OFF – Limited Time Offer!</h3>
                            </div>
                            <p class="banFormTp-p">Ghostwriting, book publishing, and marketing.
                            <p>
                            <div class="fixedform">
                                <div class="getdiscount" data-form-type="signup_form">
                                    <form class="offr-frm signupForm leadForm" method="post" action="sendmail/sendmail">
                                        <!--hidden required values-->
                                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                        <input type="hidden" name="country"
                                            value="<?php echo $locationData->country; ?>" />
                                        <input type="hidden" name="internet_connection"
                                            value="<?php echo $locationData->isp; ?>" />
                                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                        <input type="hidden" name="region"
                                            value="<?php echo $locationData->regionName; ?>" />
                                        <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                        <input type="hidden" name="form_name" value="POP-UP FORM" />
                                        <input type="hidden" name="bot_detector" value="" />

                                        <div class="mm-field namefield">
                                            <input type="text" name="name" maxlength="30"
                                                placeholder="Enter your name *" data-validation="required" required>
                                        </div>
                                        <div class="mm-field emailfield">
                                            <input type="email" name="email" placeholder="Enter email here *"
                                                class=" email" data-validation="required" required>
                                        </div>
                                        <div class="mm-field pnfields">
                                            <input type="number" name="phone" class="number" maxlength="12"
                                                placeholder="Phone Number *" data-validation="required" required>
                                        </div>
                                        <div class="fixedform mm-field form-textarea">
                                            <textarea name="message"
                                                placeholder="Enter brief description about your book"
                                                data-validation="required"></textarea>
                                        </div>
                                        <div class="banFormBtt">
                                            <div class="sumbit-btn">
                                                <button type="submit" name="sendmail"
                                                    class="custombtn  learn-more-tab btn-submit">Submit</button>
                                            </div>
                                        </div>
                                        <!-- <div id="formResult"></div> -->
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- logos end-->
    <!-- writing start   -->
    <section class="writing">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <h1 class="sec-hdg">We Provide Premier Literary Solutions</h1>
                    <p class="sub-title">Authors Time is an emerging platform with decades of experience under
                        our
                        belt.
                        Whether it's ghostwriting, book marketing, or book publishing, Authors Time is an
                        aisle of
                        competent experts with a continuum of prowess in crafting the initial draft to helping authors
                        with
                        the entire publication procedure. Moreover, we offer a plethora of other services carefully
                        packaged
                        to provide the best experience for authors from all walks of life. </p>




                </div>
            </div>
        </div>
    </section>
    <!-- writing end   -->
    <!-- cta start -->
    <section class="lazy-background main_cta  ">
        <div class="container">
            <div class="cta_text_wrap">
                <h3>Collaborate With Industry-Specialist Book Publishers</h3>
                <p>Our professional services and versatile workforce are dedicated to providing successful upshot</p>
                <div class="cta_btn">
                    <a href="tel:(929) 379-9764" class="call_cta home-btn">
                        <img src="assets/publishing-lp3/images/phone-icon.webp" class="img-fluid ">
                        (929) 379-9764
                    </a>
                    <a class="home-btn" href="javascript:;" data-fancybox="" data-target="#popupform"
                        data-toggle="modal">HIRE US</a>
                    <a class="home-btn chat" href="javascript:;">CHAT NOW</a>
                </div>
            </div>
            <span class="cta_img_left">
                <img data-src="assets/publishing-lp3/images/cta_left_img.webp" alt="Cta Image"
                    class="img-fluid lazyload">
            </span>
            <span class="cta_img_right">
                <img data-src="assets/publishing-lp3/images/cta_right_img.webp" alt="Cta Image"
                    class="img-fluid lazyload">
            </span>
        </div>
    </section>
    <!-- cta end -->
    <section class="books-sec ">
        <div class="container">
            <div class="sec_title_main">
                <h3 class="sec-hdg">Range of Services Authors Time Provides</h3>
                <p>We are solemn of high-octane productivity, penning down the endless possibilities of the literary
                    sphere</p>
                <p>
                    At Authors Time, we provide an enormous range of services!
                </p>
            </div>
            <div class="desktop-services">
                <div class="books-info">
                    <img src="assets/images/Icon 01.png" class="" alt="Image 2">
                    <h5>Ghost Book Writing</h5>
                    <p>We have a maestro force that transcends known boundaries. From fiction to non-fiction, our
                        professional ghostwriters skillfully handle book writing, infusing charm into each word and
                        delivering profound outcomes</p>

                </div>
                <div class="books-info">
                    <img src="assets/images/Icon 02.png" class="" alt="Image 2">
                    <h5>Book Marketing</h5>
                    <p>Even a masterpiece can lose into oblivion without exposure! Therefore, we provide
                        individualized book
                        marketing catering to your niche and put our brains to work for all the entertaining and
                        creative
                        ways to get your book out to the masses</p>
                </div>
                <div class="books-info">
                    <img src="assets/images/Icon 03.png" class="" alt="Image 2">
                    <h5>Editing & Proofreading</h5>
                    <p>With a keen eye for detail, our book editors & proofreaders slay every single potential error
                        and
                        ensure neatly written content that translates the subject matter without a hitch</p>
                </div>
                <div class="books-info">
                    <img src="assets/images/Icon 04.png" class="" alt="Image 2">
                    <h5>Audio Books</h5>
                    <p> Our skillful book narrators give your manuscript the voice it deserves, and our team sings
                        out your
                        tale in such melodious ways that it can easily captivate the general audience while
                        vocalizing the
                        words to convey your message through embracive audiobooks to help visually impaired people
                    </p>

                </div>
                <div class="books-info">
                    <img src="assets/images/Icon 01.png" class="" alt="Image 2">
                    <h5>Book Publishing</h5>
                    <p class="books-p">Helping authors and guiding them through the way to publication is our
                        playground;
                        whether self-publishing or traditional publishing, our team of experts is inclined to assist
                        you in
                        paving your way to success</p>
                </div>

                <div class="books-info">
                    <img src="assets/images/Icon 02.png" class="" alt="Image 2">
                    <h5>Book Video Trailer</h5>
                    <p>From conception to the final delivery, we design book trailers that perfectly emit your ideas
                        and
                        present an attractive outlook, conveying your story in the most interesting way possible</p>
                </div>
                <div class="books-info">
                    <img src="assets/images/Icon 03.png" class="" alt="Image 2">
                    <h5>Book Cover Designs</h5>
                    <p>Book cover design is universally the most crucial aspect of your hard-written work, and we
                        thoroughly
                        put our emphasis on book cover art that escalates your book to another level of charm.
                        Therefore, we
                        have composed book cover designers who know all the bells and whistles of art</p>
                </div>
                <div class="books-info">
                    <img src="assets/images/Icon 04.png" class="" alt="Image 2">
                    <h5>Author Website Development</h5>
                    <p>Besides everything we do, we possess expertise in author website development with detailed
                        customization options to assist you in showcasing your unique identity, engaging readers,
                        and
                        effectively promoting your writing works</p>
                </div>

            </div>
            <div class="mobile-services-slider">
                <div class=" our-promising owl-carousel owl-theme owl-loaded owl-drag lazy-background ">
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/gbw.png" class="" alt="Image 2">
                        <h5>Ghost Book Writing</h5>
                        <p>We have a maestro force that transcends known boundaries. From fiction to non-fiction, our
                            professional ghostwriters skillfully handle book writing, infusing charm into each word and
                            delivering profound outcomes</p>

                    </div>
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/bm.png" class="" alt="Image 2">
                        <h5>Book Marketing</h5>
                        <p>Even a masterpiece can lose into oblivion without exposure! Therefore, we provide
                            individualized book
                            marketing catering to your niche and put our brains to work for all the entertaining and
                            creative
                            ways to get your book out to the masses</p>
                    </div>
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/ep.png" class="" alt="Image 2">
                        <h5>Editing & Proofreading</h5>
                        <p>With a keen eye for detail, our book editors & proofreaders slay every single potential error
                            and
                            ensure neatly written content that translates the subject matter without a hitch</p>
                    </div>
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/ab.png" class="" alt="Image 2">
                        <h5>Audio Books</h5>
                        <p> Our skillful book narrators give your manuscript the voice it deserves, and our team sings
                            out your
                            tale in such melodious ways that it can easily captivate the general audience while
                            vocalizing the
                            words to convey your message through embracive audiobooks to help visually impaired people
                        </p>

                    </div>
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/bp.png" class="" alt="Image 2">
                        <h5>Book Publishing</h5>
                        <p class="books-p">Helping authors and guiding them through the way to publication is our
                            playground;
                            whether self-publishing or traditional publishing, our team of experts is inclined to assist
                            you in
                            paving your way to success</p>
                    </div>

                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/bvt.png" class="" alt="Image 2">
                        <h5>Book Video Trailer</h5>
                        <p>From conception to the final delivery, we design book trailers that perfectly emit your ideas
                            and
                            present an attractive outlook, conveying your story in the most interesting way possible</p>
                    </div>
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/bcd.png" class="" alt="Image 2">
                        <h5>Book Cover Designs</h5>
                        <p>Book cover design is universally the most crucial aspect of your hard-written work, and we
                            thoroughly
                            put our emphasis on book cover art that escalates your book to another level of charm.
                            Therefore, we
                            have composed book cover designers who know all the bells and whistles of art</p>
                    </div>
                    <div class="books-info">
                        <img src="assets/publishing-lp3/images/awd.png" class="" alt="Image 2">
                        <h5>Author Website Development</h5>
                        <p>Besides everything we do, we possess expertise in author website development with detailed
                            customization options to assist you in showcasing your unique identity, engaging readers,
                            and
                            effectively promoting your writing works</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--Reasons To Choose Us  -->
    <section class="tab-pack-box pack-sec sec-pad lp-pack-sec lazy-background ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="feature-sec animatedParent">
                            <h2 class="sec-hd text-center"><span>Reasons to choose us</span></h2>
                            <ul class="features-ul">
                                <li class="animated bounceInLeft go" data-id="1">
                                    <img data-src="assets/publishing-lp3/images/reasons-icon-1.webp"
                                        class="img-fluid lazyload" alt="reasons-icon-1">
                                    <h5>Qualified <br> ghostwriters</h5>
                                    <div class="icn-tooltip">
                                        <div class="tooltip-innr">Experienced & Supportive Ghost Book Writers
                                        </div>
                                    </div>
                                </li>
                                <li class="animated bounceInLeft go" data-id="2">
                                    <img data-src="assets/publishing-lp3/images/reasons-icon-2.webp"
                                        class="img-fluid lazyload" alt="reasons-icon-2">
                                    <h5>24/7 Support <br>System </h5>
                                    <div class="icn-tooltip">
                                        <div class="tooltip-innr">Customer Support That Gives You a Sigh of Relief
                                        </div>
                                    </div>
                                </li>
                                <li class="animated bounceInLeft go" data-id="3">
                                    <img data-src="assets/publishing-lp3/images/reasons-icon-3.webp"
                                        class="img-fluid lazyload" alt="reasons-icon-3">
                                    <h5>Timely<br> Procedure</h5>
                                    <div class="icn-tooltip">
                                        <div class="tooltip-innr">101% Timely Deliveries to Get You Going
                                        </div>
                                    </div>
                                </li>
                                <li class="animated bounceInLeft go" data-id="4">
                                    <img data-src="assets/publishing-lp3/images/reasons-icon-4.webp"
                                        class="img-fluid lazyload" alt="reasons-icon-4">
                                    <h5>100% <br>satisfaction</h5>
                                    <div class="icn-tooltip">
                                        <div class="tooltip-innr">Functional Blueprints for Successful Book Publishing
                                        </div>
                                    </div>
                                </li>
                                <li class="animated bounceInLeft go" data-id="5">
                                    <img data-src="assets/publishing-lp3/images/reasons-icon-5.webp"
                                        class="img-fluid lazyload" alt="reasons-icon-5">
                                    <h5>Your <br>ownership</h5>
                                    <div class="icn-tooltip">
                                        <div class="tooltip-innr">We Produce, and You Own
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Reasons To Choose Us end  -->

    <section class="book_bestseller">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h3 class="head-mm ">Our <strong class="theme_col">Portfolio</strong></h3>
                    <p>Years of building blocks have led us to this day, where we proudly present the portfolio of the
                        work
                        that we have done for our clients. Yes, ladies and gentlemen, we've relied on bricks to
                        construct
                        our bridges to success.</p>
                </div>
                <div class="col-lg-3">
                    <div class="bgcolorset"></div>
                    <ul class="listtabs ">
                        <li data-targetit="box-christian" class="active"><a href="javascript:;">Christian Books</a></li>
                        <li data-targetit="box-fiction"><a href="javascript:;">Fiction</a></li>
                        <li data-targetit="box-nonfiction"><a href="javascript:;">Non Fiction</a></li>
                        <li data-targetit="box-biographys"><a href="javascript:;">Biography</a></li>
                        <li data-targetit="box-childrenbook"><a href="javascript:;">Children Book </a></li>
                        <li data-targetit="box-autobiography"><a href="javascript:;">Autobiography </a></li>
                        <li data-targetit="box-businessbooks"><a href="javascript:;">Business Books </a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <h3 class="head-mm ">Book <strong class="theme_col">Bestsellers</strong></h3>
                    <div class="box-christian showfirst books_slides">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/Book 01.png">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/Book 02.png">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/Book 03.png">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/Book 04.png">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/Book 05.png">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/Book 06.png">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="box-fiction books_slides">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/01.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/04.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/02.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/05.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/03.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/06.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/07.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/08.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/09.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/10.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/11.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/12.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/13.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/14.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/15.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/16.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/17.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/18.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/19.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/20.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/21.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/22.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/23.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/24.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/25.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/fiction/26.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-nonfiction books_slides">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/01.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/02.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/03.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/04.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/05.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/06.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/07.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/non-fiction/08.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-biographys books_slides">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/01.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/02.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/03.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/04.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/05.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/06.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/07.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/08.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/09.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/10.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/11.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/12.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/13.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/14.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/15.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/16.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/17.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/18.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/biography/19.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-childrenbook books_slides">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/01.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/02.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/03.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/04.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/05.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/06.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/07.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/08.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/09.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/10.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/children/11.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-autobiography books_slides">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/01.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/02.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/03.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/04.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/05.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/06.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/07.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/08.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/auto-biography/09.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-businessbooks books_slides">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/01.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.4)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/02.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/03.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/04.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/05.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.3)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/06.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.2)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/07.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.1)
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="books-boxes">
                                        <div class="booksdv">
                                            <img class="" src="assets/images/books/business-book/08.webp">
                                        </div>
                                        <div class="ratings">
                                            <img src="assets/images/books/ratings.webp">
                                            (4.5)
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Sell Book -->


    <!-- We Have Helped -->
    <section class="why-choose">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <h1 class="sec-hdg">Through Willpower and Dedication, We Evolved Into an Illuminating Beacon for
                        an
                        Immense Multitude of Authors
                    </h1>
                    <p class="sub-title">At Authors Time, our aim is to land authors in a promised land by
                        providing
                        one-stop literary solutions to our clients. With that being said, we use our modernized
                        resources to
                        elevate the author's brand identity while creating strategies that enchant your audience with
                        quality-centered outcomes. </p>




                </div>
                <div class="col-md-5">
                    <div class="slide-image we-have owl-carousel owl-theme owl-loaded owl-drag">
                        <img data-src="assets/publishing-lp3/images/slide-image.webp" class="img-fluid lazyload"
                            alt="slide-image">
                        <img data-src="assets/publishing-lp3/images/slide-image-1.webp" class="img-fluid lazyload"
                            alt="slide-image-1">
                        <img data-src="assets/publishing-lp3/images/slide-image-2.webp" class="img-fluid lazyload"
                            alt="slide-image-2">
                        <img data-src="assets/publishing-lp3/images/slide-image-3.webp" class="img-fluid lazyload"
                            alt="slide-image-3">
                        <img data-src="assets/publishing-lp3/images/slide-image-4.webp" class="img-fluid lazyload"
                            alt="slide-image-4">
                        <img data-src="assets/publishing-lp3/images/slide-image-5.webp" class="img-fluid lazyload"
                            alt="slide-image-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- We Have Helped end -->
    <!-- cta start -->
    <section class="main_cta lazy-background">
        <div class="container">
            <div class="cta_text_wrap">
                <h3>Collaborate With Industry-Specialist Book Publishers</h3>
                <p>Our professional services and versatile workforce are dedicated to providing successful upshot</p>
                <div class="cta_btn">
                    <a href="tel:(929) 379-9764" class="call_cta home-btn">
                        <img src="assets/publishing-lp3/images/phone-icon.webp" class="img-fluid ">
                        (929) 379-9764
                    </a>
                    <a class="home-btn" href="javascript:;" data-fancybox="" data-target="#popupform"
                        data-toggle="modal">HIRE US</a>
                    <a class="home-btn chat" href="javascript:;">CHAT NOW</a>
                </div>
            </div>
            <span class="cta_img_left">
                <img data-src="assets/publishing-lp3/images/cta_left_img.webp" alt="Cta Image"
                    class="img-fluid lazyload">
            </span>
            <span class="cta_img_right">
                <img data-src="assets/publishing-lp3/images/cta_right_img.webp" alt="Cta Image"
                    class="img-fluid lazyload">
            </span>
        </div>
    </section>
    <!-- cta end -->
    <!-- Reviews -->
    <section class="main-awards">
        <div class="container">
            <div class="row process-responsive-slider">
                <div class="col-md-4">
                    <div class="reviews">
                        <span><img data-src="assets/publishing-lp3/images/reviews-icon-2.webp"
                                class="img-fluid lazyload" alt="reviews-icon"></span>
                        <img data-src="assets/publishing-lp3/images/star.webp" class="img-fluid lazyload" alt="star">
                        <h5>Jessica R</h5>
                        <div class="review-content">
                            <p>The professional ghostwriter services at Authors Time are
                                second to none. They understood my vision and translated it into a beautifully written
                                book. I couldn't be happier!
                            </p>
                            <!-- <h6>Educationist & Author</h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="reviews">
                        <span><img data-src="assets/publishing-lp3/images/reviews-icon-1.webp"
                                class="img-fluid lazyload" alt="reviews-icon-1"></span>
                        <img data-src="assets/publishing-lp3/images/star.webp" class="img-fluid lazyload" alt="star">
                        <h5>Jason Xavier</h5>
                        <div class="review-content">
                            <p>I'm a seasoned author, but due to my busy schedule, I wanted someone with competency to
                                look
                                after the proofreading process; guess what? Authors Time
                                did
                                wonders and provided me with a polished copy of my work.
                            </p>
                            <!-- <h6>Jason Xavier</h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="reviews">
                        <span><img data-src="assets/publishing-lp3/images/reviews-icon.webp" class="img-fluid lazyload"
                                alt="reviews-icon-2"></span>
                        <img data-src="assets/publishing-lp3/images/star.webp" class="img-fluid lazyload" alt="star">
                        <h5>Jack Mathews</h5>
                        <div class="review-content">
                            <p>I was nervous about self-publishing, but Authors Time made
                                it simple. They guided me through the process and made it less daunting. Now, I'm a
                                published author!
                            </p>
                            <!-- <h6>Book Author</h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews end -->
    <!-- footer form start-->
    <footer class="main-footer lazy-background ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="main-footer-text">
                    <h3 class="sec-hdg">Are You Looking To Skyrocket Your Writing Journey? Or Need Full-End Support
                        for Your
                        Book Publishing? Congratulations, You Are at the Right Place.</h3>
                    <p>Fill in the form below to get started.</p>
                </div>
                <div class="col-lg-8">
                    <div data-form-type="footer_form" class="main-footer-form">
                        <form class="signupForm leadForm" method="post" action="sendmail/sendmail">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                            <input type="hidden" name="form_name" value="POP-UP FORM" />
                            <input type="hidden" name="bot_detector" value="" />
                            <div class="footer-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-form-control">
                                            <input type="text" class="form-control" placeholder="Enter your Name"
                                                name="name" maxlength="30" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-form-control">
                                            <input type="email" class="form-control"
                                                placeholder="Enter your Email Address" name="email" required
                                                data-validation="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-form-control">
                                            <input type="number" class="form-control"
                                                placeholder="Enter your Phone Number" maxlength="12" name="phone"
                                                required data-validation="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-form-control">
                                            <input type="text" class="form-control" placeholder="Enter your Service"
                                                name="service" data-validation="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="footer-form-textarea">
                                            <textarea name="message" class="form-control"
                                                placeholder="Enter brief description about your book"
                                                data-validation="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div id="formResult"></div>
                                        <button type="submit" name="sendmail" class="custombtn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer form end-->
    <section class="main_coryright">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer_logo">
                        <a href="/">
                            <img data-src="assets/logo-light.png" alt="Footer Logo" class="img-fluid lazyload"
                                style="max-width: 80%;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p style="color: #fff;"><strong>Mailing Address:</strong></p>
                    <p style="color: #fff;"><a style="color: #fff;" href="javascript:;"><i
                                class="fas fa-map-marker-alt"></i> 112 West 34th Street 18th & 17th
                            Floors 10120 New York United States</a></p>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <div class="copyright_text">
                        <p>Copyright ©
                            2024
                            Authors Time. All rights reserved
                        </p>
                        <ul class="menu-inline">
                            <li><a href="/terms-conditions">Terms and
                                    Conditions</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="copyright_img">
                        <img data-src="assets/publishing-lp3/images/payment.webp" alt="Payment"
                            style="top: 20px;position: relative;" class="img-fluid lazyload">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="bottum-bar" id="bbar">
        <a href="tel:+1 (877) 358-1660" class="custombtn bnr-btn">Call Now</a>
        <a href="javascript:;" class="custombtn bnr-btn-talk  chat">CHAT NOW</a>
    </section> -->

    <div class="modal fade " id="popupform" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="halloween-popup inlineBlock" id="halloween-popup">
                    <button type="button" class="fancybox-close-small close" data-dismiss="modal" aria-label="Close">
                        X
                    </button>
                    <div class="halloween-blur"></div>
                    <div class="halloween-popup-inner">
                        <div class="modal-img">

                            <img src="assets/publishing-lp3/images/popup-img2.jpg" alt="popup-image" class="img-fluid">
                        </div>
                        <div class="modal-form">

                            <h3>Book A Free Consultation Now!</h3>
                            <div data-form-type="signup_form">
                                <form class="leadForm" method="post" action="sendmail/sendmail">
                                    <!--hidden required values-->
                                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                    <input type="hidden" name="internet_connection"
                                        value="<?php echo $locationData->isp; ?>" />
                                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                    <input type="hidden" name="region"
                                        value="<?php echo $locationData->regionName; ?>" />
                                    <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                    <input type="hidden" name="form_name" value="POP-UP FORM" />
                                    <input type="hidden" name="bot_detector" value="" />
                                    <div class="halloween-filed d-block">
                                        <input type="hidden" id="formType" name="formType">
                                        <input type="hidden" id="referer" name="referer">
                                        <input type="text" placeholder="Type your full Name" name="name" maxlength="30"
                                            required data-validation="required">
                                        <input type="email" placeholder="Email Address" name="email" required
                                            data-validation="required">
                                        <input type="number" placeholder="Phone Number" name="phone" required
                                            data-validation="required">
                                        <textarea placeholder="Message" name="message" class="txt"></textarea>
                                        <button type="submit" name="sendmail" class="halloween_btn">Send to
                                            us!</button>
                                        <div id="formResult"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="floatbutton">
        <div class="btns_wrap">
            <a href="javascript:;" class="chat_wrap chat" id="dynamic" onclick="setButtonURL();">
                <span class="icoo"><i class="fa fa-comment"></i></span>
                <span class="blinking">Chat to Get Discount</span>
            </a>
            <a href="tel:(929) 379-9764" class="call_wrap">
                <span class="icoo"><i class="fa fa-phone"></i></span>
                <span> (929) 379-9764 </span>
            </a>
        </div>
        <div class="clickbuttonfloat">
            <div class="crossplus"> LET’S GET STARTED</div>
        </div>
        <div class="banner-form">
            <h3>Sign Up Now &amp; <br><strong>Let’s Get Started</strong></h3>
            <div class="banform">
                <div class="container">
                    <div class="row">
                        <div class="ban-form">
                            <form class="cmxform" id="bannerform" method="POST" action="sendmail/sendmail">
                                <!--hidden required values-->
                                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                <input type="hidden" name="internet_connection"
                                    value="<?php echo $locationData->isp; ?>" />
                                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                <input type="hidden" name="form_name" value="POP-UP FORM" />
                                <input type="hidden" name="bot_detector" value="" />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input id="username" name="name" maxlength="30" minlength="2" type="text"
                                                required placeholder="Enter your name *" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input id="cemail" type="email" name="email" required
                                                placeholder="Enter email here *" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input id="cphone" type="tel" name="phone" required
                                                placeholder="Enter phone here *" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <textarea name="message" id="" rows="7"
                                                placeholder="Talk About Your Project"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <div class="sumbit-btn">
                                                <button type="submit" name="sendmail"
                                                    class="custombtn  learn-more-tab">Submit</button>
                                            </div>
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


    <script src="assets/publishing-lp3/js/plugin.js"></script>
    <script src="assets/publishing-lp3/js/custom.js" defer=""></script>
    <script src="assets/publishing-lp3/js/jquery.validate.min.js"></script>
    <script src="assets/publishing-lp3/js/lazysizes-min.js"></script>
    <script src="assets/publishing-lp3/js/lazyload-background.js"></script>
    <!--<script src="assets/js/web-workers/backend/web-worker-backend.js" type="text/javascript"></script>-->
    <!--<script src="assets/js/socketPackage/socket.io.js" type="text/javascript"></script>-->
    <!--<script src="assets/js/socketPackage/socket.js" type="text/javascript"></script>-->
    <!--<script src="assets/js/socketPackage/online-offline.js" type="text/javascript"></script>-->

    <script>
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
    //=========== FLOATING FORM STARTS
    $(".clickbuttonfloat").click(function() {
        $('.floatbutton').toggleClass("active");
        //$('.crossplus').toggleClass("rotate");
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    });
    //=========== FLOATING FORM ENDS
    </script>

    <!-- Start of designneshelp Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132">
    </script>
    <!-- End of designneshelp Zendesk Widget script -->

    <script>
    $('.livechat, .live_chatt, .chat, #flashing').click(function() {
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
    $(document).ready(function() {
        $('input[name="phone"]').on('input', function() {
            var phoneNumber = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            if (phoneNumber.length > 10) {
                $(this).val(phoneNumber.slice(0, 10)); // Limit to 10 digits
            }
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

    $(document).ready(function() {
        $(".btn-submit").click(function(e) {
            var button = $(this);
            var form = button.closest("form")[0];

            if (form.checkValidity()) {
                e.preventDefault();

                button.prop("disabled", true).text("Submitting...");
                form.submit();
            } else {
                form.classList.add("was-validated");
            }
        });
    });
    </script>
</body>

</html>