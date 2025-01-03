<?php
$current_url = $_SERVER['REQUEST_URI']; 
$title = '';

if($current_url == '/' || $current_url == '/index'){
    $title = "<title>Authors Time | Leading Book Publishing Company</title>";
}elseif($current_url == '/amazon-book-description'){
    $title = "<title>Effective Amazon Book Description Services | Authors Time.</title>";
}elseif($current_url == '/amazon-book-listing-optimization'){
    $title = "<title>Amazon Book Listing Optimization Services | Authors Time.</title>";
}elseif($current_url == '/amazon-book-paid-ads'){
    $title = "<title>Effective Amazon Ads Services | Authors Time.</title>";
}elseif($current_url == '/amazon-central-account'){
    $title = "<title>Professional Amazon Central Services | Authors Time.</title>";
}elseif($current_url == '/amazon-content'){
    $title = "<title>Optimize Your Amazon Content | Authors Time.</title>";
}elseif($current_url == '/apple-book-publishing'){
    $title = "<title>Apple Book Publishing Services | Authors Time.</title>";
}elseif($current_url == '/audiobook-production'){
    $title = "<title>Professional Audiobook Services | Authors Time.</title>";
}elseif($current_url == '/author-website-service'){
    $title = "<title>Create an Author Website | Authors Time.</title>";
}elseif($current_url == '/barnes-noble'){
    $title = "<title>Barnes & Noble Self Publishing | Authors Time.</title>";
}elseif($current_url == '/blurb-writing-service'){
    $title = "<title>Professional Blurb Writing Services | Authors Time.</title>";
}elseif($current_url == '/book-cover-design'){
    $title = "<title>Custom Book Cover Design Services | Authors Time.</title>";
}elseif($current_url == '/book-editing-proofreading-service'){
    $title = "<title>Professional Book Editing & Proofreading Services | Authors Time.</title>";
}elseif($current_url == '/book-marketing-service'){
    $title = "<title>Effective Book Marketing Services | Authors Time.</title>";
}elseif($current_url == '/book-printing-service'){
    $title = "<title>Customizable Book Printing Services | Authors Time.</title>";
}elseif($current_url == '/book-trailer'){
    $title = "<title>Engaging Book Trailer Services | Authors Time.</title>";
}elseif($current_url == '/children-books-service'){
    $title = "<title>Children Books Service | Authors Time.</title>";
}elseif($current_url == '/contact-us'){
    $title = "<title>Contact Us | Authors Time | Reach Out Today</title>";
}elseif($current_url == '/digital-book-publishing'){
    $title = "<title>Digital Book Publishing Services | Authors Time.</title>";
}elseif($current_url == '/featured-articles'){
    $title = "<title>Effective Featured Article Services | Authors Time.</title>";
}elseif($current_url == '/fiction-writing-service'){
    $title = "<title>Expert Fiction Writing Services | Authors Time.</title>";
}elseif($current_url == '/ghostwriting-service'){
    $title = "<title>Professional Ghostwriting Services | Authors Time.</title>";
}elseif($current_url == '/illustrations-graphics'){
    $title = "<title>Professional Illustration Services | Authors Time.</title>";
}elseif($current_url == '/kobo-book-publishing'){
    $title = "<title>Kobo Book Publishing Services | Authors Time.</title>";
}elseif($current_url == '/privacy-policy'){
    $title = "<title>Privacy Policy | Authors Time.</title>";
}elseif($current_url == '/terms-and-conditions'){
    $title = "<title>Terms & Conditions | Authors Time.</title>";
}elseif($current_url == '/waterstones-publishing'){
    $title = "<title>Waterstones Books Publishing Services | Authors Time.</title>";
}