@extends('admin.layout.index')
@section('title','InHouse | Customization')
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
                        <h4 class="mb-sm-0">Customization</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Customization</li>
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
                                    <h5 class="fs-16 mt-2">Customization</h5>
                                </div>
                            </div>
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
                                            <th>Office Name</th>
                                            <th>Color Scheme</th>
                                            <th>Logo</th>
                                            <th>Location</th>
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
                                            <td>#0c1cb2, #f06548</td>
                                            <td>_</td>
                                            <td>6391 Elgin St. Celina, Delaware 10299</td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#editCustomModal" data-bs-toggle="modal"
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

                            <!-- Edit Driver Modal -->
                            <div class="modal fade" id="editCustomModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Settings</h5>
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

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="officeName" class="form-label">Office
                                                                Name</label>
                                                            <input type="text" class="form-control" id="officeName"
                                                                   value="Nancy Solutions" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="primaryColor" class="form-label">Primary
                                                                Color</label>
                                                            <input type="text" class="form-control" id="primaryColor"
                                                                   placeholder="Enter Primary Color">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="secondaryColor" class="form-label">Secondary
                                                                Color</label>
                                                            <input type="text" class="form-control" id="secondaryColor"
                                                                   placeholder="Enter Secondary Color">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="logo" class="form-label">Logo
                                                            </label>
                                                            <input type="file" class="form-control" id="logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="location" class="form-label">Location</label>
                                                            <input type="text" class="form-control" id="location"
                                                                   placeholder="Enter Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex gap-2 mb-3">
                                                            <label for="logo" class="form-label mb-1">Multiple Locations
                                                            </label>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="flexSwitchCheckDefault">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="multiLocation" id="custom">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="mb-3">
                                                                <label for="location" class="form-label">Location</label>
                                                                <input type="text" id="rest" class="form-control"
                                                                       placeholder="Enter Location" required="">
                                                                <input type="hidden" id="id-field">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="mb-3">
                                                                <label for="logo" class="form-label">Logo</label>
                                                                <input type="file" id="time" class="form-control">
                                                                <input type="hidden" id="id-field">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="">
                                                                <label for="" class="form-label"></label>
                                                                <li class="list-inline-item mt-3"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Delete">
                                                                    <a class="text-danger d-inline-block remove-item-btn mt-3"
                                                                       data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="mb-3">
                                                                <label for="location" class="form-label">Location</label>
                                                                <input type="text" id="rest" class="form-control"
                                                                       placeholder="Enter Location" required="">
                                                                <input type="hidden" id="id-field">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="mb-3">
                                                                <label for="logo" class="form-label">Logo</label>
                                                                <input type="file" id="time" class="form-control">
                                                                <input type="hidden" id="id-field">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="">
                                                                <label for="" class="form-label"></label>
                                                                <li class="list-inline-item mt-3"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Delete">
                                                                    <a class="text-danger d-inline-block remove-item-btn mt-3"
                                                                       data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                id="add-btn">Add More +
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary" id="add-btn">
                                                        Update Settings
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
