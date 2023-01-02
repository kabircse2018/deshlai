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
                    <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
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
            <h6 class="mb-0">Add New Subcategory</h6>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- Create Category Form --}}
                <div class="col-12 col-lg-12 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('subcategory.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div>
                                    <label class="form-label">Select Category*</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                        <option selected disabled>Select Category</option>
                                        @foreach($categories as $row)
                                            <option value="{{$row->id}}">{{$row->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Subcategory Name</label>
                                    <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" name="subcategory_name" value="{{ old('subcategory_name') }}" autofocus />
                                    @error('subcategory_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                    <span>The name is how it appears on your site.</span>
                                </div>

                                <div>
                                    <label class="form-label">Menu Status</label>
                                    <select class="form-group form-control" name="status">
                                        <option value="1">Published</option>
                                        <option value="0">Save Draft</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save New Subcategory</button>
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
