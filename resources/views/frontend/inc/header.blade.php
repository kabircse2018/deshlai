<header id="header">
    <div class="header-inner">
        <div class="container">
            <div id="logo">
                <a href="index.html">
                    <span class="logo-default"><img src="{{ asset('public/admin')}}/images/logo_deshlai.webp" alt=""></span><span class="logo-dark"><img src="{{ asset('public/admin')}}/images/logo_deshlai.webp" alt=""></span>
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
                           
                            <li class="dropdown">
                                @php
                                    $category = DB::table('categories')->where('status', 1)->get();  
                                    $subcategory = DB::table('subcategories')
                                                    ->leftjoin('categories', 'subcategories.category_id', 'categories.id')
                                                    ->select('subcategories.*', 'categories.category_name')
                                                    ->get();
                                                   
                                    // $subcategory = DB::table('subcategories')
                                    //                 ->leftjoin('categories', 'subcategories.category_id', 'categories.id')
                                    //                 ->where('status', 1)->get();   
                                @endphp
                                @foreach ($category as $item)
                                    <a href="{{$item->category_slug}}">{{ $item->category_name}}</a>
                                @endforeach
                                
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        @foreach ($subcategory as $item)
                                            <a href="{{$item->subcategory_slug}}">{{ $item->subcategory_name}}</a>
                                        @endforeach
                                        
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/') }}">Child Category 02</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                            {{-- <li class="dropdown">
                                <a href="#">Category01</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#">Subcategory01</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Child Category 01</a></li>
                                            <li><a href="#">Child Category 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Subcategory01</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Child Category 01</a></li>
                                            <li><a href="#">Child Category 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
