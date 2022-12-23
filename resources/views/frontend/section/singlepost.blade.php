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
                                  <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}">Home >> </a></li>
                                </ol>
                            </nav>
                            <div class="text-center">
                                <a class="btn btn-danger"></a>
                                <h1></h1>

                                <div class="d-flex">
                                    <ul class=" avatars mx-auto justify-content-center">
                                            <li><a href="#"><img src="{{ asset('public/admin')}}/images/avatars/avatar-1.png" class="avatar"></a> </li>
                                    </ul>
                                </div>
                                  <h3><a href=""></a></h3>
                                  <h3><a href=""></a></h3>
                            </div>
                            <div class="post-meta-share d-flex justify-content-center">
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
                            </div>

                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="" />
                                </a>
                            </div>
                            <div class="post-item-description">
                               <h2></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments">
                                        <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                    </span>
                                    <span class="post-meta-category">
                                        <a href="#"><i class="fa fa-tag"></i>Lifestyle, Magazine</a>
                                    </span>

                                </div>
                                <p></p>

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
                                            <li><a href="#"><img src="{{ asset('public/admin')}}/images/avatars/avatar-1.png" class="avatar"></a> </li>
                                        </ul>
                                        {{-- <h4>{{$post->author_custom_post_id}}</h4> --}}
                                        <h5>জন্ম : ১৯৬০, বর্তমান নিবাস : টালিগঞ্জ। বাংলা সাহিত্যে স্নাতকোত্তর, বি,এড।
                                            শূন্যদশকে লিখতে আসা এবং কৃত্তিবাস প্রতিভাস কবিতাক্যাম্পাস সুতরাং থেকে কবিতার বই প্রকাশিতসমূহ:
                                            দেবযানীর স্বীকারোক্তি, স্বপ্নিল বর্ণমালা, তৃতীয়া পৃথিবী, আইভরি খাতা, নোনামিঠে জলচিহ্ন,
                                            রেডিও অ্যাক্টিভ মিনারেল বৃষ্টি, চৌরেখাবতী পিরামিডের অরোরা, স্ট্রবেরিগন্ধার যোজনপথ
                                        </h5>
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

            <div class="sidebar col-lg-12">
                  <div class="carousel" data-items="3">
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                {{-- <a href="#"> <img alt="" src="{{ asset($post->image) }}" /></a> --}}

                                <span class="post-meta-category"><a href="#">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments">
                                    <a href="#"><i class="fa fa-comments-o"></i>33 Comments</a>
                                </span>
                                {{-- <h2><a href="#"><p>{!!  substr(strip_tags($post->post_description), 0, 250) !!} </p></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
