@extends('admin.mastering')

@section('content')
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tag</li>
            </ol>
        </nav>
        </div>
        <div class="ms-auto">
        <a href="{{ route('tag.create') }}" class="btn btn-sm btn-primary">Add New Tag</a>
        </div>
    </div>
    <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <h6 class="mb-0">Add Tag</h6>
        </div>
        <div class="card-body">
           <div class="row">
             <div class="col-12 col-lg-4 d-flex">
               <div class="card border shadow-none w-100">
                 <div class="card-body">
                   <form class="row g-3" method="POST" action="{{ route('tag.store') }}">
                    @csrf
                     <div class="col-12">
                       <label class="form-label">Tag Name</label>
                       <input type="text" class="form-control" name="tag_name" placeholder="Tag name">
                     </div>

                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Add Tag</button>
                      </div>
                    </div>
                   </form>
                 </div>
               </div>
             </div>
             <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table align-middle">
                       <thead class="table-light">
                         <tr>
                           <th><input class="form-check-input" type="checkbox"></th>
                           <th>ID</th>
                           <th>Tag Name</th>
                           <th>Tag Slug</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>

                        @foreach ($tag_data as $key=>$tag_item)
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>{{ ++$key }}</td>
                          <td> {{ $tag_item->tag_name }}</td>
                          <td> {{ $tag_item->tag_slug }}</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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
@endsection
