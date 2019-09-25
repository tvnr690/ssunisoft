@extends('multiauth::layouts.master')

@section('breadcrum')
    Blog Grid
@endsection

@section('main-content')
    <!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- Layout 2 -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						All Blog Posts
					</h6>
					<span class="text-muted d-block">Card with default footer</span>
				</div>
				<div class="row">
					<div class="col-md-6">

						<!-- Blog layout #2 with image -->
						<div class="card">
							<div class="card-body">
								<div class="card-img-actions mb-3">
									<img class="card-img img-fluid" src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="blog_single.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<h5 class="mb-3">
									<a href="#" class="font-weight-semibold text-default">Blog post layout #2 with image</a>
								</h5>

								When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
							</div>

							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
								</ul>

								<a href="#" class="text-muted"><i class="icon-heart6 text-pink mr-2"></i> 281</a>
							</div>
						</div>
						<!-- /blog layout #2 with image -->

					</div>

					<div class="col-md-6">

						<!-- Blog layout #2 with video -->
						<div class="card">
							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9 mb-3">
									<iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>

								<h5 class="mb-3">
									<a href="#" class="font-weight-semibold text-default">Blog post layout #2 with video</a>
								</h5>

								Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
							</div>

							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
								</ul>

								<a href="#" class="text-muted"><i class="icon-heart6 text-pink mr-2"></i> 281</a>
							</div>
						</div>
						<!-- /blog layout #2 with video -->

					</div>
				</div>
                <!-- /layout 2 -->
				<!-- Pagination -->
				<div class="d-flex justify-content-center mt-3 mb-3">
					<ul class="pagination">
						<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
						<li class="page-item active"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
					</ul>
				</div>
				<!-- /pagination -->

			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
@endsection
