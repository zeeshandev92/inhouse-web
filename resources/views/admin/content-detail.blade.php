@extends('admin.layout.index')
@section('title','InHouse | Content Detail')
@section('custom-style')
    <style>
        .blog-grid-card .blog-img {
            height: 230px;
            width: 100%;
        }

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
                        <h4 class="mb-sm-0">Content Detail</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row g-4 mb-3">
                <div class="col-sm">
                    <div class="d-flex justify-content-sm-end gap-2">
                        <div class="search-box ms-2">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="ri-search-line search-icon"></i>
                        </div>

                        <select class="form-control w-25">
                            <option value="All">All</option>
                            <option value="Today">Today</option>
                            <option value="Yesterday" selected="">Yesterday</option>
                            <option value="Last 7 Days">Last 7 Days</option>
                            <option value="Last 30 Days">Last 30 Days</option>
                            <option value="This Month">This Month</option>
                            <option value="Last Year">Last Year</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-4 col-lg-6">
                    <div class="card overflow-hidden blog-grid-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('dashboard_assets/assets/content-1.png')}}" alt=""
                                 class="blog-img object-fit-cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Introduction to HVAC Systems
                            </h5>
                            <p class="text-muted mb-2">A detailed document outlining essential safety practices for HVAC
                                technicians,  requirements and emergency procedures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6">
                    <div class="card overflow-hidden blog-grid-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('dashboard_assets/assets/content-2.png')}}" alt=""
                                 class="blog-img object-fit-cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                HVAC Safety Guidelines
                            </h5>
                            <p class="text-muted mb-2">A detailed document outlining essential safety practices for HVAC
                                technicians,  requirements and emergency procedures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6">
                    <div class="card overflow-hidden blog-grid-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('dashboard_assets/assets/content-3.png')}}" alt=""
                                 class="blog-img object-fit-cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                HVAC Terms and Definitions
                            </h5>
                            <p class="text-muted mb-2">An audio glossary of common HVAC terms and definitions, helping
                                employees familiarize themselves with industry language.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-4 col-lg-6">
                    <div class="card overflow-hidden blog-grid-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('dashboard_assets/assets/content-4.png')}}" alt=""
                                 class="blog-img object-fit-cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Basic HVAC Principles
                            </h5>
                            <p class="text-muted mb-2">Explains the fundamental principles of heating, ventilation, and air
                                conditioning, including thermodynamics and fluid mechanics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6">
                    <div class="card overflow-hidden blog-grid-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('dashboard_assets/assets/content-5.png')}}" alt=""
                                 class="blog-img object-fit-cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                HVAC Component Specifications
                            </h5>
                            <p class="text-muted mb-2">Comprehensive specs for common HVAC components, including
                                compressors, condensers, and evaporators.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6">
                    <div class="card overflow-hidden blog-grid-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('dashboard_assets/assets/content-6.png')}}" alt=""
                                 class="blog-img object-fit-cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Best Practices in Customer Service
                            </h5>
                            <p class="text-muted mb-2">Tips on how to communicate effectively with customers and provide
                                exceptional service in the HVAC field.</p>
                        </div>
                    </div>
                </div>
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
