<!--Contact Form-->
<main class="contactform-img">
<div class="contact-form__container container">
    <div class="contact-form__text">
        <h2><strong>Get In Touch</strong></h2>
        <p>Monday to Friday</p>
        <p>7am - 5pm</p>
        <h3>
            <strong>07951923337</strong>
        </h3>
        <h3>
            <strong>z.urban.95@hotmail.com</strong>
        </h3>
        <p><span class="required">*</span> Fields Required</p>
    </div>
    <form action="" class="contact-form__enquiry" method="POST">
        <span id="err" class="">
            <ul id="err-list">
                <?php 
                    if (!empty($mbackm)) {
                        echo "<li class='$mback'>$mbackm</li>";
                    }
                ?>
            </ul>
        </span>
        <div class="fname-div">
            <label class="" for="fname">First Name: <span class="required"> *</span></label>
            <input type="text" id="fname" name="fname">
        </div>
        <div class="lname-div">
            <label class="" for="lname">Last Name: <span class="required"> *</span></label>
            <input type="text" id="lname" name="lname">
        </div>
        <label class="" for="email">Email: <span class="required"> *</span></label>
        <input type="email" id="email" name="email">
        <label class="" for="subject">Subject: <span class="required"> *</span></label>
        <input type="text" id="subject" name="subject">
        <label class="" for="message">Message: <span class="required"> *</span></label>
        <textarea name="message" id="message" cols="30" rows="5" placeholder="Hello, could we speak ? My number is xxxxxxx. Please contact me soon as you can."></textarea>
        <button class="" type="submit" id="submit">Submit</button>
    </form>
</div>
</main>