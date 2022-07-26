@extends('front.master-contact')

@section('content')
<!-- Contact Section Starts -->
<section class="contact">
    <!-- Map Section Starts -->
    <div class="info-map">
        <div class="google-map">
            <div class="gmap_container">
                <div id="gmap_canvass">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4083624.737387345!2d37.1692338!3d-1.7699422!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3075faccb42dd3!2sSkyline%20Public%20Relations%20Agency!5e0!3m2!1sen!2ske!4v1660813016897!5m2!1sen!2ske" width="100%" height="850" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Info Map Boxes Starts -->
    <div class="container">
        <div class="row info-map-boxes">
            <!-- Left Info Map Box Starts -->
            <div class="col-md-6 col-sm-6">
                <div class="info-map-boxes-item fa fa-phone">
                    <h1>Phone & Online</h1>
                    <p>Phone : +254710760015
                        <br>Phone : +254710266638
                        <br><a href="mailto:info@skylinepublicrelations.com">info@skylinepublicrelations.com</a></p>
                </div>
            </div>
            <!-- Left Info Map Box Ends -->
            <!-- Right Info Map Box Starts -->
            <div class="col-md-6 col-sm-6">
                <div class="info-map-boxes-item fa fa-clock-o">
                    <h1>Working Hours</h1>
                    <p>Monday-Thursday : 08:00–17:00
                        <br>Saturday : 08:00–12pm
                        <br>Sunday - Closed</p>
                </div>
            </div>
            <!-- Right Info Map Box Ends -->
        </div>
    </div>
    <!-- Info Map Boxes Ends -->
</section>
<!-- Contact Section Ends -->
<!-- Contact Form Section Starts -->
<section class="contactform">
    <div class="section-overlay">
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1><span>Send Us</span> an email</h1>
                <h4>We are very responsive to messages</h4>
            </div>
            <!-- Main Heading Ends -->
            <div class="form-container">
                <!-- Contact Form Starts -->
                <form class="formcontact" method="post" action="{{url('/')}}">
                    <div class="row form-inputs">
                        <!-- First Name Field Starts -->
                        <div class="col-sm-6 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="First Name" class="input-field custom-input-field" id="firstname" name="firstname" type="text" required data-error="NEW ERROR MESSAGE">
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-user icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <!-- First Name Field Ends -->
                        <!-- Last Name Field Starts -->
                        <div class="col-sm-6 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="Last Name" class="input-field custom-input-field" id="lastname" name="lastname" type="text" required>
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-user-o icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <!-- Last Name Field Ends -->
                        <!-- Message Field Starts -->
                        <div class="form-group custom-form-group col-sm-12">
                            <textarea placeholder="Message" id="message" name="message" cols="45" rows="7" required></textarea>
                        </div>
                        <!-- Message Field Ends -->
                        <!-- Email Name Field Starts -->
                        <div class="col-sm-6 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="Email" class="input-field custom-input-field" id="email" name="email" type="text" required>
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-envelope icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <!-- Email Name Field Ends -->
                        <!-- Submit Button Starts -->
                        <div class="col-sm-6 submit-form">
                            <button style="color:#23527c" id="form-submit" name="submit" type="submit" class="custom-button" title="Send">Send Message</button>
                        </div>
                        <!-- Submit Button Ends -->
                        <!-- Form Submit Message Starts -->
                        <div class="col-sm-12 text-center output_message_holder">
                            <p class="output_message"></p>
                        </div>
                        <!-- Form Submit Message Ends -->
                    </div>
                </form>
                <!-- Contact Form Ends -->
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section Ends -->
@endsection
