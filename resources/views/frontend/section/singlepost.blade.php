@extends('frontend.master')

@section('content')
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                <div id="blog" class="single-post">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}">  Home  </a> >> <a href="{{ url('post/' . $category->category_name) }}"> {{$category->category_slug}}</a> >> {{ $post->post_title}} ...: {{$post->name}}</li>
                                </ol>
                            </nav>
                            <div class="text-center">
                                <a class="btn btn-sm btn-danger href="{{ url('post/' . $category->category_name) }}">{{$category->category_name}} </a>
                                <h1>{{ $post->post_title}} ...: {{$post->name}}</h1>

                                <div class="d-flex">
                                    <ul class=" avatars mx-auto justify-content-center">
                                        <li>
                                            <a href="#"><img  src="{{ asset($post->user_profile) }}" class="avatar" style="width: 100px"></a>
                                        </li>
                                    </ul>
                                </div>
                                  <h3><a href="">{{ $post->name }}</a></h3>
                                  <h5>{{ date('M d, Y', strtotime($post->post_date)) }}</h5>
                                  
                            </div>
                            <div class="sharethis-inline-share-buttons"></div>
                            <div class="mb-3"></div>
                            {{-- <div class="post-meta-share d-flex justify-content-center">
                                <a class="btn btn-sm btn-slide btn-facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-sm btn-slide btn-twitter" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-sm btn-slide btn-instagram" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-sm btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div> --}}

                            
                            <div class="post-image">
                                <img alt="" src="{{ asset($post->image) }}" />
                            </div>
                            <div class="post-item-description">
                                {!! $post->post_description !!}
                            </div>
                            <div class="post-tags">
                                <a href="#">Life</a>
                                <a href="#">Sport</a>
                                <a href="#">Tech</a>
                                <a href="#">Travel</a>
                            </div>

                            <div class="respond-form" id="respond">
                                <div class="text-center bg-warning breadcrumb text-dark">
                                    <h5 class="fw-bold"><a href="#">মন্তব্য, এখানে...</a></h5 class="fw-bold">
                                </div>
                                
                                
                                <div class="respond-comment"></div>
                                <form class="form-gray-fields">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="name">Name</label>
                                                <input class="form-control required" name="senderName" placeholder="Enter name" id="name" aria-required="true" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="email">Email</label>
                                                <input class="form-control required email" name="senderEmail" placeholder="Enter email" id="email" aria-required="true" type="email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="website">Website</label>
                                                <input class="form-control website" name="senderWebsite" placeholder="Enter Website" id="website" aria-required="false" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="upper" for="comment">Your comment</label>
                                                <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group text-center">
                                                <button class="btn" type="submit">Submit Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group text-center">
                                        <ul class=" avatars mx-auto justify-content-center">
                                            <li><a href="#"><img src="{{ asset($post->user_profile) }}" class="avatar" style="width: 100px"></a> </li>
                                        </ul>
                                        {{-- <h4>{{$post->author_custom_post_id}}</h4> --}}
                                        <h5>{{ $post->user_desc }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>

                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group text-center">
                                        <hr>
                                        <h4 class="widget-title">আরোও লেখা পড়ুন</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @php
                $author_by_post = DB::table('posts')
                            ->where('category_id', $category->id)
                            ->leftjoin('categories', 'posts.category_id', 'categories.id')
                            ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                            ->select('posts.*', 'users.name', 'categories.category_name')
                            // ->select('posts.*', 'categories.category_name')
                            
                            ->get();
           
                            
            @endphp

        </div>
    </div>
</section>


<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                @php
                    $post = DB::table('posts')
                                ->where('category_id', $category->id)
                                ->leftjoin('categories', 'posts.category_id', 'categories.id')
                                ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                                ->select('posts.*', 'users.name', 'categories.category_name')
                                // ->select('posts.*', 'categories.category_name')
                                ->get();
                @endphp
                <div class="carousel" data-items="3">
                    @foreach ($post as $item)

                    @php
                        $category_slug = preg_replace('/\s+/u', '-', trim($item->category_name) );
                      
                    @endphp

                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#"> <img  alt="" src="{{ asset($item->image) }}" /></a>

                                <span class="post-meta-category"><a href="{{ url('post/' . $category->category_name) }}">{{ $item->category_name }}</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($item->post_date)) }}</span>
                                <span class="post-meta-comments">
                                    <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                </span>


                                <h2>
                                    <a href="{{ url('post/'. $category->category_slug. '/'. $item->post_slug) }}">{{ $item->post_title}} ...: {{$item->name}}</a>
                                </h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>


        </div>
    </div>
</section>


<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63af28cbcb51d30019514a14&product=inline-share-buttons&source=platform" async="async"></script>
@endsection
