@extends('multiauth::layouts.master')

@section('breadcrum')
    Edit Sub Category
@endsection

@section('main-content')
    	<!-- Main content -->
		<div class="content-wrapper">
                <!-- Content area -->
                <div class="content">

                    <!-- Form inputs -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Edit Sub Category</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            {{-- <p class="mb-4">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.col-form-label</code> class.</p> --}}
                            @include('multiauth::message')
                            <form method="POST" action="{{ route('admin.sub_category.update', $sub_category->id) }}">
                                @csrf @method('patch')
                                <fieldset class="mb-3">
                                    {{-- <legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend> --}}
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Sub Category Name</label>
                                        <div class="col-lg-10">
                                            <input id="sub_cat_name" type="text" class="form-control {{ $errors->has('sub_cat_name') ? ' is-invalid' : '' }}" name="sub_cat_name" value="{{ $sub_category->sub_cat_name }}"
                                            required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('sub_cat_slug') ? ' has-error' : '' }} row">
                                        <label class="col-form-label col-lg-2">Sub Category Slug</label>
                                        <div class="col-lg-10">
                                            <input id="sub_cat_slug" type="text" class="form-control{{ $errors->has('sub_cat_slug') ? ' is-invalid' : '' }}" name="sub_cat_slug" value="{{ $sub_category->sub_cat_slug }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  for="cat_id" class="col-form-label col-lg-2">Select Category</label>
                                        <div class="col-lg-10">
                                            <select name="cat_id" id="cat_id" class="form-control {{ $errors->has('cat_id') ? ' is-invalid' : '' }} multiselect" data-fouc>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if ($sub_category->cat_id == $category->id)
                                                        selected
                                                        @endif >{{ $category->cat_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('cat_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('cat_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label for="role_id" class="col-form-label col-lg-2">Assign Role</label>
                                        <div class="col-lg-10">
                                            <select name="role_id[]" id="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }} multiselect" multiple>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        @if (in_array($role->id,$admin->roles->pluck('id')->toArray()))
                                                            selected
                                                        @endif >{{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('role_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('role_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div> --}}






                                </fieldset>
                                <div class="row d-flex justify-content-between">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                    <div class="text-right">
                                        <a href="{{ route('admin.sub_category') }}" class="btn btn-dark">Back <i class="icon-backward2 ml-2 "></i></a>
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



