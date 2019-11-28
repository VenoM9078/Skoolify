{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Roles')

@section('content')

<div class="container">
    <div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5>Roles</h5>
            <div class="btn-group float-right">
    <a href="{{ route('dashboard.index') }}" class="btn btn-success float-right">Dashboard</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-danger float-right">Permissions</a></h1>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>
    </div>

   

</div>
</div>
</div>
</div>

@endsection
