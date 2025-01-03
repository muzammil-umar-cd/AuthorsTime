<?php 
include ('sendmail/sendmail.php');
include ('meta-titles.php');

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

<!doctype html>
<html lang="en">
<head>
    <?php echo $title; ?>
    <meta name="keywords" content="Authors Time, Book Publishing">
    <meta name="description"
        content="Discover the exceptional book publishing services Authors Time. offers, the trusted name in American publishing. Get your book published today!">
    <title>Children Book Services | Authors Time</title>
    <!-- OG TAG -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Authors Time. | Leading Book Publishing Company">
    <meta property="og:description"
        content="Discover the exceptional book publishing services Authors Time. offers, the trusted name in American publishing. Get your book published today!">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:image:width" content="880">
    <meta property="og:image:height" content="660">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Authors Time">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="index.html">
    <meta name="twitter:creator" content="@AuthorsTime">
    <meta name="twitter:title" content="Authors Time. | Leading Book Publishing Company">
    <meta name="twitter:description"
        content="Discover the exceptional book publishing services Authors Time. offers, the trusted name in American publishing. Get your book published today!">
    <meta name="twitter:image" content="assets/images/logo.png">
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="XY4YJmNXSNtWdgPTQCZu90lFzC9xGas2jjOA1aV-zhI" />
<meta name="msvalidate.01" content="AC65EE1D314961B1CA08D0348AC78B3C" />
<meta name="trustpilot-one-time-domain-verification-id" content="T1Wa0jsCb4FnqFmcQAt5RtlWpXigcY85MFQXY0uI" />
<meta name="ip2loc" content="139.135.57.22" />

<meta name="robots" content="max-snippet:-1">
<meta name="robots" content="max-image-preview:standard">
<meta name="robots" content="max-snippet:20, max-image-preview:large">
<meta name="robots" content="max-video-preview:-1">

<link rel="alternate" href="index.html" hreflang="en-us" />
<link rel="alternate" hreflang="x-default" href="index.html" />
<!-- Robotic Tags -->
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow, max-snippet:-1" />
<meta name="bingbot" content="index, follow, max-snippet:-1 " />

<link rel="stylesheet" href="assets/releases/v5.10.0/css/all.css" />
<!--<link rel="stylesheet" href="assets/releases/v5.15.4/css/all.css" />-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">
<!-- Custom Files -->

   <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
   <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style-web.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

     <!-- Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Authors Time",
        "description": "Enhance your book's appeal with our custom book cover design services. We offer professional and eye-catching book cover designs to captivate readers"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What types of writing and editing services do you offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "At Authors Time, we've got you covered with a wide array of writing and editing services. From expert ghostwriting to meticulous developmental editing, copy editing, and proofreading, our team of seasoned professionals is here to bring out the best in your work. We pride ourselves on working closely with you, collaborating every step of the way to ensure your manuscript shines with brilliance and is ready to make its mark in the publishing world."
            }
        }, {
            "@type": "Question",
            "name": "What types of book design and illustration services do you offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "From captivating cover designs to meticulously crafted interior layouts and custom illustrations, our team collaborates closely with you to create a visually stunning and professionally designed book."
            }
        }, {
            "@type": "Question",
            "name": "What types of publishing platforms do you work with?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We've got you covered across a wide range of publishing platforms. From Amazon Kindle Direct Publishing to Barnes & Noble Press, IngramSpark, and beyond, we're well-versed in each platform's unique requirements and guidelines. Our knowledgeable team is here to guide you through the publishing process, ensuring a seamless and successful journey."
            }
        }, {
            "@type": "Question",
            "name": "What is your pricing structure for your services?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We tailor our pricing to fit your unique needs and project scope. Our approach is transparent, providing clear, detailed estimates that ensure you know exactly what to expect."
            }
        }, {
            "@type": "Question",
            "name": "How long does the publishing process take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "While the publishing process duration can vary based on your project's scope, you can trust our dedicated team to work diligently and effectively. We are committed to delivering your book on time and ensuring it meets the scheduled milestones."
            }
        }, {
            "@type": "Question",
            "name": "Can I retain ownership of my book?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We firmly believe in empowering authors like you. That's why we offer a unique approach – you have 100% ownership of your book. We don't take any sales royalties, ensuring you retain complete control over your creative work."
            }
        }, {
            "@type": "Question",
            "name": "What makes Authors Time different from other publishing companies?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "At Authors Time., we take immense pride in our personalized and comprehensive publishing approach. Our team of experienced professionals becomes your dedicated partner, working closely with you to bring your unique vision to life. We prioritize delivering high-quality work that's on time and within your budget. What's more, with our 0% sales royalty policy, you can rest assured that your dedication and effort will be rewarded."
            }
        }]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http:\/\/schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@id": "",
                "name": "Authors Time"
            }
        }]
    }
    </script>
</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">