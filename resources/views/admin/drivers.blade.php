@extends('admin.layout.index')
@section('title','InHouse | Drivers Management')
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
                                                           value="option">
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
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox"
                                                           name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td><a href="javascript:void(0);">1</a></td>
                                            <td>John Doe</td>
                                            <td>Driver License</td>
                                            <td>1234 5678 9123</td>
                                            <td>30/09/2030</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#editDriverModal" data-bs-toggle="modal"
                                                           class="text-primary d-inline-block edit-item-btn">
                                                            <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn"
                                                           data-bs-toggle="modal" href="#deleteRecordModal">
                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox"
                                                           name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>2</td>
                                            <td>Jane Smith</td>
                                            <td>Driver License</td>
                                            <td>1234 5678 9123</td>
                                            <td>30/09/2030</td>
                                            <td><span class="badge bg-danger">Block</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#editDriverModal" data-bs-toggle="modal"
                                                           class="text-primary d-inline-block edit-item-btn">
                                                            <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn"
                                                           data-bs-toggle="modal" href="#deleteRecordModal">
                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!-- Add Driver Modal -->
                            <div class="modal fade" id="addDriverModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Driver</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                        </div>
                                        <form class="tablelist-form" autocomplete="off">
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field"/>

                                                <div class="mb-3" id="modal-id" style="display: none;">
                                                    <label for="id-field1" class="form-label">ID</label>
                                                    <input type="text" id="id-field1" class="form-control"
                                                           placeholder="ID" readonly/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="driverName" class="form-label">Driver Name</label>
                                                    <input type="text" class="form-control" id="driverName"
                                                           placeholder="Enter driver name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status-field" class="form-label">License Type</label>
                                                    <select class="form-control" data-choices data-choices-search-false
                                                            name="status-field" id="status-field" required>
                                                        <option value="">Type</option>
                                                        <option value="License">Driver License</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="licenseNumber" class="form-label">License Number</label>
                                                    <input type="text" class="form-control" id="licenseNumber"
                                                           placeholder="Enter License Number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="licenseExpiration" class="form-label">License Expiration
                                                        Date</label>
                                                    <input type="text" class="form-control" id="datepicker-range"
                                                           data-provider="flatpickr" data-date-format="d M, Y"
                                                           data-range-date="true" placeholder="Select date">
                                                </div>
                                                <div>
                                                    <label for="status-field" class="form-label">Status</label>
                                                    <select class="form-control" data-choices data-choices-search-false
                                                            name="status-field" id="status-field" required>
                                                        <option value="">Status</option>
                                                        <option value="Active">Active</option>
														<option value="Active">Inactive</option>
                                                        <option value="Block">Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Driver Modal -->
                            <div class="modal fade" id="editDriverModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Driver</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                        </div>
                                        <form class="tablelist-form" autocomplete="off">
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field"/>

                                                <div class="mb-3" id="modal-id" style="display: none;">
                                                    <label for="id-field1" class="form-label">ID</label>
                                                    <input type="text" id="id-field1" class="form-control"
                                                           placeholder="ID" readonly/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="driverName" class="form-label">Driver Name</label>
                                                    <input type="text" class="form-control" id="driverName"
                                                           placeholder="Enter driver name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status-field" class="form-label">License Type</label>
                                                    <select class="form-control" data-choices data-choices-search-false
                                                            name="status-field" id="status-field" required>
                                                        <option value="">Type</option>
                                                        <option value="License">Driver License</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="licenseNumber" class="form-label">License Number</label>
                                                    <input type="text" class="form-control" id="licenseNumber"
                                                           placeholder="Enter License Number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="licenseExpiration" class="form-label">License Expiration
                                                        Date</label>
                                                    <input type="text" class="form-control" id="datepicker-range"
                                                           data-provider="flatpickr" data-date-format="d M, Y"
                                                           data-range-date="true" placeholder="Select date">
                                                </div>
                                                <div>
                                                    <label for="status-field" class="form-label">Status</label>
                                                    <select class="form-control" data-choices data-choices-search-false
                                                            name="status-field" id="status-field" required>
                                                        <option value="">Status</option>
                                                        <option value="Active">Active</option>
														<option value="Active">Inactive</option>
                                                        <option value="Block">Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

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

    </script>
@endsection
