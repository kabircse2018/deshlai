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
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="ms-auto">
                    <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">Add New Post</a>
                  </div>
                </div>
                <!--end breadcrumb-->

                  <div class="card">
                    <div class="card-header py-3">
                      <h6 class="mb-0">Post Details</h6>
                    </div>
                    <div class="card-body">
                       <div class="row">
                         <div class="col-12 col-lg-12 d-flex">
                          <div class="card border shadow-none w-100">
                            <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table align-middle">
                                   <thead class="table-light">
                                     <tr>
                                       <th>Sl</th>
                                       <th>Profile</th>
                                       <th>Name</th>
                                       <th>User Desc</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>Role</th>

                                       <th class="text-end">Action</th>
                                     </tr>
                                   </thead>


                                   <tbody>
                                    @foreach ($users as $key=>$item)
                                        <tr>
                                            <td>{{ ++$key }}</td>

                                            <td><img src="{{ asset($item->user_profile) }}" width="50" height="auto"></td>                                        </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{!!  substr(strip_tags($item->user_desc), 0, 150) !!} </td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                <div>
                                                    @if ($item->is_admin == '1' )
                                                        <button class="btn btn-sm btn-success">Admin</button>
                                                    @else
                                                        <button class="btn btn-sm btn-secondary">Editor</button>
                                                    @endif

                                                </div>
                                            </td>
{{--
                                            <td>
                                                <div>
                                                    <button class="btn btn-sm btn-success">{{ $item->status == '1' ? 'Published' : 'Save Draft'}}</button>
                                                </div>
                                            </td> --}}

                                            <td>
                                                <div class="d-flex flex-row-reverse gap-2 fs-6">
                                                    {{-- <a href="javascript:;" class="btn btn-primary btn-sm" role="button"><i class="bi bi-eye-fill"></i></a> --}}
                                                    <a href="" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash-fill"></i></a>
                                                    <a href="" class="btn btn-warning btn-sm" role="button"><i class="bi bi-pencil-fill"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach



                                  </tbody>

                                 </table>
                              </div>

                            </div>
                          </div>
                        </div>
                       </div><!--end row-->
                    </div>
                  </div>

              </main>
           <!--end page main-->
@endsection
