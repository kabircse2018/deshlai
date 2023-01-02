@extends('frontend.master')

@section('content')
<section id="page-content">
    <div class="container">
        <div class="page-title">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  {{-- <li class="breadcrumb-item active" aria-current="page">আপনি দেখছেন: <a href="{{ url('/') }}">হোম </a> >> {{$category->category_slug}}</li> --}}
                </ol>
            </nav>
        </div>


        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @forelse ( $post as $item)

            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="{{ url($item->post_slug) }}">
                            <img alt="{{ $item->post_slug }}" src="{{ asset($item->image) }}" />
                        </a>

                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $item->post_date }}</span>
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
            @empty

            @endforelse
        </div>

    </div>
</section>
@endsection
