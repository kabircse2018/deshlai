<section id="page-content">
    <div class="container">
        <div class="heading-section text-center">
            <hr />
            <h4>কবিতা</h4>
            <hr />
        </div>

        <div class="row">
            @php
                $post = DB::table('posts')->get();
            @endphp
            @foreach ($post as $item)
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{ asset($item->bigthumbnail) }}" />
                            </a>
                            <span class="post-meta-category"><a href="#">{{ $item->category_id }}</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="#">{{ Str::limit($item->post_title, 30) }} : {{$item->author_custom_post_id}}</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="#">{{$item->author_custom_post_id}}</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$item->post_date}}</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            

{{-- 
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="#">ভাবনাকে ভাবা যেতে পারে…: মুহিন তপু</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="#">মুহিন তপু</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="#">ভাবনাকে ভাবা যেতে পারে…: মুহিন তপু</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="#">মুহিন তপু</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="#">ভাবনাকে ভাবা যেতে পারে…: মুহিন তপু</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="#">মুহিন তপু</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="#">ভাবনাকে ভাবা যেতে পারে…: মুহিন তপু</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="#">মুহিন তপু</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{ asset('public/frontend') }}/assest/images/blog/12.jpg" />
                            </a>
                            <span class="post-meta-category"><a href="#">কবিতা</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="#">ভাবনাকে ভাবা যেতে পারে…: মুহিন তপু</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="#">মুহিন তপু</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2022</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="heading-section text-center">
            <hr />
            <span>সবপোষ্ট</span>
            <hr />
        </div>
    </div>
</section>
