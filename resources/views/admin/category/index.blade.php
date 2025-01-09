@extends('admin.layout.index')
@section('title', 'InHouse | Category Management')
@section('custom-style')
    <style>

    </style>
@endsection
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Category Management</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            @if ($errors->any())
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                {{ $errors->first() }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @elseif(Session::has('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                {{ Session::get('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="categoryList">
                        <div class="card-header border-bottom-dashed">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mt-2">Category Management</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1 flex-wrap">
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                            id="create-btn" data-bs-target="#addCategoryModal">
                                            <i class="ri-add-line align-bottom me-1"></i> Add Category
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom-dashed border-bottom">
                            <form>
                                <div class="row g-3">
                                    <div class="col-xl-5">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-7">
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <input type="text" class="form-control" id="datepicker-range"
                                                        data-provider="flatpickr" data-date-format="d M, Y"
                                                        data-range-date="true" placeholder="Select date">
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-sm-3">
                                                <div>
                                                    <select class="form-control" data-plugin="choices" data-choices
                                                        data-choices-search-false name="choices-single-default"
                                                        id="idStatus">
                                                        <option value="" selected>Status</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Block">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-sm-3">
                                                <div>
                                                    <button type="button" class="btn btn-primary w-100"
                                                        onclick="SearchData();"><i
                                                            class="ri-equalizer-fill me-2 align-bottom"></i>Filters
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card mb-1">
                                <table id="scroll-horizontal"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                        value="option" @disabled($categories->count() == 0)>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Created Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $i => $category)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>{{ $category->created_at->format('d M,Y') }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            @checked($category->status)>
                                                    </div>
                                                </td>
                                                <td>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <button type="button" data-id="{{ $category->id ?? '' }}"
                                                            class="btn btn-link text-primary d-inline-block edit-item-btn p-0">
                                                            <i class="ri-pencil-fill fs-16"></i>
                                                        </button>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <form id="delete_item_form_{{ $category->id }}"
                                                            action="{{ route('category.destroy', $category->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" data-id="{{ $category->id }}"
                                                                class="btn p-0 text-danger d-inline-block remove-item-btn">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No data found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Add Category Modal -->
                        @include('admin.category.create')

                        <!-- Edit Category Modal -->
                        <div id="edit_content"></div>


                    </div>
                </div>
            </div>

            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>

@endsection
@section('custom-script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-item-btn', function() {
                let id = $(this).data('id');
                let url = "{{ route('category.index') }}";
                // Perform Ajax request
                $.ajax({
                    type: 'GET',
                    url: `${url}/${id}/edit`,
                    success: function(data, status) {
                        $('#edit_content').html(data);
                        $('#editCategoryModal').modal('show');
                        // Handle the response
                    },
                    error: function(error) {
                        console.log(error);
                        // Handle errors
                    }
                });
            });


            $(document).on('click', '.remove-item-btn', function() {
                $('#delete-record').data("id", $(this).data('id'));
                $('#deleteRecordModal').modal('show');
            });

            $(document).on('click', '#delete-record', function() {
                let id = $(this).data('id');
                $(`#delete_item_form_${id}`).submit();
            });


        });
    </script>
@endsection
