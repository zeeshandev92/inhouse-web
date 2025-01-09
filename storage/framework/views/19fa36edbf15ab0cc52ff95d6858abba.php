<?php $__env->startSection('title','InHouse | Category Management'); ?>
<?php $__env->startSection('custom-style'); ?>
    <style>

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div
                        class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
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
                                                       value="option">
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
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>1</td>
                                        <td>HVAC</td>
                                        <td>2024-12-15</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                        <td>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#editCategoryModal" data-bs-toggle="modal"
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
                                        <td>Plumbing</td>
                                        <td>2024-12-14</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#editCategoryModal" data-bs-toggle="modal"
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>3</td>
                                        <td>Roofing</td>
                                        <td>2024-12-13</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                        <td>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#editCategoryModal" data-bs-toggle="modal"
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>4</td>
                                        <td>Restoration</td>
                                        <td>2024-12-12</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#editCategoryModal" data-bs-toggle="modal"
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>5</td>
                                        <td>Electrical</td>
                                        <td>2024-12-11</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                        <td>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#editCategoryModal" data-bs-toggle="modal"
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox"
                                                       name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>6</td>
                                        <td>Pest control</td>
                                        <td>2024-12-10</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#editCategoryModal" data-bs-toggle="modal"
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
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Add Category Modal -->
                        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title">Add Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form autocomplete="off">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="category-name" class="form-label">Category Name</label>
                                                <input type="text" id="category-name" class="form-control"
                                                       placeholder="Enter category name" required>
                                                <div class="invalid-feedback">Please enter a category name.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-control" data-plugin="choices" data-choices
                                                        data-choices-search-false name="choices-single-default"
                                                        id="idStatus">
                                                    <option value="" selected>Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Block">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-success">Add Category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Category Modal -->
                        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title">Edit Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form autocomplete="off">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="edit-category-name" class="form-label">Category Name</label>
                                                <input type="text" id="edit-category-name" class="form-control"
                                                       placeholder="Enter category name" value="HVAC" required>
                                                <div class="invalid-feedback">Please enter a category name.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-control" data-plugin="choices" data-choices
                                                        data-choices-search-false name="choices-single-default"
                                                        id="idStatus">
                                                    <option value="" selected>Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Block">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-success">Update Category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\personal\InHouse-web\resources\views/admin/category.blade.php ENDPATH**/ ?>