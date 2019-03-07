
@extends('FrontEnd.master')

@section('main_content')
<div id="maincontent">
	<div class="ts-grid-box most-populer-item">
		<h2 class="ts-title">Most Popular</h2>

		<div class="most-populers owl-carousel">
			<div class="item">
				<a class="post-cat ts-orange-bg" href="#">Travel</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/travel/travel2.jpg" alt="">
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
			<!-- ts-grid-box end-->

			<div class="item">
				<a class="post-cat ts-blue-light-bg" href="#">Technology</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/tech/tech1.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Tesla just lost its head of global just finance</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts-grid-box end-->
			<div class="item">
				<a class="post-cat ts-pink-bg" href="#">Fashion</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/fashion/fashion1.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">The clock is ticking for e-cig companies to block</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts-grid-box end-->
			<div class="item">
				<a class="post-cat ts-green-bg" href="#">sports</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/sports/sports1.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">Tesla just lost its head of global finance</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts-grid-box end-->
			<div class="item">
				<a class="post-cat ts-pink-bg" href="#">Music</a>
				<div class="ts-post-thumb">
					<a href="#">
						<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/music/music1.jpg" alt="">
					</a>
				</div>
				<div class="post-content">
					<h3 class="post-title">
						<a href="#">10 critical points from Zuckerberg’s epic manifesto</a>
					</h3>
					<span class="post-date-info">
						<i class="fa fa-clock-o"></i>
						March 21, 2019
					</span>
				</div>
			</div>
			<!-- ts-grid-box end-->
		</div>
		<!-- most-populers end-->
	</div>
	<!-- ts-populer-post-box end-->
	<div class="ts-grid-box watch-post mb-30">
		<h2 class="ts-title">Watch Now</h2>
		<div class="row">
			<div class="col-lg-7">
				<div class="tab-content featured-post" id="nav-tabContent">
					<div class="tab-pane ts-overlay-style fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class="item" style="background-image: url({{asset('public/FrontEnd')}}/images/news/travel/travel2.jpg)">

							<a class="post-cat ts-orange-bg" href="#">TRAVEL</a>
							<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-video-btn">
								<i class="fa fa-play-circle-o"></i>
							</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title md">
										<a href="#">They’re back! Kennedy Darling, LeCras named to return</a>
									</h3>
									<ul class="post-meta-info">
										<li class="author">
											<a href="#">
												<img src="{{asset('public/FrontEnd')}}/images/avater/author1.jpg" alt=""> Donald Ramos
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</li>
										<li class="active">
											<i class="icon-fire"></i>
											3,005
										</li>
									</ul>
								</div>
							</div>
							<!-- overlay post content-->
						</div>
						<!-- item end-->
					</div>
					<!--tab-pane ts-overlay-style end-->
					<div class="tab-pane ts-overlay-style fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<div class="item" style="background-image: url({{asset('public/FrontEnd')}}/images/news/health/health2.jpg)">

							<a class="post-cat ts-purple-bg" href="#">Health</a>
							<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-video-btn">
								<i class="fa fa-play-circle-o"></i>
							</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title md">
										<a href="#">retro prawn cocktail – straight from the 80’s!</a>
									</h3>
									<ul class="post-meta-info">
										<li class="author">
											<a href="#">
												<img src="{{asset('public/FrontEnd')}}/images/avater/author1.jpg" alt=""> Donald Ramos
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</li>
										<li class="active">
											<i class="icon-fire"></i>
											3,005
										</li>
									</ul>
								</div>
							</div>
							<!-- overlay post content-->
						</div>
						<!-- item end-->
					</div>
					<!--tab-pane ts-overlay-style end-->
					<div class="tab-pane ts-overlay-style fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						<div class="item" style="background-image: url({{asset('public/FrontEnd')}}/images/news/fashion/fashion1.jpg)">
							<a class="post-cat ts-pink-bg" href="#">Fashion</a>
							<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-video-btn">
								<i class="fa fa-play-circle-o"></i>
							</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title md">
										<a href="#">10 critical points from Zuckerberg’s epic security manifesto</a>
									</h3>
									<ul class="post-meta-info">
										<li class="author">
											<a href="#">
												<img src="{{asset('public/FrontEnd')}}/images/avater/author1.jpg" alt=""> Donald Ramos
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</li>
										<li class="active">
											<i class="icon-fire"></i>
											3,005
										</li>
									</ul>
								</div>
							</div>
							<!-- overlay post content-->
						</div>
						<!-- item end-->
					</div>
					<!--tab-pane ts-overlay-style end-->
				</div>

			</div>
			<!-- col end-->

			<div class="col-lg-5">
				<div class="nav post-list-box" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
					 aria-selected="true">
						<div class="post-content media">
							<img class="d-flex" src="{{asset('public/FrontEnd')}}/images/news/travel/travel2.jpg" alt="">
							<div class="media-body align-self-center">
								<h4 class="post-title">
									Tesla just lost its head of global finance
								</h4>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</a>
					<!-- nav item end-->
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
					 aria-selected="false">
						<div class="post-content media">
							<img class="d-flex" src="{{asset('public/FrontEnd')}}/images/news/health/health2.jpg" alt="">
							<div class="media-body align-self-center">
								<h4 class="post-title">
									Beats did announce something, after all

								</h4>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</a>
					<!-- nav item end-->
					<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
					 aria-selected="false">
						<div class="post-content media">
							<img class="d-flex" src="{{asset('public/FrontEnd')}}/images/news/fashion/fashion1.jpg" alt="">
							<div class="media-body align-self-center">
								<h4 class="post-title">
									Tourism in Dubai boom tourist favorite place
								</h4>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</a>
					<!-- nav item end-->
				</div>
				<!-- watch list post end-->
			</div>
			<!-- col end -->
		</div>
		<!-- row end-->
	</div>
	<div class="ts-grid-box category-box-item-3">
		<h2 class="ts-title float-left">Hot Topics</h2>
		<a href="#" class="view-all-link float-right">View All</a>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-lg-6">
				<div class="item">
					<div class="ts-post-thumb">
						<a class="post-cat ts-orange-bg" href="#">Travel</a>
						<a href="#">
							<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/travel/travel8.jpg" alt="">
						</a>
					</div>
					<div class="post-content">
						<h3 class="post-title md">
							<a href="#">They are backed up Kennedy Darling and Cras named to return</a>
						</h3>
						<ul class="post-meta-info">
							<li class="author">
								<a href="#">
									<img src="{{asset('public/FrontEnd')}}/images/avater/author1.jpg" alt=""> Donald
								</a>
							</li>
							<li>
								<i class="fa fa-clock-o"></i>
								Jun 21, 2019
							</li>
							<li class="active">
								<i class="icon-fire"></i>
								305
							</li>
						</ul>
						<p>
							Black farmers in the USA is South faced with the most continued failure in their efforts to run
						</p>
					</div>
				</div>
				<!-- ts-grid-box end-->
			</div>
			<!-- col end-->
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6">
						<div class="item mb-20">
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/fashion/fashion1.jpg" alt="">
								</a>
							</div>
							<div class="post-content">
								<h3 class="post-title">
									<a href="#">Tourism Dubai booming international tourist</a>
								</h3>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</div>
					<!-- col end-->
					<div class="col-lg-6">
						<div class="item mb-20">
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/tech/tech3.jpg" alt="">
								</a>
							</div>
							<div class="post-content">
								<h3 class="post-title">
									<a href="#">Youth vaping an 'epidemic'; crackdown</a>
								</h3>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</div>
					<!-- col end-->
					<div class="col-lg-6">
						<div class="item">
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/tech/tech1.jpg" alt="">
								</a>
							</div>
							<div class="post-content">
								<h3 class="post-title">
									<a href="#">How to get the most when selling your iPhone</a>
								</h3>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</div>
					<!-- col end-->
					<div class="col-lg-6">
						<div class="item">
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="{{asset('public/FrontEnd')}}/images/news/travel/travel1.jpg" alt="">
								</a>
							</div>
							<div class="post-content">
								<h3 class="post-title">
									<a href="#">Beats did announce something, after all</a>
								</h3>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
							</div>
						</div>
					</div>
					<!-- col end-->
				</div>
			</div>
		</div>
		<!-- row end-->

	</div>
</div>
@stop