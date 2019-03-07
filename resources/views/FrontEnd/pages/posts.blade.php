@extends('FrontEnd.master')
@section('category'.$id, 'active')
@section('main_content')
<!-- post wraper start-->
<div id="">
	
	<div class="ts-grid-box">
		<ol class="ts-breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-home"></i>
					Home

				</a>
			</li>
			<li>
				<a href="#">Lifestyle</a>
			</li>

		</ol>
		<div class="clearfix entry-cat-header">
			<h2 class="ts-title float-left">Lifestyle</h2>
			<ul class="ts-category-list float-right">
				<li>
					<a href="#" class="ts-blue-bg">Health</a>
				</li>
				<li>
					<a href="#">Travek</a>
				</li>
				<li>
					<a href="#">Food</a>
				</li>
				<li>
					<a href="#">Fashion</a>
				</li>
			</ul>
		</div>

	</div>
	<!-- ts-populer-post-box end-->
	<div class="row">
		<div class="col-lg-4 col-md-6">
			<div class="ts-grid-box ts-grid-content">
				<a class="post-cat ts-orange-bg" href="#">Travel</a>
				<div class="ts-post-thumb">
					<a href="{{route('single')}}">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/travel/travel3.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="{{route('single')}}">Hands on with the Apple Watch Series with the Apple 4</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts grid box-->
		</div>
		<!-- col end-->
		<div class="col-lg-4 col-md-6">
			<div class="ts-grid-box ts-grid-content">
				<a class="post-cat ts-pink-bg" href="#">music</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/music/music2.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Tourism in Dubai is booming by international tourist</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts grid box-->
		</div>
		<!-- col end-->
		<div class="col-lg-4 col-md-6">
			<div class="ts-grid-box ts-grid-content">
				<a class="post-cat ts-green-bg" href="#">Food</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/foods/food13.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Hands on with the Apple Watch with the Apple Series 4</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts grid box-->
		</div>

        <!-- add banner start-->
		<div class="col-md-12">
			<div class="add-banner mb-30">
				<a href="#">
					<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/banner/banner2.jpg" alt="">
				</a>
			</div>
		</div>
		<!-- add banner end-->

		<!-- col end-->
		<div class="col-lg-4 col-md-6">
			<div class="ts-grid-box ts-grid-content">
				<a class="post-cat ts-blue-light-bg" href="#">Technology</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/tech/tech5.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Tourism in Dubai is booming by international tourist</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts grid box-->
		</div>
		<!-- col end-->
		<div class="col-lg-4 col-md-6">
			<div class="ts-grid-box ts-grid-content">
				<a class="post-cat ts-orange-bg" href="#">Travel</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/travel/travel6.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Hands on with the Apple Watch with the Apple Series 4</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts grid box-->
		</div>
		<!-- col end-->
		<div class="col-lg-4 col-md-6">
			<div class="ts-grid-box ts-grid-content">
				<a class="post-cat ts-orange-bg" href="#">Travel</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/travel/travel8.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Tourism in Dubai is booming by international tourist</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts grid box-->
		</div>
		<!-- col end-->
	</div>
	<!-- row-->


	
	<!-- row-->


	<!-- pagination-->
	<div class="ts-pagination text-center mb-20">
		
	</div>
	<!-- pagination end-->


</div>
<!-- post wraper end-->
@stop