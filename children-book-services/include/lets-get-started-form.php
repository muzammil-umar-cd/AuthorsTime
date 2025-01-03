<form action="include/sendmail/sendmail.php" method="post" class="validate-bottom-form">
    <!--hidden required values-->
    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
    <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
    <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
    <input type="hidden" name="url" value="<?php echo $currentFullURL; ?>" />
    <input type="hidden" name="form_name" value="LETS GET STARTED FORM" />
    <input type="hidden" name="bot_detector" value="" />

    <h3 class="text-white pb-3 text-center">Let’s Get Started !</h3>
    <input type="text" class="required input-control form-control" name="name" required id="name"
        placeholder="Full Name" />
    <input type="email" class="required input-control form-control email" required name="email" placeholder="Email">
    <input type="tel" class="required input-control form-control" required name="phone" placeholder="Phone Number" minlength="10" maxlength="10">
    <select name="service" id="ser-select" class="required input-control form-control d-inline-block" required>
        <option selected>Select Services</option>
        <option value="Digital Book Publishing">Digital Book Publishing</option>
        <option value="Book Marketing Service">Book Marketing Service</option>
        <option value="Ghostwriting Service">Ghostwriting Service</option>
        <option value="Fiction Writing Service">Fiction Writing Service</option>
        <option value="Children’s Books Service">Children’s Books Service</option>
        <option value="Book Editing & Proofreading Service">Book Editing & Proofreading Service
        </option>
        <option value="Book Cover Designing">Book Cover Designing</option>
        <option value="Illustrations & Graphics Service">Illustrations & Graphics Service
        </option>
        <option value="Book Printing Service">Book Printing Service</option>
        <option value="Audiobook Production">Audiobook Production</option>
        <option value="Author Website Service">Author Website Service</option>
        <option value="Blurb Writing Service">Blurb Writing Service</option>
        <option value="Amazon Book Description">Amazon Book Description</option>
        <option value="Amazon Book Listing Optimization">Amazon Book Listing Optimization
        </option>
        <option value="Amazon Book Paid Ads">Amazon Book Paid Ads</option>
        <option value="Amazon Central Account">Amazon Central Account</option>
        <option value="Amazon A + Content">Amazon A + Content</option>
        <option value="Book Trailer">Book Trailer</option>
        <option value="Featured Articles">Featured Articles</option>
    </select>
    <textarea class="required input-control form-control" autocomplete="nope" name="message" required
        placeholder="About Project"></textarea>
    <div class="py-2">
        <input type="submit" id="register" class="btn btn-blue" name="sendmail" value="Let's Get Started" > <br />
    </div>
</form>