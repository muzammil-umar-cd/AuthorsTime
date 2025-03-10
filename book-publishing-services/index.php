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
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Best Amazon Consultant In the USA | <?php echo WEBSITE_NAME; ?></title>
    <meta name="description"
        content="Become the next bestselling author today with highest level of privacy ensured <?php echo WEBSITE_NAME; ?> services in USA. Talk to our book writing consultants, and get started now.">
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
                                <li><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                                                src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                                <li><a href="<?php echo PHONE_HREF; ?>"><span><img
                                                src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
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
                        <h1><span>It's Time You Share Your Amazing Story!</span>
                            <strong> Best Professional <?php echo WEBSITE_NAME; ?> Services!</strong>
                        </h1>
                        <p> Our expert <?php echo WEBSITE_NAME; ?> can embed the true essence of your story in their content before formatting and publishing it, without costing a fortune.</p>
                        <p>Or <a href="javascript:;" onclick="$zopim.livechat.window.toggle()" class="chat"
                                style="color: #ff5e14;text-decoration: none;">Start A Live Chat</a> to discuss your
                            requirements</p>

                        <div class="btn-block">
                            <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"
                                class="btn-md btn-light chat">
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
                            <h6>The Best Book Publishing Services in Town</h6>
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
                                    <div class="col-md-12 col-sm-10">
                                        <input type="text" class="required form-control" name="name"
                                            placeholder="Full Name" required>
                                    </div>
                                    <div class="col-md-12 col-sm-10">
                                        <input type="email" class="required form-control email" name="email"
                                            placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-12 col-sm-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="tel" class="required form-control  number ftpn"
                                                    name="phone" placeholder="Phone No" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="genre" class="required form-control"
                                                    placeholder="Genre" data-name="Genre" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-10">
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
                                    <div class="col-md-12 col-sm-10">
                                        <select name="noofpages" class="required form-control" data-name="noofpages"
                                            required>
                                            <option selected="" disabled="">Number of Pages</option>
                                            <option value="1-50">1-50</option>
                                            <option value="50-100">50-100</option>
                                            <option value="100-200">100-200</option>
                                            <option value="200+">200+</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-sm-10">
                                        <textarea autocomplete="nope" name="message" class="form-control"
                                            placeholder=".To help us understand better, enter a brief description about your project."></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-10 ">
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
            <h2>Why Hire<br> <span><?php echo WEBSITE_NAME; ?></span></h2>
            <p>We sketch out your story in the words of our most gifted writers. It’s that simple. Our experienced
                <?php echo WEBSITE_NAME; ?> for hire can conjure up well-researched content with insights and make sure
                it is optimized for your target audience. </p>
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
                <p><span>And that’s not all!</span> Check out some of our other <?php echo WEBSITE_NAME; ?> services!
                </p>
                <ul class="contact-lst">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                                    src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img
                                    src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="cta-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="cta-txt">
                        <h4>Do You Have an Untold Story?</h4>
                        <h2>We Have Qualified <br><?php echo WEBSITE_NAME; ?> that<br> Love Challenges</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cta-txt-rit">
                        <img src="assets/images/stars.png">
                        <p>We Have Qualified <?php echo WEBSITE_NAME; ?> that Love Challenges</p>
                        <a href="javascript:;" class="btn-popup"><img class="img-fluid"
                                src="assets/images/btn-bg.png"></a>
                        <ul class="contact-lst">
                            <li class="first"><a href="javascript:;"
                                    onclick="$zopim.livechat.window.toggle()"><span><img
                                            src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                            <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img
                                            src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="how-it-work">
            <div class="container">
              <h2>How It <span>Works?</span></h2>
              <p>With over a thousand completed eBooks in more than 30 genres, eBook writing has<br>become one of our strongest suits.</p>
              <div id="hit-slidenav">
                      <ul>
                      <li><a href="javascript:void(0)" id="step1"><span>01</span><img src="assets/images/hw-step-01.png" width="50" height="47"></a></li>
                      <li><a href="javascript:void(0)" id="step2"><span>02</span><img src="assets/images/hw-step-02.png" width="50" height="47"></a></li>
                      <li><a href="javascript:void(0)" id="step3"><span>03</span><img src="assets/images/hw-step-03.png" width="50" height="47"></a></li>
                      <li><a href="javascript:void(0)" id="step4"><span>04</span><img src="assets/images/hw-step-04.png" width="50" height="47"></a></li>
                      <li><a href="javascript:void(0)" id="step5"><span>05</span><img src="assets/images/hw-step-05.png" width="50" height="47"></a></li>
                      <li><a href="javascript:void(0)" id="step6"><span>06</span><img src="assets/images/hw-step-06.png" width="50" height="47"></a></li>
                    
                      </ul>
                </div>
                 <div id="hiw-sliderblock">
                    <div id="owl-demo" class="howitwork-carousel">
                    <div class="item">
                      
                      <div class="hiw-content">
                        
                        <h4 class="title_block">How It <span>Works?</span></h4>
                        <p>When placing the order, we ask you to provide project details, such as the topic and Table of Contents (we’ll write one for you if you don’t have one), and your requirements. </p>
                      </div>
                      <div class="hiw-img"><img src="assets/images/how-work-im-1.png"></div>
                      <div class="clear_fix"></div>
                    </div>
                    
                    </div>
                    </div>
                    
                    <div class="clear_fix"></div>
            
            </div>
            </section> -->
    <div class="section-6 full-section">
        <div class="container">
            <div class="inner-container align-center">
                <h2 class="title_block center">Need <span>Captivating Content?</span></h2>
                <p>With decades of experience in various industries and content categories, our highly qualified writers
                    are prepared to generate enthralling content in lightning-quick turnaround times. </p>
            </div>
            <div id="hit-slidenav">
                <ul>
                    <li><a href="javascript:void(0)" id="step1"><span>1</span><img src="assets/images/hw-step-01.png"
                                width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step2"><span>2</span><img src="assets/images/hw-step-02.png"
                                width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step3"><span>3</span><img src="assets/images/hw-step-03.png"
                                width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step4"><span>4</span><img src="assets/images/hw-step-04.png"
                                width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step5"><span>5</span><img src="assets/images/hw-step-05.png"
                                width="50" height="47"></a></li>
                    <li><a href="javascript:void(0)" id="step6"><span>6</span><img src="assets/images/hw-step-06.png"
                                width="50" height="47"></a></li>
                </ul>
            </div>
            <div id="hiw-sliderblock">
                <div id="owl-demo" class="owl-carousel howitwork-carousel">
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Provide <span>Order Details</span></h4>
                            <p>When you place an order, we require you to fill in a short brief form. This enables us to
                                get a first had grasp of the subject matter. We'll assign a writer who has knowledge and
                                experience working with the desired genre.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-1.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Chapter <span>One for Approval</span></h4>
                            <p>Instead of having you wait for the entire project to end, and then tell us that’s not the
                                tone you wanted to follow. We'll send you the first chapter for approval, this lets you
                                know the writing style, making any changes that you wish for.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-2.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Revisions <span> Upon Feedback</span></h4>
                            <p>It’s your book, and we know you want it to be exactly how you envisioned it. And we help
                                you achieve that by getting feedback from you, working on your feedback, and the
                                providing you the revised work again for approval. So that you are 100% satisfied.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-3.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Editing and <span> Proofreading</span></h4>
                            <p>Every project goes through a thorough QA process. In which a dedicated editor is assigned
                                the book manuscript. The editor then goes through the entirety of the manuscript
                                pointing out mistakes, that will then be corrected for a perfect manuscript.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-4.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Book <span>Cover Design</span></h4>
                            <p>In the modern world, a book without a cover is almost equal to not being a book
                                altogether. Hence, we ensure that your book cover goes in sync with the book synopsis,
                                piquing the reader's interest the first time they set eyes on your book.</p>
                        </div>
                        <div class="hiw-img"><img src="assets/images/how-work-im-5.png"></div>
                        <div class="clear_fix"></div>
                    </div>
                    <div class="item">
                        <div class="hiw-content">
                            <h4 class="title_block">Final <span>Review and Delivery</span></h4>
                            <p>Once all your proofing, editing, and designing is in place, we will compile the final
                                manuscript for you to review one final time. Being our commitment to your satisfaction
                                we allow you to get edits done at this stage too. However, in case you give the final
                                go-ahead the book is finalized and delivered to you.</p>
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
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                                    src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img
                                    src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="main-publication">
        <div class="container">
            <h2>Our <span>Versatile Writers</span> Are Practised in Different Voices, Genres, and Categories</h2>
            <p>With a vision to produce quality content that is designed with assorted shades of creativity, our
                <?php echo WEBSITE_NAME; ?> pour their experience in every aspect of your project. From an
                easy-to-understand writing style to mesmerizing content structures, we know how to garner attention and
                entice your target audience. </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="poster-main perspectiv-carousel">
                        <div class="poster-btn poster-prev-btn"></div>
                        <ul class="poster-list">
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
                        </ul>
                        <div class="poster-btn poster-next-btn"></div>
                    </div>
                </div>
            </div>

            <div class="ct-button styl1">
                <a href="javascript:;" class="btn-popup">Let’s Get Started</a>
                <ul class="contact-lst2">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                                    src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img
                                    src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="best-value">
        <div class="container">
            <h2><span>Get Award-Winning </span> <?php echo WEBSITE_NAME; ?> Services in Budget-Friendly Packages</h2>
            <p>Transforming your idea into a best-selling manuscript requires team effort, and we love working as a
                team. Our <?php echo WEBSITE_NAME; ?> team offers end-to-end services which include:</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-1.jpg"></span> Research</h3>
                        <p>Once you’ve shared your ideas with us, <?php echo WEBSITE_NAME; ?> accesses numerous
                            e-learning resources that are designed to support our writers in every step of developing
                            your content. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-2.jpg"></span> Editing & Proofreading</h3>
                        <p>Our editors ensure perfection by maintaining consistency in your final manuscript, catching
                            typographical or grammatical errors, and double-checking facts for accuracy. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-3.jpg"></span> Designing, Typesetting & Publishing</h3>
                        <p>We offer professional guidance so you can form effective strategies to have your final
                            manuscript accepted by publishing agents and houses alike. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-bx">
                        <h3><span><img src="assets/images/value-4.jpg"></span> Promotion</h3>
                        <p>Whether you need book promotion, book publicity, author promotion, or writer marketing,
                            <?php echo WEBSITE_NAME; ?> knows exactly how to spread your story like wildfire.</p>
                    </div>
                </div>
            </div>
            <div class="ct-button">
                <a href="javascript:;" class="btn-popup">Let's get Started</a>
                <ul class="contact-lst2">
                    <li class="first"><a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                                    src="assets/images/chat-icon.png"></span>Live Chat Now</a></li>
                    <li class="last"><a href="<?php echo PHONE_HREF; ?>"><span><img
                                    src="assets/images/tele-icon.png"></span><?php echo PHONE; ?></a></li>
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
                        <h5>Client Testimonials</h5>
                        <h3>Don’t Just Take Our Word for It</h3>
                        <div class="reviw-testi testi-sldier">
                            <div>
                                <p>“I am glad that I trusted <?php echo WEBSITE_NAME; ?> for their
                                    <?php echo WEBSITE_NAME; ?> services! The team that I worked with managed to
                                    maintain a high level of professionalism throughout the timeline of the project and
                                    they submitted exactly what I was looking for. Good job guys!”</p>
                                <div class="star-name">
                                    <h6>Anne Gardner</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p>“Working with <?php echo WEBSITE_NAME; ?> was a pleasure and I can’t imagine
                                    receiving better content from any other agency. They managed to deliver exactly what
                                    we discussed in the initial brief and kept me in the loop throughout the timeline of
                                    the project– perhaps because I was a little reluctant on trusting their writers at
                                    first. I take my words back and appreciate the additional effort!”</p>
                                <div class="star-name">
                                    <h6>Emilie Robertson</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p>“I needed some help in writing a book for my students. Even though I had a lot of
                                    material and resources for inspiration, my schedule didn’t allow me to actually sit
                                    down, and fan the flames of a long-lost hobby. Long story short, I stumbled upon
                                    this brilliant agency and my students absolutely love my lectures! Naturally, I plan
                                    on hiring them again very soon!”</p>
                                <div class="star-name">
                                    <h6>Bruce Owens</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p>“<?php echo WEBSITE_NAME; ?> is the best! I am an accomplished writer myself and I
                                    was pretty excited to get my work done from these guys. Perhaps the biggest
                                    compliment I can give these guys is that I learned a thing or two about writing
                                    compelling content throughout the timeline of my project. Of course, this only
                                    happened because they kept me in the loop from start to finish. Keep up the good
                                    work guys!”</p>
                                <div class="star-name">
                                    <h6>Portia Fey</h6>
                                    <img src="assets/images/stars-review.jpg">
                                </div>
                            </div>
                            <div>
                                <p>“This is a special shoutout to George and his team in <?php echo WEBSITE_NAME; ?>
                                    because they managed to conjure up a well-thought-out memoir for me so I could gift
                                    it to my wife on our wedding. To read your own biography as if it was a fairytale is
                                    probably the best wedding gift and I know now that the <?php echo WEBSITE_NAME; ?>
                                    at <?php echo WEBSITE_NAME; ?> are up to the challenge. P.S. my wife loves it!”</p>
                                <div class="star-name">
                                    <h6>John Sumner</h6>
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
                    <p>Got questions? Quickly find out whether we’ve already addressed your queries for our previous
                        clients. If you still have questions, we can have them answered via live chat or by phone. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-sec">
                        <ul class="accordian">
                            <li class="first active">
                                <h4>Can you write me a book that I can publish with my name?</h4>
                                <div style="display: block;">
                                    <p>Of course, we can because that’s what <?php echo WEBSITE_NAME; ?> do. In fact,
                                        our <?php echo WEBSITE_NAME; ?> work tirelessly so they can eloquently narrate
                                        your story to the world and win your approval. </p>
                                </div>
                            </li>
                            <li class="">
                                <h4>Who will get the editing credits for my book?</h4>
                                <div style="display: none;">
                                    <p><?php echo WEBSITE_NAME; ?> is defined as the practice of hiring writers for a
                                        project that will officially be credited to another company or individual. In
                                        other words, these companies or individuals will be credited as the author while
                                        <?php echo WEBSITE_NAME; ?> will only strive to satisfy the client that hired
                                        them. </p>
                                </div>
                            </li>
                            <li class="">
                                <h4>Who gets the ownership rights once my project is complete?</h4>
                                <div style="display: none;">
                                    <p>Since <?php echo WEBSITE_NAME; ?> are paid to work anonymously for an individual
                                        or company, the final manuscript and its content is owned by the people who
                                        hired them. In other words, the copyright for this work will be owned by them as
                                        well. Also, Copyright Law states that as soon as your project is created, it
                                        qualifies as ‘protected work’. </p>
                                </div>
                            </li>
                            <li class="">
                                <h4>What if the writer claims rights for the work later?</h4>
                                <div style="display: none;">
                                    <p>You don’t need to claim rights or apply for copyrights to protect your final
                                        manuscript from infringers. If you hire our <?php echo WEBSITE_NAME; ?>, then
                                        you own the copyrights for your work by default. By registering your work for
                                        copyrights, you can establish further legal bona fides as a failsafe.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Should I be worried about ownership rights of the content?</h4>
                                <div style="display: none;">
                                    <p>Before hiring our <?php echo WEBSITE_NAME; ?>, we have them sign comprehensive
                                        <?php echo WEBSITE_NAME; ?> contracts as well as nondisclosure agreements. This
                                        means that your assigned <?php echo WEBSITE_NAME; ?> cannot claim the rights to
                                        or discuss any part of your project. Simply put, our <?php echo WEBSITE_NAME; ?>
                                        cannot claim credit for your final manuscript or work-in-progress content.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Should I be worried about ownership rights of the content?</h4>
                                <div style="display: none;">
                                    <p>Before hiring our <?php echo WEBSITE_NAME; ?>, we have them sign comprehensive
                                        <?php echo WEBSITE_NAME; ?> contracts as well as nondisclosure agreements. This
                                        means that your assigned <?php echo WEBSITE_NAME; ?> cannot claim the rights to
                                        or discuss any part of your project. Simply put, our <?php echo WEBSITE_NAME; ?>
                                        cannot claim credit for your final manuscript or work-in-progress content.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>What do you need from my end to write an e-book for me?</h4>
                                <div style="display: none;">
                                    <p>When hiring a ghostwriter to write an e-book, you should have a basic idea of
                                        what you want it to be about – a particular interest, themes, certain people you
                                        want to study. The writer will then decide what needs to be researched and how
                                        to go about it. They will create a basic outline and a synopsis for you to
                                        approve before working on the manuscript. Once they get the approval, they start
                                        drafting chapters one by one, getting them approved, making any required edits,
                                        and then refining the final manuscript for publication. </p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Should I disclose that my book was ghostwritten when I get published?</h4>
                                <div style="display: none;">
                                    <p>If you plan on publishing your book, be it self-published or hiring a publishing
                                        company, no one needs to know that you hired a ghostwriter. By entering a legal
                                        contract with a <?php echo WEBSITE_NAME; ?> company, you completely own your
                                        book and everything within it. You are not bound to disclose the fact that a
                                        ghostwriter actually wrote the book to anyone. A non-disclosure agreement can
                                        safeguard your privacy.</p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Will I be kept in the loop while my book is being ghostwritten?</h4>
                                <div style="display: none;">
                                    <p>When working with a ghostwriter, it is ideal to periodically monitor their
                                        progress to see if their writing matches the tone, language, and style you have
                                        in mind for your book. You can get in touch with the writer directly and discuss
                                        how often you can read up on drafts, be it after every chapter is completed or a
                                        few chapters in. Work out a schedule and deadlines that work best for you both
                                        to ensure satisfaction. </p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>How many revisions can I request?</h4>
                                <div style="display: none;">
                                    <p>Client satisfaction is our top-most priority and for this sole reason we offer
                                        unlimited revisions for you to request until you’re completely satisfied with
                                        the outcome. Our <?php echo WEBSITE_NAME; ?> are more than willing to make any
                                        changes, minor or major, that you require. The book is your brainchild and our
                                        writers help conceptualize it, so we try to deliver as accurate a final
                                        manuscript as possible. </p>
                                </div>
                            </li>
                            <li class="last">
                                <h4>Can <?php echo WEBSITE_NAME; ?> agencies also help publish and market my final
                                    manuscript?</h4>
                                <div style="display: none;">
                                    <p><?php echo WEBSITE_NAME; ?> can not only help you complete your book but they can
                                        also connect you to renowned publishing houses before marketing it through
                                        appropriate channels. If you want to self-publish your book, our company will
                                        spare no effort in refining and editing it. Once it has been published, we also
                                        assist you in launching a marketing campaign for your work and increasing
                                        outreach to make it a commercial success. </p>
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
                            <h3>We Write, <span>So Your Story </span> Reaches the Right Audiences</h3>
                            <p>
                            If you’re searching for affordable <?php echo WEBSITE_NAME; ?>, <?php echo WEBSITE_NAME; ?> offers highly skilled teams to convey your voice and tone in a manner that will inspire your desired results. Our entire team is eager to fulfill your content needs and get your story in front of your target audience.
                            </p>
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
            <div class="col-md-4">
                    <p style="padding: 25px 0 10px 0;">
                        Copyright © 2025
                        <a href="javascript:;"> <?php echo WEBSITE_NAME; ?> </a> | All rights
                        reserved.
                    </p>
                </div>
                <div class="col-md-4" style="font-size: 12px;">
                    <i class="fas fa-map-marker"></i>
                    <?php echo ADDRESS; ?>
                </div>
                <div class="col-md-4 text-right">
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