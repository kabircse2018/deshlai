<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('public/admin')}}/images/g-tech-point.jpg" class="logo-icon" alt="logo icon" />

        </div>

        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/') }}" target="_blank">
                <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                <div class="menu-title">Visit Site</div>
            </a>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
                <div class="menu-title">Home</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('admin/slider/create') }}"><i class="bi bi-grid-fill"></i>Create </a>
                </li>

                <li>
                    <a href="#"><i class="bi bi-grid-fill"></i>view</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-pin-fill"></i></div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('post.index') }}"><i class="bi bi-pin-fill"></i>All Post </a>
                </li>

                <li>
                    <a href="{{ route('post.create') }}"><i class="bi bi-pin-fill"></i>Add New</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-bookmark-check-fill"></i></div>
                <div class="menu-title">Categories</div>
            </a>
            <ul>
                <li><a href="{{ route('category.index') }}"><i class="bi bi-bookmark-check-fill"></i>All Category </a></li>
                <li><a href="{{ route('category.create') }}"><i class="bi bi-bookmark-check-fill"></i>Add New Category</a></li>
                <li><a href="{{ route('subcategory.create') }}"><i class="bi bi-bookmark-check-fill"></i>Add New Subcategory</a></li>
                {{-- <li><a href="{{ route('childcategory.create') }}"><i class="bi bi-bookmark-check-fill"></i>Add New Childcategory</a></li> --}}

            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-file-break-fill"></i></div>
                <div class="menu-title">Pages</div>
            </a>
            <ul>
                <li><a href="#"><i class="bi bi-file-break-fill"></i>All Page </a></li>
                <li> <a href="#"><i class="bi bi-file-break-fill"></i>Add New Page</a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-tag-fill"></i></div>
                <div class="menu-title">Tags</div>
            </a>
            <ul>
                <li><a href="{{ route('tag.index') }}"><i class="bi bi-tag-fill"></i>All Tag </a></li>
                {{-- <li><a href="{{ route('tag.create') }}"><i class="bi bi-tag-fill"></i>Add New Tag</a></li> --}}
            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-tag-fill"></i></div>
                <div class="menu-title">Ads</div>
            </a>
            <ul>
                <li><a href="{{ route('ads.index') }}"><i class="bi bi-tag-fill"></i>Home Ads</a></li>
                {{-- <li><a href="{{ route('tag.create') }}"><i class="bi bi-tag-fill"></i>Add New Tag</a></li> --}}
            </ul>
        </li>

        <li class="menu-label">Administrator</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="menu-title">User</div>
            </a>
            <ul>
                <li><a href="{{ route('user.create') }}"><i class="bi bi-person-lines-fill"></i>Add User</a></li>
                <li><a href="{{ route('user.index') }}"><i class="bi bi-person-lines-fill"></i>All User</a></li>

            </ul>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="menu-title">All User</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
