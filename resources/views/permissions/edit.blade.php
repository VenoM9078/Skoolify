@extends('layouts.app')

@section('title', '| Edit Permission')

@section('content')

<div class="container">
        <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit {{$permission->name}}</h5>
            </div>
            <div class="card-body">
    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
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