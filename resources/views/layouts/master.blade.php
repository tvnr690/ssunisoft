<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SS Unisoft') }}</title>
    <link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Venkat Reddy">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
    <!-- meta character set -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS============================================= -->
	<link rel="stylesheet" href="{{ asset('client/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/main.css') }}">
	<style>
		/* .menu-active{
			background-color: red;
			margin:0px;
			padding: 5px;
		} */
	</style>
</head>
<body>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
		  		<div class="row">
		  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
		  				<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
		  				</ul>
		  			</div>
		  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
		  				<a href="tel:+953 012 3654 896">+91 82 38 7725</a>
		  				<a href="mailto:support@colorlib.com">support@ssunisoft.com</a>
		  			</div>
		  		</div>
			</div>
		</div>
	    <div class="container main-menu">
	    	<div class="row align-items-center justify-content-between d-flex">
		      <div id="logo">
		        <a href="{{ route('home') }}"><img src="{{ asset('client/img/logo.png') }}" alt="" title="" /></a>
		      </div>
		      <nav id="nav-menu-container">
		        <ul class="nav-menu">
		          <li @yield('active')><a href="{{ route('home') }}">Home</a></li>
                  <li @yield('active')><a href="{{ route('about') }}">About</a></li>
		          <li @yield('active')><a href="{{ route('courses') }}">courses</a></li>
		          <li @yield('active')><a href="{{ route('portfolio') }}">Portfolio</a></li>
		          <li @yield('active')><a href="{{ route('blog') }}">Blog</a></li>
		          <li @yield('active')><a href="{{ route('contact') }}">Contact</a></li>
		        </ul>
		      </nav><!-- #nav-menu-container -->
	    	</div>
	    </div>
	</header><!-- #header -->

    @section('banner-area')
    @show
    @section('blog')
    @show
    @section('contact')
    @show
    @section('services')
    @show
    @section('home-about')
    @show
    @section('home-contact')
    @show
    @section('working-process')
    @show
    @section('home-blog')
	@show
	@section('about-people')
	@show
	@section('feedback')
    @show
    @section('clients')
    @show
    @section('sidebar')
    @show
    @section('map')
    @show
    @section('courses')
    @show



	<!-- start footer Area -->
	<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About SS Unisoft</h6>
								<p>
									The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
                                            <li><a href="{{ route('home') }}">Home</a></li>
											<li><a href="{{ route('courses') }}">Courses</a></li>
											<li><a href="{{ route('courses') }}">Services</a></li>
											<li><a href="{{ route('portfolio') }}">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="{{ route('about') }}">Team</a></li>
											<li><a href="{{ route('courses') }}">Pricing</a></li>
											<li><a href="{{ route('blog') }}">Blog</a></li>
											<li><a href="{{ route('contact') }}">Contact</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.
								</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
										</div>
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">InstaFeed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="{{ asset('client/img/i1.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i2.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i3.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i4.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i5.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i6.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i7.jpg') }}" alt=""></li>
									<li><img src="{{ asset('client/img/i8.jpg') }}" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="" target="_blank">SS Unisoft</a>
                        </p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
	</footer>
    <!-- End footer Area -->

	<script src="{{ asset('clent/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
	<script src="{{ asset('clent/js/vendor/bootstrap.min.js') }}"></script>
  	<script src="{{ asset('clent/js/easing.min.js') }}"></script>
	<script src="{{ asset('clent/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('clent/js/superfish.min.js') }}"></script>
	<script src="{{ asset('clent/js/mn-accordion.js') }}"></script>
	<script src="{{ asset('clent/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('clent/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('clent/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('clent/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('clent/js/jquery.circlechart.js') }}"></script>
	<script src="{{ asset('clent/js/mail-script.js') }}"></script>
    <script src="{{ asset('clent/js/main.js') }}"></script>

  </body>
</html>

