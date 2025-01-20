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
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Cache-Control" content="max-age=0, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0" />
    <title>Professional Publishing Services for Authors | Your Book, Your Voice</title>
    <meta name="description" content="Explore our comprehensive publishing services for authors. From manuscript to market, we guide your book's journey with expertise and care." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
   <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">
    <!-- All Plugin Css -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
   <!-- Include the Font Awesome CSS from the free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
</head>

<body>



    <header>
        <div class="container">
            <div class="row align-items-center justify-content-between no-gutters">
                <div class="col-lg-3 col-sm-12 col-md-4">
                    <div class="logo" data-aos="fade-right" data-aos-duration="1500">
                        <a href="/"><img src="images/logo-lh.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="tal_us" data-aos="fade-left" data-aos-duration="1500">
                        <ul class="talk_list">
                            <li><a href="javascript:;" class="chatLink chatt" id="blinking-button">
                                    <img src="images/chat_icon.png"> TALK TO US</a>
                            </li>
                            <li><a href="tel:(929) 379-9764" id="blinkElement">
                                    <img src="images/tell_icon.png">(929) 379-9764</a>
                            </li>
                        </ul>
                        <a href="javascript:;" class="gets_quotes popup-btn">Get A FREE QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="banner_content" data-aos="fade-right" data-aos-duration="1500">
                        <h5>Authors Time</h5>
                        <h2>Where Dreams Become Books!</h2>
                        <p>At Authors Time, we're passionate about turning your literary dreams into
                            published reality.
                            Our self publishing book company handles the entire publishing process, allowing you to
                            focus on what you do best - writing. With our personalized approach, we ensure that your
                            unique voice and vision shine through in every book we publish.</p>
                        <div class="form_bootom">
                            <ul>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> UNLIMITED REVISIONS</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> GET ACCEPTED TO AMAZON FAST
                                </li>
                            </ul>
                        </div>
                        <div class="combo_img">
                            <a href="https://www.trustpilot.com/review/authorstime.com" target="_blank">
                                <img src="images/rating-1.png" alt="Trustpilot" loading="eager">
                            </a>
                            <a href="https://www.reviews.io/company-reviews/store/authorstime.com" target="_blank">
                                <img src="images/rating-2.png" alt="Reviews.io" loading="eager">
                            </a>
                            <img src="images/rating-3.png" alt="Clutch" loading="eager">
                            <img src="images/four.png" alt="Four" loading="eager">
                        </div>

                        <ul>
                            <li data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500"
                                class="aos-init aos-animate">
                                <a href="javascript:;" class="popup-btn white_btn custom-order-now-btn">Order Now</a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"
                                class="aos-init aos-animate">
                                <div class="contact-btn-main">
                                    <a href="tel:(929) 379-9764"><i class="fa-solid fa-phone fa-bounce"></i> &nbsp;(929) 379-9764 </a>
                                </div>
                            </li>
                        </ul>

                        <div class="start-a-free-chat">
                            Or <a href="javascript:;" class="chatLink call-num-link chatt" id="blinking-button">
                                Start A Live Chat</a> to discuss your requirements
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 offset-md-1 offset-0 " data-aos="fade-left" data-aos-duration="1500">
                    <div class="form-waraper">
                        <div class="form-heading">
                            <h1>Sign Up Now To Avail <br><span> Exclusive Discounts</span></h1>
                        </div>
                        <div class="form-title">
                            <p>Offer valid for the first <span>8 signups</span> only!</p>
                        </div>
                        <div class="form-control" data-form-type="footer_form">
                            <form class="leadForm" action="../sendmail/send_mail_lp2.php" method="post">
                                <!--hidden required values-->
                                <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                                <input type="hidden" name="city" value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                                <input type="hidden" name="country" value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                                <input type="hidden" name="internet_connection" value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                                <input type="hidden" name="zipcode" value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                                <input type="hidden" name="region" value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                                <input type="hidden" name="url" value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                                <div class="form-group custom-form form-icon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" name="name" maxlength="30"class="custom-field" placeholder="Enter Your Name"
                                        data-validation="required" required />
                                </div>
                                <div class="form-group custom-form form-icon">
                                    <i class="fa fa-envelope fs-18" aria-hidden="true"></i>
                                    <input type="email" name="email" class="custom-field" placeholder="Email Address"
                                        data-validation="required" required />
                                </div>
                                <div class="form-group custom-form form-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="tel" name="phone" maxlength="10" id="" class="custom-field"
                                        placeholder="Phone Number" data-validation="required" required />
                                </div>
                                <div class="form-group custom-form form-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <textarea name="message" class="custom-field w-100 pt-2" id="" rows="3"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" name="send_reserve_req" class="gets_quotes form-btn"
                                        value="Get in Touch">SUBMIT</button>
                                    <div id="formResult"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logo-brand-slider-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logos-slider-main-wrap owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/b.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/c.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/d.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/e.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/f.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/a.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/b.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/c.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/d.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/e.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/f.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/a.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/b.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/c.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/d.webp" alt="" loading="eager">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 259.204px;">
                                    <div class="item">
                                        <img src="images/logos/e.webp" alt="" loading="eager">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article-serving-offer new">
        <div class="container">
            <h3 class="mb-5">Unlock the Door to Your Publishing Dreams</h3>

            <div class="row article-serving-offer-slider justify-content-center">
                <div class="col-xl-3 col-md-6 col-12  mb-4">
                    <div class="article-ser-box new lp-publishing">
                        <div class="inner-content-articles">
                            <img class="lazy loaded" data-src="images/1.png" src="images/1.png" alt=""
                                data-was-processed="true">
                            <h6>Personalized for Your Needs</h6>
                            <p>At Authors Time, we don't believe in one-size-fits-all solutions when you come
                                to get a book published. We take the time to understand your goals and vision, providing
                                a range of tailored services. From editing to cover design, distribution to marketing,
                                we customize our approach to ensure your book's success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12  mb-4">
                    <div class="article-ser-box new lp-publishing">
                        <div class="inner-content-articles">
                            <img class="lazy loaded" data-src="images/2.png" src="images/2.png" alt=""
                                data-was-processed="true">
                            <h6>Empowering New Authors</h6>
                            <p>As book publishers for new authors we're passionate about nurturing new talent. As
                                dedicated book publishers for new authors, we offer support, guidance, and a platform
                                for emerging voices to be heard. We believe in your potential and work tirelessly to
                                help you achieve your authorial dreams.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12  mb-4">
                    <div class="article-ser-box new lp-publishing">
                        <div class="inner-content-articles">
                            <img class="lazy loaded" data-src="images/3.png" src="images/3.png" alt=""
                                data-was-processed="true" loading="eager">
                            <h6>Kindle and eBook Pioneers</h6>
                            <p>In the digital age, we understand the significance of Kindle and eBook publishing. As a
                                leading Kindle book publisher, we're experts in transforming your manuscript into
                                digital masterpieces, reaching a global audience with ease. Our Amazon book publishing
                                services make the process hassle-free.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12  mb-4">
                    <div class="article-ser-box new lp-publishing">
                        <div class="inner-content-articles">
                            <img class="lazy loaded" data-src="images/4.png" src="images/4.png" alt=""
                                data-was-processed="true" loading="eager">
                            <h6>Local Roots, Global Reach</h6>
                            <p>Whether you prefer online or local book publishers, we've got you covered. With our
                                extensive network and online presence, we're accessible to authors across the nation. We
                                offer the personal touch of a local publisher with the convenience of a global presence.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="publishing sec_padding">
        <div class="container">
            <div class="sec_title" data-aos="fade-up" data-aos-duration="1500">
                <h4>Unlock the Door to Your Publishing Dreams</h4>
                <h3>Step into Your Literary Adventure!</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="publishing_content" data-aos="fade-right" data-aos-duration="1500">
                        <p>Are you ready to embark on an extraordinary literary journey? At our book publishing company,
                            Authors Time, we're not just offering amazon book publishing services; we're
                            offering you the chance to write your success story. We're passionate about turning your
                            dreams into books and providing you with the support you need to thrive in the world of
                            publishing.
                            <br><br>Imagine your words leaping off the page, captivating readers, and leaving a lasting
                            impression. It all begins here, with your decision to take that first step of self
                            publishing a book. Your manuscript is more than just words; it's your passion, your
                            creativity, and your unique voice. Our self publishing book company understands the value of
                            your story and is committed to helping you share it with the world.
                        </p>
                        <ul>
                            <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"
                                class="aos-init aos-animate"><a href="javascript:;" class="chatt popup-btn">Get
                                    Started</a></li>
                            <li data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500"
                                class="aos-init aos-animate"><a href="tel:(929) 379-9764" class="white_btn">(929) 379-9764</a></li>
                            <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"
                                class="aos-init aos-animate"><a href="javascript:;" class="chatLink chatt">Talk
                                    To Us</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-xl-block">
                    <div class="publishing_img">
                        <img class="img_item publishing_img1" loading="eager" src="images/publishing_img1.png" alt=""
                            data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        <img class="img_item publishing_img2" loading="eager" src="images/publishing_img2.png" alt=""
                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <img class="img_item publishing_img3" loading="eager" src="images/publishing_img3.png" alt=""
                            data-aos="fade-left" data-aos-duration="1000" data-aos-delay="700">
                        <img class="img_item publishing_img4" loading="eager" src="images/publishing_img4.png" alt=""
                            data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta_content" data-aos="fade-up" data-aos-duration="1500">
                <p>Ready to Transform Your Manuscript into a Published Masterpiece?</p>
                <h3>Join our community of passionate authors and start your extraordinary literary journey today. Let's
                    write your success story together!</h3>
                <ul>
                    <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"
                        class="aos-init aos-animate"><a href="javascript:;" class="chatt popup-btn">Get Started</a></li>
                    <li data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500"
                        class="aos-init aos-animate"><a href="tel:(929) 379-9764" class="white_btn">(929) 379-9764</a>
                    </li>
                    <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"
                        class="aos-init aos-animate"><a href="javascript:;" class="chatLink chatt">Talk To
                            Us</a></li>
                </ul>
            </div>
        </div>
        <div class="cta_img">
            <img src="images/cta_img.png" loading="eager" alt="" class="img-fluid" data-aos="fade-left"
                data-aos-duration="1500">
        </div>
    </section>

    <section class="process-sec py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 text-center">
                    <h3 class="heading">Our Book Publishing Process: Your Path to Success</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="process-wrapper">
                        <div class="process-no">
                            <h5>Step</h5>
                            <h2>01</h2>
                        </div>
                        <div class="process-content">
                            <h3>Manuscript Evaluation</h3>
                            <p>Our process begins with a thorough evaluation of your manuscript. We assess its quality,
                                potential, and marketability. This crucial step helps our book publishing agency
                                determine the best publishing approach for your book, whether it's through traditional,
                                self-publishing, or digital platforms. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="process-wrapper">
                        <div class="process-no">
                            <h5>Step</h5>
                            <h2>02</h2>
                        </div>
                        <div class="process-content">
                            <h3>Professional Editing</h3>
                            <p>Once your manuscript is accepted, our team of experienced editors steps in. They
                                meticulously review your work, addressing grammar, spelling, and content issues. Our
                                goal is to refine your book to the highest standard, ensuring it's ready to captivate
                                readers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="process-wrapper">
                        <div class="process-no">
                            <h5>Step</h5>
                            <h2>03</h2>
                        </div>
                        <div class="process-content">
                            <h3>Customized Design</h3>
                            <p>The design of your book cover and interior layout plays a vital role in attracting
                                readers. Our book publishing company works closely with you to create a cover that
                                encapsulates the essence of your story. Our interior design team ensures that your book
                                is visually engaging, providing a seamless reading experience. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="process-wrapper">
                        <div class="process-no">
                            <h5>Step</h5>
                            <h2>04</h2>
                        </div>
                        <div class="process-content">
                            <h3>Publishing and Distribution</h3>
                            <p>With your manuscript polished and your book designed, it's time for the magic to happen.
                                We handle the publishing process, making your book available on a variety of platforms,
                                including Amazon, Kindle, and more. Our book publishing agent uses our extensive
                                distribution network ensures your work reaches a global audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="process-wrapper">
                        <div class="process-no">
                            <h5>Step</h5>
                            <h2>05</h2>
                        </div>
                        <div class="process-content">
                            <h3>Marketing and Promotion</h3>
                            <p>To stand out in the crowded world of ebook publishing services, effective marketing is
                                essential. Our marketing experts develop strategies tailored to your book. We utilize
                                various promotional channels to maximize your book's visibility, including social media,
                                book launches, and targeted advertising
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="process-wrapper">
                        <div class="process-no">
                            <h5>Step</h5>
                            <h2>06</h2>
                        </div>
                        <div class="process-content">
                            <h3>Author Support and Success</h3>
                            <p>The commitment of our book publishing house doesn't end with the publication of your
                                book. We're your partners in success, providing ongoing support to help you thrive as an
                                author. From author events to additional marketing campaigns, we're dedicated to
                                ensuring your book achieves the recognition and success it deserves. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="sec_title">
                        <h3 data-aos="fade-right" data-aos-duration="1500">
                            Start Your Journey to Publishing Success Today!
                        </h3>
                        <ul>
                            <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"><a
                                    href="javascript:;" class="popup-btn bg-yellow-custom">Get Started</a></li>
                            <li data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500"><a
                                    href="tel:(929) 379-9764" class="white_btn bg-white-custom">(929) 379-9764</a></li>
                            <li data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"><a
                                    href="javascript:;" class="chatLink chatt bg-yellow-custom">Talk To
                                    Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta_img_2">
            <img src="images/ccta-after.webp" loading="eager" alt="" data-aos-delay="400" data-aos="fade-left"
                data-aos-duration="1500">
        </div>
    </section>

    <section class="process sec_padding">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-12">
                    <div class="sec_title" data-aos-delay="100" data-aos="fade-right" data-aos-duration="1500">
                        <h4>Five Reasons to </h4>
                        <h3>Choose Authors Time</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="sec_title" data-aos-delay="400" data-aos="fade-right" data-aos-duration="1500">
                        <p>Don't let your manuscript gather dust on the shelf. Take the leap into the world of
                            publishing with Authors Time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block d-xl-block">
                    <div class="process_img" data-aos="fade-up-right" data-aos-duration="1500">
                        <img src="images/story-writer.webp" alt="" class="img-fluid" loading="eager">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="process_area process_slider owl-carousel" data-aos="fade-up-left"
                        data-aos-duration="1500">
                        <div class="item">
                            <ul>
                                <li>
                                    <div class="process_num">
                                        <h5>1</h5>
                                    </div>
                                    <div class="process_main">
                                        <h4>Tailored Expertise</h4>
                                        <p>We understand that every author and every book is unique when it comes to
                                            self publishing a book. Our approach is personalized to your specific needs,
                                            ensuring your vision shines through in every word. From genre-specific
                                            marketing to custom cover designs, we tailor our services to you.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="process_num">
                                        <h5>2</h5>
                                    </div>
                                    <div class="process_main">
                                        <h4>Industry Pioneers</h4>
                                        <p>With years of experience in the publishing industry, we have our finger on
                                            the pulse of the latest trends. We're pioneers in publishing a book through
                                            Amazon, providing unparalleled expertise in Kindle and eBook publishing,
                                            giving your book a competitive edge in the digital landscape.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="process_num">
                                        <h5>3</h5>
                                    </div>
                                    <div class="process_main">
                                        <h4>Support for New Authors</h4>
                                        <p>As book publishers for new authors, we believe in nurturing fresh talent. As
                                            dedicated book publishers for new authors, we offer guidance and mentorship
                                            to help you thrive in the literary world. Your success is our success, and
                                            we're committed to helping you achieve your authorial dreams.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li>
                                    <div class="process_num">
                                        <h5>4</h5>
                                    </div>
                                    <div class="process_main">
                                        <h4>Global Reach with a Local Touch</h4>
                                        <p>We provide the best of both worlds. Our extensive network ensures your book
                                            reaches readers around the globe, while our personalized book publishing
                                            services gives you the warmth and attention of a local publisher. We're the
                                            best of both worlds.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div class="process_num">
                                        <h5>5</h5>
                                    </div>
                                    <div class="process_main">
                                        <h4>Comprehensive Services</h4>
                                        <p>Our commitment doesn't stop at publishing. As one of the best self publishing
                                            companies, we offer a wide range of services from editing and design to
                                            marketing and distribution. You can trust us to support you through every
                                            step of your publishing journey, making it a smooth and rewarding
                                            experience.
                                        </p>
                                    </div>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packages sec_padding">
        <div class="container">
            <div class="sec_title">
                <h4 style="color: #fff">Our Packages For</h4>
                <h3>Book Editing Services</h3>
            </div>
            <div class="packages_wrap">
                <div class="row justify-content-center">

                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="package_box" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
                            <div class="pkg_top">
                                <h5>BRONZE AUTHOR PACKAGE</h5>
                            </div>
                            <!-- <div class="pkg_price">
                                <h3>$1699</h3>
                            </div> -->
                            <div class="pkg_content">
                                <p>EDITING, FORMATTING, SPELL CHECK & TYPESETTING ACCORDING TO INTERNATIONAL BOOK
                                    PUBLISHING STANDARDS</p>
                                <ul class="pkg-list">
                                    <li><i class="fas fa-check"></i>
                                        Publishing on Amazon
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        eBook, paperback and hardcover
                                    </li>
                                    <li><i class="fas fa-check"></i> Proofreading</li>
                                    <li><i class="fas fa-check"></i> Adjusting the typesetting and layout according to
                                        publishing standards</li>
                                    <li><i class="fas fa-check"></i> Formatting</li>
                                    <li><i class="fas fa-check"></i> Authors and books profile</li>
                                    <li><i class="fas fa-check"></i> Finalized digital files</li>
                                    <li><i class="fas fa-check"></i> Book cover design</li>
                                    <li><i class="fas fa-check"></i>
                                        Amazon optimization
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        Dedicated Project Manager
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        Money Back Guarantee
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        100% Ownership Rights
                                    </li>
                                </ul>
                                <a href="javascript:;" class="pkg_btn popup-btn">Get Started</a>
                                <div class="package-footer">
                                    <a href="tel:(929) 379-9764">CALL US (929) 379-9764 </a>
                                    <a href="javascript:;" class="chatLink chatt">Live Chat</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-l2">
                        <div class="package_box" data-aos="fade-down" data-aos-delay="700" data-aos-duration="1500">
                            <div class="pkg_top">
                                <h5>DIAMOND AUTHOR PACKAGE</h5>
                                <div class="ex-tag">
                                    <img src="images/best-seller-img.png" loading="eager">
                                </div>
                            </div>
                            <!-- <div class="pkg_price">
                                <h3>$1699</h3>
                            </div> -->
                            <div class="pkg_content">
                                <!--<h4>AUDIO <br>BOOK</h4>-->
                                <p>EDITING, FORMATTING, SPELL CHECK & TYPESETTING ACCORDING TO INTERNATIONAL BOOK
                                    PUBLISHING STANDARDS
                                </p>
                                <ul class="pkg-list">
                                    <li><i class="fas fa-check"></i>
                                        Publishing on the top 5 platforms
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        eBook, paperback and hardcover
                                    </li>
                                    <li><i class="fas fa-check"></i> Proofreading</li>
                                    <li><i class="fas fa-check"></i> Adjusting the typesetting and layout according to
                                        publishing standards</li>
                                    <li><i class="fas fa-check"></i> Formatting</li>
                                    <li><i class="fas fa-check"></i> Authors and books profile</li>
                                    <li><i class="fas fa-check"></i> Finalized digital files</li>
                                    <li><i class="fas fa-check"></i> Book cover design</li>
                                    <li><i class="fas fa-check"></i>
                                        Amazon optimization
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        Dedicated Project Manager
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        100% Ownership Rights
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        100% Satisfaction Guaranteed
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        No Hidden Charges
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        Money-Back Guarantee
                                    </li>
                                </ul>
                                <a href="javascript:;" class="pkg_btn popup-btn">Get Started</a>
                                <div class="package-footer">
                                    <a href="tel:(929) 379-9764">CALL US (929) 379-9764 </a>
                                    <a href="javascript:;" class="chatLink chatt">Live Chat</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="package_box" data-aos="fade-down" data-aos-delay="700" data-aos-duration="1500">
                            <div class="pkg_top">
                                <h5>
                                    ELITE AUTHOR PACKAGE
                                </h5>
                            </div>

                            <div class="pkg_content">
                                <p>
                                    EDITING, FORMATTING, SPELL CHECK & TYPESETTING ACCORDING TO INTERNATIONAL BOOK
                                    PUBLISHING STANDARDS
                                </p>
                                <ul class="pkg-list">
                                    <li><i class="fas fa-check"></i>
                                        Global Publishing on 50+ platforms
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i> eBook, paperback and hardcover
                                    </li>
                                    <li><i class="fas fa-check"></i> Proofreading</li>
                                    <li><i class="fas fa-check"></i> Adjusting the typesetting and layout according to
                                        publishing standards</li>
                                    <li><i class="fas fa-check"></i> Formatting</li>
                                    <li><i class="fas fa-check"></i> Authors and books profile</li>
                                    <li><i class="fas fa-check"></i> Finalized digital files</li>
                                    <li><i class="fas fa-check"></i> Book cover design</li>
                                    <li><i class="fas fa-check"></i>
                                        Amazon optimization
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        Dedicated Project Manager
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        100% Ownership Rights
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        100% Satisfaction Guaranteed
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        No Hidden Charges
                                    </li>
                                    <li><i class="fas fa-check"></i>
                                        Money-Back Guarantee
                                    </li>
                                </ul>
                                <a href="javascript:;" class="pkg_btn popup-btn">Get Started</a>
                                <div class="package-footer">
                                    <a href="tel:(929) 379-9764">CALL US (929) 379-9764 </a>
                                    <a href="javascript:;" class="chatLink chatt">Live Chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="main-choose sec_padding pt-0">
        <div class="container-fluid">
            <div class="sec_title" data-aos="fade-down" data-aos-duration="1500">
                <h4>Your Book Deserves the Best</h4>
                <h3>Elevate Your Words with Authors Time</h3>
                <p>Ready to turn your manuscript into a masterpiece and share your story with the world? Authors Time is your trusted partner on the path to success when it comes to publishing a book through
                    Amazon. Start your publishing journey with us and experience the difference that expertise, passion,
                    and dedication can make. Let's create literary magic together!
                </p>
            </div>
            <div class="choose-wrap">
                <div class="row no-gutters responsive-choose-slider">
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="200">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Dedicated <br>Publishers</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="400">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Fast <br>Delivery</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="600">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Creative <br>Plots</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="800">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Non-Plagiarized <br>Content</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1000">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Unique Writing <br>Styles</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1200">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Fresh <br>Content</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1400">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Timely <br>Updates</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="choose-box" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1600">
                            <img src="images/choose-icon.png" alt="" class="img-fluid" loading="eager">
                            <h3>Unlimited <br>Revisions</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="teseti-monial-sec prot-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="hd-txt testi-txt-hd clr">
                        <h2 class="wow fadeInUp" data-wow-duration="1s">Take a Look at Our Portfolio </h2>
                        <br>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 px-0">
                    <div class="testi-slider-st">
                        <div class="books-slider-2 owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="testi-box wow fadeInUp" data-wow-duration="1s">
                                <img src="images/1.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/2.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/3.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/4.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/5.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/6.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/7.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/8.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/9.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <img src="images/10.webp" loading="eager">
                                <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="main-heading">Frequently Asked Questions</h2>
                </div>
            </div>


            <div class="faq-accordions my-faq">
                <div class="accordion" id="faqs-accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link faq-title" data-toggle="collapse"
                                    data-target="#collapseOne">
                                    <span class="float-left">
                                        How do I know if my manuscript is suitable for publishing with Authors Time?
                                    </span>
                                    <span class="float-right">
                                        <i class="fa fa-plus mleft-320"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#faqs-accordion">
                            <div class="card-body">
                                <p>We welcome a wide range of genres and topics. Our manuscript evaluation team will
                                    assess the quality, potential, and marketability of your work. Regardless of your
                                    experience or genre, we'll work with you to find the best publishing solution.</p>
                            </div>
                        </div>
                    </div>





                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button type="button" class="faq-title btn btn-link  collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo">
                                    <span class="float-left">
                                        What if I'm a first-time author with no publishing experience?
                                    </span>
                                    <span class="float-right">
                                        <i class="fa fa-plus mleft-320"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#faqs-accordion">
                            <div class="card-body">
                                <p>No worries! We specialize in working with new authors. Our team is dedicated to
                                    guiding you through the publishing process, from editing and design to distribution
                                    and marketing. We're here to make your debut a success.</p>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button type="button" class="faq-title btn btn-link  collapsed" data-toggle="collapse"
                                    data-target="#collapseThree">
                                    <span class="float-left">
                                        How long does the publishing process typically take?
                                    </span>
                                    <span class="float-right">
                                        <i class="fa fa-plus mleft-320"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#faqs-accordion">
                            <div class="card-body">
                                <p> The timeline can vary depending on the complexity of your project, but it usually
                                    takes around 6-12 months from manuscript submission to book release. Our team will
                                    keep you informed at every step of the process.</p>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button type="button" class="faq-title btn btn-link  collapsed" data-toggle="collapse"
                                    data-target="#collapseFour">
                                    <span class="float-left">
                                        Can I retain the rights to my book when I publish with Authors Time?

                                    </span>
                                    <span class="float-right">
                                        <i class="fa fa-plus mleft-320"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#faqs-accordion">
                            <div class="card-body">
                                <p>Absolutely! We believe in maintaining author rights. You'll retain control over your
                                    intellectual property, and we'll assist you in making the best choices for your
                                    book's future.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button type="button" class="faq-title btn btn-link  collapsed" data-toggle="collapse"
                                    data-target="#collapseFive">
                                    <span class="float-left">
                                        What marketing support do you offer to authors?
                                    </span>
                                    <span class="float-right">
                                        <i class="fa fa-plus mleft-320"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#faqs-accordion">
                            <div class="card-body">
                                <p>Our marketing services include book launch strategies, online promotion, social media
                                    marketing, and more. We'll work with you to create a personalized marketing plan to
                                    increase your book's visibility and reach your target audience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="teseti-monial-sec clients-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="hd-txt testi-txt-hd clr">
                        <h2 class="wow fadeInUp" data-wow-duration="1s">Take a Look at What Our Clients Say about Us
                        </h2>
                        <br>
                        <div class="second-images">
                            <a href="https://www.trustpilot.com/review/authorstime.com" target="_blank">
                                <img src="images/img-2.png" loading="eager">
                            </a>
                            <img src="images/img-1.png" loading="eager">
                            <img src="images/img-3.png" loading="eager">
                            <img src="images/img-4.png" loading="eager">
                            <a href="https://www.bark.com/en/us/company/authors-time/q4kGp/" target="_blank">
                                <img src="images/img-5.png" loading="eager">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div class="testi-slider-st">
                        <div class="testimonials-sliders owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="testi-box wow fadeInUp" data-wow-duration="1s">
                                <div class="client-details">
                                    <h4>Sarah R. </h4>
                                    <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                </div>
                                <p>"Working with Authors Time has been an absolute delight. As a
                                    first-time author, their support and guidance were invaluable. My book now sits
                                    proudly on the virtual shelves, reaching readers across the globe. They made my
                                    dream of becoming a published author come true."</p>

                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="2s">
                                <div class="client-details">
                                    <h4>John M. </h4>
                                    <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                </div>
                                <p>"Authors Time's attention to detail is unmatched. Their editing and
                                    design teams transformed my manuscript into a polished masterpiece. With their
                                    expertise in eBook publishing, my thriller series has gained a significant
                                    following. I couldn't be happier with the results." </p>

                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="3s">
                                <div class="client-details">
                                    <h4>Linda S.</h4>
                                    <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                </div>
                                <p>"Authors Time understood my vision and provided a platform for my
                                    self-published work. Their marketing strategies helped me connect with my target
                                    audience, resulting in increased sales and recognition. I'm grateful for their
                                    ongoing support."
                                </p>
                            </div>
                            <div class="testi-box wow fadeInUp" data-wow-duration="3s">
                                <div class="client-details">
                                    <h4>David P. </h4>
                                    <div class="star-icons-custom"><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                </div>
                                <p>"I've worked with various publishers throughout my career, but Authors Time stands out. Their dedication to maintaining author rights while
                                    providing a wide range of publishing services is impressive. They've helped me
                                    expand my reach and grow my readership. Highly recommended!"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-footer-form sec_padding">
        <div class="container">
            <div class="sec_title" data-aos="fade-down" data-aos-duration="1500">
                <h4 style="color: #fff">Get in Touch</h4>
                <h3><span>With Our Publishing </span>Consultant Today</h3>
                <p>Ready to take the first step towards self publishing a book and reaching a global audience? We're
                    here to guide you on your journey to success. Call us now to start transforming your manuscript into
                    a captivating book that resonates wiath readers everywhere. Your publishing dreams are just a phone
                    call away!
                </p>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="footer-form-wrap" data-form-type="footer_form">
                        <form class="leadForm" action="../sendmail/send_mail_lp2.php" method="post" enctype="multipart/form-data">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                            <input type="hidden" name="city" value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                            <input type="hidden" name="country" value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                            <input type="hidden" name="region" value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                            <input type="hidden" name="url" value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <span><i class="far fa-user"></i></span>
                                        <input type="text" name="name" maxlength="30"class="form-control" placeholder="Name"
                                            data-validation="required" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <span><i class="fas fa-phone-volume"></i></span>
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone no."
                                            maxlength="10" data-validation="required" required>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <span><i class="far fa-envelope-open"></i></span>
                                        <input type="text" name="email" class="form-control" placeholder="Email Address"
                                            data-validation="required" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <span> <i class="fa fa-envelope"></i></span>
                                        <textarea name="message" class="form-control" id="" cols="10" rows="1"
                                            placeholder="Message" style="padding-left: 55px;"></textarea>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="btn-box">
                                        <div id="formResult"></div>
                                        <div class="clearfix"></div>
                                        <button type="submit" name="send_reserve_req">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">
                    <div class="footer-text">
                        <img src="images/logo-lh.png" alt="" class="img-fluid" width="40%" loading="eager">
                        <p>Authors Time are here to deliver instant help for any type of Writing, Design and
                            Marketing
                            Service. We are a team of highly creative, active and dedicated people.</p>
                        <ul class="footer-social-main ">
                            <li>
                                <a title="Facebook" target="_blank" href="https://www.facebook.com/authorsstime"><i
                                        class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a title="Instagram" target="_blank" href="https://www.instagram.com/authorstime/"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a title="LinkedIn" target="_blank" href="https://www.linkedin.com/company/authors-time/"><i
                                        class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a title="Trustpilot" target="_blank" href="https://www.trustpilot.com/review/authorstime.com"><i
                                        class="fa fa-star"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 pl-lg-0">
                    <div class="footer-contact">
                        <ul class="footer-address">>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> 112 West 34th Street 18th & 17th Floors 10120 New York United States
                            </li>
                            <li>
                                <a href="tel:(929) 379-9764"><i class="fas fa-phone-volume"></i>(929) 379-9764</a>
                            </li>
                            <li>
                                <a href="mailto:info@authorstime.com"><i class="fas fa-envelope-open"></i><span class="__cf_email__" data-cfemail="">info@authorstime.com</span></a>
                            </li>

                            <li> <img src="images/payment.png" loading="eager"> </li>
                        </ul>
                        <ul class="footer-social d-none">
                            <li>
                                <a href="https://www.facebook.com/authorsstime"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/authorstime/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/authors-time/"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/trust.html" alt="" loading="eager" class="img-fluid"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg text-center">
                        <div class="footer-para">
                            <p>Copyright © 2023 Authors Time. All rights reserved.</p>
                            <ul>
                                <li><a href="/terms-conditions">Terms of Services</a></li>
                                <li><a href="/privacy-policy">Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <section class="popup-modal" style="display: none;">
        <div class="modal-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-end">
                        <button class="close-popup">X</button>
                    </div>
                    <div class="col-sm-12 popup-form">
                        <h1>ACTIVATE COUPON NOW
                            <span>HIRE <b>TOP PUBLISHERS AT 80% OFF</b> TO CREATE YOUR TIMELESS WORK</span>
                        </h1>
                        <form action="../sendmail/send_mail_lp2.php" method="post">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                            <input type="hidden" name="city" value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                            <input type="hidden" name="country" value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                            <input type="hidden" name="region" value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                            <input type="hidden" name="url" value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="khaplu_field khaplu_field2" id="khaplu_fld1">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" name="name" maxlength="30"id="name" placeholder="Full Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 pr-md-1">
                                    <div class="khaplu_field khaplu_field2" id="khaplu_fld2">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <input type="email" name="email" id="email" placeholder="Email Address *"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 pl-md-1">
                                    <div class="khaplu_field khaplu_field2" id="">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <input type="tel" name="phone" placeholder="Phone Number *" minlength="10" maxlength="10"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="khaplu_field khaplu_field2" id="khaplu_fld4">
                                        <textarea name="message" rows="5"
                                            placeholder="Enter a brief description about your book (optional)"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="khaplu_field" id="khaplu_fld5">
                                        <button type="submit" class="gets_quotes" name="send_reserve_req" value="Submit Now">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="popup-img" style="z-index:999;">
        <button type="button" class="popup-btn">
            <img src="./images/christmas-santa.webp" loading="eager" width="100%" height="100%" class="lazy Sizer loaded" alt="Best Publishing Company" data-was-processed="true">
        </button>
    </div>
    

    <div class="sticky-slider">
        <a href="tel:(929) 379-9764"><i class="fa-solid fa-phone"></i>Talk To An Expert Now!</a>
    </div>

    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" type="05fe444ebc93624992749fcc-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Start of designneshelp Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
    <!-- End of designneshelp Zendesk Widget script -->
      
    
    <script>
    $('.livechat, .live_chatt, .chatt').click(function () {
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
    <script src="js/plugin.js" type="05fe444ebc93624992749fcc-text/javascript"></script>
    <script src="js/slick.js" type="05fe444ebc93624992749fcc-text/javascript"></script>
    <script src="js/fonts.js" type="05fe444ebc93624992749fcc-text/javascript"></script>
    <script src="js/custom.js" type="05fe444ebc93624992749fcc-text/javascript"></script>

   





<script src="js/rocket-loader.min.js" data-cf-settings="05fe444ebc93624992749fcc-|49" defer></script>


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