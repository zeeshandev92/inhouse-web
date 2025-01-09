<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="red">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
   
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

    @include('admin.includes.styles')
    @yield('custom-style')

</head>

<body>

<!-- Start Switcher -->

<div class="layout-wrapper">
    
	
	<!-- app-header -->
    @include('admin.includes.header')
    <!-- /app-header -->
    <!-- Start::app-sidebar -->
    @include('admin.includes.sidebar')
    <!-- End::app-sidebar -->

	<div class="main-content">
    <!-- Start::app-content -->
    @yield('content')
		
	<!-- Footer Start -->
    @include('admin.includes.footer')
    <!-- End::app-content -->
	</div>


    
	
	
</div>


@include('admin.includes.script')
	
	@yield('custom-script')

</body>

</html>
