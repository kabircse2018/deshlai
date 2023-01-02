
<div class="container">
    <div class="row">
        @php
            $slider = DB::table('posts')
                        ->where('headline', 1)
                        ->leftjoin('categories', 'posts.category_id', 'categories.id')
                        ->select('posts.*', 'categories.category_name')
                        ->orderBy('id', 'DESC')
                        ->get();
            $special_number_image = DB::table('posts')
                                    ->where('special_number_status', 1)
                                    ->leftjoin('categories', 'posts.category_id', 'categories.id')
                                    ->select('posts.*', 'categories.category_name')
                                    ->orderBy('id', 'DESC')
                                    ->get();
        @endphp
            {{-- Div Clickable Link Style --}}
             <style>
                .link {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    z-index: 1;
                  }
                </style>
            {{-- Div Clickable Link Style --}}
            <div class="col-lg-8" data-animate="fadeInUp" data-animate-delay="0" href="#">
                <div
                    id="slider"
                    class="container inspiro-slider slider-halfscreen dots-creative"
                    data-height-xs="360"
                    data-autoplay="2600"
                    data-animate-in="fadeIn"
                    data-animate-out="fadeOut"
                    data-items="1"
                    data-loop="true"
                    data-autoplay="true">
                    @foreach ( $slider as $item)
                    @php
                        $category_slug = preg_replace('/\s+/u', '-', trim($item->category_name) );
                        // $slug = preg_replace('/\s+/u', '-', trim($item->post_title) );
                    @endphp
                    <div class="slide background-image" style="background-image: url({{ asset($item->image) }});" width="890" height="433" alt="{{ $item->post_title }}">
                        <a href="{{ $item->post_slug }}"> <span class="link"></span> </a>
                    </div>
                    {{-- {!!  $item->post_description !!} --}}
                    @endforeach
                   </div>
            </div>

            <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                <div
                    id="slider"
                    class="container inspiro-slider slider-halfscreen dots-creative"
                    data-height-xs="360"
                    data-autoplay="2600"
                    data-animate-in="fadeIn"
                    data-animate-out="fadeOut"
                    data-items="1"
                    data-loop="true"
                    data-autoplay="true" >

                    @foreach ( $special_number_image as $item)
                    @php
                        $category_slug = preg_replace('/\s+/u', '-', trim($item->category_name) );
                        // $slug = preg_replace('/\s+/u', '-', trim($item->post_title) );
                    @endphp
                    <div class="slide background-image" style="background-image: url({{ asset($item->special_number_image) }});" width="890" height="433" alt="{{ $item->post_title }}">
                        <a href="{{ $item->post_slug }}"> <span class="link"></span> </a>
                    </div>
                    @endforeach
                    {{-- <div class="slide background-image" style="background-image: url('assest/images/homepages/corporate-v4/images/8.jpg');"></div> --}}
                </div>
            </div>

    </div>
</div>

