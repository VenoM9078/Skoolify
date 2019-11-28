@extends('layouts.app')

@section('title', '| Edit Role')

@section('content')

<div class="container">
        <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <h5>Edit</h5>
            </div>
            <div class="card-body">
    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Role Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
