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
                     <!--Feature start-->
                     @php
                     $post = DB::table('posts')
                                 ->leftjoin('subcategories', 'posts.subcategory_id', 'subcategories.id')
                                 ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                                 ->select('posts.*', 'subcategories.subcategory_name', 'users.name')
                                 ->where('subcategory_id', 2)
                                 ->get();

                     $postLatest = DB::table('posts')->first();

                     @endphp


                    @if ( $postLatest)
                    <div class="col-lg-5 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="{{ $postLatest->post_title }}" src="{{ asset($postLatest->first_section_thumbnail) }}" />
                                    </a>
                                    <span class="post-meta-category"><a href="{{ $postLatest->subcategory_id }}">{{ $postLatest->subcategory_id }}</a></span>
                                </div>
                                <div class="post-item-description">
                                    <h4><a href="#">{{ Str::limit($postLatest->post_title, 30) }} : {{$postLatest->author_custom_post_id}}</a></h4>
                                    <span class="post-meta-comments">
                                        <strong><a href="{{ $postLatest->author_custom_post_id }}">{{$postLatest->author_custom_post_id}}</a></strong>
                                    </span>
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$postLatest->post_date}}</span>
                                    <span class="post-meta-comments">
                                        <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                    </span>
                                    <br />
                                    <span>
                                        {!!  substr(strip_tags($postLatest->post_description), 0, 1610) !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                       fg 
                    @endif
                     

                    <!--Feature End-->

                    @php
                    $viewpost = DB::table('posts')
                                ->leftjoin('subcategories', 'posts.subcategory_id', 'subcategories.id')
                                ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                                ->select('posts.*', 'subcategories.subcategory_name', 'users.name')
                                ->where('subcategory_id', 2)
                                ->get();


                    //  $viewpost = DB::table('posts')->offset(1)->limit(6)->get();

                     @endphp

                    @if ($viewpost)
                     <div class="col-lg-7 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="row">
                                @foreach ($viewpost as $item)
                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img alt="{{ $item->post_title }}" src="{{ asset($item->first_section_thumbnail) }}" />
                                                </a>
                                                <span class="post-meta-category"><a href="#">{{ $item->subcategory_id }}</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4>{{ Str::limit($item->post_title, 30) }}</h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$item->post_date}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div> 
                     @else
                         sdf
                     @endif
                    <!--Post loop start-->
                    
                    <!--Post loop End-->
                </div>
            </div>

            <!--Sidebar start-->
            <div class="col-lg-3 col-md-6 border hidden-xs" data-animate="fadeInUp" data-animate-delay="0">

                <div class="d-flex align-items-center justify-content-center" style="display: flex; justify-content: center; align-items: center; height: 100% ">
                    <div class="widget widget-tags">
                        @php
                            $data = DB::table('tags')->get();
                        @endphp
                        <div class="tags">
                            @foreach ($data as $item)
                                <a href="#">{{ $item->tag_name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <!--Sidebar end-->
        </div>
    </div>
</section>
