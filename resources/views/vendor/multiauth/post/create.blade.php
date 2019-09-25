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
			                            <select class="form-control">
			                                <option value="opt1">Default select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
                                </div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Post Banner</label>
									<div class="col-lg-10">
										<input type="file" class="form-control-uniform" data-fouc>
									</div>
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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script>
   $(document).ready(function(){
        $("#category").change( function(){
            // alert("hai");
        if($(this).val() != '')
        {
            var cat = $(this).attr("id");
            var value = $(this).val();
            var _token = $('input[name="_token"]').val();
            alert(value);
            $.ajax({
                url:"{{ route('admin.post.fetch') }}",
                method:"POST",
                data:{select:select, value:value, _token:_token, dependent:dependent},
                success:function(result)
                {
                $('#'+dependent).html(result);
                }
            })

        }
            
        });
    }); 
</script>
@endsection

