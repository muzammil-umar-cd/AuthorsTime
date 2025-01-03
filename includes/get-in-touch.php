<section class="touch-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="banner-head">
               <span>Get in touch
               </span>
               <h2>We Are Here To Help</h2>
               <p>Do you want us to write on your behalf? Get in touch with us. Provide all the details regarding
                  your project, and we will provide you with exceptional writing services – par excellence - to
                  ensure total satisfaction.
               </p>
            </div>
            <div class="clock-box">
               <div class="row">
                  <div class="col-md-6">
                     <p>It’s easy to reach us via chat.
                        We’re online from <span>9:00</span> to <span>23:00</span>
                     </p>
                     <ul class="watch-box  ">
                        <li>
                           <div class="demo">
                              <div class="clock ui-small" data-timezone="Asia/Dubai">
                                 <div class="needle">
                                    <span class="minutes"></span>
                                    <span class="hours"></span>
                                    <span class="seconds"></span>
                                 </div>
                                 <ul class="time-number">
                                    <li><span>1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li><span>4</span></li>
                                    <li><span>5</span></li>
                                    <li><span>6</span></li>
                                    <li><span>7</span></li>
                                    <li><span>8</span></li>
                                    <li><span>9</span></li>
                                    <li><span>10</span></li>
                                    <li><span>11</span></li>
                                    <li><span>12</span></li>
                                 </ul>
                                 <div class="apm"></div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <ul class="clock-box-links">
                        <li><a href="<?php echo PHONE_HREF; ?>">
                              <?php echo PHONE; ?>
                           </a></li>
                        <li>
                            <a href="mailto:<?php echo ADMIN_EMAIL; ?>">
                                <span class=" 92e1f3fef7e1d2f7fefbe6f7f0fdfdf9e5e0fbe6fbfcf5bcf1fdff">
                                 <?php echo ADMIN_EMAIL; ?>
                                </span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <div class="statue-img">
                        <img src="assets/images/statue.webp" style="padding: 30px;">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-5 offset-1">
            <div class="touc-sec-form">
               <form method="Post">
                  <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                  <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                  <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                  <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                  <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                  <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                  <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
                  <input type="hidden" name="form_name" value="GET IN TOUCH FORM" />
                  <input type="hidden" name="bot_detector" value="" />
                  <input type="hidden" name="privacy_policy" value="I have read the Terms & Conditions and Privacy Policy." />
                  <input type="hidden" name="policy" value="By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time." />
                  <input type="text" name="name" required="" placeholder="Enter Name">
                  <input type="tel" name="phone" required="" placeholder="Enter Number" minlength="10" maxlength="10">
                  <input type="email" name="email" required="" placeholder="Enter Email">

                  <select name="service">
                     <option value="">Select Service</option>
                     <option value="Branded Content">
                        Branded Content </option>
                     <option value="Web Copywriting">
                        Web Copywriting </option>
                     <option value="SEO Content Writing">
                        SEO Content Writing </option>
                     <option value="Creative Writing">
                        Creative Writing </option>
                     <option value="Blog Writing">
                        Blog Writing </option>
                     <option value="Speech Writing">
                        Speech Writing </option>
                     <option value="Editing & Proofreading">
                        Editing & Proofreading </option>
                     <option value="Guest Post Writing">
                        Guest Post Writing </option>
                     <option value="Marketing Content">
                        Marketing Content </option>
                     <option value="Email Marketing">
                        Email Marketing </option>
                     <option value="Brochures">
                        Brochures </option>
                     <option value="Ad Copywriting">
                        Ad Copywriting </option>
                     <option value="News Letters">
                        News Letters </option>
                     <option value="Social Media Content">
                        Social Media Content </option>
                     <option value="Infographics">
                        Infographics </option>
                     <option value="Professional Content">
                        Professional Content </option>
                     <option value="Professional Content">
                        Professional Content </option>
                     <option value="Wikipedia Writing">
                        Wikipedia Writing </option>
                     <option value="Book Editing">
                        Book Editing </option>
                     <option value="Publications">
                        Publications </option>
                     <option value="Data Analysis">
                        Data Analysis </option>
                     <option value="Dissertation & Thesis">
                        Dissertation & Thesis </option>
                     <option value="Web Design and Development">
                        Web Design and Development </option>
                     <option value="Business Content">
                        Business Content </option>
                     <option value="Email Writing">
                        Email Writing </option>
                     <option value="Press Release Writing">
                        Press Release Writing </option>
                     <option value="Business Proposals Writing">
                        Business Proposals Writing </option>
                     <option value="White Papers Writing">
                        White Papers Writing </option>
                     <option value="Product Descriptions Writing">
                        Product Descriptions Writing </option>
                     <option value="Case Study Writing">
                        Case Study Writing </option>
                     <option value="Letter Writing">
                        Letter Writing </option>
                  </select>

                  <textarea name="message" placeholder="Additional Comments"></textarea>
                  
                  <div class="form-group text-dark pt-3">
                        <input type="checkbox" class="required" name="policy_check" id="policy_check" required style="width: fit-content !important;height: auto !important;">
                        By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time.
                    </div>
                    <div class="form-group text-dark">
                        <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required style="width: fit-content !important;height: auto !important;">
                        I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a> and <a href="privacy-policy" class="text-danger">Privacy Policy</a>.
                    </div>
                  <button type="submit" name="sendmail">Send Message
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>