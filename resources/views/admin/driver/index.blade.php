@extends('admin.layout.index')
@section('title', 'InHouse | Drivers Management')
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
                        <h4 class="mb-sm-0">Drivers Management</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Drivers</li>
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
                    <div class="card" id="customerList">
                        <div class="card-header border-bottom-dashed">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mt-2">Driver Listing</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1 flex-wrap">
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                            id="create-btn" data-bs-target="#addDriverModal"><i
                                                class="ri-add-line align-bottom me-1"></i> Add Driver
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom-dashed border-bottom">
                            <form>
                                <div class="row g-3">
                                    <div class="col-xl-7">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-5">
                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <div class="">
                                                    <input type="text" class="form-control" id="datepicker-range"
                                                        data-provider="flatpickr" data-date-format="d M, Y"
                                                        data-range-date="true" placeholder="Select date">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-sm-4">
                                                <div>
                                                    <select class="form-control" data-plugin="choices" data-choices
                                                        data-choices-search-false name="choices-single-default"
                                                        id="idStatus">
                                                        <option value="" selected>Status</option>
                                                        <option value="all">All</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Active">Inactive</option>
                                                        <option value="Block">Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-sm-4">
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
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table id="scroll-horizontal"
                                        class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                            value="option" @disabled($drivers->count() == 0)>
                                                    </div>
                                                </th>
                                                <th>ID</th>
                                                <th>Driver Name</th>
                                                <th>License Type</th>
                                                <th>License Number</th>
                                                <th>License Expiration Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($drivers as $i => $driver)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox"
                                                                name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td><a href="javascript:void(0);">{{ ++$i }}</a></td>
                                                    <td>{{ $driver->name }}</td>
                                                    <td>{{ $driver->license_type }}</td>
                                                    <td>{{ $driver->license_no }}</td>
                                                    <td>{{ $driver->license_expiry_date }}</td>
                                                    <td><span class="badge bg-success">{{ $driver->status ?? 'N/A' }}</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover" data-bs-placement="top"
                                                                title="Edit">
                                                                {{-- <a href="#editDriverModal" data-bs-toggle="modal"
                                                                    class="text-primary d-inline-block edit-item-btn">
                                                                    <i class="ri-pencil-fill fs-16"></i>
                                                                </a> --}}
                                                                <button type="button" data-id="{{ $driver->id ?? '' }}"
                                                                    class="btn btn-link text-primary d-inline-block edit-item-btn p-0">
                                                                    <i class="ri-pencil-fill fs-16"></i>
                                                                </button>
                                                            </li>
                                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover" data-bs-placement="top"
                                                                title="Remove">
                                                                {{-- <a class="text-danger d-inline-block remove-item-btn"
                                                                    data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                </a> --}}
                                                                <form id="delete_item_form_{{ $driver->id }}"
                                                                    action="{{ route('drivers.destroy', $driver->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" data-id="{{ $driver->id }}"
                                                                        class="btn p-0 text-danger d-inline-block remove-item-btn">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center">No data found</td>
                                                </tr>
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!-- Add Driver Modal -->
                            @include('admin.driver.create')

                            <!-- Edit Driver Modal -->
                            <div id="edit_content"></div>

                        </div>
                    </div>
                </div>

            </div>
            <!--end col-->
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
                let url = "{{ route('drivers.index') }}";
                // Perform Ajax request
                $.ajax({
                    type: 'GET',
                    url: `${url}/${id}/edit`,
                    success: function(data, status) {
                        $('#edit_content').html(data);
                        $('#editDriverModal').modal('show');
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
