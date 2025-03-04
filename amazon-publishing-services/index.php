<?php 
// include ('sendmail/sendmail.php');
include ('config.php');

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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Best Amazon Consultant In the USA | <?php echo WEBSITE_NAME; ?></title>
    <meta name="description" content="Become the next bestselling author today with highest level of privacy ensured <?php echo WEBSITE_NAME; ?> services in USA. Talk to our book writing consultants, and get started now.">
    <link rel="stylesheet" href="assets/css/layout.css" />
    <link href="css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon" />
    <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/css-style.css">
    <link rel="stylesheet" href="assets/css/css-responsive.css">
    <!-- Start of designneshelp Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132">
    </script>
    <!-- End of designneshelp Zendesk Widget script -->
</head>

<body>
    <header>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 text-left">
                        <a href="index.htm" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 text-right">
                        <div class="contact">
                            <ul class="contact-lst">
                                <li><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                                <li><a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-banner-start -->
    <section class="our-banner">
        <div class="container" data-aos="fade-up" data-aos-duration="1000" style="padding-top: 70px;">
            <div class="row">
                <div class="col-md-7">
                    <div class="info-banner">
                        <h1><span>See the Power of Amazon Publishing!</span>
                            <strong>Providing Amazon Publishing Services for Best-Selling Authors</strong>
                        </h1>
                        <p> For best-selling writers, <?php echo WEBSITE_NAME; ?> provides exceptional publishing services. Our team provides expert guidance and assistance to help you publish, whether you're a seasoned writer or just starting out.</p>
                        <p>Or <a href="javascript:;" onclick="$zopim.livechat.window.toggle()" class="chat"
                                style="color: #ff5e14;text-decoration: none;">Start A Live Chat</a> to discuss your
                            requirements</p>

                        <div class="btn-block">
                            <a href="javascript:;" onclick="$zopim.livechat.window.toggle()" class="btn-md btn-light chat">
                                Live Chat
                            </a>
                            <a href="javascript:;" class="btn-md-2 btn-dark btn-popup various">
                                Get Started
                            </a>
                            <img src="assets/images/partners-strip.png" style="padding: 0 17px;margin-top: 33px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="info-contact-banner">
                        <div class="head-cb">
                            <h6>The Best Amazon Book Publishing in Town</h6>
                            <h4>Within Easy Reach</h4>
                            <div class="seal">
                                <img src="assets/images/50-percent.png" alt="">
                            </div>
                        </div>
                        <div class="info-form" data-form-type="signup_form">
                            <form action="sendmail/sendmail.php" class="validate-banner leadForm" method="post">
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
                                        <input type="text" class="required form-control" name="name"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" class="required form-control email" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="tel" class="required form-control  number ftpn"
                                                    name="pnumber" placeholder="Phone No">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="genre" class="required form-control"
                                                    placeholder="Genre" data-name="Genre" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <select name="service" class="required form-control" data-name="Service"
                                            required>
                                            <option selected="" disabled="">Select Service</option>
                                            <option value="Proof Reading">Proof Reading</option>
                                            <option value="Editing">Editing</option>
                                            <option value="Promotion and Marketing">
                                                Promotion and Marketing
                                            </option>
                                            <option value="All">All</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="noofpages" class="required form-control" data-name="noofpages"
                                            required>
                                            <option selected="" disabled="">Number of Pages</option>
                                            <option value="1-50">1-50</option>
                                            <option value="50-100">50-100</option>
                                            <option value="100-200">100-200</option>
                                            <option value="200+">200+</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea autocomplete="nope" name="message" class="form-control"
                                            placeholder=".To help us understand better, enter a brief description about your project."></textarea>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="btnsub show-s">
                                            <div id="formResult"></div>
                                            <button type="submit" name="send_reserve_req"
                                                class="btn-submit btn-md-2 btn-dark btn-form">Discuss Your
                                                Project</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-btm">
            <div class="container">
                <h5 style="font-weight: bold;">KEEP ALL THE RIGHTS &amp; REVENUES OF YOUR BOOK. GET PUBLISHED TODAY!
                </h5>
            </div>
        </div>
    </section>
    <!-- main-banner-start -->
    <section class="client-strip">
        <div class="container">
            <!--<div><img class="img-fluid" src="assets/images/client-logo-strip.jpg"></div>-->
            <ul>
                <li><a href="javascript:;"><img src="assets/images/p-01.jpg"></a></li>
                <li><a href="javascript:;"><img src="assets/images/p-02.jpg"></a></li>
                <li><a href="javascript:;"><img src="assets/images/p-03.jpg"></a></li>
                <li><a href="javascript:;"><img src="assets/images/p-04.jpg"></a></li>
                <li><a href="javascript:;"><img src="assets/images/p-05.jpg"></a></li>
                <li><a href="javascript:;"><img src="assets/images/p-06.jpg"></a></li>
            </ul>
        </div>
    </section>
    <div class="section-category">
        <div class="category-m"></div>
        <div class="container">
            <h2>Why Choose Our<br> <span> Amazon Publishing Services</span> </h2>
            <p>Choosing our Amazon publishing services means tapping into a world of expertise and opportunity. From unparalleled global reach to personalized support, we're committed to empowering authors at every step of their publishing journey. Experience the difference with us today.</p>
            <ul class="category-list">
                <li>
                    <img src="assets/images/categories/eb01.jpg" alt="feat-icon" width="99" height="103">
                    <h6>Mystery</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb02.jpg" alt="feat-icon" width="90" height="103">
                    <h6>Horror</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb03.jpg" alt="feat-icon" width="96" height="103">
                    <h6>Romance</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb04.jpg" alt="feat-icon" width="95" height="103">
                    <h6>Children’s books</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb05.jpg" alt="feat-icon" width="98" height="103">
                    <h6>Fantasy</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb06.jpg" alt="feat-icon" width="106" height="103">
                    <h6>How-To Guides</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb11.jpg" alt="feat-icon" width="88" height="103">
                    <h6>Drama</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb07.jpg" alt="feat-icon" width="97" height="103">
                    <h6>Crime</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb08.jpg" alt="feat-icon" width="98" height="103">
                    <h6>Biography</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb12.jpg" alt="feat-icon" width="106" height="103">
                    <h6>Health</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb09.jpg" alt="feat-icon" width="99" height="103">
                    <h6>Travel</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb10.jpg" alt="feat-icon" width="95" height="103">
                    <h6>Philosophy</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb13.jpg" alt="feat-icon" width="86" height="103">
                    <h6>Science Fiction</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb14.jpg" alt="feat-icon" width="90" height="103">
                    <h6>Trilogy</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb15.jpg" alt="feat-icon" width="90" height="103">
                    <h6>Adventure</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb16.jpg" alt="feat-icon" width="97" height="103">
                    <h6>Art</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb17.jpg" alt="feat-icon" width="99" height="103">
                    <h6>Business</h6>
                </li>
                <li>
                    <img src="assets/images/categories/eb18.jpg" alt="feat-icon" width="106" height="103">
                    <h6>And More...</h6>
                </li>
            </ul>
            <div class="clear_fix"></div>
            <div class="txt-contact-bx">
                <p><span>Start your </span> Amazon journey with us today and share your story with the world!</p>
                <ul class="contact-lst">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="cta-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="cta-txt">
                        <h4>Looking for the Best Amazon Book Publisher? </h4>
                        <h2>Professional Amazon Publishers are Available to Assist You at <?php echo WEBSITE_NAME; ?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cta-txt-rit">
                        <img src="assets/images/stars.png">
                        <p><?php echo WEBSITE_NAME; ?> Loves Challenges.</p>
                        <a href="javascript:;" class="btn-popup"><img class="img-fluid" src="assets/images/btn-bg.png"></a>
                        <ul class="contact-lst">
                            <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                            <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-6 full-section">
        <div class="container">
            <div class="inner-container align-center">
                <h2 class="title_block center">Our Amazon<span> Publishing Expertise</span></h2>
                <p>Our Amazon publishing expertise guarantees your book reaches its fullest potential. Trust us to guide your publishing journey with precision and care.</p>
            </div>
            <div id="hit-slidenav">
                <ul>
                    <li><a href="javascript:void(0)" id="step1"><span>1</span><img src="assets/images/hw-step-01.png" width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step2"><span>2</span><img src="assets/images/hw-step-02.png" width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step3"><span>3</span><img src="assets/images/hw-step-03.png" width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step4"><span>4</span><img src="assets/images/hw-step-04.png" width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step5"><span>5</span><img src="assets/images/hw-step-05.png" width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step6"><span>6</span><img src="assets/images/hw-step-06.png" width="50" height="47"></a></li>
                </ul>
            </div>
            <div id="hiw-sliderblock">
                <div id="owl-demo" class="owl-carousel howitwork-carousel">
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Amazon Kindle Direct Publishing (KDP) Support<span></span></h4>
                            <p>Publish your eBook easily on the biggest digital shop in the world by using our Amazon Kindle Direct Publishing (KDP) Support. Get your book online and in front of people quickly by following our step-by-step instructions.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-1.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Professional Editing Services</h4>
                            <p>Improve your work with our professional editing services. Our experienced writers will revise your work until it's perfect and ready to grab readers' attention. </p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-2.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Book Cover Design</h4>
                            <p>Utilize our captivating book cover design services to leave a lasting impact. Working with you, our skilled designers will make a cover that speaks to your readers and makes them want to pick up your book.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-3.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Professional Formatting Assistance</h4>
                            <p>Utilize our expert formatting help to make sure your book looks its best. Formatting your book properly for both print and digital versions, from layout to typography, will make it easier to read and look better.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-4.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Global Distribution</h4>
                            <p>Utilize our global distribution network to reach people all over the world. As a result of Amazon's huge reach, people in many countries will be able to read your book, which will greatly increase your possible audience and sales.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-5.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Marketing and Promotion Support</h4>
                            <p>Our marketing and promotion support will help get more people to see your book. We'll help you engage your target audience and promote your book through social media and targeted advertising, increasing sales and engagement.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-6.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="ct-button">
                <a href="javascript:;" class="btn-popup">Let’s Get Started</a>
                <ul class="contact-lst2">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="main-publication">
        <div class="container">
            <h2>Implementing a Productive Marketing Strategy for your Books</h2>
            <p>Have you already released your book but aren't getting the sales you hoped for? You can still reach your goals with our useful marketing plans. It's never too late to get the word out about your book with our helpful ideas. We use creative marketing techniques to get more people to read your work. </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="poster-main perspectiv-carousel">
                        <div class="poster-btn poster-prev-btn"></div>
                        <ul class="poster-list">
                            <li class="poster-item">
                                <a href="javascript:;"><img src="assets/images/sl10.png" />
                                </a>
                            </li>
                            <li class="poster-item">
                                <a href="javascript:;">
                                    <img src="assets/images/sl4.png" />
                                </a>
                            </li>
                            <li class="poster-item">
                                <a href="javascript:;">
                                    <img src="assets/images/sl6.png" />
                                </a>
                            </li>
                            <li class="poster-item">
                                <a href="javascript:;">
                                    <img src="assets/images/sl7.png" />
                                </a>
                            </li>
                            <li class="poster-item">
                                <a href="javascript:;">
                                    <img src="assets/images/sl8.png" />
                                </a>
                            </li>
                        </ul>
                        <div class="poster-btn poster-next-btn"></div>
                    </div>
                </div>
            </div>

            <div class="ct-button styl1">
                <a href="javascript:;" class="btn-popup">Let’s Get Started</a>
                <ul class="contact-lst2">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="best-value">
        <div class="container">
            <h2><span>Maximize Your Book's</span> Success on Amazon through <?php echo WEBSITE_NAME; ?></h2>
            <p>We'll handle everything from professional formatting and editing to eye-catching cover design and targeted marketing, ensuring your book reaches the right readers and achieves its full sales potential.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-1.jpg"></span> Great Formatting & Design</h3>
                        <p>We make your book look great in both Kindle and print formats, making it easy and enjoyable to read and helping it stand out from the crowd.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-2.jpg"></span>Expert Editing & Proofreading</h3>
                        <p>Our editors will improve your writing by making it clear, smooth, and error-free for a professional final product.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-3.jpg"></span> Glorious Covers</h3>
                        <p>We design covers that grab readers' attention in your genre and make them want to choose your book instead of others.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-4.jpg"></span>Marketing Help to Get Your Book Seen</h3>
                        <p>We'll use our knowledge to help people find your book on Amazon, including finding the right keywords, writing a great description, and running effective ads.</p>
                    </div>
                </div>
            </div>
            <div class="ct-button">
                <a href="javascript:;" class="btn-popup">Let's get Started</a>
                <ul class="contact-lst2">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div><img src="assets/images/textimonials-1.jpg"></div>
                </div>
                <div class="col-md-7">
                    <div class="testimonials-text">
                        <h5>Clients Reviews</h5>
                        <h3>Just Go Through The Opinions of Our Clients</h3>
                        <div class="reviw-testi testi-sldier">
                            <div>
                                <p>I don't really understand the Amazon process, to be really honest. There I hired <?php echo WEBSITE_NAME; ?> for my adorable book. I want it to be published worldwide through their services. And I know I got the results I wanted.</p>
                                <div class="star-name">
                                    <h6>Anna J.</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p>Amazon formatting is quite tough. I wanted some Amazon experts who could do this very task for me. I availed the experts from <?php echo WEBSITE_NAME; ?> and I am glad that I made the best choice of my life. Thanks to the entire crew.</p>
                                <div class="star-name">
                                    <h6>Mike Hampton</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p><?php echo WEBSITE_NAME; ?> is master at Amazon book publishing services. They know how to publish a book successfully on the Amazon platform, and their team cooperates well during the whole process.</p>
                                <div class="star-name">
                                    <h6>Alex S.</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p>We know the importance of Amazon to market yourself, but the problem is to market it properly. My team at <?php echo WEBSITE_NAME; ?> was truly phenomenal and knew all the tactics to do the job. I have promoted my business successfully there.</p>
                                <div class="star-name">
                                    <h6>John William</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p><?php echo WEBSITE_NAME; ?>'s Amazon services for ebooks are really up to the mark. Sometimes, you just choose an agency and then do the wonders you could only imagine at times. This agency is something like this for me. </p>
                                <div class="star-name">
                                    <h6>Alex B.</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Frequently <span>Asked Questions</span></h2>
                    <p>Please read out the most commonly asked questions related to our Amazon publishing services below:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-sec">
                        <ul class="accordian">
                            <li class="first active">
                                <h4>What is Amazon's book publishing service?</h4>
                                <div style="display: block;">
                                    <p>Amazon offers services for authors to self-publish their work through Kindle Direct Publishing (KDP) for eBooks and print-on-demand paperbacks.</p>
                                </div>
                            </li>
                            <li class="">
                                <h4>How much does it cost to publish a book on Amazon?</h4>
                                <div style="display: none;">
                                    <p>Publishing through KDP is essentially free. Amazon takes a percentage of royalties based on file size and whether you choose an expanded distribution.</p>
                                </div>
                            </li>
                            <li class="">
                                <h4>Do I keep the rights to my book when I publish it on Amazon?</h4>
                                <div style="display: none;">
                                    <p>Yes, you retain full rights to your work.</p>
                                </div>
                            </li>
                            <li class="">
                                <h4>What formats can I publish on Amazon?</h4>
                                <div style="display: none;">
                                    <p>KDP supports eBooks (Kindle format) and paperback books.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>How do I get paid?</h4>
                                <div style="display: none;">
                                    <p>Amazon issues royalty payments monthly, around sixty days subsequent to the conclusion of the month during which sales transpire.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Can I make my book available for pre-order?</h4>
                                <div style="display: none;">
                                    <p>Yes, Amazon allows you to set up pre-orders for your eBooks and paperbacks.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Does Amazon help with marketing my book?</h4>
                                <div style="display: none;">
                                    <p>Amazon offers marketing tools, but successful promotion is largely the author's responsibility.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>What is Kindle Unlimited?</h4>
                                <div style="display: none;">
                                    <p>Kindle Unlimited is a subscription service where readers pay a monthly fee for access to a large library of ebooks. Authors enrolled in KDP Select (explained below) have their books included.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>What is KDP Select?</h4>
                                <div style="display: none;">
                                    <p>KDP Select grants Amazon exclusivity for your eBook in exchange for inclusion in Kindle Unlimited and potential promotional benefits.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Will Amazon publish hardcover versions of my book?</h4>
                                <div style="display: none;">
                                    <p>Currently, no. Amazon's self-publishing focuses primarily on eBook and paperback formats.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Can I get help with book cover design and editing through Amazon?</h4>
                                <div style="display: none;">
                                    <p>Yes, but these are separate services that come with additional costs.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-form-sec">
        <div class="container">
            <div class="footerbox">
                <div class="row">
                    <div class="col-md-6 pad-r-zero">
                        <div class="footer-left">
                            <h3>Every Writer <span>Should Avail </span>the Right Agency</h3>
                            <p>People should pay attention to your story. If you work with us, we'll launch your book on Amazon like a pro, and your sales will soar. Our careful writing, sharp editing, eye-catching cover designs, and smart marketing strategies will get people to read your book, make it more visible, and help you make as many sales as possible. You can trust us to turn your work into a best-seller on Amazon.</p>
                            <img src="assets/images/footer-img-01.png" alt="" />
                            <img src="assets/images/footer-img-02.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 pad-l-zero">
                        <div class="footer-right">
                            <h4>Request a <span>Quote</span></h4>
                            <form method="POST" class="" action="sendmail/sendmail.php">
                                <!--hidden required values-->
                                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                <input type="hidden" name="internet_connection"
                                    value="<?php echo $locationData->isp; ?>" />
                                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                                <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                                <input type="hidden" name="form_name" value="FOOTER FORM" />
                                <input type="hidden" name="bot_detector" value="" />

                                <div class="footer-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="footer-form-input">
                                                <input type="text" name="name" placeholder="Full Name" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="footer-form-input">
                                                <input type="tel" name="phone" placeholder="Phone Number" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="footer-form-input">
                                                <input type="email" name="email" placeholder="Email" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="footer-form-input">
                                                <select name="service" data-name="Service" required>
                                                    <option selected="" disabled="">
                                                        Select Service
                                                    </option>
                                                    <option value="Proof Reading">Proof Reading</option>
                                                    <option value="Editing">Editing</option>
                                                    <option value="Promotion and Marketing">
                                                        Promotion and Marketing
                                                    </option>
                                                    <option value="All">All</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="footer-form-input">
                                                <input type="text" name="genre" placeholder="Genre" data-name="genre"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="footer-form-input">
                                                <select name="noofpages" data-name="oofpages" required>
                                                    <option selected="" disabled="">
                                                        Number of Pages
                                                    </option>
                                                    <option value="1-50">1-50</option>
                                                    <option value="50-100">50-100</option>
                                                    <option value="100-200">100-200</option>
                                                    <option value="200+">200+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="footer-form-textarea">
                                                <textarea name="msg" placeholder="Project Details"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="footer-form-submit">
                                                <input type="submit" class="btn-submit" value="Submit Now" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="error mt-3 alert alert-danger text-left mb-0"
                                                style="display: none"></div>
                                            <div class="success mt-3 alert alert-success text-center mb-0 p-2"
                                                style="display: none"></div>
                                            <div class="loader" style="display: none">
                                                <img alt="loader" src="/img/loader.gif" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="contact-lst2 styl1">
                                <li class="first">
                                    <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                                                src="assets/images/chat-icon.png" /></span>Live Chat Now</a>
                                </li>
                                <li class="last">
                                    <a href="<?php echo PHONE_HREF; ?>"><span><img
                                                src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
                                </li>
                            </ul>
                            <p>
                                Our affordable ebook writing services cover mini 10-pagers as
                                well a Call
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-logos text-center">
                <img src="assets/images/footer-logos.png" alt="" />
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row align-items-center ft-log">
                <div class="col-md-6">
                    <p style="padding: 25px 0 10px 0;">
                        Copyright © 2025
                        <a href="javascript:;"> <?php echo WEBSITE_NAME; ?> </a> | All rights
                        reserved.
                    </p>
                </div>
                <div class="col-md-6 text-right">
                    <img src="assets/images/footerlogo.jpg" />
                </div>
            </div>
        </div>
    </footer>
    <div class="overlay" style="display: none"></div>
    <div class="popupMain LoginPopup" style="display: none">
        <div class="popup-inner">
            <a class="closePop" href="javascript:;">X</a>
        </div>
        <!--<div class="popup-img"> <img src="assets/images/pop-img.jpg" alt=""></div>-->
        <div class="popform-holder">
            <div class="popTxt">
                <h6>Ready to become a Bestseller</h6>
                <p>
                    Schedule a call and talk to<br />
                    our book writing experts
                </p>
            </div>
            <form method="POST" class="" action="sendmail/sendmail.php">
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

                <div class="popup-header"></div>
                <div class="popup-bdy">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="frmicon-box">
                                <input type="text" placeholder="Name" name="name" id="name" required="" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="frmicon-box">
                                <input type="email" placeholder="Email" name="email" id="email" required="" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="frmicon-box phonecode">
                                <input type="number" name="phone" required="" placeholder="Phone Number" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="frmicon-box phonecode">
                                <textarea placeholder="Message" name="msg"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" href="javascript:;" class="popup-btn btn-submit" id="">
                    Get Started
                </button>
                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                <!--<div class="success mt-3 alert alert-success text-center mb-0 p-2" style="display: none"></div>-->
                <div class="loader" style="display: none">
                    <img alt="loader" src="/images/loader.gif" />
                </div>
            </form>
        </div>
        <img src="assets/images/pop-img.jpg" class="img-fluid asabba" />
        <span class="uptownloader"></span>
    </div>
    <div class="side-bar">
        <div class="side-bar-form">
            <div class="side-bar-frm-head">
                <h4>
                    <i class="fa fa-chevron-circle-up" aria-hidden="true"></i> UP TO 50%
                    Discount
                </h4>
            </div>
            <div class="side-bar-frm-bdy">
                <div class="pull-left">
                    <form method="POST" class="" action="sendmail/sendmail.php">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                        <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                        <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                        <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                        <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                        <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                        <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                        <input type="hidden" name="form_name" value="SIDE-POP FORM" />
                        <input type="hidden" name="bot_detector" value="" />

                        <div class="field field-100">
                            <input type="text" name="name" placeholder="Name" required="" required />
                        </div>
                        <div class="field field-100">
                            <input type="email" name="email" placeholder="Email" required="" required />
                        </div>
                        <div class="field field-100">
                            <div class="row">
                                <div class="col-lg-12 noguttar">
                                    <input type="tel" name="phone" placeholder="Phone" required="" required />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="field field-100 btn-bg">
                            <input class="mn-btn2 btn-submit" id="" type="submit" />
                        </div>
                    </form>
                </div>
                <div class="pull-right">
                    <div>
                        <h4 class="mn-hd2">Sign Up Now</h4>
                        <p>
                            <span>Grab up to 50% Discount</span> before the time runs out!
                        </p>
                        <ul>
                            <li class="first">More than 2 Million Clients</li>
                            <li>400 Certified Writers</li>
                            <li>40 Industries Served</li>
                            <li class="last">100% Satisfaction Guarantee</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery.js"></script>
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
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/js/js-libs.js"></script>

    <script>
    new WOW().init();
    </script>

    <script type="text/javascript">
    function setButtonURL() {
        $zopim.livechat.window.show();
    }
    </script>
    <script>
    $(".perspectiv-carousel").PicCarousel({
        height: 600,
        width: 800,
        posterWidth: 192,
        posterHeight: 282,
        scale: 0.9,
        speed: 1000,
        autoPlay: true,
        delay: 1000,
        verticalAlign: "middle",
    });
    </script>

    <!--timer js-->
    <script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        // Set the target date to July 31, 2024
        const targetDate = "07/31/2024";

        const countDown = new Date(targetDate).getTime(),
            x = setInterval(function() {
                const now = new Date().getTime(),
                    distance = countDown - now;

                // Update the countdown timer
                document.getElementById("days").innerText = Math.floor(
                    distance / day
                );
                document.getElementById("hours").innerText = Math.floor(
                    (distance % day) / hour
                );
                document.getElementById("minutes").innerText = Math.floor(
                    (distance % hour) / minute
                );
                document.getElementById("seconds").innerText = Math.floor(
                    (distance % minute) / second
                );

                // Actions when the countdown reaches zero
                if (distance < 0) {
                    document.getElementById("headline").innerText =
                        "It's my birthday!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
            }, 1000); // Adjusted interval to 1000 milliseconds (1 second) for smoother updates
    })();

    // Animations call

    AOS.init({
        duration: 1200,
        // once: true,
    });

    // new WOW().init();

    // end Animation

    // scroll behavior
    window.scroll({
        behavior: "smooth",
    });
    </script>
    <!--timer js-->

    <script src="7771cc6153.js" crossorigin="anonymous"></script>
</body>

</html>