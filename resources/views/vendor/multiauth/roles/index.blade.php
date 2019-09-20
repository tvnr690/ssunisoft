@extends('multiauth::layouts.master')

@section('breadcrum')
    Roles
@endsection

@section('main-content')
    <!-- Main content -->
	<div class="content-wrapper">
        <!-- Content area -->
        <div class="content">
            <!-- Basic responsive configuration -->
            <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Roles Tables</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        @include('multiauth::message')
                        <div class="card-body">
                            The <b>Roles</b> will specify the responsibility of the Admins.
                        </div>


                        <table class="table datatable-responsive">
                            <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Job</th>
                                    <th>Created</th>
                                    <th>No of Admins</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>Example work</td>
                                    <td>{{ $role->created_at }}</td>
                                    <td><span class="badge badge-success">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();"><i class="icon-bin mr-3 icon"></i>Delete</a>
                                                    <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                                        @csrf @method('delete')
                                                    </form>
                                                    <a href="{{ route('admin.role.edit',$role->id) }}" class="dropdown-item"><i class="icon-pencil5 mr-3 icon"></i>Edit</a>
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
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Roles
                    <span class="float-right">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                    </span>
                </div>

                <div class="card-body">
    @include('multiauth::message')
                    <ol class="list-group">
                        @foreach ($roles as $role)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $role->name }}
                            <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span>
                            <div class="float-right">
                                <a href="" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
