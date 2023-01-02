<header id="header">
    <div class="header-inner">
        <div class="container">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <span class="logo-default"><img style="width: 65%" src="{{ asset('public/admin')}}/images/logo_deshlai.webp" alt=""></span><span class="logo-dark"><img src="{{ asset('public/admin')}}/images/logo_deshlai.webp" alt=""></span>
                </a>
            </div>

            <div id="search">
                <a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="https://inspirothemes.com/polo/search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>

            <div class="header-extras">
                <ul>
                    <li>
                        <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                    </li>
                </ul>
            </div>

            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>

            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            @php
                                $category = DB::table('categories')->orderBy('id', 'ASC')->where('status', 1)->get();
                            @endphp
                            @foreach ($category as $item)
                            <li class="dropdown">
                                <a href="{{ url( 'post/'. $item->category_slug )}}">{{ $item->category_name}}</a>
                                @php
                                    $subcategory = DB::table('subcategories')->where('category_id', $item->id)->where('status', 1)->get();
                                @endphp

                                    <ul class="dropdown-menu">
                                         @foreach ($subcategory as $item)
                                        <li><a href="{{ URL::to('post/'. $item->id. '/'. $item->subcategory_slug)}}">{{ $item->subcategory_name}}</a></li>
                                        @endforeach
                                    </ul>

                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </div>
</header>
