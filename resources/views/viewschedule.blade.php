@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-4">
                @if (count($schedule['schedule']) > 0)
                
            <div class="card">
                <div class="card-header">
                    <span class="h5">View Schedule</span>
                    {{ link_to_route('printpdf.download','Download Schedule in PDF',[Auth::user()->id],['class'=>'btn btn-dark float-right']) }}
                </div>
                <div class="card-body">
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
                                 <td align="center">{{ $schedule->schedule[0]->mon1 }}
                                 <td align="center">{{ $schedule->schedule[0]->mon2}}<br>
                                 <td align="center">{{ $schedule->schedule[0]->mon3 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->mon4 }}<br>
                                 <td rowspan="6"align="center">L<br><br>U<br><br>N<br><br>C<br><br>H
                                 <td align="center">{{ $schedule->schedule[0]->mon5 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->mon6 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->mon7 }}
                                </tr>
                                <tr>
                                 <td align="center">TUESDAY
                                 <td align="center">{{ $schedule->schedule[0]->tue1 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->tue2 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->tue3 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->tue4}}
                                 <td align="center">{{ $schedule->schedule[0]->tue5 }}<BR>
                                 <td align="center">{{ $schedule->schedule[0]->tue6 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->tue7 }}
                                </tr>
                                <tr>
                                <tr>
                                <td align="center">WEDNESDAY
                               <td align="center">{{ $schedule->schedule[0]->wed1 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->wed2 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->wed3 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->wed4}}
                                 <td align="center">{{ $schedule->schedule[0]->wed5 }}<BR>
                                 <td align="center">{{ $schedule->schedule[0]->wed6 }}<br>
                                 <td align="center">{{ $schedule->schedule[0]->wed7 }}
                                </tr>

                                <tr>
                                <td align="center">THURSDAY
                                    <td align="center">{{ $schedule->schedule[0]->thu1 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->thu2 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->thu3 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->thu4}}
                                        <td align="center">{{ $schedule->schedule[0]->thu5 }}<BR>
                                        <td align="center">{{ $schedule->schedule[0]->thu6 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->thu7 }}
                                       </tr>
                                 <tr>
                                <td align="center">FRIDAY
                                    <td align="center">{{ $schedule->schedule[0]->fri1 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->fri2 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->fri3 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->fri4}}
                                        <td align="center">{{ $schedule->schedule[0]->fri5 }}<BR>
                                        <td align="center">{{ $schedule->schedule[0]->fri6 }}<br>
                                        <td align="center">{{ $schedule->schedule[0]->fri7 }}
                                       </tr>
                                </body>
                        </table>   
                              
                </div>
               
            </div>
            @else 
        <div class="alert alert-danger"><h5>There is no schedule.<br><br> Ask an Admin to assign you a Schedule by <a href="{{ route('complaint.create') }}">Submitting a Query</a>.</h5></div>
            @endif
        </div>
    </div>
   
</div>
</div>
    
@endsection