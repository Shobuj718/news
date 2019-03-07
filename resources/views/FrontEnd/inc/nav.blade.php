<header class="navbar-standerd nav-item">
	<div class="container">
		<div class="row">

			<!-- logo end-->
			<div class="col-lg-12">
				<!--nav top end-->
				<nav class="navigation ts-main-menu navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="index.html">
							<!-- <img src="{{asset('public/FrontEnd')}}/images/footer_logo.png" alt=""> -->
						</a>
						<div class="nav-toggle"></div>
					</div>
					<!--nav brand end-->

					<div class="nav-menus-wrapper clearfix">
						<!--nav right menu start-->
						<ul class="right-menu align-to-right">
							<li>
								<a href="#">
									<i class="fa fa-user-circle-o"></i>
								</a>
							</li>
							<li class="header-search">
								<div class="nav-search">
									<div class="nav-search-button">
										<i class="icon icon-search"></i>
									</div>
									<form>
										<span class="nav-search-close-button" tabindex="0">✕</span>
										<div class="nav-search-inner">
											<input type="search" name="search" placeholder="Type and hit ENTER">
										</div>
									</form>
								</div>
							</li>
						</ul>
						<!--nav right menu end-->

						<!-- nav menu start-->
						@php($id=1)
						<ul class="nav-menu">
							<li class="{{(Route::currentRouteName()=='home')?'active':''}}">
								<a href="{{route('home')}}">Home</a>
							</li>

							<li class="@yield('category'.$id)">
								<a href="{{route('category',$id)}}">Category</a>
							</li>

							<li>
								<a href="#">Features</a>
								<ul class="nav-dropdown">
									<li>
										<a href="#">Category layout</a>
										<ul class="nav-dropdown">
											<li>
												<a href="category-1.html">Category layout 1</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>

						</ul>
						<!--nav menu end-->
					</div>
				</nav>
				<!-- nav end-->
			</div>
		</div>
	</div>
</header>