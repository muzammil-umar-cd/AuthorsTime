<footer>
    <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-4">
                <ul class="menu">
                    <li class="pb-4 logo">
                        <a href="index">
                            <img class="lazy"
                                src="assets/images/logo-lh.png"
                                data-src="assets/images/logo-lh.png" alt="Logo" />
                        </a>
                    </li>
                    <li>
                        <p class="text-dark">Authors Time. - Your trusted partner for exceptional
                            ghostwriting, editing, design, publishing, and marketing solutions.</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
               
            </div>
            <div class="col-md-2">
               
            </div>
            <div class="col-md-4">
                <ul class="menu mb-3">
                    <h6 class="pb-2 text-dark">Contact</h6>
                    <li><a class="text-dark" href="tel:(929) 379-9764"><i class="fas fa-phone-alt text-dark"></i> (929) 379-9764</a></li>
                    <li><a class="text-dark" href="mailto:info@authorstime.com"><i class="fas fa-envelope text-dark"></i>
                            info@authorstime.com</a></li>
                    <li><a class="text-dark" href="javascript:;"><i
                                class="fas fa-map-marker-alt text-dark"></i>112 West 34th Street 18th & 17th Floors 10120 New York United States </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="index"><strong>&copy; 2024 Copyright Authors Time. All Rights
                            Reserved.</strong></a>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="menu d-inline-block">
                        <li class="d-inline-block"><a href="/terms-conditions">Terms &
                                Conditions | </a></li>
                        <li class="d-inline-block"><a href="/privacy-policy">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a id="goto-top" class="btn show"><i class="fas fa-arrow-up"></i></a>
<div style="display: none;" class="popupform" id="popupform">
    <div class="modal-body p-0">
        <div class="popup-bann"><img class="lazy"
                src="assets/images/popup-img.png"
                data-src="assets/images/popup-img.png" alt=""></div>
        <div class="popup-content">
            <h2>
                Start Your Authors Time Registration and
                Get Your <span class="d-block primary-color"> 50% Discount! </span>
            </h2>
           
            <form action="include/sendmail/sendmail" method="post" class="validate-popup-form">
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

                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="required form-control" required="" name="name" placeholder="Full Name" required
                            aria-required="true">
                        <input type="email" class="required form-control email" required name="email"
                            placeholder="Your Email">
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="required form-control" required name="phone"
                            placeholder="Phone Number">
                        <textarea autocomplete="nope" name="message" class="required form-control" required
                            placeholder="I am looking for..."></textarea>
                    </div>
                    <div class="col-md-12 pt-md-4 text-center">
                        <input type="submit" class="btn btn-red" name="sendmail" value="Submit now">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>