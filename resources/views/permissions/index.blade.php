{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Permissions')

@section('content')
<div class="container">
    <div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5>Permissions</h5>
            <div class="btn-group float-right">
    <a href="{{ route('dashboard.index') }}" class="btn btn-success float-right">Dashboard</a>
    <a href="{{ route('roles.index') }}" class="btn btn-danger float-right">Roles</a></h1>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>
    </div>

   
    </div>
</div>
</div>
</div>
</div>
@endsection