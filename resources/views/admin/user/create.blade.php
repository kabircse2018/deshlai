@extends('admin.mastering')

@section('content')
@push('css')

@endpush
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
            <li class="breadcrumb-item active" aria-current="page">Add New User</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->

    <!--Start row-->
    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="row">
         <div class="col-lg-12 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent">
              <div class="d-sm-flex align-items-center">
                <h5 class="mb-2 mb-sm-0">Add New User</h5>

              </div>
             </div>

            <div class="card-body">
               <div class="row g-3">
                 <div class="col-12 col-lg-8">
                    <div class="card shadow-none bg-light border">
                      <div class="card-body">

                          <div class="col-12">
                            <label class="form-label">User Name</label>
                            <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="User Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                          </div>

                          <div class="col-12">
                            <label class="form-label">User Email</label>
                            <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="User Email">
                          </div>

                          <div class="col-12">
                            <label class="form-label">User Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Input Your Password">
                          </div>

                          <div class="col-12">
                            <label class="form-label">User Profile</label>
                            <input class="form-control" name="user_profile" type="file">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Phone Number</label>
                            <input type="text" value="" name="Phone" class="form-control" placeholder="Input Your Phone">
                        </div>

                          <div class="col-12">
                            <label class="form-label">User Role</label>
                            <select class="form-select" name="is_admin">
                                <option value="2">Editor</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>

                          <div class="col-12">
                            <label class="form-label">User Details</label>
                            <textarea class="form-control" name="user_desc" placeholder="User description" rows="6" cols="6"></textarea>
                          </div>

                      </div>
                    </div>


                 <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>

               </div><!--end row-->
             </div>
            </div>

        </form>
         </div>
      </div>
      <!--end row-->

  </main>



@push('js')



@endpush


<!--end page main-->
@endsection
