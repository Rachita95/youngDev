@include('header')

<!--Main Content Wrap Start-->
<div class="gt_content_wrap">
    <!--Classes Wrap Start-->
    <section class="gt_courses_bg">
            <!-- Dashboard Side Bar Wrap Start -->
            <div class="col-md-3">
                <div class="gt-user-sidebar">
                    <div class="gt-usser-account-list">
                        <ul>
                            @yield('sidebar')
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Dashboard Side Bar Wrap End -->

            <!--Classes List Wrap Start-->
            <div class="col-md-8">
                <div class="gt_d_classes_wrap default_width mb20">
                    <div class="gt_d_profile_wrap default_width wow slideInUp">
                        @yield('content')
                    </div>
                </div>
                <!--Classes List Wrap End-->
            </div>
    </section>
    <!--Classes Wrap End-->
</div>
<!--Main Content Wrap End-->

@include('footer')