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
                    @php
                $post = DB::table('posts')
                            ->leftjoin('subcategories', 'posts.subcategory_id', 'subcategories.id')
                            ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                            ->select('posts.*', 'subcategories.subcategory_name', 'users.name')
                            ->where('subcategory_id', 2)
                            ->get();

                @endphp

                @foreach ( $post as $item)


                    <div class="col-lg-5 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset($item->first_section_thumbnail) }}" />
                                    </a>
                                    <span class="post-meta-category"><a href="{{ $item->subcategory_id }}">{{ $item->subcategory_name }}</a></span>
                                </div>
                                <div class="post-item-description">
                                    <h4><a href="{{ $item->post_slug }}">{{ Str::limit($item->post_title, 30) }} : {{$item->name}}</a></h4>
                                    <span class="post-meta-comments">
                                        <strong><a href="{{ $item->author_custom_post_id }}">{{$item->name}}</a></strong>
                                    </span>
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$item->post_date}}</span>
                                    <span class="post-meta-comments">
                                        <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                    </span>
                                    <br />
                                    <span>
                                        {!!  substr(strip_tags($item->post_description), 0, 1610) !!}

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
