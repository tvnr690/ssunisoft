@extends('multiauth::layouts.master')

@section('breadcrum')
    Add New Tag
@endsection

@section('main-content')
	<!-- Main content -->
	<div class="content-wrapper">
		<!-- Content area -->
		<div class="content">
			<!-- Form inputs -->
			<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Create A New Blog</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                	</div>
	                	</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ route('admin.post.store') }}">
                            @csrf
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post Title</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="Enter your username...">
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post slug</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="Enter your username...">
									</div>
                                </div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post Category</label>
									<div class="col-lg-10">
			                            <select class="form-control dynamic" name="p_cat_id" id="category">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                            @endforeach
			                            </select>
		                            </div>
                                </div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post Sub Category</label>
									<div class="col-lg-10">
			                            <select class="form-control" name="p_sub_cat_id" id="subcategory">

			                            </select>
		                            </div>
                                </div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post Banner</label>
									<div class="col-lg-10">
                                        <input type="file" class="form-control-uniform image" name="banner" id="banner" required data-fouc>
                                        <input type="hidden" name="x1" value="" />
                                        <input type="hidden" name="y1" value="" />
                                        <input type="hidden" name="w" value="1920" />
                                        <input type="hidden" name="h" value="1080" />
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <p><img id="previewimage" style="display:none;"/></p>
                                    @if(session('path'))
                                        <img src="{{ session('path') }}" />
                                    @endif
                                </div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post Video Url</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="Enter your username...">
									</div>
                                </div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Post Content</label>
									<div class="col-lg-10">
										<textarea name="editor-full" id="editor-full" cols="4" class="form-control" placeholder="Default textarea"></textarea>
									</div>
								</div>
							</fieldset>


							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
			</div>
			<!-- /form inputs -->
		</div>
		<!-- /content area -->
	</div>
	<!-- /main content -->
@endsection

@section('custom-script')
<script>
   $(document).ready(function(){
        $("#category").change( function(){
            if($(this).val() != '')
            {
                var cat = $(this).attr("id");
                var value = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('admin.post.fetch') }}",
                    method:"GET",
                    data:{cat:cat, value:value, _token:_token},
                    success:function(result)
                    {
                        $('#subcategory').html(result);
                    }
                });
            }
        });
    });

    jQuery(function($) {
        var p = $("#previewimage");
        $("body").on("change", ".image", function(){
            var imageReader = new FileReader();
            imageReader.readAsDataURL(document.querySelector(".image").files[0]);
            imageReader.onload = function (oFREvent) {
                p.attr('src', oFREvent.target.result).fadeIn();
            };
        });
        $('#previewimage').imgAreaSelect({
            onSelectEnd: function (img, selection) {
                $('input[name="x1"]').val(selection.x1);
                $('input[name="y1"]').val(selection.y1);
                $('input[name="w"]').val(selection.width);
                $('input[name="h"]').val(selection.height);
            }
        });
    });
</script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
@endsection

