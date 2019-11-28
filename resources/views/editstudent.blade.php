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
                        {!! Form::model($user,array('route'=>['dashboard.update',$user->id],'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::text('fname',null,['class'=>'form-control','placeholder'=>'Enter First Name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('lname',null,['class'=>'form-control','placeholder'=>'Enter Last Name']) !!}
                            </div>
                            <div class="form-group">
                             {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter Email']) !!}
                                </div>
                                
                            <div class="form-group">
                            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Enter Student Password']) !!}
                                </div>
                        <div class="form-group">
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Student Username']) !!}
                        </div>
                        <div class="form-group">
                                {!! Form::number('rollno',null,['class'=>'form-control','placeholder'=>'Enter Roll Number']) !!}
                            </div>
                        <div class="form-group">
                       {!! Form::select('class', [
                        '1st' => '1st',
                        '2nd' => '2nd',
                        '3rd' => '3rd',
                        '4th' => '4th',
                        '5th' => '5th',
                        '6th' => '6th',
                        '7th' => '7th',
                        '8th' => '8th',
                        '9th' => '9th',
                        '10th' => '10th',],
                         null, ['class'=>'custom-select','placeholder' => 'Choose Student Class']); !!}
                         </div>
                         <div class='form-check form-check-inline'>
                                @foreach ($roles as $role)
                                    {{ Form::checkbox('roles[]',  $role->id, $user->roles, ['class'=>'form-check-input','style'=>'margin-left: 10px'] ) }}
                                    {{ Form::label($role->name, ucfirst($role->name),['class'=>'form-check-label']) }}<br>
                        
                                @endforeach
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