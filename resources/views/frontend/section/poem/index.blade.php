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
                        <div class="post-image">
                            <a href="{{ route('post.single', $item->id) }}">
                                <img alt="{{ $item->category_name }}" src="{{ asset($item->bigthumbnail) }}" />
                            </a>
                            <span class="post-meta-category"><a href="{{ $item->category_id }}">{{ $item->category_name }}</a></span>
                        </div>
                        <div class="post-item-description">
                            <h4><a href="{{ route('post.single', $item->id) }}">{{ Str::limit($item->post_title, 30) }} : {{$item->name}}</a></h4>
                            <span class="post-meta-comments">
                                <strong><a href="{{ $item->author_custom_post_id }}">{{$item->name}}</a></strong>
                            </span>
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$item->post_date}}</span>
                            <span class="post-meta-comments">
                                <a href="#"><i class="fa fa-comments-o"></i>0 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        <div class="heading-section text-center">
            <hr />
            <span>সবপোষ্ট</span>
            <hr />
        </div>
    </div>
</section>
