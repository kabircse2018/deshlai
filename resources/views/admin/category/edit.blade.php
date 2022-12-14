@extends('admin.mastering')

@section('content')
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
            <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">All Category View</a>
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
                            <form class="row g-3" method="POST" action="{{ route('category.update', $category_data->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="col-12">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ $category_data->category_name}}" autofocus />
                                    @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                    <span>The name is how it appears on your site.</span>
                                </div>

                                <div class="col-12">
                                    <h5>SEO TAG</h5>
                                    <label class="form-label">Focus Keyword</label>
                                    <input type="text" class="form-control" name="category_meta_keyword" value="{{ $category_data->category_meta_keyword}}" placeholder="Bangladesh, Dhaka" />
                                </div>

                                <div class="col-12">
                                    <label class="form-label">SEO Description</label>
                                    <textarea class="form-control" rows="4" cols="4" name="category_meta_description" placeholder="SEO Description">{{ $category_data->category_meta_description}}</textarea>
                                </div>

                                <div>
                                    <label class="form-label">Menu Status</label>
                                    <select class="form-group form-control" name="status">
                                        <option value="1" {{ $category_data->status == 1 ?  'selected' : ''}}>Published</option>
                                        <option value="0" {{ $category_data->status == 0 ?  'selected' : ''}}>Save Draft</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Update Category</button>
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
