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
                                  <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}">Home >> </a>{{ $data->post_title }} : {{ $data->author_custom_post_id }}</li>
                                </ol>
                            </nav>
                            <div class="text-center">
                                <a class="btn btn-danger">{{$data->author_custom_post_id}}</a>
                                <h1>{{ $data->post_title }} : {{$data->author_custom_post_id}}</h1>

                                <div class="d-flex">
                                    <ul class=" avatars mx-auto justify-content-center">
                                            <li><a href="#"><img src="{{ asset('public/admin')}}/images/avatars/avatar-1.png" class="avatar"></a> </li>
                                    </ul>
                                </div>
                                  <h3><a href="">{{$data->author_custom_post_id}}</a></h3>
                                  <h3><a href="">{{$data->post_date}}</a></h3>
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
                                    <img alt="" src="{{ asset($data->image) }}" />
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2>{{ $data->post_title }}</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments">
                                        <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                    </span>
                                    {{-- <span class="post-meta-category">
                                        <a href="#"><i class="fa fa-tag"></i>Lifestyle, Magazine</a>
                                    </span> --}}

                                </div>
                                <p>{!! $data->post_description !!}</p>

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

                            <div class="comments" id="comments">
                                <div class="comment_number">Comments <span>(2)</span></div>
                                <div class="comment-list">
                                    <div class="comment" id="comment-1">
                                        <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar" /></div>
                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="comment" id="comment-1-1">
                                            <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar" /></div>
                                            <div class="text">
                                                <h5 class="name">John Doe</h5>
                                                <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                                        more-or-less normal
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment" id="comment-1-2">
                                            <div class="image"><img alt="" src="images/blog/author3.jpg" class="avatar" /></div>
                                            <div class="text">
                                                <h5 class="name">John Doe</h5>
                                                <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't
                                                        look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment" id="comment-2">
                                        <div class="image"><img alt="" src="images/blog/author2.jpg" class="avatar" /></div>
                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>
                                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are
                                                    also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group text-center">
                                        <ul class=" avatars mx-auto justify-content-center">
                                            <li><a href="#"><img src="{{ asset('public/admin')}}/images/avatars/avatar-1.png" class="avatar"></a> </li>
                                        </ul>
                                        <h4>{{$data->author_custom_post_id}}</h4>
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
                                <a href="#"> <img alt="" src="{{ asset($data->image) }}" /></a>

                                <span class="post-meta-category"><a href="#">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments">
                                    <a href="#"><i class="fa fa-comments-o"></i>33 Comments</a>
                                </span>
                                <h2><a href="#"><p>{!!  substr(strip_tags($data->post_description), 0, 250) !!} </p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
