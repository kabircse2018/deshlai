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
            <li class="breadcrumb-item active" aria-current="page">Ads</li>
            </ol>
        </nav>
        </div>

    </div>
    <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <h6 class="mb-0">Create Ads</h6>
        </div>
        <div class="card-body">
           <div class="row">
             <div class="col-12 col-lg-4 d-flex">
               <div class="card border shadow-none w-100">
                 <div class="card-body">
                   <form class="row g-3" method="POST" action="{{ route('ads.store') }}" enctype="multipart/form-data">
                    @csrf
                     <div class="col-12">
                       <label class="form-label">Ads Image</label>
                       <input type="file" class="form-control" name="image" required autofocus>
                     </div>

                     <div class="col-12">
                       <label class="form-label">Ads Custom Link</label>
                       <input type="text" class="form-control" name="link" placeholder="Input Link">
                     </div>

                     <div class="col-12">
                        <div class="category-list">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="section">
                              <label class="form-check-label" for="FirstSection">FirstSection</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="2" name="section">
                              <label class="form-check-label" for="SecondSection">SecondSection</label>
                            </div>

                          </div>
                     </div>

                     <div class="col-12">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="1">Published</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>

                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create Ads</button>
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
                           <th>Image</th>

                           <th>Section</th>
                           <th>Status</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>

                        @foreach ($ads as $key=>$item)
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>{{ ++$key }}</td>
                            <td>
                                <div>
                                    <img src="{{ asset($item->image) }}" width="100px">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <button class="btn btn-sm btn-dark">{{ $item->section == 1 ? '1st Section' : '2nd Section'}}</button>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <button class="btn btn-sm btn-success">{{ $item->status == 1 ? 'Published': 'Save Draft' }}</button>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="{{ route('tag.delete', $item->id) }}" class="text-danger btn" role="button"><i class="bi bi-trash-fill"></i></a>
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
