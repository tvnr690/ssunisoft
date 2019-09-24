@extends('multiauth::layouts.master')

@section('breadcrum')
    Categories
@endsection

@section('main-content')
    <!-- Main content -->
	<div class="content-wrapper">
        <!-- Content area -->
        <div class="content">
            <!-- Basic responsive configuration -->
            <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">categorys Tables</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        @include('multiauth::message')
                        <div class="card-body">
                            The <b>categorys</b> will specify the responsibility of the Admins.
                        </div>


                        <table class="table datatable-responsive">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>Category</th>
                                    <th>slug</th>
                                    <th>Created at</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $category->cat_name }}</td>
                                    <td>{{ $category->cat_slug }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();"><i class="icon-bin mr-3 icon"></i>Delete</a>
                                                    <form id="delete-form-{{ $category->id }}" action="{{ route('admin.category.delete',$category->id) }}" method="POST" style="display: none;">
                                                        @csrf @method('delete')
                                                    </form>
                                                    <a href="{{ route('admin.category.edit',$category->id) }}" class="dropdown-item"><i class="icon-pencil5 mr-3 icon"></i>Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
            </div>
            <!-- /basic responsive configuration -->
        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->
@endsection

