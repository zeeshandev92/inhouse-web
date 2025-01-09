@extends('admin.layout.index')
@section('title','InHouse | Admin Dashboard')
@section('custom-style')
    <style>

    </style>
@endsection
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Good Morning, Admin!</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store
                                            today.</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-sm-auto">
                                                    <div class="input-group">
                                                        <input type="text"
                                                               class="form-control border-0 minimal-border dash-filter-picker shadow"
                                                               data-provider="flatpickr" data-range-date="true"
                                                               data-date-format="d M, Y"
                                                               data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                        <div
                                                            class="input-group-text bg-primary border-primary text-white">
                                                            <i class="ri-calendar-2-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Employees</h4>
                                        <div>
                                            <button type="button"
                                                    class="btn btn-soft-secondary material-shadow-none btn-sm">
                                                ALL
                                            </button>
                                            <button type="button"
                                                    class="btn btn-soft-secondary material-shadow-none btn-sm">
                                                1M
                                            </button>
                                            <button type="button"
                                                    class="btn btn-soft-secondary material-shadow-none btn-sm">
                                                6M
                                            </button>
                                            <button type="button"
                                                    class="btn btn-soft-primary material-shadow-none btn-sm">
                                                1Y
                                            </button>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-header p-0 border-0 bg-light-subtle">
                                        <div class="row g-0 text-center">
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0">
                                                    <h5 class="mb-1"><span class="counter-value"
                                                                           data-target="7585">0</span>
                                                    </h5>
                                                    <p class="text-muted mb-0">Total</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0">
                                                    <h5 class="mb-1"><span class="counter-value"
                                                                           data-target="2289">0</span></h5>
                                                    <p class="text-muted mb-0">Active</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0">
                                                    <h5 class="mb-1"><span class="counter-value"
                                                                           data-target="367">0</span></h5>
                                                    <p class="text-muted mb-0">Inactive</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                    <h5 class="mb-1 text-success"><span class="counter-value"
                                                                                        data-target="18.92">0</span>%
                                                    </h5>
                                                    <p class="text-muted mb-0">Employees Ratio</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body p-0 pb-2">
                                        <div class="w-100">
                                            <div id="customer_impression_charts"
                                                 data-colors='["--vz-primary", "--vz-success", "--vz-danger"]'
                                                 data-colors-minimal='["--vz-light", "--vz-primary", "--vz-info"]'
                                                 data-colors-saas='["--vz-success", "--vz-info", "--vz-danger"]'
                                                 data-colors-modern='["--vz-warning", "--vz-primary", "--vz-success"]'
                                                 data-colors-interactive='["--vz-info", "--vz-primary", "--vz-danger"]'
                                                 data-colors-creative='["--vz-warning", "--vz-primary", "--vz-danger"]'
                                                 data-colors-corporate='["--vz-light", "--vz-primary", "--vz-secondary"]'
                                                 data-colors-galaxy='["--vz-secondary", "--vz-primary", "--vz-primary-rgb, 0.50"]'
                                                 data-colors-classic='["--vz-light", "--vz-primary", "--vz-secondary"]'
                                                 data-colors-vintage='["--vz-success", "--vz-primary", "--vz-secondary"]'
                                                 class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <div class="col-xxl-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Offices Overview</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                                        class="text-muted">Current Year<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body px-0">
                                        <ul class="list-inline main-chart text-center mb-0">
                                            <li class="list-inline-item chart-border-left me-0 border-0">
                                                <h4 class="text-primary">584k <span
                                                        class="text-muted d-inline-block fs-13 align-middle ms-2">Registered</span>
                                                </h4>
                                            </li>
                                            <li class="list-inline-item chart-border-left me-0">
                                                <h4>4k<span
                                                        class="text-muted d-inline-block fs-13 align-middle ms-2">Unregistered</span>
                                                </h4>
                                            </li>
                                            <li class="list-inline-item chart-border-left me-0">
                                                <h4><span data-plugin="counterup">3.6</span>%<span
                                                        class="text-muted d-inline-block fs-13 align-middle ms-2">Offices Ratio</span>
                                                </h4>
                                            </li>
                                        </ul>

                                        <div id="revenue-expenses-charts" data-colors='["--vz-success", "--vz-danger"]'
                                             data-colors-minimal='["--vz-primary", "--vz-info"]'
                                             data-colors-interactive='["--vz-info", "--vz-primary"]'
                                             data-colors-galaxy='["--vz-primary", "--vz-secondary"]'
                                             data-colors-classic='["--vz-primary", "--vz-secondary"]'
                                             class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="employeeManagement">
                                    <div class="card-header border-bottom-dashed">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-16 mt-2">Employees Listing</h5>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="d-flex gap-1 flex-wrap">
                                                    <a href="{{route('employee')}}" class="btn btn-success add-btn"><i
                                                            class="ri-eye-fill align-bottom me-1"></i> View All
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom-dashed border-bottom">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-xl-7">
                                                    <div class="search-box">
                                                        <input type="text" class="form-control search"
                                                               placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-5">
                                                    <div class="row g-3">
                                                        <div class="col-sm-7">
                                                            <div class="">
                                                                <input type="text" class="form-control"
                                                                       id="datepicker-range"
                                                                       data-provider="flatpickr"
                                                                       data-date-format="d M, Y"
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
                                                            <input class="form-check-input fs-15" type="checkbox"
                                                                   id="checkAll"
                                                                   value="option">
                                                        </div>
                                                    </th>
                                                    <th>ID</th>
                                                    <th>Employee Name</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>
                                                    <th>Level</th>
                                                    <th>Role</th>
                                                    <th>Date Added</th>
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
                                                    <td>1</td>
                                                    <td>John Doe</td>
                                                    <td>john@example.com</td>
                                                    <td>000-000-000</td>
                                                    <td>Level 1</td>
                                                    <td>Technician</td>
                                                    <td>2024-12-15</td>
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
                                                    <td>jane@example.com</td>
                                                    <td>000-000-000</td>
                                                    <td>Level 2</td>
                                                    <td>Electrician</td>
                                                    <td>2024-12-16</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox"
                                                                   name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>3</td>
                                                    <td>John Doe</td>
                                                    <td>john@example.com</td>
                                                    <td>000-000-000</td>
                                                    <td>Level 3</td>
                                                    <td>Plumber</td>
                                                    <td>2024-12-15</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

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
                                                    <a href="{{route('offices.index')}}" class="btn btn-success add-btn"><i
                                                            class="ri-eye-fill align-bottom me-1"></i> View All
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom-dashed border-bottom">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-xl-4">
                                                    <div class="search-box">
                                                        <input type="text" class="form-control search"
                                                               placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-8">
                                                    <div class="row g-3">
                                                        <div class="col-sm-3">
                                                            <div class="">
                                                                <input type="text" class="form-control"
                                                                       id="datepicker-range"
                                                                       data-provider="flatpickr"
                                                                       data-date-format="d M, Y"
                                                                       data-range-date="true" placeholder="Select date">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div>
                                                                <select class="form-control" data-plugin="choices"
                                                                        data-choices
                                                                        data-choices-search-false
                                                                        name="choices-single-default"
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
                                                                <select class="form-control" data-plugin="choices"
                                                                        data-choices
                                                                        data-choices-search-false
                                                                        name="choices-single-default"
                                                                        id="idStatus">
                                                                    <option value="" selected>Status</option>
                                                                    <option value="all">All</option>
                                                                    <option value="Active">Active</option>
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
                                                                <input class="form-check-input fs-15" type="checkbox"
                                                                       id="checkAll"
                                                                       value="option">
                                                            </div>
                                                        </th>
                                                        <th>ID</th>
                                                        <th>Office</th>
                                                        <th>Phone</th>
                                                        <th>No. Of Employees</th>
                                                        <th>Account Status</th>
                                                        <th>Status</th>
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
                                                        <td><span class="badge bg-danger-subtle text-danger">0</span>
                                                        </td>
                                                        <td><span class="badge bg-danger">Pending</span></td>
                                                        <td><span class="badge bg-success">Active</span></td>
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
                                                        <td><span class="badge bg-success-subtle text-success">5</span>
                                                        </td>
                                                        <td><span class="badge bg-success">Completed</span></td>
                                                        <td><span class="badge bg-danger">Block</span></td>
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
                                                                <input type="text" id="customername-field"
                                                                       class="form-control"
                                                                       placeholder="Enter name" value="Nancy Solutions"
                                                                       required/>
                                                                <div class="invalid-feedback">Please enter a Office
                                                                    name.
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="email-field"
                                                                       class="form-label">Email</label>
                                                                <input type="email" id="email-field"
                                                                       value="nanacysolutions@gmail.com"
                                                                       class="form-control"
                                                                       placeholder="Enter email" readonly/>
                                                                <div class="invalid-feedback">Please enter an email.
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="phone-field"
                                                                       class="form-label">Phone</label>
                                                                <input type="text" id="phone-field" class="form-control"
                                                                       placeholder="Enter phone no." value="000-000-000"
                                                                       required/>
                                                                <div class="invalid-feedback">Please enter a phone.
                                                                </div>
                                                            </div>


                                                            <div>
                                                                <label for="status-field"
                                                                       class="form-label">Status</label>
                                                                <select class="form-control" data-choices
                                                                        data-choices-search-false
                                                                        name="status-field" id="status-field" required>
                                                                    <option value="">Status</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Block">Block</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-success"
                                                                        id="add-btn">Update
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
                                                                <input type="text" id="customername-field"
                                                                       class="form-control"
                                                                       placeholder="Enter name" required/>
                                                                <div class="invalid-feedback">Please enter a Office
                                                                    name.
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="email-field"
                                                                       class="form-label">Email</label>
                                                                <input type="email" id="email-field"
                                                                       class="form-control"
                                                                       placeholder="Enter email" readonly/>
                                                                <div class="invalid-feedback">Please enter an email.
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="phone-field"
                                                                       class="form-label">Phone</label>
                                                                <input type="text" id="phone-field" class="form-control"
                                                                       placeholder="Enter phone no." required/>
                                                                <div class="invalid-feedback">Please enter a phone.
                                                                </div>
                                                            </div>


                                                            <div>
                                                                <label for="status-field"
                                                                       class="form-label">Status</label>
                                                                <select class="form-control" data-choices
                                                                        data-choices-search-false
                                                                        name="status-field" id="status-field" required>
                                                                    <option value="">Status</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Block">Block</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-success"
                                                                        id="add-btn">
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
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
        </div>
    </div>
    <!-- End Page-content -->

@endsection
@section('custom-script')

    <!-- Dashboard init -->
    <script src="{{asset('dashboard_assets/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>
    <!-- Dashboard init -->
    <script src="{{asset('dashboard_assets/assets/js/pages/dashboard-crm.init.js')}}"></script>

@endsection
