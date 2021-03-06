@include('header')

<!--Main Content Wrap Start-->
<div class="gt_content_wrap">
    <!--Login & Register Page Wrap Start-->
    <section>
        <div class="container">
            <div class="gt_lgin_tab_wrap wow slideInUp">
                <ul class="gt_login_link"  data-tabs="tabs">
                    <li><a data-toggle="tab" href="#register">Sign Up</a></li>
                    <li class="active"><a data-toggle="tab" href="#login">Sign In</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="login">
                        <div class="gt_login_des_wrap default_width">
                            <div class="gt_login_field">
                                <input type="text" placeholder="Your Email..">
                                <label><i class="fa fa-envelope"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="password" placeholder="Your Password">
                                <label><i class="fa fa-lock"></i></label>
                            </div>
                            <div class="gt_login_radio_btn">
                                <input id="2" type="checkbox">
                                <label for="2"><span></span>Keep Me logged In</label>
                            </div>
                            <div class="gt_login_radio_btn">
                                <input id="1" type="checkbox">
                                <label for="1"><span></span>Forget Password</label>
                            </div>
                            <div class="gt_login_field">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="gt_login_field">
                                <p>Signin with Social Networks</p>
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
                    <div class="tab-pane" id="register">
                        <div class="gt_login_des_wrap default_width">
                            <div class="gt_login_field">
                                <input type="text" placeholder="First Name">
                                <label><i class="fa fa-user"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="text" placeholder="Last Name">
                                <label><i class="fa fa-user"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="text" placeholder="Your Email Address">
                                <label><i class="fa fa-envelope"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="text" placeholder="Phone Number">
                                <label><i class="fa fa-phone"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="password" placeholder="Your Password">
                                <label><i class="icon-lock"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="password" placeholder="Confrim password">
                                <label><i class="icon-lock"></i></label>
                            </div>
                            <div class="gt_login_field">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Login & Register Page Wrap End-->
</div>
<!--Main Content Wrap End-->
@include('footer')