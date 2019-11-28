@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
            <div class="card bg-dark text-white">
                <div style="background-color: #252525 !important;" class="card-header text-white">
                    Add a Student
                </div>
                <div class="card-body">
                        {!! Form::open(array('route'=>'complaint.store')) !!}
                        <div class="form-group">
                            {!! Form::text('cname',null,['class'=>'form-control','placeholder'=>'Enter Complaint Title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('cbody',null,['class'=>'form-control','placeholder'=>'Enter Complaint Briefly..']) !!}
                            </div>
                           
                         <div class="form-group py-4">
                            {!! Form::submit('Create',['type'=>'submit','class'=>'btn btn-danger btn-block']) !!}
                              </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection