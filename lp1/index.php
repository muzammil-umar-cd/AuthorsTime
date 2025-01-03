<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

    
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


      <section class="banner-sec">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 banner-before-img ">
                  <div class="banner-main">
                     <div class="banner-text">
                        <h4>EXPAND THE SPHERE OF YOUR INFLUENCE WITH THE</h4>
                        <h2># 1<span><br>Book Marketing Agency</span></h2>
                        <p>Do you want to be among thousands of individuals who have taken advantage of book marketing services? We offer valuable book promotion services at a competitive market rate.</p>
                     </div>
                  </div>
                  <div class="banner-ul-box">
                     <ul>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Sell More Copies</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Multiply Reader Base</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Find New Customers</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Establish Your Name</li>
                     </ul>
                  </div>
                  <div class="header-btn hidden-xs ">
                     <a href="javascript:;" class="yellow_btn popup-btn">Request a Quote</a>
                     <a href="javascript:;" class="phone-btn chats">Live Chat</a>
                  </div>
                  <div class=" header-btn visible-xs">
                     <a href="tel:844-903-5691" class="phone-btn"><i class="fa fa-phone-square" aria-hidden="true"></i> Call Us: 844-903-5691</a>
               </div>
               </div>
               <div class="col-sm-5 banner-after-img col-sm-offset-1">
                  <div class="inner-banner-form-main">
                     <div class="inner-banner-form">
                        <h6>Book Marketing Solutions to</h6>
                        <h2>Unlock the Door to Commercial Success </h2>
                        
                        <!-- <p>We’ll get in touch to show you how you can leverage our services.</p> -->
                        <form action="../sendmail/send_mail_lp1.php" method="POST">
                           <!--hidden required values-->
                           <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                           <input type="hidden" name="city" value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                           <input type="hidden" name="country" value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                           <input type="hidden" name="internet_connection" value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                           <input type="hidden" name="zipcode" value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                           <input type="hidden" name="region" value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                           <input type="hidden" name="url" value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                           <div class="fld-inp">
                              <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                              <input type="text" name="name" required="" placeholder="Full Name *" >
                           </div>
                           <div class="fld-inp">
                              <!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
                              <input type="tel" name="phone" required="" placeholder="Phone Number *">
                           </div>
                           <div class="fld-inp">
                              <!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
                              <input type="email" name="email" required="" placeholder="Email Address *">
                           </div>
                           <div class="fld-inp fld-txt">
                              <!-- <i class="fa fa-pencil" aria-hidden="true"></i> -->
                              <textarea name="message" placeholder="Enter Message" required=""></textarea>
                           </div>
                           <button type="submit" name="send_reserve_req">
                           Submit!<!-- <i class="fa fa-chevron-right"></i> -->
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="marketing-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="text-box">
                     <h4>A Reliable Source For Better Reach</h4>
                     <h2>Top Book Marketing Solutions</h2>
                     <p>Are you wondering how book marketing can change the fate of your literary accumulations? Whether it is an academic edition, a non-fiction work, a collection of poetry, or a series of fictional novels – we know how to make way for your book to reach the right readers.</p>
                  </div>
                  <div class="marketing-ul-box">
                     <ul>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Book Editing</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Book Formatting </li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Book Cover Designs </li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Press Release Write-ups </li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Author Website Building </li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i>Product Description Writing </li>
                     </ul>
                  </div>
                  <div class="header-btn">
                     <a href="javascript:;" class="yellow_btn popup-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; order_now_value(this)" name="for $199" data-cf-modified-b18c94f00f31496250def299-="">Request a Quote</a>
                     <a href="javascript:;" class="phone-btn chats"><!-- <img loading="lazy" src="images/flg-icon.png"> -->Live Chat</a>
                  </div>
               </div>
               <div class="col-sm-5 col-sm-offset-1">
                  <div class="markiting-img">
                     <img src="images/markitng-1.png">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="cta-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-7">
                  <div class="cta-text">
                     <h4>Boost Your Book Sales</h4>
                     <h2>We Know What It Takes to Get Your Book into Reader’s Hands. <span> Let Us Help You! </span></h2>
                  </div>
               </div>
                  <div class="col-sm-5">
                     <div class="header-btn">
                        <a href="tel:(929) 379-9764" class="phone-btn"><i class="fa fa-phone-square" aria-hidden="true"></i> Call Us: (929) 379-9764</a>
                     </div>
                  </div>
            </div>
         </div>
      </section>
      <section class="portfolio-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="port-text wow zoomIn" data-wow-delay="300ms">
                     <h4>Show Up Across The Right Audience With Us </h4>
                     <h2>Professional Book Marketers</h2>
                     <p>Authors Time are pioneers of book promotion and marketing, where our aim is to level the playing field for our clients. Now beat the bestseller novels and renowned authors with our extraordinary book marketing services. </p>
                  </div>
               </div>
               <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="techtab1">
                     <div class="col-sm-3">  
                        <div class="port-box box18 wow fadeInLeft" data-wow-duration="4s">
                           <a href="images/book-1.png" class="fancybox" rel="ligthbox" tabindex="0">
                              <img loading="lazy" src="images/book-1.png">
                              <div class="box-content"> <i class="fa fa-plus"></i> </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="port-box box18 wow fadeInLeft" data-wow-duration="4s">
                           <a href="images/book-2.png" class="fancybox" rel="ligthbox" tabindex="0">
                              <img loading="lazy" src="images/book-2.png">
                              <div class="box-content"> <i class="fa fa-plus"></i> </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="port-box box18 wow fadeInLeft" data-wow-duration="4s">
                           <a href="images/book-3.png" class="fancybox" rel="ligthbox" tabindex="0">
                              <img loading="lazy" src="images/book-3.png">
                              <div class="box-content"> <i class="fa fa-plus"></i> </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="port-box box18 wow fadeInLeft" data-wow-duration="4s">
                           <a href="images/book-4.png" class="fancybox" rel="ligthbox" tabindex="0">
                              <img loading="lazy" src="images/book-4.png">
                              <div class="box-content"> <i class="fa fa-plus"></i> </div>
                           </a>
                        </div>
                     </div>
                  </div>

              </div>
            </div>
         </div>
      </section>
 
      

      <section class="testimonial-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="text-box">
                     <h4>Testimonials</h4>
                     <h2>How Do Our Clients <br> Perceive Us?</h2>
                  </div>
                  <div class="client-test-slider">
                        <div class="col-sm-12">
                           <div class="client-testi-box">
                              <div class="teti-img-box">
                                 <img loading="lazy" src="images/testi-avatar-2.png">
                              </div>
                              <p class="testi-pera">Every author like to be praised for their published work. The book marketing by this agency is helping me immensely to reach ideal book purchasers. I will recommend it to aspiring authors and poets.  </p>
                              <div class="testi-flex-box">
                                 <div class="testi-flex-box">
                                    <div class="cli-testi-text">
                                       <h3>Zachary McPhee</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="client-testi-box">
                              <div class="teti-img-box">
                                 <img loading="lazy" src="images/testi-avatar-2.png">
                              </div>
                              <p class="testi-pera">My book was unable to gain momentum in the mainstream public. The book promotion of Authors Time allowed me to navigate my way in the market. Now, I will be choosing for my upcoming book as well. </p>
                              <div class="testi-flex-box">
                                 <div class="testi-flex-box">
                                    <div class="cli-testi-text">
                                       <h3>Walter Keith</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="client-testi-box">
                              <div class="teti-img-box">
                                 <img loading="lazy" src="images/testi-avatar-1.png">
                              </div>
                              <p class="testi-pera">I always dreamt of becoming a published author, but I did not see any luck with my book. A friend suggested Authors Time for book marketing. Surprisingly, it did wonders. Now my book is well-read, well-sold, and well-appreciated. </p>
                              <div class="testi-flex-box">
                                 <div class="testi-flex-box">
                                    <div class="cli-testi-text">
                                       <h3>Laura Welton</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="col-sm-6 hidden-xs">
                  <div class="faqs-main ">
                     <div class="text-box">
                        <h4>FAQ’s</h4>
                        <h2>Frequently Asked Questions </h2>
                        <p>Here we have compiled the queries commonly asked by users to assist you further. </p>
                     </div>
                  </div>
                  <div class="accordion" id="accordion2">
                     <div class="wrapper center-block">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                           <div class="panel panel-default wow fadeInLeft" data-wow-duration="4s">
                              <div class="panel-heading active" role="tab" id="headingOne">
                                 <h4 class="panel-title">
                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <p>What is book marketing?</p>
                                 </a>
                                 </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                 <div class="panel-body">
                                    Book marketing is a presentation and promotional approach that focuses on creating awareness for a particular book among booksellers and consumers. 
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default wow fadeInLeft" data-wow-duration="4s">
                              <div class="panel-heading" role="tab" id="headingTwo">
                                 <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <p>What is the prime purpose of book marketing?</p>
                                 </a>
                                 </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                 <div class="panel-body">
                                    The goal of marketing is to generate book sales, establish the identity of the author, build positive imagery of a literary piece, and provoke interest in individuals.  
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default wow fadeInLeft" data-wow-duration="4s">
                              <div class="panel-heading" role="tab" id="headingThree">
                                 <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <p>How can book marketing ofAuthors Time help us?</p>
                                 </a>
                                 </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                 <div class="panel-body">
                                   Authors Time applies schemes that help a book become visible in the literary world and further its appeal to the masses, including bibliophiles and other stakeholders.
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default wow fadeInLeft" data-wow-duration="4s">
                              <div class="panel-heading" role="tab" id="headingFour">
                                 <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <p>What are the benefits of book marketing services fromAuthors Time?</p>
                                 </a>
                                 </h4>
                              </div>
                              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                 <div class="panel-body">
                                    Customers like feeling valued, whether through promotional content or direct interactions. Our book publicity involves several practices to endorse the book of our client. 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'include/footer.php';?>
<?php include 'include/script.php';?>

                                                           

