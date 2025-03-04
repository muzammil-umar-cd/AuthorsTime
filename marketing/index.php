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
  <meta name="description"
    content="Become the next bestselling author today with highest level of privacy ensured <?php echo WEBSITE_NAME; ?> services in USA. Talk to our book writing consultants, and get started now." />
  <link rel="stylesheet" href="assets/css/layout.css" />
  <link href="css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/owl.carousel.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon" />
  <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon" />

    <!-- Start of designneshelp Zendesk Widget script -->
    <script id="ze-snippet"
        src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
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
              <img src="assets/images/logo.png" alt="" />
            </a>
          </div>
          <div class="col-md-8 text-right">
            <div class="contact">
              <ul class="contact-lst">
                <li>
                  <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                        src="assets/images/chat-icon.png" /></span>Live Chat Now</a>
                </li>
                <li>
                  <a href="<?php echo PHONE_HREF; ?>"><span><img
                        src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- main-banner-start -->
  <div class="mainBanner" style="background-image: url(assets/images/main-banner-bg.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="banner-txt">
            <h4>Make your Words Available Everywhere!</h4>
            <h2>
              Use Our Outstanding Book Marketing Services to Create Attention
              for your Book
            </h2>
            <p>
              Having a strong online presence is important in today's digital
              world. You and your book can achieve extraordinary success in
              the digital realm with the assistance of our book marketing
              team, who utilize the strategies of leading industry marketers.
            </p>
            <div class="price-bx">
              <!-- <h5>Starting from only <span><img src="assets/images/price-arrow.png"></span></h5> -->
              <!-- <h4><span>$9.95</span>/page</h4> -->
              <h6>
                Or
                <span><a href="javascript:;" onclick="$zopim.livechat.window.toggle()">Start A Live
                    Chat</a></span>
                to discuss your requirements
              </h6>
              <!--<img src="assets/images/badges.png">-->
              <img src="assets/images/partners-strip.png" />
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="bannerForm">
            <div>
              <div id="countdown">
                <div id="tiles"></div>
                <div class="labels">
                  <li>Days</li>
                  <li>Hours</li>
                  <li>Mins</li>
                  <li>Secs</li>
                </div>
              </div>
              <h2>The <span>Best <?php echo WEBSITE_NAME; ?> in Town</span></h2>
              <h3>Within Easy Reach</h3>
              <!--<div class="spacer"><br></div>-->
              <form method="POST" class="" action="sendmail/sendmail.php">
                <!--hidden required values-->
                <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                <input type="hidden" name="form_name" value="BANNER FORM" />
                <input type="hidden" name="bot_detector" value="" />

                <div class="row">
                  <div class="col-md-6">
                    <div class="fld-input">
                      <input type="text" name="name" placeholder="Name" required="required" required/>
                      <i class="fas fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="fld-input">
                      <input type="email" name="email" placeholder="Email" required="required" required/>
                      <i class="fas fa-envelope"></i>
                    </div>
                  </div>
                </div>
                <div class="fld-input">
                  <input type="number" name="phone" placeholder="Phone" required="required"required />
                  <i class="fas fa-phone"></i>
                </div>
                <div class="fld-input">
                  <select name="service" data-name="Service" required>
                    <option selected="" disabled="">Select Service</option>
                    <option value="Proof Reading">Proof Reading</option>
                    <option value="Editing">Editing</option>
                    <option value="Promotion and Marketing">
                      Promotion and Marketing
                    </option>
                    <option value="All">All</option>
                  </select>
                  <i class="fa fa-book"></i>
                </div>
                <div class="fld-input">
                  <input type="text" name="genre" placeholder="Genre" data-name="Genre" required/>
                  <i class="fas fa-atlas"></i>
                </div>
                <div class="fld-input">
                  <select name="noofpages" data-name="noofpages" required>
                    <option selected="" disabled="">Number of Pages</option>
                    <option value="1-50">1-50</option>
                    <option value="50-100">50-100</option>
                    <option value="100-200">100-200</option>
                    <option value="200+">200+</option>
                  </select>
                  <i class="fas fa-file-alt"></i>
                </div>
                <div class="fld-btn">
                  <button class="packageformsubmit1 btn-submit" type="submit">
                    Discuss Your Project
                  </button>
                </div>
                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                <div class="success mt-3 alert alert-success text-center mb-0 p-2"
                  style="display: none"></div>
                <div class="loader" style="display: none">
                  <img alt="loader" src="assets/images/loader.gif" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main-banner-start -->
  <section class="client-strip">
    <div class="container">
      <!--<div><img class="img-fluid" src="assets/images/client-logo-strip.jpg"></div>-->
      <ul>
        <li>
          <a href="javascript:;"><img src="assets/images/p-01.jpg" /></a>
        </li>
        <li>
          <a href="javascript:;"><img src="assets/images/p-02.jpg" /></a>
        </li>
        <li>
          <a href="javascript:;"><img src="assets/images/p-03.jpg" /></a>
        </li>
        <li>
          <a href="javascript:;"><img src="assets/images/p-04.jpg" /></a>
        </li>
        <li>
          <a href="javascript:;"><img src="assets/images/p-05.jpg" /></a>
        </li>
        <li>
          <a href="javascript:;"><img src="assets/images/p-06.jpg" /></a>
        </li>
      </ul>
    </div>
  </section>
  <div class="section-category">
    <div class="category-m"></div>
    <div class="container">
      <h2>
        A Glimpse into Our <br />
        <span> Book Marketing Service</span> Genres
      </h2>
      <p>
        Explore our various range of book marketing services modified to
        various genres. From engaging thrillers to heartwarming romances,
        <?php echo WEBSITE_NAME; ?> specializes in promoting books across multiple
        genres with targeted strategies for maximum impact.
      </p>
      <ul class="category-list">
        <li>
          <img src="assets/images/categories/eb01.jpg" alt="feat-icon" width="99" height="103" />
          <h6>Mystery</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb02.jpg" alt="feat-icon" width="90" height="103" />
          <h6>Horror</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb03.jpg" alt="feat-icon" width="96" height="103" />
          <h6>Romance</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb04.jpg" alt="feat-icon" width="95" height="103" />
          <h6>Children’s books</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb05.jpg" alt="feat-icon" width="98" height="103" />
          <h6>Fantasy</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb06.jpg" alt="feat-icon" width="106" height="103" />
          <h6>How-To Guides</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb11.jpg" alt="feat-icon" width="88" height="103" />
          <h6>Drama</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb07.jpg" alt="feat-icon" width="97" height="103" />
          <h6>Crime</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb08.jpg" alt="feat-icon" width="98" height="103" />
          <h6>Biography</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb12.jpg" alt="feat-icon" width="106" height="103" />
          <h6>Health</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb09.jpg" alt="feat-icon" width="99" height="103" />
          <h6>Travel</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb10.jpg" alt="feat-icon" width="95" height="103" />
          <h6>Philosophy</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb13.jpg" alt="feat-icon" width="86" height="103" />
          <h6>Science Fiction</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb14.jpg" alt="feat-icon" width="90" height="103" />
          <h6>Trilogy</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb15.jpg" alt="feat-icon" width="90" height="103" />
          <h6>Adventure</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb16.jpg" alt="feat-icon" width="97" height="103" />
          <h6>Art</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb17.jpg" alt="feat-icon" width="99" height="103" />
          <h6>Business</h6>
        </li>
        <li>
          <img src="assets/images/categories/eb18.jpg" alt="feat-icon" width="106" height="103" />
          <h6>And More...</h6>
        </li>
      </ul>
      <div class="clear_fix"></div>
      <div class="txt-contact-bx">
        <p>
          <span>Remember that </span> we can cater to almost any book when it
          comes to marketing.
        </p>
        <ul class="contact-lst">
          <li class="first">
            <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                  src="assets/images/chat-icon.png" /></span>Live Chat
              Now</a>
          </li>
          <li class="last">
            <a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="cta-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="cta-txt">
            <h4>Do you have a desire to increase your sales?</h4>
            <h2>
              We Can Help You With our Professional Book Marketing Services
            </h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="cta-txt-rit">
            <img src="assets/images/stars.png" />
            <p>Instead of Just Thinking, it's Time to Start Acting.</p>
            <a href="javascript:;" class="btn-popup"><img class="img-fluid"
                src="assets/images/btn-bg.png" /></a>
            <ul class="contact-lst">
              <li class="first">
                <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                      src="assets/images/chat-icon.png" /></span>Live
                  Chat Now</a>
              </li>
              <li class="last">
                <a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-6 full-section">
    <div class="container">
      <div class="inner-container align-center">
        <h2 class="title_block center">
          Process <span> of Book Marketing</span>
        </h2>
        <p>
          <?php echo WEBSITE_NAME; ?> book marketing process involves market
          details, research, marketing strategy, promotion, book launch, and
          post-launch promotion.
        </p>
      </div>
      <div id="hit-slidenav">
        <ul>
          <li>
            <a href="javascript:void(0)" id="step1"><span>1</span><img src="assets/images/hw-step-01.png"
                width="50" height="47" /></a>
          </li>
          <li>
            <a href="javascript:void(0)" id="step2"><span>2</span><img src="assets/images/hw-step-02.png"
                width="50" height="47" /></a>
          </li>
          <li>
            <a href="javascript:void(0)" id="step3"><span>3</span><img src="assets/images/hw-step-03.png"
                width="50" height="47" /></a>
          </li>
          <li>
            <a href="javascript:void(0)" id="step4"><span>4</span><img src="assets/images/hw-step-04.png"
                width="50" height="47" /></a>
          </li>
          <li>
            <a href="javascript:void(0)" id="step5"><span>5</span><img src="assets/images/hw-step-05.png"
                width="50" height="47" /></a>
          </li>
          <li>
            <a href="javascript:void(0)" id="step6"><span>6</span><img src="assets/images/hw-step-06.png"
                width="50" height="47" /></a>
          </li>
        </ul>
      </div>
      <div id="hiw-sliderblock">
        <div id="owl-demo" class="owl-carousel howitwork-carousel">
          <div class="item">
            <div class="hiw-content">
              <h4 class="title_block">Order Details <span></span></h4>
              <p>
                To reserve your spot, all you need to do is fill out a simple
                form and provide us with all the relevant information about
                your book. As soon as your details arrive, one of our project
                managers will get in contact with you.
              </p>
            </div>
            <div class="hiw-img">
              <img src="assets/images/how-work-im-1.png" />
            </div>
            <div class="clear_fix"></div>
          </div>
          <div class="item">
            <div class="hiw-content">
              <h4 class="title_block">Research</h4>
              <p>
                In book marketing research, we look at market trends, figure
                out who your target readers are, and look at what your
                competitors are doing. This is a data-based approach, which
                helps marketers make efforts to make a book more appealing and
                reach the right people.
              </p>
            </div>
            <div class="hiw-img">
              <img src="assets/images/how-work-im-2.png" />
            </div>
            <div class="clear_fix"></div>
          </div>
          <div class="item">
            <div class="hiw-content">
              <h4 class="title_block">First Marketing Strategy Approval</h4>
              <p>
                After the first marketing step is planned, it is sent to you
                to make sure it is okay. Once approved, marketing plans are
                put into action.
              </p>
            </div>
            <div class="hiw-img">
              <img src="assets/images/how-work-im-3.png" />
            </div>
            <div class="clear_fix"></div>
          </div>
          <div class="item">
            <div class="hiw-content">
              <h4 class="title_block">Pre-Launch Promotion</h4>
              <p>
                People will be talking about your book before it even comes
                out because our marketing will make a lot of noise about it.
                This is done by posting interesting things, letting people
                pre-order ahead of time, and advertising it in major
                newspapers and magazines.
              </p>
            </div>
            <div class="hiw-img">
              <img src="assets/images/how-work-im-4.png" />
            </div>
            <div class="clear_fix"></div>
          </div>
          <div class="item">
            <div class="hiw-content">
              <h4 class="title_block">Book Launch</h4>
              <p>
                Our marketers are highly skilled in planning the perfect book
                launch. They know how to invite guests who will play an
                important part in marketing your book by building public
                relations.
              </p>
            </div>
            <div class="hiw-img">
              <img src="assets/images/how-work-im-5.png" />
            </div>
            <div class="clear_fix"></div>
          </div>
          <div class="item">
            <div class="hiw-content">
              <h4 class="title_block">Post-launch Promotion</h4>
              <p>
                Our marketers will continue to work tirelessly even after your
                book is released. This is an essential component for them to
                determine the success of your book. They will continue to
                execute more promotional plans until your book becomes a
                bestseller.
              </p>
            </div>
            <div class="hiw-img">
              <img src="assets/images/how-work-im-6.png" />
            </div>
            <div class="clear_fix"></div>
          </div>
        </div>
      </div>
      <div style="clear: both"></div>
      <div class="ct-button">
        <a href="javascript:;" class="btn-popup">Let’s Get Started</a>
        <ul class="contact-lst2">
          <li class="first">
            <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                  src="assets/images/chat-icon.png" /></span>Live Chat
              Now</a>
          </li>
          <li class="last">
            <a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="main-publication">
    <div class="container">
      <h2>Implementing a Productive Marketing Strategy for your Books</h2>
      <p>
        Have you already released your book but aren't getting the sales you
        hoped for? You can still reach your goals with our useful marketing
        plans. It's never too late to get the word out about your book with
        our helpful ideas. We use creative marketing techniques to get more
        people to read your work.
      </p>
      <div class="row">
        <div class="col-md-12">
          <div class="poster-main perspectiv-carousel">
            <div class="poster-btn poster-prev-btn"></div>
            <ul class="poster-list">
              <li class="poster-item">
                <a href="javascript:l;" target="_blank"><img src="assets/images/sl10.png" />
                </a>
              </li>
              <li class="poster-item">
                <a href="assets/pdf/education.pdf" target="_blank">
                  <img src="assets/images/sl4.png" />
                </a>
              </li>
              <li class="poster-item">
                <a href="assets/pdf/Biography.pdf" target="_blank">
                  <img src="assets/images/sl6.png" />
                </a>
              </li>
              <li class="poster-item">
                <a href="assets/pdf/Strategy.pdf" target="_blank">
                  <img src="assets/images/sl7.png" />
                </a>
              </li>
              <li class="poster-item">
                <a href="assets/pdf/Travel.pdf" target="_blank">
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
          <li class="first">
            <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                  src="assets/images/chat-icon.png" /></span>Live Chat
              Now</a>
          </li>
          <li class="last">
            <a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="best-value">
    <div class="container">
      <h2>
        <span>What is typically</span> included in book marketing campaigns?
      </h2>
      <p>
        As a self-published author, it's important to think ahead and allocate
        a budget for your book marketing. Once you have a budget in mind, you
        can then create a timeline for your marketing efforts. Every
        individual is unique, but all of them need these elements in order to
        achieve success:
      </p>
      <div class="row">
        <div class="col-md-6">
          <div class="value-bx">
            <h3>
              <span><img src="assets/images/value-1.jpg" /></span> Target
              Audience and Campaign Planning
            </h3>
            <p>
              It is important to identify your target audience, which may
              consist of more than one group, and create a marketing plan that
              effectively reaches out to them. Our team of experienced book
              marketers can help you effectively connect with individuals who
              have a genuine interest in your topic or story.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="value-bx">
            <h3>
              <span><img src="assets/images/value-2.jpg" /></span>Author
              Platform and Social Media
            </h3>
            <p>
              When you work on developing your author's platform, one of the
              key aspects is creating a website, optimizing your Amazon pages,
              engaging in email marketing, and strategizing your social media
              posts. These efforts are crucial in attracting people's
              attention and helping them discover your book. It is expected
              that your target readers and the media will be able to find you
              easily online.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="value-bx">
            <h3>
              <span><img src="assets/images/value-3.jpg" /></span>
              Marketing/Press Materials and Media Pitches
            </h3>
            <p>
              Our team of book publicists is skilled at creating captivating
              press releases and, most importantly, convincing media pitches.
              Afterwards, they create lists of media contacts and reach out to
              the editors and producers who are most relevant.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="value-bx">
            <h3>
              <span><img src="assets/images/value-4.jpg" /></span> Interviews
              and Event Appearances
            </h3>
            <p>
              You will get more sales from your book if you are mentioned on
              podcasts, TV, and radio, and if newspapers, magazines, and news
              sites, both online and off, write about you. You might also be
              able to get invited to write by-lined articles and give
              speeches.
            </p>
          </div>
        </div>
      </div>
      <div class="ct-button">
        <a href="javascript:;" class="btn-popup">Let's get Started</a>
        <ul class="contact-lst2">
          <li class="first">
            <a href="javascript:;" onclick="$zopim.livechat.window.toggle()"><span><img
                  src="assets/images/chat-icon.png" /></span>Live Chat
              Now</a>
          </li>
          <li class="last">
            <a href="<?php echo PHONE_HREF; ?>"><span><img src="assets/images/tele-icon.png" /></span><?php echo PHONE; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div><img src="assets/images/textimonials-1.jpg" /></div>
        </div>
        <div class="col-md-7">
          <div class="testimonials-text">
            <h5>Clients Reviews</h5>
            <h3>See What Our Clients Say About Us</h3>
            <div class="reviw-testi testi-sldier">
              <div>
                <p>
                  Incredible results and impeccable service. <?php echo WEBSITE_NAME; ?>
                  team's passion for literature shines through in their
                  work. They not only promoted my book but also provided
                  valuable insights and guidance for long-term success. I'm
                  immensely grateful for their expertise and dedication.
                </p>
                <div class="star-name">
                  <h6>Mia Katherine</h6>
                  <img src="assets/images/stars-review.jpg" />
                </div>
              </div>
              <div>
                <p>
                  I can't thank <?php echo WEBSITE_NAME; ?> enough for their
                  outstanding book marketing services! They took the time to
                  understand my book's unique selling points and developed a
                  customized strategy that delivered impressive results. My
                  book is now gaining momentum, and I couldn't be happier with
                  the outcome.
                </p>
                <div class="star-name">
                  <h6>Catherine Johnson</h6>
                  <img src="assets/images/stars-review.jpg" />
                </div>
              </div>
              <div>
                <p>
                  I was hesitant to invest in professional book marketing, but
                  this agency completely surpassed my expectations. Their
                  team's expertise and dedication are unmatched. They not only
                  boosted my book's exposure but also provided valuable
                  insights that will benefit my future projects.
                </p>
                <div class="star-name">
                  <h6>David Scott</h6>
                  <img src="assets/images/stars-review.jpg" />
                </div>
              </div>
              <div>
                <p>
                  I am beyond impressed with the results achieved by <?php echo WEBSITE_NAME; ?>!
                  Their strategic approach to book
                  marketing, combined with their genuine passion for
                  literature, sets them apart. They not only increased my
                  book's visibility but also fostered a sense of community
                  around it. I'm grateful for their work and highly recommend
                  their services to any author looking to make an impact.
                </p>
                <div class="star-name">
                  <h6>Anne Morgan</h6>
                  <img src="assets/images/stars-review.jpg" />
                </div>
              </div>
              <div>
                <p>
                  <?php echo WEBSITE_NAME; ?>'s book marketing approach was not
                  only effective but also refreshing. They prioritized
                  transparency and communication, keeping me informed every
                  step of the way. Thanks to their efforts, my book has found
                  its audience and is making waves.
                </p>
                <div class="star-name">
                  <h6>Michael Richardson</h6>
                  <img src="assets/images/stars-review.jpg" />
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
          <p>
            You must have some questions related to book video trailer
            services. We have collected a list of questions for your help:
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="faq-sec">
            <ul class="accordian">
              <li class="first active">
                <h4>What is book marketing?</h4>
                <div style="display: block">
                  <p>
                    The long and careful process of pushing your book in a way
                    that makes people want to buy it is called book marketing.
                  </p>
                </div>
              </li>
              <li class="">
                <h4>What does a book marketer do?</h4>
                <div style="display: none">
                  <p>
                    A book marketer's job is to use these kinds of advertising
                    and marketing plans to get a lot of people to buy books.
                    Different marketers have different ideas about how to sell
                    and promote their products.
                  </p>
                </div>
              </li>
              <li class="">
                <h4>Do I need to hire a book marketer?</h4>
                <div style="display: none">
                  <p>
                    If you write books, you do need to hire someone to sell
                    them. Writing a book and getting people to buy it are two
                    very different things. If someone is great at writing a
                    book, they might not be so great at presenting it, and the
                    other way around.
                  </p>
                </div>
              </li>
              <li class="">
                <h4>How much does it cost to market a book?</h4>
                <div style="display: none">
                  <p>
                    We work hard to give you the most for your money. Online
                    book promotion services can cost anywhere from a few
                    hundred dollars to several thousand dollars, subject to
                    how well you want your book to be known online and what
                    kind of book you want to promote.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>
                  What benefits will I have over my competitors if I market my
                  book?
                </h4>
                <div style="display: none">
                  <p>
                    There are a lot of books online these days, and the space
                    is getting crowded. You need a complete marketing plan to
                    connect directly with readers and possible customers.
                    Marketing your book online is the best way to find people.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>
                  My book isn't done yet. Is it a good time to hire someone to
                  sell my book?
                </h4>
                <div style="display: none">
                  <p>
                    You can use our services to sell your book before it's
                    even finished. But you should have a clear idea of where
                    you want your book to go so that we can help you come up
                    with a marketing plan.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>
                  What will be part of your plan to market the book online?
                </h4>
                <div style="display: none">
                  <p>
                    We can make websites, social media accounts, blogs, SEO
                    techniques, and more for you. We'll also make, update, and
                    take care of an Amazon page for you that will help your
                    book get noticed.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>
                  How do I know if my effort to market books is working?
                </h4>
                <div style="display: none">
                  <p>
                    Several things, like book sales, website traffic, and
                    social media engagement, can be used to judge how well a
                    book marketing effort is doing. You should set clear goals
                    and keep track of your progress toward them.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>What kinds of things do you do to market my book?</h4>
                <div style="display: none">
                  <p>
                    If you want to sell your book like a pro, we can help you
                    with everything else. The following are part of this: Book
                    Trailer, Author Interview, and Social Media Content.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>How long does an effort to market books last?</h4>
                <div style="display: none">
                  <p>
                    Each book marketing effort has different goals and costs,
                    so the length of the campaign can change. Campaigns can
                    last anywhere from a few weeks to a few months. So, it's
                    important to have a clear plan and set goals and deadlines
                    that are attainable.
                  </p>
                </div>
              </li>
              <li class="last">
                <h4>What is a campaign to market or promote a book?</h4>
                <div style="display: none">
                  <p>
                    A book promotion campaign is a set of focused marketing
                    activities that are meant to get people interested in a
                    certain book. The goal is to make the book more
                    well-known, start a conversation, and eventually sell a
                    lot of copies.
                  </p>
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
              <h3>
                Let's Plan <span>the Best </span>Book Marketing Strategy:
              </h3>
              <p>
                We have very affordable book marketing packages for you. We
                want your book to be placed in the best possible market.
                Therefore, we put our efforts into creating a strategy for
                your book to reach everywhere.
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
                <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                <input type="hidden" name="form_name" value="FOOTER FORM" />
                <input type="hidden" name="bot_detector" value="" />

                <div class="footer-form">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="footer-form-input">
                        <input type="text" name="name" placeholder="Full Name" required/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="footer-form-input">
                        <input type="tel" name="phone" placeholder="Phone Number" required/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="footer-form-input">
                        <input type="email" name="email" placeholder="Email" required/>
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
                        <input type="text" name="genre" placeholder="Genre" data-name="genre" required/>
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
      <div class="row align-items-center">
        <div class="col-md-6">
          <p>
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
                <input type="text" placeholder="Name" name="name" id="name" required="" required/>
              </div>
            </div>
            <div class="col-md-12">
              <div class="frmicon-box">
                <input type="email" placeholder="Email" name="email" id="email" required="" required/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="frmicon-box phonecode">
                <input type="number" name="phone" required="" placeholder="Phone Number" required/>
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
              <input type="text" name="name" placeholder="Name" required="" required/>
            </div>
            <div class="field field-100">
              <input type="email" name="email" placeholder="Email" required="" required/>
            </div>
            <div class="field field-100">
              <div class="row">
                <div class="col-lg-12 noguttar">
                  <input type="tel" name="phone" placeholder="Phone" required="" required/>
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
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
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
</body>

</html>