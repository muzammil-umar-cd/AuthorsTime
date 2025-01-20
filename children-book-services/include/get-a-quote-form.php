<form action="include/sendmail/sendmail.php" method="post" class="validate-letsget" id="get-a-quote">
    <!--hidden required values-->
    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
    <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
    <input type="hidden" name="form_name" value="GET A QUOTE FORM" />
    <input type="hidden" name="bot_detector" value="" />
    
    <h3 class="text-white pb-3">Get a Free Qoute</h3>
    <input type="text" class="required input-control input-color form-control" name="name" maxlength="30"required id="name"
        placeholder="Full Name" />
    <input type="email" class="required input-control input-color form-control email" required name="email" placeholder="Email">
    <input type="tel" class="required input-control input-color form-control" required name="phone" placeholder="Phone Number">
    <textarea class="required input-control input-color form-control" autocomplete="nope" name="message" required
        placeholder="I am looking for..." style="height:110px;"></textarea>
    <div class="py-2">
        <input type="submit" id="register" class="btn btn-red" name="sendmail" value="Let's Get Started"> <br />
    </div>
</form>