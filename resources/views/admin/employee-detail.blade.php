@extends('admin.layout.index')
@section('title','InHouse | Employee Management')
@section('custom-style')
    <!-- glightbox css -->
    <link rel="stylesheet" href="{{asset('dashboard_assets/assets/libs/glightbox/css/glightbox.min.css')}}">
@endsection
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="{{asset('dashboard_assets/assets/images/profile-bg.jpg')}}" alt=""
                         class="profile-wid-img"/>
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="{{asset('dashboard_assets/assets/images/users/avatar-1.jpg')}}" alt="user-img"
                                 class="img-thumbnail rounded-circle"/>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white">Jane Cooper</h3>
                            <div class="me-2 text-white-50"><i
                                    class="ri-phone-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>+1 1234
                                5678 9123
                            </div>
                            <div class="text-white-50">
                                <i class="ri-user-location-fill me-1 text-white text-opacity-75 fs-16 align-middle"></i>6391
                                Elgin St. Celina, Delaware 10299
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-lg-auto order-last order-lg-0">
                        <div class="row text text-white-50 text-center">
                            <div class="col-lg-12">
                                <div class="p-2">
                                    <h4 class="text-white mb-1">1</h4>
                                    <p class="fs-14 mb-0">Level</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="d-flex profile-wrapper">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab"
                                       role="tab">
                                        <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                            class="d-none d-md-inline-block">Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                        <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                            class="d-none d-md-inline-block">Level</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Employee Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Spouse Details Section -->
                                        <div class="card mb-4 border shadow-sm">
                                            <div class="card-header bg-light">
                                                <h6 class="card-title mb-0">Spouse Details</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><strong>Name:</strong> Jenny Wilson</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Date of Birth:</strong> 16/08/1999</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Contact Number:</strong> +1 1234 5678 9123</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Marriage Year:</strong> 2023</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Children Details Section -->
                                        <div class="card mb-4 border shadow-sm">
                                            <div class="card-header bg-light">
                                                <h6 class="card-title mb-0">Children Details</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><strong>Name:</strong> Jane Robert</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Date of Birth:</strong> 10/04/2015</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Age:</strong> 8 years</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Emergency Contacts Section -->
                                        <div class="card mb-4 border shadow-sm">
                                            <div class="card-header bg-light">
                                                <h6 class="card-title mb-0">Emergency Contacts</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><strong>Name:</strong> Cameron Williamson</p>
                                                        <p><strong>Contact Number:</strong> +1 1234 5678 9012</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Name:</strong> Jane Cooper</p>
                                                        <p><strong>Contact Number:</strong> +1 1234 5678 9012</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Identity Proof Section -->
                                        <div class="card mb-4 border shadow-sm">
                                            <div class="card-header bg-light">
                                                <h6 class="card-title mb-0">Identity Proof</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><strong>Uploaded Document:</strong> State Issued Driver’s
                                                            License</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <img src="{{asset('dashboard_assets/assets/driving.png')}}"
                                                             alt=""
                                                             class="blog-img object-fit-cover" height="200">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <img src="{{asset('dashboard_assets/assets/cnic.png')}}" alt=""
                                                             class="blog-img object-fit-cover" height="200">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="activities" role="tabpanel">
                                <!-- Current Level Card -->
                                <div class="card mb-4 border shadow-sm">
                                    <div
                                        class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-white mb-0">Current Level</h5>
                                        <span class="badge bg-light text-primary px-3 py-2">Level 1</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">
                                            <strong>You are currently a Level 1 employee.</strong>
                                        </p>
                                        <div class="progress mb-3" style="height: 10px;">
                                            <div
                                                class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                role="progressbar"
                                                style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <p class="mb-0"><strong>Apprentice:</strong> 70% Complete</p>
                                    </div>
                                </div>
                                <div class="card mb-4 border shadow-sm">
                                    <div
                                        class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-white mb-0">Next Assessment</h5>
                                        <i class="bi bi-calendar-event-fill fs-4 text-white"></i>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2 text-muted">
                                            <strong>Level 1 Performance Review</strong>
                                        </p>
                                        <p class="mb-3 text-muted">
                                            <strong>Upcoming review date:</strong> <span
                                                class="text-dark"> 30/09/24</span>
                                        </p>
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <i class="bi bi-info-circle-fill me-2"></i>
                                            Office admin will review your performance on <strong>
                                                &nbsp;30/09/24</strong>. Please prepare yourself accordingly.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

@endsection
@section('custom-script')
    <!-- glightbox js -->
    <script src="{{asset('dashboard_assets/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- isotope-layout -->
    <script src="{{asset('dashboard_assets/assets/libs/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('dashboard_assets/assets/js/pages/gallery.init.js')}}"></script>
@endsection
