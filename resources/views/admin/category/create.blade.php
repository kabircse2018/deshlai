@extends('admin.mastering') @section('content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">Add Category</h6>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Create Category Form --}}
                <div class="col-12 col-lg-12 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ url('admin/gallery/store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control @error('gallery_name') is-invalid @enderror" name="gallery_name" value="{{ old('gallery_name') }}" required autofocus />
                                    <span>The name is how it appears on your site.</span>
                                    @error('gallery_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4" cols="4" name="gallery_meta_description" placeholder="gallery SEO Description"></textarea>
                                    <span>The description is not prominent by default; however, some themes may show it.</span>
                                </div>

                                <div class="col-12">
                                    <h5>SEO TAG</h5>
                                    <label class="form-label">Focus Keyword</label>
                                    <input type="text" class="form-control" name="gallery_meta_keyword" value="{{ old('meta_keyword') }}" placeholder="Bangladesh, Dhaka" />
                                </div>

                                <div class="col-12">
                                    <label class="form-label">SEO Description</label>
                                    <textarea class="form-control" rows="4" cols="4" name="meta_description" placeholder="SEO Description"></textarea>
                                </div>

                                <div>
                                    <label class="form-label">Menu Status</label>
                                    <select class="form-group form-control" name="menu_status">
                                        <option value="1">Published</option>
                                        <option value="0">Save Draft</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save New Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Create Category Form --}}
            </div>
            <!--end row-->
        </div>
    </div>
</main>
<!--end page main-->
@endsection
