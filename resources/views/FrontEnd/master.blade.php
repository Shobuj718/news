<!doctype html>
<html lang="en">

<head>
	<!-- Basic Page Needs =====================================-->
	<meta charset="utf-8">

	<!-- Mobile Specific Metas ================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Site Title- -->
	<title>Vinazine - Multi-Concept News, Magazine and Blog HTML Template</title>

	<!-- CSS
   ==================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/font-awesome.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/animate.css">

	<!-- IcoFonts -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/icofonts.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/owlcarousel.min.css">

	<!-- slick -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/slick.css">



	<!-- navigation -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/navigation.css">

	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/magnific-popup.css">

	<!-- Style -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/style.css">
	<!-- Style -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/colors/color-13.css">

	<!-- Responsive -->
	<link rel="stylesheet" href="{{asset('public/FrontEnd')}}/css/responsive.css">



</head>

<body class="body-color">
	<!-- header start-->
	@include('FrontEnd.inc.header')
    <!-- header start-->


	<!-- header nav start-->
	@include('FrontEnd.inc.nav')
	<!-- header nav end-->

	<!-- content for home start-->
	@includeWhen((Route::currentRouteName()=='home'),'FrontEnd.inc.home_top_content')
	<!-- content for home end-->


	<!-- post wraper start-->
	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					@yield('main_content')
				</div>
				<div class="col-lg-3">
					@include('FrontEnd.inc.right_sidebar')
				</div>
				<!-- col end-->
			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>
	<!-- post wraper end-->

	<!-- common content wraper start-->
	@include('FrontEnd.inc.common_content')
    <!-- common content wraper end-->

<!-- just for home page-->
	<!-- post wraper end-->
	@includeWhen((Route::currentRouteName()=='home'),'FrontEnd.inc.home_middle')
	<!-- Block wraper end-->
<!-- just for home page-->


	<!-- footer start-->
	 @include('FrontEnd.inc.footer')
	<!-- footer end -->




	<!-- javaScript Files
	=============================================================================-->

	<!-- initialize jQuery Library -->
	<script src="{{asset('public/FrontEnd')}}/js/jquery.min.js"></script>
	<!-- navigation JS -->
	<script src="{{asset('public/FrontEnd')}}/js/navigation.js"></script>
	<!-- Popper JS -->
	<script src="{{asset('public/FrontEnd')}}/js/popper.min.js"></script>

	<!-- magnific popup JS -->
	<script src="{{asset('public/FrontEnd')}}/js/jquery.magnific-popup.min.js"></script>



	<!-- Bootstrap jQuery -->
	<script src="{{asset('public/FrontEnd')}}/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script src="{{asset('public/FrontEnd')}}/js/owl-carousel.2.3.0.min.js"></script>
	<!-- slick -->
	<script src="{{asset('public/FrontEnd')}}/js/slick.min.js"></script>

	<!-- smooth scroling -->
	<script src="{{asset('public/FrontEnd')}}/js/smoothscroll.js"></script>

	<script src="{{asset('public/FrontEnd')}}/js/main.js"></script>
</body>

</html>