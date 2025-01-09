<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="red">

<head>

    <meta charset="utf-8" />
    <title>Sign In | InHouse Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('dashboard_assets/assets/images/favicon.ico')); ?>">

    <!-- Layout config Js -->
    <script src="<?php echo e(asset('dashboard_assets/assets/js/layout.js')); ?>"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('dashboard_assets/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('dashboard_assets/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(asset('dashboard_assets/assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php echo e(asset('dashboard_assets/assets/css/custom.min.css')); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
									<a href="javascript:void(0)" class="d-inline-block auth-logo mb-3">
										<img src="<?php echo e(asset('dashboard_assets/assets/images/logo.png')); ?>" alt="" height="120">
									</a>
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to dashboard.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="post">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary w-100" type="submit">Sign In</a>
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> InHouse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('dashboard_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard_assets/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard_assets/assets/libs/node-waves/waves.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard_assets/assets/libs/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard_assets/assets/js/pages/plugins/lord-icon-2.1.0.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard_assets/assets/js/plugins.js')); ?>"></script>

    <!-- particles js -->
    <script src="<?php echo e(asset('dashboard_assets/assets/libs/particles.js/particles.js')); ?>"></script>
    <!-- particles app js -->
    <script src="<?php echo e(asset('dashboard_assets/assets/js/pages/particles.app.js')); ?>"></script>
    <!-- password-addon init -->
    <script src="<?php echo e(asset('dashboard_assets/assets/js/pages/password-addon.init.js')); ?>"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/master/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2024 14:16:16 GMT -->
</html>
<?php /**PATH C:\laragon\www\personal\InHouse-web\resources\views/admin/login.blade.php ENDPATH**/ ?>