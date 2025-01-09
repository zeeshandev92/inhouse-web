<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('dashboard_assets/assets/images/logo-sm.png')); ?>" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="<?php echo e(asset('dashboard_assets/assets/images/logo.png')); ?>" alt="" height="90">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('dashboard_assets/assets/images/logo-sm.png')); ?>" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="<?php echo e(asset('dashboard_assets/assets/images/logo.png')); ?>" alt="" height="90">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user"
                             src="<?php echo e(asset('dashboard_assets/assets/images/users/avatar-1.jpg')); ?>" alt="Header Avatar">
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Admin</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                                    class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span
                                    class="align-middle">Online</span></span>
                        </span>
                    </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Admin!</h6>


            <a class="dropdown-item" href="pages-profile-settings.html"><span
                    class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>

            <a class="dropdown-item" href="<?php echo e(route('/')); ?>"><i
                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                                                                                         data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('dashboard')); ?>">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>

                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('analytics')); ?>">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">User Analytics</span>
                    </a>

                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Management</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('user')); ?>">
                        <i class="ri-file-user-fill"></i> <span data-key="t-authentication">Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('drivers')); ?>">
                        <i class="ri-car-fill"></i> <span data-key="t-authentication">Drivers</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('offices')); ?>">
                        <i class="ri-building-line"></i> <span data-key="t-authentication">Offices</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('category')); ?>">
                        <i class="ri-tornado-line"></i> <span data-key="t-authentication">Categories</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('employee')); ?>">
                        <i class="ri-user-2-fill"></i> <span data-key="t-authentication">Employees</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('content')); ?>">
                        <i class="ri-pages-fill "></i> <span data-key="t-authentication">Content</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('calendar')); ?>">
                        <i class="ri-calendar-event-line"></i> <span data-key="t-authentication">Calendar</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('customization')); ?>">
                        <i class="ri-settings-2-fill"></i> <span data-key="t-authentication">Customization</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH C:\laragon\www\personal\InHouse-web\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>