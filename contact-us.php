<?php
include ('includes/head.php');
include ('includes/header.php');
?>

<section class="contact-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="banner-head">
          <h1>We Are Here To Help
          </h1>
          <p>Do you want us to write on your behalf? Get in touch with us. Provide all the details regarding your
            project, and we will provide you with exceptional writing services – par excellence - to ensure total
            satisfaction.</p>
          <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss your Project</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-img">
          <img src="assets/images/contact-banner-img.png">
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<!--  -->
<div class="client-logos-2">
  <div class="container-fluid">
    <ul class="client-logos-2-list">
      <li><img src="assets/images/client-logo-1.png"></li>
      <li><img src="assets/images/client-logo-3.png"></li>
      <li><img src="assets/images/client-logo-4.png"></li>
      <li><img src="assets/images/client-logo-6.png"></li>
      <li><img src="assets/images/client-logo-1.png"></li>
      <li><img src="assets/images/client-logo-3.png"></li>
      <li><img src="assets/images/client-logo-4.png"></li>
      <li><img src="assets/images/client-logo-6.png"></li>
    </ul>
  </div>
</div>
<!--  -->
<!--  -->
<section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="contact-us-form">
          <span>Contact Us</span>
          <h3>We Would Like To Hear From You</h3>
          <p>Feel free to give us a call, write to us, or complete the contact form at the bottom of this page. Call
            (Toll Free): <a href="<?php echo PHONE_HREF; ?>">
              <?php echo PHONE; ?>
            </a> Email: <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><span class="">
                <?php echo ADMIN_EMAIL; ?>
              </span></a>
          </p>
        </div>
        <div class="contact-us-form-header">

          <form method="Post">
            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
            <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
            <input type="hidden" name="form_name" value="CONTACT US FORM" />
            <input type="hidden" name="bot_detector" value="" />
            <input type="hidden" name="privacy_policy" value="I have read the Terms & Conditions and Privacy Policy." />
            <input type="hidden" name="policy" value="By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time." />
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="name" required required="" placeholder="Enter Your Name*">
              </div>
              <div class="col-md-6">
                <input type="email" name="email" required required="" placeholder="Enter Your Email*">
              </div>
              <div class="col-md-12">
                <input type="tel" name="phone" required required="" placeholder="Phone Number*" minlength="10" maxlength="10">
              </div>
              <div class="col-md-12">
                <textarea name="message" placeholder="Enter Message Here" ></textarea>
              </div>
            </div>
            <div class="form-group text-dark pt-3">
                <input type="checkbox" class="required" name="policy_check" id="policy_check" required style="width: fit-content !important;height: auto !important;">
                By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time.
            </div>
            <div class="form-group text-dark">
                <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required style="width: fit-content !important;height: auto !important;">
                I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a> and <a href="privacy-policy" class="text-danger">Privacy Policy</a>.
            </div>
            <button type="submit" name="sendmail">Let’s Get Started
            </button>
          </form>
        </div>
      </div>
      <div class="col-md-3">
        <div class="contact-us-form-dtl">
          <img src="assets/images/contact-statue.png">
          <ul class="contact-us-form-dtl-links">
            <li>
              <div class="contact-us-form-dtl-inner">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="contact-us-form-dtl-inner-2">
                  <span>Call Us:</span>
                  <a href="<?php echo PHONE_HREF; ?>">
                    <?php echo PHONE; ?>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="contact-us-form-dtl-inner">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <div class="contact-us-form-dtl-inner-2">
                  <span>Email Us:</span>
                  <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><span class="">
                      <?php echo ADMIN_EMAIL; ?>
                    </span></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<!--  -->
<?php include ('includes/testimonials.php'); ?><!--  -->
<!--  -->
<section class="cta-se-2">
  <div class="container">
    <div class="cta-head-2">
      <span>100% Original, Authentic, & Genuine</span>
      <h3>Become a celebrated author of best-seller <br> books with
        <?php echo WEBSITE_NAME; ?> Services.
      </h3>
      <ul class="cta-btn">
        <li><a href="<?php echo PHONE_HREF; ?>">
            <?php echo PHONE; ?>
          </a></li>
        <li><a href="mailto:<?php echo ADMIN_EMAIL; ?>"><span class="">
              <?php echo ADMIN_EMAIL; ?>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>


<?php
include ('includes/footer.php');
?>