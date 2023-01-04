@php
    $viewfeaturepost = DB::table('posts')

            ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
            ->leftjoin('categories', 'posts.category_id', 'categories.id')
            ->select('posts.*',  'users.name', 'categories.*')
            ->where('category_id', 3)
            ->where('first_section', 1)
            ->first();
//  $post = DB::table('posts')
//              ->leftjoin('subcategories', 'posts.subcategory_id', 'subcategories.id')
//              ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
//              ->select('posts.*', 'subcategories.subcategory_name', 'users.name')
//              ->where('subcategory_id', 1)
//              ->get();

//  $postLatest = DB::table('posts')->first();

@endphp
<section id="page-content">
    <div class="row"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>| গদ্যধারা</h4>
                    </div>
                    <div>
                        <h4><a href="{{ URL::to('post/'. $viewfeaturepost->category_slug .'/' .$viewfeaturepost->category_slug) }}"> সবপোস্ট </a></h4>
                    </div>
                </div>
                <div class="row">
                    <!--Feature start-->
                     <!--Feature start-->



                    @if ( $viewfeaturepost)
                    <div class="col-lg-5 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="post-item-wrap">
                                @php
                                    $category_slug = preg_replace('/\s+/u', '-', trim($viewfeaturepost->category_name) );
                                    // $slug = preg_replace('/\s+/u', '-', trim($item->post_title) );
                                @endphp
                                <div class="post-image">
                                    <a href="{{ URL::to($viewfeaturepost->post_slug) }}">
                                        <img alt="{{ $viewfeaturepost->post_title }}" src="{{ asset($viewfeaturepost->first_section_thumbnail) }}" />
                                    </a>
                                    <span class="post-meta-category"><a href="{{ url('post/' .$category_slug) }}">{{ $viewfeaturepost->category_name }}</a></span>
                                </div>
                                <div class="post-item-description">
                                    <h4><a href="{{ URL::to($viewfeaturepost->post_slug) }}">{{ Str::limit($viewfeaturepost->post_title, 30) }} : {{$viewfeaturepost->name}}</a></h4>
                                    <span class="post-meta-comments">
                                        <strong><a href="{{ $viewfeaturepost->author_custom_post_id }}">{{$viewfeaturepost->name}}</a></strong>
                                    </span>
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($viewfeaturepost->post_date))}}</span>
                                    <span class="post-meta-comments">
                                        <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                    </span>
                                    <br />
                                    <span>
                                        {!!  substr(strip_tags($viewfeaturepost->post_description), 0, 993) !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else

                    @endif


                    <!--Feature End-->

                    @php
                    $viewpost = DB::table('posts')

                                ->leftjoin('categories', 'posts.category_id', 'categories.id')
                                ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                                ->select('posts.*',  'users.name', 'categories.category_name')
                                ->where('category_id', 3)
                                ->where('first_section', NULL)
                                ->get();
                    //  $viewpost = DB::table('posts')->offset(1)->limit(6)->get();
                     @endphp



                    @if ($viewpost)
                     <div class="col-lg-7 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="post-item border">
                            <div class="row">
                                @foreach ($viewpost as $item)

                                @php
                                    $subcategory_slug = preg_replace('/\s+/u', '-', trim($item->category_name) );
                                    // $post_slug = preg_replace('/\s+/u', '-', trim($item->post_title) );
                                @endphp

                                <div class="col-6" data-animate="fadeInUp" data-animate-delay="0">
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="{{ url($item->post_slug) }}">
                                                    <img alt="{{ $item->post_slug }}" src="{{ asset($item->first_section_thumbnail) }}" />
                                                </a>
                                                <span class="post-meta-category"><a href="{{ URL::to('posts/'. $item->id. '/'. $item->subcategory_id)}}">{{ $item->category_name }}</a></span>
                                            </div>
                                            <div class="post-item-description">
                                                <h4><a href="{{ url($item->post_slug) }}">{{ Str::limit($item->post_title, 30) }}</a></h4>
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($viewfeaturepost->post_date))}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                     @else

                     @endif

                     <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="..." class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>

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
                            <h2 class="text-center">ডিরেক্টরি আসছে</h2>
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
