<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="red">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $__env->yieldContent('title'); ?> </title>
   
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>" type="image/x-icon">

    <?php echo $__env->make('admin.includes.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('custom-style'); ?>

</head>

<body>

<!-- Start Switcher -->

<div class="layout-wrapper">
    
	
	<!-- app-header -->
    <?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /app-header -->
    <!-- Start::app-sidebar -->
    <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End::app-sidebar -->

	<div class="main-content">
    <!-- Start::app-content -->
    <?php echo $__env->yieldContent('content'); ?>
		
	<!-- Footer Start -->
    <?php echo $__env->make('admin.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End::app-content -->
	</div>


    
	
	
</div>


<?php echo $__env->make('admin.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<?php echo $__env->yieldContent('custom-script'); ?>

</body>

</html>
<?php /**PATH C:\Users\HS LAPTOP\Downloads\2024 Downloads Sep\InHouse-web\resources\views/admin/layout/index.blade.php ENDPATH**/ ?>