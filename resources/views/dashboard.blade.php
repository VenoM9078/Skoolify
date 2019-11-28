@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
                @if (Session::has('create'))
                    <div class="alert alert-info">
                        {{ Session::get('create') }}
                    </div>
                @endif
                @if (Session::has('update'))
                    <div class="alert alert-info">
                        {{ Session::get('update') }}
                    </div>
                @endif
            <div class="card">
                <div class="card-header">
                    <span class="h5">Admin Dashboard</span>
                    <div class="btn-group float-right">
                        @can('Can View Complaints & List of Students')
                        {{ link_to_route('complaint.index','View Complaints','',['class'=>'btn btn-primary float-right']) }}        
                    <button class="btn btn-danger float-right" id="vis">Get All The Students</button>
                    @endcan
                    @can('Other Dashboard Buttons')
                    {{ link_to_route('dashboard.create','Add Student','',['class'=>'btn btn-success float-right']) }}
                    {{ link_to_route('roles.index','Roles','',['class'=>'btn btn-dark float-right']) }}
                    {{ link_to_route('permissions.index','Permissions','',['class'=>'btn btn-warning float-right']) }}
                    @endcan
                    </div>
                </div>
                <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered">
                            <thead>
                        <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User Roles</th>
                        <th>Roll Number</th>
                        <th>Class</th>
                        <th>Action</th>
                        </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                        <tr>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->lname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>
                            <td>{{ $user->rollno }}</td>
                            <td>{{ $user->class }}</td>
                            @can('Can View Complaints & List of Students')
                            <td class="btn-group">
                                {{ link_to_route('schedule.create','Create Schedule',['id' => $user->id],['style'=>'border-radius: 0px;','class'=> 'btn btn-success btn-sm']) }}
                                    {{ link_to_route('dashboard.edit','Edit',[$user->id],['style'=>'border-radius: 0px;','class'=> 'btn btn-primary btn-sm']) }}
                                    {!! Form::open(array('route'=>['dashboard.destroy',$user->id],'method'=>'DELETE')) !!}
                                        {!! Form::submit('Delete',['type'=>'submit','style'=>'border-radius: 0px;','class'=>'btn btn-danger btn-sm',$user->id]) !!}
                                    {!! Form::close() !!}
                                    </td>
                                    @endcan
                        </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection