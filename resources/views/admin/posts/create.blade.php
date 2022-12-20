@extends('admin.mastering')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                            <input type="text" value="{{old('post_title')}}" name="post_title" class="form-control @error('post_title') is-invalid @enderror" placeholder="Post title">

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
                                <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                                @error('image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{$message}}</strong>
                                  </span>
                                @enderror
                            </div>

                          <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Select Category</label>
                                <select class="form-select" name="category_id">
                                        <option disabled selected>Choose Category</option>
                                        @foreach ($category_data as $category_item)

                                                <option class="text-info" value="{{ $category_item->id }}">{{ $category_item->category_name }}</option>

                                        @endforeach
                                </select>
                            </div>

                            {{-- <div class="col-12">
                                <label class="form-label">Select Category</label>
                                <select class="form-select" name="category_id" name="subcategory_id" name="childcategory_id">
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
                            </div> --}}

                            <div class="col-12">
                                <label class="form-label">Select Subcategory</label>
                                <select class="form-select" name="subcategory_id" id="subcategory_id">
                                    <option disabled selected>==Select Subcategory==</option>
                                  @foreach ($subcategory_data as $subcategory_item)
                                        <option value="{{ $subcategory_item->id}}">{{ $subcategory_item->subcategory_name }}</option>
                                  @endforeach
                                </select>
                            </div>
{{--
                            <div class="col-12">
                                <label class="form-label">Select Childcategory</label>
                                <select class="form-select" name="childcategory_id" id="childcategory_id">
                                    <option disabled selected>==Select Childcategory==</option>
                                  @foreach ($childcategory_data as $childcategory_item)
                                        <option value="{{ $childcategory_item->id }}">{{ $childcategory_item->childcategory_name }}</option>
                                  @endforeach
                                </select>
                            </div> --}}

                            <div class="col-12">
                                <label class="form-label">Post Custom Data</label>
                                <input type="datetime-local" class="form-control" name="post_date" >
                            </div>

                            <div class="col-12 form-check form-switch">
                                <label class="form-label">Home Slider</label>
                                <input class="form-check-input" name="headline" type="checkbox" id="mySwitch" name="darkmode" value="1">
                            </div>
 
                            <div class="col-12 form-check form-switch">
                                <label class="form-label">Featured Post</label>
                                <input class="form-check-input" name="first_section" type="checkbox" id="mySwitch" name="darkmode" value="1">
                            </div>
                            
                            <div class="col-12">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                  <option value="1">Published</option>
                                  <option value="0">Draft</option>
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


  <script type="text/javascript">
    $(document).ready(function() {
          $('select[name="category_id"]').on('change', function(){
              var category_id = $(this).val();
              if(category_id) {
                  $.ajax({
                      url: "{{  url('admin/dashboard/post/getsubcategory/') }}/"+category_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                        // console.log($data);
                         $("#subcategory_id").empty();
                               $.each(data,function(key,value){
                                   $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcategory_name+'</option>');
                               });
                      },

                  });
              } else {
                  alert('danger');
              }
          });
      });
 </script>


{{--
<script type="text/javascript">
    $(document).ready(function() {
          $('select[name="subcategory_id"]').on('change', function(){
              var subcategory_id = $(this).val();
              if(subcategory_id) {
                  $.ajax({
                      url: "{{  url('admin/dashboard/post/getchildcategory/') }}/"+subcategory_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                        // console.log($data);
                         $("#childcategory_id").empty();
                               $.each(data,function(key,value){
                                   $("#childcategory_id").append('<option value="'+value.id+'">'+value.childcategory_name+'</option>');
                               });
                      },

                  });
              } else {
                  alert('danger');
              }
          });
      });
 </script> --}}



<!--end page main-->
@endsection
