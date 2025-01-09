<?php $__env->startSection('title', 'InHouse | Offices Management'); ?>
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
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
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

            <?php if($errors->any()): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                <?php echo e($errors->first()); ?>

                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php elseif(Session::has('success')): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div>
                                <?php echo e(Session::get('success')); ?>

                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

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
                                            id="create-btn" data-bs-target="#addOfficeModal"><i
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
                                            <?php $__empty_1 = true; $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox"
                                                                name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td><a href="javascript:void(0);"><?php echo e(++$i); ?></a></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="<?php echo e(asset('dashboard_assets/assets/images/users/avatar-1.jpg')); ?>"
                                                                    alt=""
                                                                    class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 name"> <?php echo e($office->name); ?>

                                                                <br><?php echo e($office->email); ?>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo e($office->phone_no); ?></td>
                                                    <td><span class="badge bg-danger-subtle text-danger">0</span></td>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                    <td><span class="badge bg-success"><?php echo e($office->status); ?></span></td>
                                                    <td>
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            title="Edit">
                                                            
                                                            <button type="button" data-id="<?php echo e($office->id ?? ''); ?>"
                                                                class="btn btn-link text-primary d-inline-block edit-item-btn p-0">
                                                                <i class="ri-pencil-fill fs-16"></i>
                                                            </button>
                                                        </li>

                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            title="Remove">
                                                            
                                                            <form id="delete_item_form_<?php echo e($office->id); ?>"
                                                                action="<?php echo e(route('offices.destroy', $office->id)); ?>"
                                                                method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button type="button" data-id="<?php echo e($office->id); ?>"
                                                                    class="btn p-0 text-danger d-inline-block remove-item-btn">
                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="8" class="text-center">No data found</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!-- Modal -->

                            <div id="edit_content"></div>
                            <!--end modal -->

                            <!-- Modal -->
                            <?php echo $__env->make('admin.office.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-script'); ?>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-item-btn', function() {
                let id = $(this).data('id');
                let url = "<?php echo e(route('offices.index')); ?>";
                // Perform Ajax request
                $.ajax({
                    type: 'GET',
                    url: `${url}/${id}/edit`,
                    success: function(data, status) {
                        $('#edit_content').html(data);
                        $('#editOfficeModal').modal('show');
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\personal\InHouse-web\resources\views/admin/office/index.blade.php ENDPATH**/ ?>