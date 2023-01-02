<section id="page-content">
    <div class="container">
        <div class="heading-section text-center">
            <hr />
            <h4>কবিতা</h4>
            <hr />
        </div>

        <div class="row">
            @php
                $post = DB::table('posts')
                            ->leftjoin('categories', 'posts.category_id', 'categories.id')
                            ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                            ->select('posts.*', 'categories.category_name', 'users.name')
                            ->where('category_id', 1)
                            ->get();

            @endphp
            @foreach ($post as $item)
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        @php
                            $category_slug = preg_replace('/\s+/u', '-', trim($item->category_name) );
                            // $slug = preg_replace('/\s+/u', '-', trim($item->post_title) );
                        @endphp
                        <div class="post-image">
                            <a href="{{ url($item->post_slug) }}">

                                <img alt="{{ $item->category_name }}" src="{{ asset($item->image) }}" />
                            </a>
                            <span class="post-meta-category"><a href="{{ $category_slug }}">{{ $item->category_name }}</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="{{ url($item->post_slug) }}">{{ Str::limit($item->post_title, 30) }} : {{$item->name}}</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="{{ $item->author_custom_post_id }}">{{$item->name}}</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($item->post_date)) }}</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    <div class="heading-section text-center">
        <hr/>
        <span class="post-meta-category"><a href="{{ URL::to('post/'. $item->category_name ) }}">সবপোষ্ট</a></span>
        <hr />
    </div>

</section>
