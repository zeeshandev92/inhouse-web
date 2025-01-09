@extends('admin.layout.index')
@section('title','InHouse | Offices Management')
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
                        <h4 class="mb-sm-0">Offices Management</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Offices</li>
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
                                    <h5 class="fs-16 mt-2">Offices Listing</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1 flex-wrap">
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#addOffice"><i
                                                class="ri-add-line align-bottom me-1"></i> Add Office
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom-dashed border-bottom">
                            <form>
                                <div class="row g-3">
                                    <div class="col-xl-4">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xl-8">
                                        <div class="row g-3">
                                            <div class="col-sm-3">
                                                <div class="">
                                                    <input type="text" class="form-control" id="datepicker-range"
                                                           data-provider="flatpickr" data-date-format="d M, Y"
                                                           data-range-date="true" placeholder="Select date">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>
                                                    <select class="form-control" data-plugin="choices" data-choices
                                                            data-choices-search-false name="choices-single-default"
                                                            id="idStatus">
                                                        <option value="" selected>Account Status</option>
                                                        <option value="all">All</option>
                                                        <option value="Completed">Completed</option>
                                                        <option value="Pending">Pending</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-sm-3">
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

                                            <div class="col-sm-2">
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
                                            <th>Office</th>
                                            <th>Phone</th>
                                            <th>No. Of Employees</th>
                                            <th>Account Status</th>
                                            <th>Status</th>
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
                                            <td><a href="javascript:void(0);">1</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img
                                                            src="{{asset('dashboard_assets/assets/images/users/avatar-1.jpg')}}"
                                                            alt=""
                                                            class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 name">Nancy Solutions<br>nanacysolutions@gmail.com
                                                    </div>
                                                </div>
                                            </td>
                                            <td>000-000-000</td>
                                            <td><span class="badge bg-danger-subtle text-danger">0</span></td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <a href="#showModal" data-bs-toggle="modal"
                                                       class="text-danger d-inline-block edit-item-btn">
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox"
                                                           name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td><a href="javascript:void(0);">2</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img
                                                            src="{{asset('dashboard_assets/assets/images/users/avatar-2.jpg')}}"
                                                            alt=""
                                                            class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 name">Solutions Co<br>solutionsco@gmail.com
                                                    </div>
                                                </div>
                                            </td>
                                            <td>000-000-0000</td>
                                            <td><span class="badge bg-success-subtle text-success">5</span></td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td><span class="badge bg-danger">Block</span></td>
                                            <td>
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <a href="#showModal" data-bs-toggle="modal"
                                                       class="text-danger d-inline-block edit-item-btn">
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
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!-- Modal -->

                            <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Office</h5>
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
                                                    <label for="customername-field" class="form-label">Office
                                                        Name</label>
                                                    <input type="text" id="customername-field" class="form-control"
                                                           placeholder="Enter name" value="Nancy Solutions" required/>
                                                    <div class="invalid-feedback">Please enter a Office name.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email-field" class="form-label">Email</label>
                                                    <input type="email" id="email-field"
                                                           value="nanacysolutions@gmail.com" class="form-control"
                                                           placeholder="Enter email" readonly/>
                                                    <div class="invalid-feedback">Please enter an email.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone-field" class="form-label">Phone</label>
                                                    <input type="text" id="phone-field" class="form-control"
                                                           placeholder="Enter phone no." value="000-000-000" required/>
                                                    <div class="invalid-feedback">Please enter a phone.</div>
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
                                                    <button type="submit" class="btn btn-success" id="add-btn">Update
                                                        Customer
                                                    </button>
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--end modal -->

                            <!-- Modal -->

                            <div class="modal fade" id="addOffice" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Office</h5>
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
                                                    <label for="customername-field" class="form-label">Office
                                                        Name</label>
                                                    <input type="text" id="customername-field" class="form-control"
                                                           placeholder="Enter name" required/>
                                                    <div class="invalid-feedback">Please enter a Office name.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email-field" class="form-label">Email</label>
                                                    <input type="email" id="email-field" class="form-control"
                                                           placeholder="Enter email" readonly/>
                                                    <div class="invalid-feedback">Please enter an email.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone-field" class="form-label">Phone</label>
                                                    <input type="text" id="phone-field" class="form-control"
                                                           placeholder="Enter phone no." required/>
                                                    <div class="invalid-feedback">Please enter a phone.</div>
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
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--end modal -->
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
