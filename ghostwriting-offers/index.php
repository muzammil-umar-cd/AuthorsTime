<?php
// include ('sendmail/sendmail.php');
include('config.php');

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
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get affordable ghostwriting services by the experts | <?php echo WEBSITE_NAME; ?></title>
    <meta name="description" content="Got a plot idea and want to turn it into a book? Hire <?php echo WEBSITE_NAME; ?>to write your next book and we will manifest reality to your book writing dream. ">
    <link rel="icon" href="assets/offer/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet import preload" type="text/css" href="assets/offer/css/plugin.css" as="style" async="">
    <link href="css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Start of designneshelp Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132">
    </script>
    <!-- End of designneshelp Zendesk Widget script -->

</head>

<body>

    <header class="main-header">
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-2 col-md-3" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1500">
                        <a class="header-logo" href="/ghostwriting-offers/">
                            <img src="assets/offer/images/logo.png" alt="Authors Time">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-9" data-aos="fade-left" data-aos-delay="600" data-aos-duration="1500">
                        <div class="header-contact">
                            <ul>
                                <li><a href="<?php echo PHONE_HREF; ?>"><i class="sprite sprite-phone"></i><span><?php echo PHONE; ?></span></a></li>
                                <li><a href="javascript:;" class="chatt"><i class="sprite sprite-chat"></i><span>Chat Now</span></a></li>
                                <li><a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="header-btn">Request
                                        a Quote</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <title><?php echo WEBSITE_NAME; ?></title>
    <section class="main-banner">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="banner-text-wrap" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
                        <h3><span>Hire The Finest </span><br>Ghostwriters In Town</h3>
                        <p>Your readers are waiting for your next masterpiece! Our qualified Ghostwriters, Editors and
                            Proofreaders will help you become a Best-Selling Author.</p>
                        <ul class="banner_list">
                            <li><i class="fas fa-caret-right"></i>Keeping The Trust Of 500+ International Writers</li>
                            <li><i class="fas fa-caret-right"></i>Rehired By Almost 90% Of Our Clients</li>
                            <li><i class="fas fa-caret-right"></i>Team Of 2.5k+ Professional Writers & Editors</li>
                            <li><i class="fas fa-caret-right"></i>Your Satisfaction Is Our Top Priority</li>
                        </ul>
                        <div class="awards">
                            <p>Highly Recommended & Trusted By</p>
                            <img src="assets/offer/images/awards.webp" alt="">
                        </div>
                        <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn2">Request a
                            Quote</a>
                        <a href="<?php echo PHONE_HREF; ?>" class="banner-btn2 started-btn"><?php echo PHONE; ?></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="900">
                    <div class="banner_form_wrap">
                        <div class="banner_form_box" data-form-type="signup_form">
                            <h3><span class="form_hd_bold form_hd_clr">Activate This Offer</span> <br>To Avail More Discount
                                <br>On <span class="form_hd_bold">Ghostwriting Prices!</span>
                            </h3>
                            <form class="" method="post" action="sendmail/sendmail.php">
                                <!--hidden required values-->
                                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                <input type="hidden" name="internet_connection"
                                    value="<?php echo $locationData->isp; ?>" />
                                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" name="name" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" name="email" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Phone Number" maxlength="20" minlength="10" name="phone" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="msg" placeholder="Message" data-validation="required" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="formResult"></div>
                                        <div class="clearfix"></div>
                                        <button class="banner_form_btn btn-submit" type="submit" id="">Get A Free Quote
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#about"><i class="fas fa-arrow-down"></i></a>
        </div>
    </section>

    <section class="main-welcome" id="about">
        <div class="container">
            <div class="heading" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="600">
                <h2>Welcome to the world of </h2>
                <h3><?php echo WEBSITE_NAME; ?></h3>
                <p>We make your wish to become an author come true</p>
            </div>
            <div class="welcome-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="welcome-text" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
                            <h3>O' Lord of Ghostwriting Precision, who all wish for a book to be written? </h3>
                            <p>With a vision to spread quality information painted with the shades of creativity, we pour
                                our love for writing into every aspect of our work. With compelling sentence structures and
                                easily comprehensible writing style, we write books that gain attention and entice the
                                readers.<br><br>The moment you start reading the first page of your book, you are sure to be
                                taken to another world. Our highly qualified ghostwriters write words that make the reader
                                feel every bit of emotion while indulging them into the plot of your story. With our help,
                                you get to build a strong connection with every character. </p>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Request
                                a Quote</a>
                            <a href="<?php echo PHONE_HREF; ?>">
                                <div class="welcome-number">
                                    <i class="sprite sprite-welcome-phone"></i>
                                    <p>Talk with Us at<br><span><?php echo PHONE; ?></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="welcome-img" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="600">
                                    <img src="assets/offer/images/welcome-1.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="welcome-img" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="1200">
                                    <img src="assets/offer/images/welcome-2.webp" alt="" class="img-fluid">
                                </div>
                                <div class="welcome-img" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="1500">
                                    <img src="assets/offer/images/welcome-4.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#feature"><i class="sprite sprite-welcome-icon"></i></a>
        </div>
    </section>

    <section class="main-feature" id="feature">
        <div class="container" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="600">
            <div class="heading">
                <h2>World of</h2>
                <h3>Genres We Excel In</h3>
                <p>Our ghostwriters write spectacularly amazing books</p>
            </div>
            <div class="feature-carousel owl-carousel owl-theme owl-loaded">
                <div class="item">
                    <div class="featue-box-wrap">
                        <img src="assets/offer/images/featue-box-1.webp" alt="" class="img-fluid">
                        <div class="feature-box-text">
                            <h3>Fiction</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Get a
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="featue-box-wrap">
                        <img src="assets/offer/images/featue-box-2.webp" alt="" class="img-fluid">
                        <div class="feature-box-text">
                            <h3>Biography</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Get a
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="featue-box-wrap">
                        <img src="assets/offer/images/featue-box-3.webp" alt="" class="img-fluid">
                        <div class="feature-box-text">
                            <h3>Non-Fiction</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Get a
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="featue-box-wrap">
                        <img src="assets/offer/images/featue-box-4.webp" alt="" class="img-fluid">
                        <div class="feature-box-text">
                            <h3>Informative</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Get a
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="featue-box-wrap">
                        <img src="assets/offer/images/featue-box-5.webp" alt="" class="img-fluid">
                        <div class="feature-box-text">
                            <h3>Momoir</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Get a
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="featue-box-wrap">
                        <img src="assets/offer/images/featue-box-6.webp" alt="" class="img-fluid">
                        <div class="feature-box-text">
                            <h3>Children's Books</h3>
                            <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Request a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#cta"><i class="sprite sprite-feature-icon"></i></a>
        </div>
    </section>

    <section class="main-cta" id="cta">
        <div class="container">
            <div class="heading" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="600">
                <h2>No time to write?</h2>
                <h3><span>No problem! At <?php echo WEBSITE_NAME; ?></span></h3>
                <p>we’ve assembled a team of writers that make creating your book no hassle at all.</p>
            </div>
            <div class="cta-btn-wrap">
                <ul>
                    <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
                        <a href="javascript:;" class="chatt">
                            <div class="welcome-number cta-chat">
                                <p>Available 24/7<br><span>Live Chat</span></p>
                                <i class="sprite sprite-cta-chat"></i>
                            </div>
                        </a>
                    </li>
                    <li data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="400">
                        <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="banner-btn">Request a
                            Quote</a>
                    </li>
                    <li data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
                        <a href="<?php echo PHONE_HREF; ?>">
                            <div class="welcome-number">
                                <i class="sprite sprite-welcome-phone"></i>
                                <p>Take with Us at<br><span><?php echo PHONE; ?></span></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#choose"><i class="sprite sprite-chat-icon"></i></a>
        </div>
    </section>

    <section class="main-choose" id="choose">
        <div class="container" data-aos="fade-down" data-aos-duration="1500">
            <div class="heading">
                <h2>Why <?php echo WEBSITE_NAME; ?>?</h2>
                <h3><span>Our</span> Ghostwriting <span>&</span></h3>
                <p>editing services are sure to enchant your readers</p>
            </div>
            <div class="choose-carousel owl-carousel owl-theme owl-loaded">
                <div class="item">
                    <div class="choose-box-wrap">
                        <i class="sprite sprite-choose-icon-1"></i>
                        <h3>Array Of Ghostwriters</h3>
                        <p>Our <?php echo WEBSITE_NAME; ?>are qualified professionals that come from various fields and
                            experiences.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="choose-box-wrap">
                        <i class="sprite sprite-choose-icon-2"></i>
                        <h3>Online Support</h3>
                        <p>Our support team is always ready to serve you via chat, email or call whenever you need them.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="choose-box-wrap">
                        <i class="sprite sprite-choose-icon-3"></i>
                        <h3>Finest Literary Usages</h3>
                        <p>Our ghostwriters are instilled with a powerful tool of literary language that is technical and
                            attractive.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="choose-box-wrap">
                        <i class="sprite sprite-choose-icon-4"></i>
                        <h3>Secure Ownership</h3>
                        <p>We offer reasonable, discounted rates with compelling quality ghostwriting services.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="choose-box-wrap">
                        <i class="sprite sprite-choose-icon-5"></i>
                        <h3>Unlimited Revisions</h3>
                        <p>We offer unlimited revisions to your work. We make sure you are delivered what you
                            envisioned!</p>
                    </div>
                </div>
                <div class="item">
                    <div class="choose-box-wrap">
                        <i class="sprite sprite-choose-icon-6"></i>
                        <h3>Reasonably Priced</h3>
                        <p>We offer reasonable and discounted rates guaranteeing top-quality writing services!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="arrow-down">
            <a href="#portfolio"><i class="sprite sprite-choose-icon"></i></a>
        </div>
    </section>

    <section class="main-portfolio" id="portfolio">
        <div class="container">
            <div class="heading" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="600">
                <h2>Book Best Sellers</h2>
                <h3>Our Books Portfolio</h3>
            </div>
            <div class="portfolio-wrap">
                <div class="portfolio-tab" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="600">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fiction</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Biography</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Non-Fiction</a>
                            <a class="nav-item nav-link" id="nav-informative-tab" data-toggle="tab" href="#nav-informative" role="tab" aria-controls="nav-informative" aria-selected="false">Informative</a>
                            <a class="nav-item nav-link" id="nav-memoir-tab" data-toggle="tab" href="#nav-memoir" role="tab" aria-controls="nav-memoir" aria-selected="false">Memoir</a>
                            <a class="nav-item nav-link" id="nav-book-tab" data-toggle="tab" href="#nav-book" role="tab" aria-controls="nav-book" aria-selected="false">Children's Books</a>
                        </div>
                    </nav>
                </div>
                <div class="portfolio-tab-img">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row portfolio-slider">
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                                        <img src="assets/offer/images/portfolio/fiction/01.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                                        <img src="assets/offer/images/portfolio/fiction/02.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                                        <img src="assets/offer/images/portfolio/fiction/03.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
                                        <img src="assets/offer/images/portfolio/fiction/04.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">
                                        <img src="assets/offer/images/portfolio/fiction/05.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600">
                                        <img src="assets/offer/images/portfolio/fiction/06.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="700">
                                        <img src="assets/offer/images/portfolio/fiction/07.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="800">
                                        <img src="assets/offer/images/portfolio/fiction/08.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="900">
                                        <img src="assets/offer/images/portfolio/fiction/09.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1000">
                                        <img src="assets/offer/images/portfolio/fiction/10.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1100">
                                        <img src="assets/offer/images/portfolio/fiction/11.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1200">
                                        <img src="assets/offer/images/portfolio/fiction/12.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row portfolio-slider">
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/01.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/02.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/03.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/04.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/05.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/06.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/07.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/08.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/09.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/10.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/11.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/biography/12.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row portfolio-slider">
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/01.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/02.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/03.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/04.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/05.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/06.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/07.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/08.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/09.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/10.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/11.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/non-fiction/12.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-informative" role="tabpanel" aria-labelledby="nav-informative-tab">
                            <div class="row portfolio-slider">
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/01.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/02.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/03.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/04.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/05.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/06.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/07.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/08.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/09.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/10.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/11.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/informative/12.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-memoir" role="tabpanel" aria-labelledby="nav-memoir-tab">
                            <div class="row portfolio-slider">
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/01.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/02.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/03.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/04.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/05.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/06.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/07.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/08.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/09.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/10.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/11.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/memoir/12.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                sss
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-book" role="tabpanel" aria-labelledby="nav-book-tab">
                            <div class="row portfolio-slider">
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/01.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/02.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/03.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/04.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/05.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/06.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/07.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/08.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/09.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/10.webp" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/11.webp" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <div class="portfolio-img">
                                        <img src="assets/offer/images/portfolio/childrens-books/12.webp" alt="" class="img-fluid">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#testimonial"><i class="sprite sprite-portfolio-icon"></i></a>
        </div>
    </section>

    <section class="main-testi" id="testimonial">
        <div class="container" data-aos="fade-down" data-aos-duration="1500">
            <div class="heading">
                <h2>Our Legendary</h2>
                <h3>Clients Say About Us</h3>
            </div>
            <div class="testi-carousel owl-carousel owl-theme owl-loaded">
                <div class="item">
                    <div class="testi-box">
                        <img src="assets/offer/images/review-1.webp" alt="" class="img-fluid">
                        <h3>Kevin Smith</h3>
                        <span>Bestselling Author</span>
                        <p>I utilized the services of <?php echo WEBSITE_NAME; ?>when I was processing a book. Their specialists
                            having a concise and precise vision shows their expertise. I totally recommend availing their
                            services to all thos in need.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <img src="assets/offer/images/review-2.webp" alt="" class="img-fluid">
                        <h3>Chloe Sanders</h3>
                        <span>Bestselling Author</span>
                        <p>I wanted to convert my yoga book into in audiobook; to enhance overall user experience while
                            meditating. The team did a great job. Thank you!</p>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-box">
                        <img src="assets/offer/images/review-3.webp" alt="" class="img-fluid">
                        <h3>Josh J. Perry</h3>
                        <span>Bestselling Author</span>
                        <p>Editing skills of the <?php echo WEBSITE_NAME; ?> team has significantly raised the
                            quality of my manuscript. I am very thankful for their services. The money spent was worth it.
                            Totally recommended!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down">
            <a href="#footer-contact"><i class="sprite sprite-testi-icon"></i></a>
        </div>
    </section>

    <section class="main-contact-form" id="footer-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-lg-0 p-md-0">
                    <div class="footer-form-wrap" data-form-type="footer_form">
                        <div class="heading">
                            <h3><span>Get In</span> Touch With Us</h3>
                        </div>
                        <form class="" method="post" action="sendmail/sendmail.php">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection"
                                value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />

                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 pl-lg-0">
                                        <div class="contact-form-control">
                                            <input type="text" class="form-control" placeholder="Your Name" name="name" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-lg-0">
                                        <div class="contact-form-control">
                                            <input type="phone" class="form-control" placeholder="Phone Number" maxlength="20" minlength="10" name="phone" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pl-lg-0">
                                        <div class="contact-form-control">
                                            <input type="text" class="form-control" placeholder="Your Email" name="email" data-validation="required" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pl-lg-0">
                                        <div class="contact-form-control">
                                            <textarea name="message" id="msg" placeholder="Your Message..." data-validation="required" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pl-lg-0">
                                        <div id="formResult"></div>
                                        <div class="clearfix"></div>
                                        <button class="purchase-btn btn-10 btn-submit" type="submit" id=""> Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 footer-form-img pr-0" data-aos="fade-left" data-aos-duration="1500">
                    <img src="assets/offer/images/footer-form-img.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer_area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-8">
                        <a class="header-logo" href="/ghostwriting-offers">
                            <img src="assets/offer/images/logo.png" alt="Authors Time">
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <ul class="footer_contact">
                            <li>
                                <span>
                                    <i class="fas fa-envelope"></i> Email
                                </span>
                                <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><?php echo ADMIN_EMAIL; ?></a>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-phone"></i> Phone
                                </span>
                                <a href="<?php echo PHONE_HREF; ?>"><?php echo PHONE; ?></a>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-map-marker"></i> Address
                                </span>
                                <a href="javascript:;"><?php echo ADDRESS; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <p class="copyright_txt">© Copyright © 2022 <?php echo WEBSITE_NAME; ?>| All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <ul class="text-right">
                            <li class="list-inline-item"><a class="text-white" href="/terms-conditions">Terms & Conditions</a></li>
                            <li class="list-inline-item"><a class="text-white" href="/privacy-policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--form Modal Popup-->
    <div class="modal modal-form fade" id="popup_form">
        <div class="modal-dialog modal-dialog-centered">
            <div class="entry-box" data-form-type="popup_form">
                <form class="offr-frm" method="post" action="sendmail/sendmail.php">
                    <!--hidden required values-->
                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                    <input type="hidden" name="internet_connection"
                        value="<?php echo $locationData->isp; ?>" />
                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                    <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />

                    <div class="row h-100 justify-content-center">
                        <div class="col-lg-7 col-md-7 col-sm-10 entry-right">
                            <div class="col-sm-12 p-0">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="text_topfr">
                                    <h2>GET YOUR BOOK WRITTEN</h2>
                                    <h4>Fill out this brief form to get your <br>PROJECT STARTED.</h4>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text set_inp_gr"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" data-validation="required" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text set_inp_gr"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email" data-validation="required" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text set_inp_gr"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" maxlength="20" minlength="10" placeholder="Phone Number" data-validation="required" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-0 mt-1">
                                    <div id="formResult"></div>
                                    <div class="clearfix"></div>
                                    <button class="entery-submit btn-submit" type="submit" id="">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--form Modal Popup-->
    <audio style="display: none;" id="notificationSound" src="assets/offer/notification.mp3" preload="auto"></audio>

    <script src="assets/offer/js/plugin.js"></script>
    <script>
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
    <script>
        $(document).ready(function() {
            var originalTitle = document.title;
            var attentionTitle = "💬 New message!";
            var attentionTitle2 = "💬 You're Missing a Big Discount!";
            var blinkInterval = null;
            var afkTimeout = null;
            var isAFK = false;
            var afkTime = 3000; // 30 seconds for AFK detection
            var tabAwayTime = 1000; // 10 seconds before blinking starts
            var soundInterval = null;
            var soundTimeout = 60000;

            zE(function() {
                zE.activate();
            });

            zE(function() {
                $zopim(function() {
                    var unreadCount = $zopim.livechat.getUnreadMessages();
                });
            });

            function startBlinkingTitle() {
                if (!blinkInterval) {
                    blinkInterval = setInterval(function() {
                        // $zopim(function() {
                        //     $zopim.livechat.setOnUnreadMsgs(function(numUnread){
                        //         if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                        //             document.title = (document.title === originalTitle) ? attentionTitle : originalTitle;
                        //             hasUnreadMessage = true;
                        //         }else {
                        //             document.title = (document.title === originalTitle) ? attentionTitle2 : originalTitle;
                        //             hasUnreadMessage = false;
                        //         }
                        //     });
                        // });
                        

                        if (unreadCount >= 1) {
                            document.title = (document.title === originalTitle) ? attentionTitle : originalTitle;
                            hasUnreadMessage = true;
                        } else {
                            document.title = (document.title === originalTitle) ? attentionTitle2 : originalTitle;
                            hasUnreadMessage = false;
                        }
                    }, 1000);
                    startNotificationSound();
                }
            }



            function stopBlinkingTitle() {
                if (blinkInterval) {
                    clearInterval(blinkInterval);
                    blinkInterval = null;
                    document.title = originalTitle;
                }
                stopNotificationSound();
            }

            function resetAfkTimer() {
                if (afkTimeout) {
                    clearTimeout(afkTimeout);
                }
                isAFK = false;
                afkTimeout = setTimeout(function() {
                    isAFK = true;
                    startBlinkingTitle();
                }, afkTime);
            }

            $(window).on("blur", function() {
                setTimeout(function() {
                    if (document.hidden) {
                        startBlinkingTitle();
                    }
                }, tabAwayTime);
            });

            $(window).on("focus", function() {
                stopBlinkingTitle();
                resetAfkTimer();
            });


            function startNotificationSound() {
                if (!soundInterval) {
                    soundInterval = setInterval(function() {
                        document.getElementById("notificationSound").play();
                    }, soundTimeout);
                }
            }

            function stopNotificationSound() {
                if (soundInterval) {
                    clearInterval(soundInterval);
                    soundInterval = null;
                }
            }

            function simulateNewChatMessage() {
                if (isAFK) {
                    startBlinkingTitle();
                }
            }

            setTimeout(simulateNewChatMessage, 1000);

            resetAfkTimer();
        });
    </script>
    <script>
        $('.chat, .live_chatt, .chatt').click(function() {
            $zopim.livechat.window.toggle();
            return false;
        });
    </script>
</body>

</html>