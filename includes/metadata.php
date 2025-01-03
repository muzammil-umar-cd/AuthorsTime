<?php
$current_url = $_SERVER['REQUEST_URI']; 
$title = '';
$meta_title = '';
$meta_description = '';
$canonical = '';

if($current_url == '/' || $current_url == '/index'){

    $title = "<title>Authors Time | Book Writing Company</title>";
    $meta_title= "<meta name='title' content='Authors Time | Book Writing Company'>";
    $meta_description = "<meta name='description' content='Become a published author with Authors Time. Our professional writers offer exceptional book writing services, ensuring your story is crafted to perfection. Hire us today!'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com" />';

}elseif($current_url == '/book-promotions'){

    $title = "<title>Book Promotion Services | Elevate Your Book’s Reach with Authors Time</title>";
    $meta_title= "<meta name='title' content='Book Promotion Services | Elevate Your Book’s Reach with Authors Time'>";
    $meta_description = "<meta name='description' content='Discover expert book promotion services at Authors Time. Boost your book's visibility and maximize sales with our tailored marketing strategies designed specifically for authors.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/book-promotions" />';

}elseif($current_url == '/ebook-writing'){

    $title = "<title>eBook Writing Services | Professional eBook Writing at Authors Time</title>";
    $meta_title= "<meta name='title' content='eBook Writing Services | Professional eBook Writing at Authors Time'>";
    $meta_description = "<meta name='description' content='Let Authors Time create compelling and engaging eBooks for you. Our professional eBook writing services deliver content that resonates with your readers.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/ebook-writing" />';

}elseif($current_url == '/book-editing'){

    $title = "<title>Book Editing Services | Refine Your Manuscript with Authors Time</title>";
    $meta_title= "<meta name='title' content='Book Editing Services | Refine Your Manuscript with Authors Time'>";
    $meta_description = "<meta name='description' content='Perfect your manuscript with our professional book editing services. Authors Time ensures your book is polished for publication with meticulous editing.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/book-editing" />';

}elseif($current_url == '/proofreading'){

    $title = "<title>Proofreading Services | Error-Free Manuscripts with Authors Time</title>";
    $meta_title= "<meta name='title' content='Proofreading Services | Error-Free Manuscripts with Authors Time'>";
    $meta_description = "<meta name='description' content='Ensure your manuscript is error-free with our expert proofreading services. Authors Time offers detailed proofreading to enhance your book quality.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/proofreading" />';

}elseif($current_url == '/book-publishing'){

    $title = "<title>Book Publishing Services | Seamless Publishing with Authors Time</title>";
    $meta_title= "<meta name='title' content='Book Publishing Services | Seamless Publishing with Authors Time'>";
    $meta_description = "<meta name='description' content='Publish your book with confidence using Authors Time’s comprehensive book publishing services. We guide you through every step of the publishing process.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/book-publishing" />';

}elseif($current_url == '/audio-book'){

    $title = "<title>Audiobook Production Services | Voice your Book into an Audiobook</title>";
    $meta_title= "<meta name='title' content='Audiobook Production Services | Voice your Book into an Audiobook'>";
    $meta_description = "<meta name='description' content='Transform your book into an audiobook with Authors Time’s professional audiobook production services. Reach a wider audience with quality audio production.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/audio-book" />';

}elseif($current_url == '/author-website'){

    $title = "<title>Author Website Design Services | Professional Author Websites by Us</title>";
    $meta_title= "<meta name='title' content='Author Website Design Services | Professional Author Websites by Us'>";
    $meta_description = "<meta name='description' content='Create a professional author website with Authors Time. Our website design services help you build a strong online presence and connect with your readers.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/author-website" />';

}elseif($current_url == '/book-cover'){

    $title = "<title>Book Cover Design Services | Standout Book Covers by Authors Time</title>";
    $meta_title= "<meta name='title' content='Book Cover Design Services | Standout Book Covers by Authors Time'>";
    $meta_description = "<meta name='description' content='Capture your readers’ attention with striking book covers from Authors Time. Our book cover design services provide custom, eye-catching designs for your book.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/book-cover" />';

}elseif($current_url == '/formatting'){

    $title = "<title>Book Formatting Services | Professional Book Formatting by Authors Time</title>";
    $meta_title= "<meta name='title' content='Book Formatting Services | Professional Book Formatting by Authors Time'>";
    $meta_description = "<meta name='description' content='Ensure your book looks its best with Authors Time’s professional book formatting services. We handle all formatting needs for both print and digital books.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/formatting" />';

}elseif($current_url == '/ghost-writing'){

    $title = "<title>Ghostwriting Services | Bring Your Story to Life with Authors Time</title>";
    $meta_title= "<meta name='title' content='Ghostwriting Services | Bring Your Story to Life with Authors Time'>";
    $meta_description = "<meta name='description' content='Bring your ideas to life with Authors Time’s ghostwriting services. Our professional ghostwriters create compelling content that reflects your voice and vision.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/ghost-writing" />';

}elseif($current_url == '/book-video-trailer'){

    $title = "<title>Video Book Trailer Services | Dynamic Book Trailers by Authors Time</title>";
    $meta_title= "<meta name='title' content='Video Book Trailer Services | Dynamic Book Trailers by Authors Time'>";
    $meta_description = "<meta name='description' content='Promote your book with a dynamic video book trailer from Authors Time. Our creative video trailers captivate your audience and boost your book's visibility.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/book-video-trailer" />';

}elseif($current_url == '/about-us'){

    $title = "<title>About Authors Time | Your Trusted Partner in Book Services</title>";
    $meta_title= "<meta name='title' content='About Authors Time | Your Trusted Partner in Book Services'>";
    $meta_description = "<meta name='description' content='Learn more about Authors Time, your trusted partner in book promotion, writing, editing, publishing, and more. Discover how we support authors in their journey.'>";
    $canonical = '<link rel="canonical" href="https://authorstime.com/about-us" />';

}