@extends('admin.layout.index')
@section('title','InHouse | Office Detail')
@section('custom-style')
    <!-- glightbox css -->
    <link rel="stylesheet" href="{{asset('dashboard_assets/assets/libs/glightbox/css/glightbox.min.css')}}">
@endsection
@section('content')

	<div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="{{asset('dashboard_assets/assets/images/profile-bg.jpg')}}" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="{{asset('dashboard_assets/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">Kathryn Murphy</h3>
                                    <p class="text-white text-opacity-75">Sports | Dance | Music</p>
									<p  class="text-white text-opacity-75"><b>Daily News: </b>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At olores et ea rebum.  </p>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2"><i class="ri-phone-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>1234 9876 2586</div>
                                        <div>
                                            <i class="ri-mail-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>kathi_123@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12 col-lg-auto order-last order-lg-0">
                                <div class="row text text-white-50 text-center">
                                    <div class="col-lg-6 col-4">
                                        <div class="p-2">
                                            <h4 class="text-white mb-1">24.3K</h4>
                                            <p class="fs-14 mb-0">Supporters</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-4">
                                        <div class="p-2">
                                            <h4 class="text-white mb-1">1.3K</h4>
                                            <p class="fs-14 mb-0">Likes</p>
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
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Gallery</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">NFTs</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Events</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Wall</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-1.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-1.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
												   <div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-2.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-2.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
												   <div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-3.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-3.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
												   <div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-1.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-1.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
													<div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-5.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-5.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
												   <div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-6.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-6.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
												   <div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-7.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-7.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
												   <div class="element-item col-xxl-3 col-xl-4 col-sm-6">
														<div class="gallery-box card">
															<div class="gallery-container">
																<a class="image-popup" href="{{asset('dashboard_assets/assets/images/small/img-8.jpg')}}" title="">
																	<img class="gallery-img img-fluid mx-auto" src="{{asset('dashboard_assets/assets/images/small/img-8.jpg')}}" alt="" />
																</a>
															</div>
														</div>
													</div>
											   </div>
											</div>
										</div>

                                    </div>
                                    <div class="tab-pane fade" id="activities" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
												<div class="row">
													<div class="col-sm-3">
														<div class="col list-element">
															<div class="card explore-box card-animate">
																<div class="explore-place-bid-img">
																	<img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="card-img-top explore-img">
																</div>
																<div class="bookmark-icon position-absolute top-0 end-0 p-2">            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true">
																		<i class="mdi mdi-cards-heart fs-16"></i>
																	 </button>
																</div>
																<div class="card-body">
																	<p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 16,479 </p>                   <h5 class="mb-1">
																		<a href="javascript:void(0)">Moderator</a
																	</h5>
																	<p class="text-muted mb-0 fs-12 mt-1 fw-normal">Sports | Dance</p>
																</div>
																<div class="card-footer border-top border-top-dashed">                 <div class="d-flex align-items-center">                        		<div class="flex-grow-1 fs-14">
																			<i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> 654</span>
																	  </div>
																	  <h5 class="flex-shrink-0 fs-14 text-primary mb-0">#001</h5>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="col list-element">
															<div class="card explore-box card-animate">
																<div class="explore-place-bid-img">
																	<img class="card-img-top explore-img" src="{{asset('dashboard_assets/assets/images/nft/img-03.jpg')}}">
																</div>
																<div class="bookmark-icon position-absolute top-0 end-0 p-2">            <button type="button" class="btn btn-icon" data-bs-toggle="button" aria-pressed="true">
																		<i class="mdi mdi-cards-heart fs-16"></i>
																	 </button>
																</div>
																<div class="card-body">
																	<p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 16,479 </p>                   <h5 class="mb-1">
																		<a href="javascript:void(0)">Moderator</a
																	</h5>
																	<p class="text-muted mb-0 fs-12 mt-1 fw-normal">Sports | Dance</p>
																</div>
																<div class="card-footer border-top border-top-dashed">                 <div class="d-flex align-items-center">                        		<div class="flex-grow-1 fs-14">
																			<i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> 654</span>
																	  </div>
																	  <h5 class="flex-shrink-0 fs-14 text-primary mb-0">#001</h5>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="col list-element">
															<div class="card explore-box card-animate">
																<div class="explore-place-bid-img">
																	<img src="https://img.themesbrand.com/velzon/images/img-3.gif" alt="" class="card-img-top explore-img">
																</div>
																<div class="bookmark-icon position-absolute top-0 end-0 p-2">            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true">
																		<i class="mdi mdi-cards-heart fs-16"></i>
																	 </button>
																</div>
																<div class="card-body">
																	<p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 16,479 </p>                   <h5 class="mb-1">
																		<a href="javascript:void(0)">Moderator</a
																	</h5>
																	<p class="text-muted mb-0 fs-12 mt-1 fw-normal">Sports | Dance</p>
																</div>
																<div class="card-footer border-top border-top-dashed">                 <div class="d-flex align-items-center">                        		<div class="flex-grow-1 fs-14">
																			<i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> 654</span>
																	  </div>
																	  <h5 class="flex-shrink-0 fs-14 text-primary mb-0">#001</h5>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="col list-element">
															<div class="card explore-box card-animate">
																<div class="explore-place-bid-img">
																	<img src="https://img.themesbrand.com/velzon/images/img-2.gif" alt="" class="card-img-top explore-img">
																</div>
																<div class="bookmark-icon position-absolute top-0 end-0 p-2">            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true">
																		<i class="mdi mdi-cards-heart fs-16"></i>
																	 </button>
																</div>
																<div class="card-body">
																	<p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 16,479 </p>                   <h5 class="mb-1">
																		<a href="javascript:void(0)">Moderator</a
																	</h5>
																	<p class="text-muted mb-0 fs-12 mt-1 fw-normal">Sports | Dance</p>
																</div>
																<div class="card-footer border-top border-top-dashed">                 <div class="d-flex align-items-center">                        		<div class="flex-grow-1 fs-14">
																			<i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> 654</span>
																	  </div>
																	  <h5 class="flex-shrink-0 fs-14 text-primary mb-0">#001</h5>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="projects" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
													<div class="col-xxl-3 col-sm-6 project-card">
														<div class="card card-height-100">
															<div class="card-body">
																<div class="d-flex flex-column h-100">

																	<div class="d-flex mb-2">
																		<div class="flex-shrink-0 me-3">
																			<div class="avatar-sm">
																				<span class="avatar-title bg-warning-subtle rounded ">
																					<img src="{{asset('dashboard_assets/assets/images/small/img-7.jpg')}}" alt="" class="img-fluid img-avatar p-1">
																				</span>
																			</div>
																		</div>
																		<div class="flex-grow-1">
																			<h5 class="mb-1 fs-15"><a href="javascript:void(0)" class="text-body">Best Street Dancer</a></h5>
																			<p class="text-muted text-truncate-two-lines mb-3">Sports | Dance | Music</p>

																		</div>
																	</div>
																	<h6 class="fs-14 fw-medium">Winner. TBD</h6>
																	<p class="mb-1 text-muted fs-12 fw-normal"><i class="ri-gift-line mr-1"></i>200$ Price</p>
																	<p class="mb-1 text-muted fs-12 fw-normal "><i class="ri-hand-heart-line mr-1"></i>2458$ in donation</p>
																	<p class="mb-1 text-muted fs-12 fw-normal"><i class="ri-group-line mr-1"></i>325 Participants</p>
																</div>


															</div>
															<!-- end card body -->
															<div class="card-footer bg-transparent border-top-dashed py-2">
																<div class="d-flex align-items-center">
																	<div class="flex-grow-1">
																		<div class="avatar-group">
																			<a href="javascript: void(0);" class="avatar-group-item material-shadow" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Darline Williams" data-bs-original-title="Darline Williams">
																				<div class="avatar-xxs">
																					<img src="{{asset('dashboard_assets/assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle img-fluid">
																				</div>
																			</a>
																			<a href="javascript: void(0);" class="text-primary align-center ml-1 fs-12">
																				Wade Warren
																			</a>
																		</div>
																	</div>
																	<div class="flex-shrink-0">
																		<div class="text-muted fs-12">
																			<i class="ri-calendar-event-fill me-1 align-bottom"></i> 14 Days Left
																		</div>
																	</div>

																</div>

															</div>
															<!-- end card footer -->
														</div>
														<!-- end card -->
													</div>
													<div class="col-xxl-3 col-sm-6 project-card">
														<div class="card card-height-100">
															<div class="card-body">
																<div class="d-flex flex-column h-100">

																	<div class="d-flex mb-2">
																		<div class="flex-shrink-0 me-3">
																			<div class="avatar-sm">
																				<span class="avatar-title bg-warning-subtle rounded ">
																					<img src="{{asset('dashboard_assets/assets/images/small/img-1.jpg')}}" alt="" class="img-fluid img-avatar p-1">
																				</span>
																			</div>
																		</div>
																		<div class="flex-grow-1">
																			<h5 class="mb-1 fs-15"><a href="javascript:void(0)" class="text-body">Tennis Challenge</a></h5>
																			<p class="text-muted text-truncate-two-lines mb-3">Sports | Music</p>

																		</div>
																	</div>
																	<h6 class="fs-14 fw-medium">Winner. TBD</h6>
																	<p class="mb-1 text-muted fs-12 fw-normal"><i class="ri-gift-line mr-1"></i>200$ Price</p>
																	<p class="mb-1 text-muted fs-12 fw-normal "><i class="ri-hand-heart-line mr-1"></i>2458$ in donation</p>
																	<p class="mb-1 text-muted fs-12 fw-normal"><i class="ri-group-line mr-1"></i>325 Participants</p>
																</div>


															</div>
															<!-- end card body -->
															<div class="card-footer bg-transparent border-top-dashed py-2">
																<div class="d-flex align-items-center">
																	<div class="flex-grow-1">
																		<div class="avatar-group">
																			<a href="javascript: void(0);" class="avatar-group-item material-shadow" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Darline Williams" data-bs-original-title="Darline Williams">
																				<div class="avatar-xxs">
																					<img src="{{asset('dashboard_assets/assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle img-fluid">
																				</div>
																			</a>
																			<a href="javascript: void(0);" class="text-primary align-center ml-1 fs-12">
																				Wade Warren
																			</a>
																		</div>
																	</div>
																	<div class="flex-shrink-0">
																		<div class="text-muted fs-12">
																			<i class="ri-calendar-event-fill me-1 align-bottom"></i> 14 Days Left
																		</div>
																	</div>

																</div>

															</div>
															<!-- end card footer -->
														</div>
														<!-- end card -->
													</div>

												</div>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="documents" role="tabpanel">
                                       <div class="card">
											<div class="card-body">
										   		 <div class="card">
													<div class="card-body p-3">
														<div class="d-flex flex-column h-100">
															<div class="d-flex mb-2">
																<div class="flex-shrink-0 me-3">
																	<div class="avatar-md">
																		<img class="rounded-circle avatar-md material-shadow" alt="200x200" src="{{asset('dashboard_assets/assets/images/users/avatar-4.jpg')}}" data-holder-rendered="true">
																	</div>
																</div>
																<div class="flex-grow-1">
																	<p class="mb-2 text-primary text-uppercase">Ronald Richards</p>
																	<p class="text-muted mb-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At oloreset ea rebum.  </p>

																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body p-3">
														<div class="d-flex flex-column h-100">
															<div class="d-flex mb-2">
																<div class="flex-shrink-0 me-3">
																	<div class="avatar-md">
																		<img class="rounded-circle avatar-md material-shadow" alt="200x200" src="{{asset('dashboard_assets/assets/images/users/avatar-1.jpg')}}" data-holder-rendered="true">
																	</div>
																</div>
																<div class="flex-grow-1">
																	<p class="mb-2 text-primary text-uppercase">Ronald Richards</p>
																	<p class="text-muted mb-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At oloreset ea rebum.  </p>

																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body p-3">
														<div class="d-flex flex-column h-100">
															<div class="d-flex mb-2">
																<div class="flex-shrink-0 me-3">
																	<div class="avatar-md">
																		<img class="rounded-circle avatar-md material-shadow" alt="200x200" src="{{asset('dashboard_assets/assets/images/users/avatar-2.jpg')}}" data-holder-rendered="true">
																	</div>
																</div>
																<div class="flex-grow-1">
																	<p class="mb-2 text-primary text-uppercase">Ronald Richards</p>
																	<p class="text-muted mb-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At oloreset ea rebum.  </p>

																</div>
															</div>
														</div>
													</div>
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
