@extends('layouts.master')

@section('active')
    @if (\Request::is('courses'))
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
                        Courses Offered
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href=""> Courses Offered</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection

@section('courses')
    <!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Courses  We Offer</h1>
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
