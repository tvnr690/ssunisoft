@extends('layouts.master')
@section('active')
    @if (\Request::is('about'))
        class="menu-active"
    @endif
@endsection

@section('banner-area')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('about') }}"> About</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
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

@section('about-people')
	<!-- Start feedback-area Area -->
	<section class="feedback-area-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t1.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t2.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t3.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t1.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t2.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t3.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t1.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t2.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feedback">
								<img src="{{ asset('client/img/t3.png') }}" alt="">
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory.
								</p>
								<a href="#">
									<h5 class="text-uppercase">Mark Alviro Wiens</h5>
								</a>
								<p>CEO at Google</p>
							</div>
						</div>
					</div>
				</div>
	</section>
	<!-- End feedback-area Area -->
@endsection

@section('clients')
    <!-- Start brands Area -->
	<section class="brands-area pb-120 pt-90">
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
