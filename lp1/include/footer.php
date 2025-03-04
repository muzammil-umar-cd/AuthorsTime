<section class="form-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-box">
                    <h4>Talk to Us </h4>
                    <h2>Consult Top-Tier Book Marketers</h2>
                    <p>Our book marketing services let you witness uncountable benefits like fame, sales, and a better
                        identity in literary circles. Hire now!</p>
                </div>
            </div>
        </div>
        <div class=" row form-row-box">
            <div class="col-sm-7">
                <div class="footer-form-box">
                    <form action="../sendmail/send_mail_lp1.php" method="POST">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                        <input type="hidden" name="city"
                            value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                        <input type="hidden" name="country"
                            value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                        <input type="hidden" name="internet_connection"
                            value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                        <input type="hidden" name="zipcode"
                            value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                        <input type="hidden" name="region"
                            value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                        <input type="hidden" name="url"
                            value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                        <div class="footer-form ">
                            <div class="form-flex-box">
                                <div class="col-sm-6 p0 ">
                                    <input type="text" name="name" maxlength="30" placeholder="Full Name *"
                                        required="required">
                                </div>
                                <div class="col-sm-6 p0 ">
                                    <input type="email" name="email" placeholder="Email *" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 p0 massge-box">
                                <input type="tel" name="phone" placeholder="Phone Number *" required="required">
                            </div>
                            <div class=" ">
                                <div class="col-sm-12 p0">
                                    <textarea placeholder="Message" name="message" rows="5"
                                        required="required"></textarea>
                                </div>
                                <div class="col-sm-12 p0">
                                    <div class="footer-submit-btn">
                                        <button type="submit" name="send_reserve_req">Submit!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contect-box">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><span><a href="tel:(929) 379-9764">Call Us:
                                    (929) 379-9764</a></span></li>

                        <li><a href="mailto:info@authorstime.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>info@authorstime.com</a></li>

                        <li><a href="javascript:;"><i class="fa fa-address-book" aria-hidden="true"></i>
                                <p> 112 West 34th Street 18th & 17th Floors 10120 New York United States
                                </p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="copyright-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ftr-lst-cpy">
                <div class="copy-right">
                    <p>© 2023Authors Time - All Rights Reserved</p>
                </div>
                <div class="privacy-terms ">
                    <a href="/terms-conditions">Terms Conditions</a>
                    <a href="/privacy-policy">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="overlay-bg-new-popup"></div>
<div class="popupform-main-new-popup" style="display: none;">

    <div class="form-bg-box">
        <a href="javascript:;" class="close-btn ta-center">X</a>
        <div class="popup-main-box">
            <div class="pop-box-2-new-pop">

                <img src="images/auto-pop-bg-2.png">
            </div>
            <div class="pop-form-new-popp ta-center-new-pop">

                <h3>Fill out the form to avail amazing discounts on book marketing service!</h3>

                <div id="pop-form-new-popp" class="col-sm-12">
                    <form action="../sendmail/send_mail_lp1.php" method="POST">
                        <!--hidden required values-->
                        <input type="hidden" name="ip_address" value="<?php echo isset($ip) ? $ip : '-'; ?>" />
                        <input type="hidden" name="city"
                            value="<?php echo isset($locationData->city) ? $locationData->city : '-'; ?>" />
                        <input type="hidden" name="country"
                            value="<?php echo isset($locationData->country) ? $locationData->country : '-'; ?>" />
                        <input type="hidden" name="internet_connection"
                            value="<?php echo isset($locationData->isp) ? $locationData->isp : '-'; ?>" />
                        <input type="hidden" name="zipcode"
                            value="<?php echo isset($locationData->zip) ? $locationData->zip : '-'; ?>" />
                        <input type="hidden" name="region"
                            value="<?php echo isset($locationData->regionName) ? $locationData->regionName : '-'; ?>" />
                        <input type="hidden" name="url"
                            value="<?php echo isset($currentFullURL) ? $currentFullURL : '-'; ?>" />
                        <div class="form-popup-box">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="name" maxlength="30" placeholder="Enter Name" required="">
                        </div>
                        <div class="form-popup-box">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <input type="email" name="email" placeholder="Enter Email" required="">
                        </div>
                        <div class="form-popup-box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input type="tel" name="phone" placeholder="Enter Phone" required="">
                        </div>
                        <div class="form-popup-box">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <textarea name="message" placeholder="Tell us about your project" required=""></textarea>
                        </div>

                        <button type="submit" class="btn-submit" name="send_reserve_req">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>
</div>
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