@extends('admin.layout.index')
@section('title','InHouse | Content Management')
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
                    <div
                        class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Content Management</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Content</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="contentManagement">
                        <div class="card-header border-bottom-dashed">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mt-2">Content Management</h5>
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
                                            <div class="col-sm-7">
                                                <div class="">
                                                    <input type="text" class="form-control" id="datepicker-range"
                                                           data-provider="flatpickr" data-date-format="d M, Y"
                                                           data-range-date="true" placeholder="Select date">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-sm-5">
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
                                                       value="option">
                                            </div>
                                        </th>
                                        <th>Level</th>
                                        <th>Uploaded By</th>
                                        <th>Content Name</th>
                                        <th>Date Uploaded</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>Level 1</td>
                                        <td>John Doe</td>
                                        <td>Basic HVAC Principles</td>
                                        <td>2024-12-15</td>
                                        <td>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Detail">
                                                <a href="{{route('content-detail')}}"
                                                   class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-eye-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                <a class="text-danger d-inline-block remove-item-btn"
                                                   data-bs-toggle="modal" href="#deleteRecordModal">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>Level 2</td>
                                        <td>Jane Smith</td>
                                        <td>HVAC Safety Guidelines</td>
                                        <td>2024-12-16</td>
                                        <td>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Detail">
                                                <a href="{{route('content-detail')}}"
                                                   class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-eye-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                <a class="text-danger d-inline-block remove-item-btn"
                                                   data-bs-toggle="modal" href="#deleteRecordModal">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </td>
                                    </tr>
                                    <!-- Add more content rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

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

    </script>
@endsection
