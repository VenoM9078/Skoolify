@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
            <div class="card">
                <div class="card-header">
                    <span class="h5">Student Complaints</span>
                </div>
                <div class="card-body">
                        <table id="cTable" class="table table-striped table-bordered">
                            <thead>
                        <tr>
                        <th>Student Name</th>
                        <th>Complaint Title</th>
                        <th>Complaint Description</th>
                        <th>Action</th>
                        </tr>
                            </thead>
                            <tbody>
                            @foreach($complaints as $complaint)
                        <tr>
                            <td>{{ $complaint->name }}</td>
                            <td>{{ $complaint->cname }}</td>
                            <td>{{ $complaint->cbody }}</td>
                            <td class="btn-group">
                            {!! Form::open(array('route'=>['complaint.destroy',$complaint],'method'=>'DELETE')) !!}
                                {!! Form::submit('Delete',['type'=>'submit','style'=>'border-radius: 0px;','class'=>'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                            </td>
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