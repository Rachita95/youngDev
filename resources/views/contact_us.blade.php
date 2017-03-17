@include('header')

<!--Main Content Wrap Start-->
<div class="gt_content_wrap">
    <section>
        <div class="container">
            <div class="row">
                <!--Conatct Form Wrap Start-->
                <div class="col-md-7 gt_contact_form_wrap wow slideInUp">
                    <!--Heading Wrap Start-->
                    <div class="gt_hdg_1">
                        <h3>Get in touch with us</h3>
                        <p>Help us contact you.<br>Fill in your details.</p>
                        <span class="gt_hdg_left"></span>
                        <i class="icon-school"></i>
                        <span class="gt_hdg_right"></span>
                    </div>
                    <!--Heading Wrap End-->
                    <form class="gt_contact_form" id="contact-form" action="http://2goodtheme.net/edu-skill/nice-scroll/assets/sendmail.php" method="post">
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Your Name" id="name" name="contact-name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Email Adress:" id="email" name="contact-email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Phone Number" id="subject" name="contact-subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <textarea class="gt_c_bg" name="contact-message" id="message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <input id="submit-message" type="submit" value="submit" name="submit_msg">
                            </div>
                            <!--Alert Message-->
                            <div id="contact-result">
                            </div>
                        </div>
                    </form>
                </div>
                <!--Conatct Form Wrap End-->
                <!--Contact List Wrap Start-->
                <div class="col-md-5">
                    <div class="gt_contact_list default_width wow slideInUp">
                        <h4>Contact Info</h4>
                        <ul>
                            <li>
                                <div class="gt_contact_icon"><i class="fa fa-map-marker"></i></div>
                                <div class="gt_contact_des">
                                    <h6>Contact Location</h6>
                                    <p>Po Box 4850 Beertrand inlet san Francisco</p>
                                </div>
                            </li>
                            <li>
                                <div class="gt_contact_icon"><i class="icon-telephone"></i></div>
                                <div class="gt_contact_des">
                                    <h6>Contact Number</h6>
                                    <p>(09) 111 222 333  -  (09) 111 222 333  </p>
                                </div>
                            </li>
                            <li>
                                <div class="gt_contact_icon"><i class="icon-email-opened-envelope"></i></div>
                                <div class="gt_contact_des">
                                    <h6>Contact Mail</h6>
                                    <a href="#">helloo@eduskill.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="gt_contact_icon"><i class="icon-clock"></i></div>
                                <div class="gt_contact_des">
                                    <h6>University Timing</h6>
                                    <p>Mon - sat 0:800 am to O9:00 pm</p>
                                </div>
                            </li>
                        </ul>
                        <div class="gt_contact_scl_wrap default_width">
                            <h4>Follows Us</h4>
                            <ul class="gt_scl_icon">
                                <li><a class="bg_fb" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="bg_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="bg_gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="bg_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="bg_behance" href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a class="bg_vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a class="bg_youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Contact List Wrap End-->

            </div>
        </div>
    </section>
</div>
<!--Main Content Wrap End-->
@include('footer')