@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
            <div class="card">
                <div class="card-header">
                    <span class="h5">Create Schedule</span>
                </div>
                <div class="card-body">
                        {!!  Form::open(array('route' => array('schedule.store', 'id' => $user_id))) !!}
                        <table class="table table-bordered table-striped" border="2" cellspacing="3" align="center">
                                <tr>
                                 <td align="center">
                                 <td>8:30-9:30
                                 <td>9:30-10:30
                                 <td>10:3-11:30
                                 <td>11:30-12:30
                                 <td>12:30-2:00
                                 <td>2:00-3:00
                                 <td>3:00-4:00
                                 <td>4:00-5:00
                                </tr>
                                
                                <tr>
                                 <td align="center">MONDAY
                                 <td align="center">{!! Form::select('mon1', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                 <td align="center">{!! Form::select('mon2', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('mon3', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('mon4', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td rowspan="6"align="center">L<br><br>U<br><br>N<br><br>C<br><br>H
                                 <td align="center">{!! Form::select('mon5', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('mon6', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('mon7', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                </tr>
                                <tr>
                                 <td align="center">TUESDAY
                                 <td align="center">{!! Form::select('tue1', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('tue2', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('tue3', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('tue4', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                 <td align="center">{!! Form::select('tue5', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<BR>
                                 <td align="center">{!! Form::select('tue6', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('tue7', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                </tr>
                                <tr>
                                 <td align="center">WEDNESDAY
                                 <td align="center">{!! Form::select('wed1', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('wed2', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<BR>
                                 <td align="center">{!! Form::select('wed3', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('wed4', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                 <td align="center"> {!! Form::select('wed5', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                <td align="center">{!! Form::select('wed6', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                <td align="center">{!! Form::select('wed7', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                </tr>

                                <tr>
                                 <td align="center">THURSDAY
                                 <td align="center">{!! Form::select('thu1', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('thu2', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('thu3', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<BR>
                                 <td align="center">{!! Form::select('thu4', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                 <td align="center">{!! Form::select('thu5', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('thu6', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('thu7', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                </tr>
                                <tr>
                                 <td align="center">FRIDAY
                                 <td align="center">{!! Form::select('fri1', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<BR>
                                 <td align="center">{!! Form::select('fri2', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('fri3', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('fri4', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                 <td align="center">{!! Form::select('fri5', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('fri6', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}<br>
                                 <td align="center">{!! Form::select('fri7', [
                                        'Math' => 'Math',
                                        'English' => 'English',
                                        'Physics' => 'Physics',
                                        'Computer' => 'Computer',],null, ['class'=>'custom-select','placeholder' => 'Subject']); !!}
                                </tr>
                                </body>
                        </table>   
                        {!! Form::submit('Create',['type'=>'submit','class'=>'btn btn-success btn-block']) !!}       
                </div>
                {!! Form::close() !!}
               
            </div>
            
        </div>
    </div>
   
</div>
</div>
    
@endsection