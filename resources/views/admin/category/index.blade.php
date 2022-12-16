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
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Add New Category</a>
                  </div>
                </div>
                <!--end breadcrumb-->

                  <div class="card">
                    <div class="card-header py-3">
                      <h6 class="mb-0">Category Details</h6>
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
                                       <th><input class="form-check-input" type="checkbox"></th>
                                       <th>Name</th>
                                       <th>Slug</th>
                                       <th>SEO Focus Keyword</th>
                                       <th>SEO Description</th>
                                       <th class="text-end">Menu Status</th>
                                       <th class="text-end">Action</th>
                                     </tr>
                                   </thead>


                                   <tbody>
                                @foreach($category_data as $category_item)
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <td>{{ $category_item->category_name }}</td>
                                        <td>{{ $category_item->category_slug }}</td>

                                        @if (is_null($category_item->category_meta_keyword))
                                            <td class="text-danger">Add SEO Focus Keyword</td>
                                        @else
                                            <td>{{ $category_item->category_meta_keyword }}</td>
                                        @endif

                                        @if (is_null($category_item->category_meta_description))
                                            <td class="text-danger">Add SEO Description</td>
                                        @else
                                            <td>{{ $category_item->category_meta_description }}</td>
                                        @endif

                                        <td class="text-end">
                                            @if ($category_item->status == '1')
                                                <button type="button" class="btn btn-success btn-sm">Published</button>
                                            @else
                                                <button type="button" class="btn btn-secondary btn-sm">Save Draft</button>
                                            @endif
                                        </td>

                                      <td>
                                       <div class="d-flex flex-row-reverse gap-2 fs-6">
                                            {{-- <a href="javascript:;" class="btn btn-primary btn-sm" role="button"><i class="bi bi-eye-fill"></i></a> --}}
                                            <a href="{{ route('category.delete', $category_item->id) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash-fill"></i></a>
                                            <a href="{{ route('category.edit', $category_item->id) }}" class="btn btn-warning btn-sm" role="button"><i class="bi bi-pencil-fill"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                @endforeach


                                @foreach($subcategory_data as $subcategory_item)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{ $subcategory_item->subcategory_name }}</td>
                                    <td>{{ $subcategory_item->subcategory_slug }}</td>

                                    @if (is_null($subcategory_item->subcategory_meta_keyword))
                                        <td class="text-danger">Add SEO Focus Keyword</td>
                                    @else
                                        <td>{{ $subcategory_item->subcategory_meta_keyword }}</td>
                                    @endif

                                    @if (is_null($subcategory_item->subcategory_meta_description))
                                        <td class="text-danger">Add SEO Description</td>
                                    @else
                                        <td>{{ $subcategory_item->subcategory_meta_description }}</td>
                                    @endif

                                    <td class="text-end">
                                        @if ($subcategory_item->status == '1')
                                            <button type="button" class="btn btn-success btn-sm">Published</button>
                                        @else
                                            <button type="button" class="btn btn-secondary btn-sm">Save Draft</button>
                                        @endif
                                    </td>

                                  <td>
                                   <div class="d-flex flex-row-reverse gap-2 fs-6">
                                        {{-- <a href="javascript:;" class="btn btn-primary btn-sm" role="button"><i class="bi bi-eye-fill"></i></a> --}}
                                        <a href="{{ route('subcategory.delete', $subcategory_item->id) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash-fill"></i></a>
                                        <a href="{{ route('subcategory.edit', $subcategory_item->id) }}" class="btn btn-warning btn-sm" role="button"><i class="bi bi-pencil-fill"></i></a>
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
