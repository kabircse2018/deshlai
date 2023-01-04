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
                                  <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}"> Home  </a> >> {{ $post->post_title}} ...: {{$post->name}}</li>
                                </ol>
                            </nav>
                            <div class="text-center">
                                <a class="btn btn-sm btn-danger" href="#" >{{$category->category_name}} </a>
                                <h1>{{ $post->post_title}} ...: {{$post->name}}</h1>

                                <div class="d-flex">
                                    <ul class=" avatars mx-auto justify-content-center">
                                        <li>
                                            <a href="{{ URL::to('/author'. '/' . $post->author_custom_post_id) }}"><img src="{{ asset($post->user_profile) }}" class="avatar" style="width: 100px"></a>
                                        </li>
                                    </ul>
                                </div>
                                  <h3><a href="{{ URL::to('/author'. '/' . $post->author_custom_post_id) }}">{{ $post->name }}</a></h3>
                                  <h5>{{ date('M d, Y', strtotime($post->post_date)) }}</h5>

                            </div>
                           <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            <div class="mt-3"></div>
                            <div class="post-image">
                                <img alt="" src="{{ asset($post->image) }}" />
                            </div>
                            <div class="post-item-description">
                                {!! $post->post_description !!}
                            </div>
                            <div class="post-tags">

                                @php
                                    $tag = DB::table('tags')->get();
                                @endphp
                                @foreach ($tag as $item)
                                    <a href="#">{{ $item->tag_name }}</a>
                                @endforeach
                            </div>

                            <div class="respond-form" id="respond">
                                <div class="text-center bg-warning breadcrumb text-dark">
                                    <h5 class="fw-bold"><a href="#">মন্তব্য, এখানে...</a></h5 class="fw-bold">
                                </div>
                                <div class="respond-comment"></div>
                                {{-- <form class="form-gray-fields">
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
                                </form> --}}

                                <div class="fb-comments" data-href="https://www.facebook.com/texmartfashion/" data-width="" data-numposts="5"></div>

                            </div>



                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group text-center">
                                        <ul class=" avatars mx-auto justify-content-center">
                                            <li><a href="{{ URL::to('/author'. '/' . $post->author_custom_post_id) }}"><img src="{{ asset($post->user_profile) }}" class="avatar"></a> </li>
                                        </ul>
                                        <h3><a href="{{ URL::to('/author'. '/' . $post->author_custom_post_id) }}">{{ $post->name }}</a></h3>
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
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                @php
                    $post = DB::table('posts')

                                ->leftjoin('categories', 'posts.category_id', 'categories.id')
                                ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                                ->select('posts.*', 'users.name', 'categories.category_name')
                                ->orderBy('id', "desc")
                                ->get();

                @endphp
                <div class="carousel" data-items="3">
                    @foreach ($post as $item)

                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="{{ $item->post_slug }}"> <img alt="" src="{{ asset($item->image) }}" /></a>

                                <span class="post-meta-category"><a href="{{ url('post/' . $category->category_name) }}">{{ $item->category_name }}</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date">{{$item->name}}</span>
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($item->post_date)) }}</span>
                                <span class="post-meta-comments">
                                    <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                </span>


                                <h2>
                                    <a href="{{ $item->post_slug }}">{{ $item->post_title}} ...: {{$item->name}}</a>
                                </h2>
                                <p>{!!  substr(strip_tags($item->post_description), 0, 500) !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>


        </div>
    </div>
</section>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="7bSuUlNf"></script>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=63af28cbcb51d30019514a14&product=inline-share-buttons' async='async'></script>

@endsection
