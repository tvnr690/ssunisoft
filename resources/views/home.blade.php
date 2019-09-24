@extends('layouts.master2')

@section('active')
    @if (\Request::is('home'))
		class="menu-active"
	@endif
@endsection

@section('banner-area')
    <!-- start banner Area -->
    <section class="banner-area" id="home">
    	<div class="container">
    		<div class="row fullscreen d-flex align-items-center">
    			<div class="banner-content col-lg-7 col-md-6 justify-content-center ">
    				<h6 class="text-uppercase">Don’t look further, This is our Leader</h6>
    				<h1>
    					All things need to repair
    				</h1>
    				<p class="text-white">
    					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
    				</p>
    				<a href="#" class="primary-btn header-btn text-uppercase mt-10">Get Started</a>
    			</div>
    			<div class="banner-img col-lg-5 col-md-6 align-self-end">
    				<img class="img-fluid" src="{{ asset('client/img/banner-img.png') }}" alt="">
    			</div>
    		</div>
    	</div>
    </section>
    <!-- End banner Area -->
@endsection

@section('services')
    <!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 pb-50 header-text text-center">
					<h1 class="mb-10">What we Offer to our Supporters</h1>
					<p>
						Who are in extremely love with eco friendly system..
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-service">
						<div class="thumb">
							<img src="{{ asset('client/img/o1.jpg') }}" alt="">
						</div>
						<h4>Popular Uses Of The Internet</h4>
						<p>
							inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service">
						<div class="thumb">
							<img src="{{ asset('client/img/o2.jpg') }}" alt="">
						</div>
						<h4>Protective Preventative</h4>
						<p>
							inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service">
						<div class="thumb">
							<img src="{{ asset('client/img/o3.jpg') }}" alt="">
						</div>
						<h4>Download Free Songs</h4>
						<p>
							inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-service">
						<div class="thumb">
							<img src="{{ asset('client/img/o4.jpg') }}" alt="">
						</div>
						<h4>A Discount Toner Cartridge</h4>
						<p>
							inappropriate behavior is oftenlaug hed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->
@endsection

@section('home-about')
	<!-- Start home-about Area -->
	<section class="home-about-area section-gap relative">
		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-6 no-padding home-about-right">
					<h1>
						We can fix all types <br>
						of computer & mobiles
					</h1>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
					</p>
					<div class="row no-gutters">
						<div class="single-services col">
							<span class="lnr lnr-diamond"></span>
							<a href="#">
								<h4>Expert Services</h4>
							</a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology.
							</p>
						</div>
						<div class="single-services col">
							<span class="lnr lnr-phone"></span>
							<a href="#">
								<h4>Great Support</h4>
							</a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->
@endsection

@section('home-contact')
    <!-- Start discount-section Area -->
	<section class="discount-section-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row align-items-center justify-content-between no-gutters">
						<div class="col-lg-6 discount-left">
							<h1 class="text-white">Enjoy 25% Seasonal Discount!</h1>
							<p class="text-white">
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial.
							</p>
							<a href="#" class="header-btn">Order Service Now</a>
						</div>
						<div class="col-lg-5 discount-right">
							<h4 class="text-white">Get a free Estimate</h4>
		                    <form class="booking-form" id="myForm" action="#">
		                        <div class="row">
		                            <div class="col-lg-12 d-flex flex-column">
		                                <input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" class="form-control mt-20" required="" type="text">
		                            </div>
		                            <div class="col-lg-6 d-flex flex-column">
		                                <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text">
		                            </div>
		                            <div class="col-lg-6 d-flex flex-column">
		                                <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="email">
		                            </div>
		                            <div class="col-lg-12 flex-column">
		                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
		                            </div>

		                            <div class="col-lg-12 d-flex justify-content-end send-btn">
		                                <button class="genric-btn primary mt-20 text-uppercase ">Get Estimate</button>
		                            </div>
		                        </div>
		                    </form>
						</div>
					</div>
				</div>
	</section>
	<!-- End discount-section Area -->
@endsection

@section('working-process')
    <!-- Start work-process Area -->
	<section class="work-process-area pt-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-7">
							<div class="title text-center">
								<h1 class="mb-10">Our Working Process</h1>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game</p>
							</div>
						</div>
					</div>
					<div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-funnel"></span>
							</div>
							<h4 class="caption">Detect problem</h4>
						</div>
						<div class="work-arrow">
							<img src="{{ asset('client/img/arrow.png') }}   " alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-layers"></span>
							</div>
							<h4 class="caption">Split solution into parts</h4>
						</div>
						<div class="work-arrow">
							<img src="{{ asset('client/img/arrow.png') }}   " alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-paw"></span>
							</div>
							<h4 class="caption">Analyzing method</h4>
						</div>
						<div class="work-arrow">
							<img src="{{ asset('client/img/arrow.png') }}   " alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-smile"></span>
							</div>
							<h4 class="caption">Final result comes out</h4>
						</div>
					<div class="row">
						<div class="col"></div>
					</div>
				</div>
	</section>
	<!-- End work-process Area -->
@endsection

@section('home-blog')
    <!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest posts from our blog</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('client/img/b1.jpg') }}" alt="">
							</div>
							<p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Addiction When Gambling Becomes A Problem</h5>
							</a>
							<p>
								Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('client/img/b2.jpg') }}" alt="">
							</div>
							<p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Computer Hardware Desktops And Notebooks</h5>
							</a>
							<p>
								Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('client/img/b3.jpg') }}" alt="">
							</div>
							<p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Make Myspace Your Best Designed Space</h5>
							</a>
							<p>
								Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('client/img/b4.jpg') }}" alt="">
							</div>
							<p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Video Games Playing With Imagination</h5>
							</a>
							<p>
								About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
	</section>
	<!-- End blog Area -->
@endsection

@section('clients')
    <!-- Start brands Area -->
	<section class="brands-area pb-120">
				<div class="container no-padding">
					<div class="brand-wrap">
						<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
							<div class="col single-brand">
								<a href="#"><img class="mx-auto" src="{{ asset('client/img/l1.png') }}" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="#"><img class="mx-auto" src="{{ asset('client/img/l2.png') }}" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="#"><img class="mx-auto" src="{{ asset('client/img/l3.png') }}" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="#"><img class="mx-auto" src="{{ asset('client/img/l4.png') }}" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="#"><img class="mx-auto" src="{{ asset('client/img/l5.png') }}" alt=""></a>
							</div>
						</div>
					</div>
				</div>
	</section>
	<!-- End brands Area -->
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
