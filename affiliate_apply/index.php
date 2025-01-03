<?php include 'config.php'; ?>

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
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
   <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">

    <!-- Favicons End-->
    <link rel="preload" href="assets/css/bootstrap.min.css" as="style" />
    <link rel="preload" href="assets/css/slick.css" as="style" />
    <link rel="preload" href="assets/css/slick-theme.css" as="style" />
    <link rel="preload" href="assets/css/intlTelInput.css" as="style" />
    <link rel="preload" href="assets/css/style.css" as="style" />
    <link rel="preload" href="assets/js/vandors.min.js" as="script" />
    <!-- Preloads End-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font2-awesome.min.css" />

    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/intlTelInput.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Apply Affiliate | <?php echo WEBSITE_NAME; ?></title>
    <meta name="description"
        content="Collaborate with our skilled ghostwriters to create an engaging eBook. Share your ideas and stories in the form of digital books. " />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .select2-selection {
        height: 45px;
        margin-bottom: 16px !important;
    }

    .select2-search {
        height: 45px;
    }

    .select2-search .select2-search__field {
        padding: 10px 0 24px 0 !important;
    }
    </style>
</head>

<body>
    <header class>
        <nav class="navbar navbar-expand-xl navbar-light main-nav">
            <div class="container">
                <a class="ctm-navbar-brand" href="/">
                    <img src="/assets/images/logo.png"
                        style="filter: brightness(0); max-width: 168px;" alt />
                </a>
                <div class="phone-holder-nav">
                    <div class="icon-header">
                        <img class src="assets/images/phone-header-icon.png" alt />
                    </div>
                    <div class="ph-holder-cont">
                        <span class="ph-title">Call Us</span>
                        <span class="ph-no"><a href="<?php echo PHONE_HREF; ?>" style="color: #000"><?php echo PHONE; ?>
                            </a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="service-main-banner space-m-b" style>
        <img class="img-fluid" src="assets/images/services/mb-ebook-and-ghost-writting.webp" alt />
    </section>

    <section class="about-section space-p-tb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about-content ps-md-4">
                        <h2 class="main-title mb-3">
                            What does your affiliate program offer?
                        </h2>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="bk-list">
                                    <li>
                                        If you are accepted as an affiliate with us, you will
                                        <b>earn a commission of 5% per generated sale.</b>
                                    </li>
                                    <li>
                                        The more people you refer, the higher your earnings.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#apply_form" class="ctm-btn1 mt-4">Apply Now
                            <div class="circle">
                                <img src="assets/images/icons/black-arrow.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section space-p-tb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about-content ps-md-4">
                        <h2 class="main-title mb-3">What can I expect to earn?</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="bk-list">
                                    <li>
                                        With an <b>average order value of $1,400</b> and with a
                                        <b>high returning customer rate</b>, if you're able to
                                        refer a good number of people, you can earn a very passive
                                        side income referring your audience to Amazon Publisher
                                        Hub.
                                    </li>
                                    <li>
                                        We'll provide you with a discount code that you can
                                        provide to your audience and every time this is used
                                        you'll receive a payout. Payments are sent at the end of
                                        each calendar month.
                                    </li>
                                    <li>
                                        Some of our most successful affiliates are earning as much
                                        as <b>$4,000 per month</b> from people they referred over
                                        a number of months.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#apply_form" class="ctm-btn1 mt-4">Apply Now
                            <div class="circle">
                                <img src="assets/images/icons/black-arrow.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section space-p-tb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about-content ps-md-4">
                        <h2 class="main-title mb-3">What services can I promote?</h2>
                        <p>
                            It really depends on your audience and what they need. We offer
                            a variety of book production services such as:
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="bk-list">
                                    <li>Book Publishing.</li>
                                    <li>Fiction and nonfiction book writing</li>
                                    <li>Copyediting</li>
                                    <li>
                                        Book cover design for ebook, paperback, audiobooks + other
                                        graphic work
                                    </li>
                                    <li>Audiobook narrating and production</li>
                                    <li>Other book production essential services.</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            When applying, let us know what you need from us and what
                            services you believe your audience will benefit the most from.
                        </p>
                        <a href="#apply_form" class="ctm-btn1 mt-4">Apply Now
                            <div class="circle">
                                <img src="assets/images/icons/black-arrow.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section space-p-tb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about-content ps-md-4">
                        <h2 class="main-title mb-3">
                            What are the requirements to be accepted?
                        </h2>
                        <p>
                            We'd love to work with everyone, but we have to be selective.
                        </p>
                        <p>
                            It's a matter of those that have a suitable audience that can
                            truly benefit from our services. And also affiliates that we see
                            believe in what we do and want to impact their friends, family,
                            or audience by recommending the highest quality book production
                            company in the market.
                        </p>
                        <p>
                            If we can see the potential in partnering with you, and we
                            believe that we can appropriately serve your audience then it'd
                            be a pleasure to partner with you and deliver our high quality
                            products and services.
                        </p>

                        <a href="#apply_form" class="ctm-btn1 mt-4">Apply Now
                            <div class="circle">
                                <img src="assets/images/icons/black-arrow.png" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section space-p-tb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about-content ps-md-4">
                        <h2 class="main-title mb-3">I want to apply</h2>
                        <p>
                            Please complete the form below to be considered as an affiliate
                            for <?php echo WEBSITE_NAME; ?>. If you're successful you will hear
                            from us within 14 days. Look out for our email.
                        </p>
                    </div>
                </div>
                <div class="right_form container">
                    <div class="copuncotnent mt-3">
                        <h2 class="text-center" style="color: var(--heading-color)">
                            <span> Become a <b><?php echo WEBSITE_NAME; ?></b> Affiliate! </span>
                            Apply below to become an official affiliate and earn recurring
                            commissions from every referral.
                        </h2>
                        <form id="apply_form" class="send-form" action="includes/apply-affiliate.php" method="post"
                            style="padding: 0 8rem 8rem 8rem">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control copun-field"
                                        placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1"
                                        required />
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control copun-field"
                                        placeholder="Email Address" aria-label="email" aria-describedby="basic-addon2"
                                        required />
                                </div>
                                <div class="col-12">
                                    <input type="tel" maxlength="11" class="form-control copun-field" name="phone"
                                        placeholder="Phone No" aria-label="email" aria-describedby="basic-addon3"
                                        required />
                                </div>
                                <div class="col-12">
                                    <select name="audience" id="audience" class="form-control copun-field">
                                        <option value="" aria-selected="true" disabled>How many people are in your
                                            audience?</option>
                                        <option value="1-10">1-10</option>
                                        <option value="10-50">10-50</option>
                                        <option value="50-200">50-200</option>
                                        <option value="200-500">200-500</option>
                                        <option value="1000+">1000+</option>
                                        <option value="10,000+">10,000+</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control copun-field" name="web_link"
                                        placeholder="Link to your website/blog/page/group" aria-label="weblink"
                                        aria-describedby="basic-addon1" required />
                                </div>
                                <div class="col-12">
                                    <select class="form-control copun-field" name="referring[]"
                                        data-select2-id="referring" id="referring" multiple required>
                                        <option value="Friends/Family">Friends/Family</option>
                                        <option value="Fellow associates/publishers">Fellow associates/publishers
                                        </option>
                                        <option value="Students/Clients/Followers">Students/Clients/Followers</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control copun-field" name="referring_other"
                                        placeholder="If other." aria-label="referring_other"
                                        aria-describedby="basic-addon1" />
                                </div>
                                <div class="col-12">
                                    <textarea name="audience_benefit" class="form-control" style="resize: none"
                                        placeholder="What services will your audience benefit from the most and why?"
                                        required></textarea>
                                    <p>For example, writing, audiobook narrating, spanish writing/narrating, cover
                                        design, editing, etc.</p>
                                </div>
                                <div class="col-12">
                                    <textarea name="audience_promote" class="form-control" style="resize: none"
                                        placeholder="How will you promote to your audience?" required></textarea>
                                    <p>For example; webinars, videos, blog posts, etc.</p>
                                </div>
                                <div class="col-12">
                                    <textarea name="need_help" class="form-control" style="resize: none"
                                        placeholder="Do you need anything from us?" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="popup_new_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ctm-footer">
        <div class="container">
            <div class="row g-md-0">
                <div class="col-md-12">
                    <div class="footer__info">
                        <div class="footer__info-inner text-center">
                            <a href="index-2.html">
                                <img src="assets/images/at-logo.png" class="footer__logo"
                                    alt="logo" />
                            </a>
                            <p>
                                <?php echo WEBSITE_NAME; ?> allows you to discover the magic of
                                storytelling. We are your trusted partner for expert book
                                writing and seamless publishing. Our talented teams craft the
                                perfect tale and publish it on the best platforms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-md-0">
                <div class="col-md-12">
                    <ul class="d-flex justify-content-center footer__column-links" style="display: ruby">
                        <li>
                            <a href="/terms-conditions">Terms & Conditions </a>
                        </li>
                        <li style="padding-left: 10px;">|</li>
                        <li style="padding-left: 10px;">
                            <a href="/privacy-policy">Privacy Policy </a>
                        <li style="padding-left: 10px;">|</li>
                        <li style="padding-left: 10px;"><a href="/contact-us">Contact Us</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="copyright-foo text-center">
                <p>
                    Copyright &copy;2024 <?php echo WEBSITE_NAME; ?> | All Rights Reserved.
                </p>
            </div>
        </div>
        <a id="back-to-top"></a>
    </footer>
    <!-- Footer -->

    <script src="assets/js/vandors.min.js"></script>
    <!--<script src="/assets/js/jquery.fancybox.min.js"></script>-->

    <script src="assets/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $("#referring").select2({
        placeholder: "Who would you be referring?",
        allowClear: true
    });
    </script>
</body>

</html>