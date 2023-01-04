@extends('frontend.master')

@section('content')
<section id="page-content">
    <div class="container">
        <div class="page-title">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}">হোম </a> >> {{ $query }} <strong>{{ $post->count() }} টি অনুসন্ধান ফলাফল পাওয়া গেছে </strong></li>
                </ol>
            </nav>
        </div>


        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @if ($post->count() > 0)
                @foreach ($post as $item)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="{{ url($item->post_slug) }}">
                                    <img alt="{{ $item->post_slug }}" src="{{ asset($item->image) }}" />
                                </a>

                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($item->post_date)) }}</span>
                                <span class="post-meta-comments">
                                    <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                                </span>
                                <h2><a href="{{ url($item->post_slug) }}">{{ Str::limit($item->post_title, 30) }} : {{$item->name}}</a></h2>
                                <span>
                                    {!!  substr(strip_tags($item->post_description), 0, 500) !!}
                                </span>

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">

                    </div>
                    <div class="post-item-description">
                        <h2>অনুসন্ধান ফলাফল পাওয়া <span style="color:red">{{ $query }}</span>  যায়নি:</h2>
                    </div>
                </div>
            </div>

            @endif


        </div>

    </div>
</section>
@endsection
