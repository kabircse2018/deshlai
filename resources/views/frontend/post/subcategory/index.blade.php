@extends('frontend.master')

@section('content')
<section id="page-content">
    <div class="container">
        <div class="page-title">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}">হোম </a> >> {{$category->category_slug}}</li>
                </ol>
            </nav>
        </div>

        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @forelse ( $post as $item)
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">

                        <a href="{{ url($item->post_slug) }}">
                            <img alt="{{ asset($item->post_slug) }}" src="{{ asset($item->first_section_thumbnail) }}" />
                            <img alt="" src="images/blog/12.jpg" />
                        </a>
                        {{-- <span class="post-meta-category"><a href="#">{{ $item->category_name }}</a></span> --}}
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($item->post_date)) }}</span>
                        <span class="post-meta-comments">
                            <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                        </span>
                        <h2><a href="{{ URL::to($item->post_slug) }}">{{ Str::limit($item->post_title, 30) }} : {{$item->name}}</a></h2>
                        <span>
                            {!!  substr(strip_tags($item->post_description), 0, 500) !!}


                        </span>

                    </div>
                </div>
            </div>
            @empty

            @endforelse



        </div>
        {{$post->links()}}
{{--
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul> --}}
    </div>
</section>
@endsection
