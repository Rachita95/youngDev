@include('header')

<div class="gt_content_wrap">
    <!--Blog Listing Wrap Start-->
    <section class="gt_courses_bg">
        <div class="container">
            <div class="row">
                <!--Blog Listing List Wrap Start-->
                <div class="col-md-12 wow slideInUp">
                    <div class="gt_blog_single_wrap gt_blog_detail_wrap default_width mb30">
                        <figure>
                            @yield('image')
                        </figure>
                        <div class="gt_listing_des default_width">
                            <ul class="gt_event_meta">
                                <li><i class="fa fa-calendar"></i>@yield('date')</li>
                            </ul>
                            <h6><a href="#">@yield('heading')</a></h6>
                            <p>@yield('content')</p>
                        </div>
                    </div>
                </div>
                <!--Blog Listing List Wrap End-->
            </div>
        </div>
    </section>
    <!--Blog Listing Wrap End-->
</div>
<!--Main Content Wrap End-->

@include('footer')