@extends('multiauth::layouts.master')

@section('breadcrum')
    Add New Category
@endsection

@section('main-content')
    	<!-- Main content -->
		<div class="content-wrapper">
                <!-- Content area -->
                <div class="content">

                    <!-- Form inputs -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Add New Category</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            {{-- <p class="mb-4">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.col-form-label</code> class.</p> --}}
                            @include('multiauth::message')
                            <form method="POST" action="{{ route('admin.category.store') }}">
                                @csrf
                                <fieldset class="mb-3">
                                    {{-- <legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend> --}}
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Category Name</label>
                                        <div class="col-lg-10">
                                            <input id="cat_name" type="text" class="form-control {{ $errors->has('cat_name') ? ' is-invalid' : '' }}" name="cat_name" value="{{ old('cat_name') }}"
                                            required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('cat_slug') ? ' has-error' : '' }} row">
                                        <label class="col-form-label col-lg-2">Slug</label>
                                        <div class="col-lg-10">
                                            <input id="cat_slug" type="text" class="form-control{{ $errors->has('cat_slug') ? ' is-invalid' : '' }}" name="cat_slug" value="{{ old('cat_slug') }}"
                                                required>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row d-flex justify-content-between">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                    <div class="text-right">
                                        <a href="{{ route('admin.category') }}" class="btn btn-dark">Back <i class="icon-backward2 ml-2 "></i></a>
                                    </div>
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



