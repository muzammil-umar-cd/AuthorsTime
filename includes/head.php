<?php
include ('sendmail/sendmail.php');
include ('config.php');
// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset ($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

include ('metadata.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <?php echo $title; ?>
    <?php echo $meta_title ; ?>
    <?php echo $meta_description ; ?>
    <?php echo $canonical ; ?>

    <meta property="og:title" content="Authos Time">
    <meta property="og:description"
        content="It’s time to become a published author. We offer professional book writing services – second to none. Hire our experienced writers now.">
    <meta property="og:image" content="https://authorstime.com/assets/images/logo.png">
    <meta property="og:url" content="https://authorstime.com/">
    <meta name="google-site-verification" content="387YT-VdIS6gqtVoNI-CG1bb9cR90YRt6sglgsGUhSs" />


    <!--<link rel="stylesheet" href="assets/css/combined.css" media="print" onload="this.media='all'">-->
    <link rel="stylesheet" href="assets/css/layout.css">
    <!--<link rel="stylesheet" href="assets/css/responsive.css">-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
    <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/christmas.css">


    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132">
    </script>


    <style>
    .badge {
        display: inline-block;
        padding: 2px 6px;
        color: #fff;
        background: #ff334b;
        border-radius: 4px;
    }

    .badge-wrap {
        display: flex;
        align-items: center;
    }

    .badge-icon {
        position: relative;
        display: inline-flex;
        margin-right: 2px;
    }

    .badge-icon-inner {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        will-change: opacity;
        -webkit-animation: ani-breath 1.8s ease infinite;
        animation: ani-breath 1.8s ease infinite;
    }

    .badge-icon svg {
        fill: currentColor;
    }

    .badge-text {
        display: inline-flex;
        font-size: 7px;
        line-height: 9px;
        will-change: opacity;
        -webkit-animation: ani-breath 1.8s ease infinite;
        animation: ani-breath 1.8s ease infinite;
    }

    @-webkit-keyframes ani-breath {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.4;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes ani-breath {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.4;
        }

        100% {
            opacity: 1;
        }
    }

    .h-start {
        padding: 15px 19px;
        color: #fff !important;
    }

    .h-phone {
        background-color: #002868 !important;
    }

    .h-phone-2 {
        background-color: #E4573D;
    }

    .banner-head h2 {
        color: #e4573d;
        font-size: 45px;
        font-weight: bold;
        line-height: 50px;
        padding: 15px 0 0 0;
    }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CX8XKTREFE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-CX8XKTREFE');
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Authors Time",
        "image": "https://authorstime.com/assets/images/banner-img.webp",
        "url": "https://authorstime.com/",
        "telephone": "(929) 379-9764",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "112 West 34th Street 18th and 17th Floors",
            "addressLocality": "Manhattan",
            "addressRegion": "NY",
            "postalCode": "10120",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 40.749790,
            "longitude": -73.989030
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        },
        "sameAs": [
            "https://www.facebook.com/authorsstime",
            "https://www.instagram.com/authorstime/",
            "https://www.linkedin.com/company/authors-time/"
        ]
    }
    </script>
    <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "okoakibb1u");
    </script>
    
	<!-- <style>
		.offer img {
			position: fixed;
			z-index: 9;
			bottom: 2%;
			width: 170px;
			left: 2%;
		}

		.bounce {
			animation: bounce 1.5s ease infinite;
		}

		@keyframes bounce {
			70% {
				transform: translateY(0%);
			}

			80% {
				transform: translateY(-15%);
			}

			90% {
				transform: translateY(0%);
			}

			95% {
				transform: translateY(-7%);
			}

			97% {
				transform: translateY(0%);
			}

			99% {
				transform: translateY(-3%);
			}

			100% {
				transform: translateY(0);
			}
		}
	</style> -->
</head>

<body>
<!-- <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
</div>
    <div class="offer">
		<a href="javascript:;" id="pop-form" class="popup-btn" role="button"><img class="bounce"
				src="assets/images/christmas-sale.png" alt=""></a>
	</div> -->