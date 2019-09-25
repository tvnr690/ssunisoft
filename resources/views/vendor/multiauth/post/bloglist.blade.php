@extends('multiauth::layouts.master')

@section('breadcrum')
    Blog List View
@endsection

@section('main-content')
    <!-- Main content -->
	<div class="content-wrapper">
        <!-- Content area -->
        <div class="content">
            <!-- Media library -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Blog Posts In List View</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped media-library">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="form-input-styled"></th>
                            <th>Preview</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-input-styled"></td>
                            <td>
                                <a href="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" data-popup="lightbox">
                                    <img src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" alt="" class="img-preview rounded">
                                </a>
                            </td>
                            <td><a href="#">Ignorant saw her drawings</a></td>
                            <td><a href="#">Eugene Kopyov</a></td>
                            <td>Jun 10, 2015</td>                            
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="list-icons-item dropdown">
                                        <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
                                            <a href="#" class="dropdown-item"><i class="icon-eye"></i> Publish</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /media library -->
        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->
@endsection
