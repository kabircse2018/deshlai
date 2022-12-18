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
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add New Post</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->

    <!--Start row-->
    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="row">
         <div class="col-lg-12 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent">
              <div class="d-sm-flex align-items-center">
                <h5 class="mb-2 mb-sm-0">Add New Post</h5>

              </div>
             </div>

            <div class="card-body">
               <div class="row g-3">
                 <div class="col-12 col-lg-8">
                    <div class="card shadow-none bg-light border">
                      <div class="card-body">

                          <div class="col-12">
                            <label class="form-label">Post title</label>
                            <input type="text" name="post_title" class="form-control @error('post_title') is-invalid @enderror" placeholder="Post title">

                            @error('post_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror

                          </div>

                          <div class="col-12">
                            <label class="form-label">Full description</label>
                            <textarea class="form-control" name="post_description" id="post" placeholder="Full description" rows="10" cols="10"></textarea>
                          </div>

                      </div>
                    </div>
                 </div>

                 <div class="col-12 col-lg-4">
                    <div class="card shadow-none bg-light border">
                      <div class="card-body">
                          <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Feature Image</label>
                                <input class="form-control" name="image" type="file">
                            </div>
                          <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Select Category</label>
                                <select class="form-select" name="subcategory_id">
                                        <option disabled selected>Choose Category</option>
                                        @foreach ($category_data as $category_item)
                                            @php
                                                $subcategory = DB::table('subcategories')->where('category_id', $category_item->id)->get();
                                            @endphp
                                                <option class="text-info" value="{{ $category_item->id }}">{{ $category_item->category_name }}</option>
                                                @foreach ($subcategory as $subcategory_item)
                                                    @php
                                                        $childcategory = DB::table('childcategories')->where('subcategory_id', $subcategory_item->id)->get();
                                                    @endphp
                                                    <option class="text-success" value="{{ $subcategory_item->id }}">---{{ $subcategory_item->subcategory_name }}</option>
                                                        @foreach ($childcategory as $childcategory_item)
                                                            <option class="text-danger" value="{{ $childcategory_item->id }}">----{{ $childcategory_item->childcategory_name }}</option>
                                                        @endforeach
                                                @endforeach
                                        @endforeach
                                </select>
                            </div>

                            {{-- <div class="col-12">
                                <label class="form-label">Select Subcategory</label>
                                <select class="form-select" name="subcategory_id">
                                  @foreach ($subcategory_data as $subcategory_item)
                                        <option value="{{ $subcategory_item->id }}">{{ $subcategory_item->subcategory_name }}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Select Childcategory</label>
                                <select class="form-select" name="childcategory_id">
                                  @foreach ($childcategory_data as $childcategory_item)
                                        <option value="{{ $childcategory_item->id }}">{{ $childcategory_item->childcategory_name }}</option>
                                  @endforeach
                                </select>
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                                    @foreach ($tag_data as $tag_item)
                                        <option value="{{ $tag_item->id }}">{{ $tag_item->tag_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                  <option>Published</option>
                                  <option>Draft</option>
                                </select>
                            </div>

                          </div><!--end row-->
                      </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>
                </div>
               </div><!--end row-->
             </div>
            </div>

        </form>
         </div>
      </div>
      <!--end row-->

  </main>
<!--end page main-->
@endsection
