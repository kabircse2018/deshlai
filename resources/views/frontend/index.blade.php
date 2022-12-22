@extends('frontend.master')

@section('content')
@include('frontend.slider.index')

@include('frontend.section.poem.index')

@include('frontend.section.golosorgom.index')



<!--ads start-->
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 border hidden-xs bg-dark" data-animate="fadeInUp" data-animate-delay="0">
                Adds
            </div>
        </div>
    </div>
</section>
<!--ads end-->

<section id="page-content" class="bg-secondary">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4>| এক্সিবিশন</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="row">
                    <!--Feature start-->
                    <div class="col-lg-12 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div
                            id="slider"
                            class="container inspiro-slider slider-halfscreen dots-creative"
                            data-height-xs="300"
                            data-autoplay="2600"
                            data-animate-in="fadeIn"
                            data-animate-out="fadeOut"
                            data-items="1"
                            data-loop="true"
                            data-autoplay="true"
                        >
                            <div class="slide background-image" style="background-image: url('assest/images/homepages/corporate-v4/images/7.jpg');"></div>

                            <div class="slide background-image" style="background-image: url('assest/images/homepages/corporate-v4/images/8.jpg');"></div>
                        </div>
                    </div>
                    <!--Feature End-->
                </div>
            </div>

            <!--Sidebar start-->
            <div class="col-lg-3 col-md-6 border hidden-xs" data-animate="fadeInUp" data-animate-delay="0">
                sada
            </div>
            <!--Sidebar end-->
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!--Feature start-->
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4>ভাবনাকে..: মুহিন তপু</h4>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature End-->
            <!--Feature start-->
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4>ভাবনাকে..: মুহিন তপু</h4>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature End-->
            <!--Feature start-->
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4>ভাবনাকে..: মুহিন তপু</h4>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature End-->
        </div>
    </div>
</section>

<section id="page-content">
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>| গল্পসরগম</h4>
                    </div>
                    <div>
                        <h4>সবপোস্ট ></h4>
                    </div>
                </div>
                <div class="row">
                    <!--Feature start-->
                    <div class="col-lg-5 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                    </a>
                                    <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                </div>
                                <div class="post-item-description">
                                    <h4><a href="#">ফাঁক ফাঁক করে বোনা সুতার..</a></h4>
                                    <span class="post-meta-comments">
                                        <strong><a href="#">সিদ্দিক বকর</a></strong>
                                    </span>
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                    <span class="post-meta-comments">
                                        <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                    </span>
                                    <br />
                                    <span>
                                        মোবাইলের পর্দায় অনেকক্ষণ চোখ রাখলে এক সময় দুচোখ ভরে উঠে আলোয়। চোখ উপচে পড়ে স্মার্টফোনের নীল আলোকরশ্মি। রেটিনার চেতনায় ক্লান্তি এসে ছন্দের পতন ঘটায়। চোখ বুজলে চোখের বাহিরের দুকোণ থেকে দুটি
                                        রেখা আড়াআড়িভাবে নাকের নিচে, ঠোঁটের ওপরের ভাঁজে এসে এক কোণ তৈরি করে। মোবাইলের পর্দায় অনেকক্ষণ চোখ রাখলে এক সময় দুচোখ ভরে উঠে আলোয়। চোখ উপচে পড়ে স্মার্টফোনের নীল আলোকরশ্মি। রেটিনার চেতনায়
                                        ক্লান্তি এসে ছন্দের পতন ঘটায়। চোখ বুজলে চোখের বাহিরের দুকোণ থেকে দুটি রেখা আড়াআড়িভাবে নাকের নিচে, ঠোঁটের ওপরের ভাঁজে এসে এক কোণ তৈরি করে। ঠোঁটের ওপরের ভাঁজে এসে এক কোণ তৈরি করে। ঠোঁটের
                                        ওপরের ভাঁজে এসে এক কোণ তৈরি করে।
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature End-->

                    <!--Post loop start-->
                    <div class="col-lg-7 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="row">
                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>ভাবনাকে..: মুহিন তপু</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>ভাবনাকে..: মুহিন তপু</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>ভাবনাকে..: মুহিন তপু</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>ভাবনাকে..: মুহিন তপু</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>ভাবনাকে..: মুহিন তপু</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">কবিতা</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>ভাবনাকে..: মুহিন তপু</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Post loop End-->
                </div>
            </div>

            <!--Sidebar start-->
            <div class="col-lg-3 col-md-6 border hidden-xs" data-animate="fadeInUp" data-animate-delay="0">
                Side Bar
            </div>
            <!--Sidebar end-->
        </div>
    </div>
</section>
@endsection

