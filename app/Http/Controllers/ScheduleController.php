<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Schedule;


class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Schedule $schedule, User $user)
    {
        $user_id = Auth::user()->id;
        $schedule['schedule'] = DB::table('schedules')->where('user_id' ,'=', $user_id)->get();
        return view('viewschedule',compact('schedule'));

        if (empty($schedule->schedule[0])) {
            return "Schedule is Empty";
        }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        If($request->id){
            $user_id = User::where('id', "=", $request->id)->select ('id')->first();
            return view('createschedule',compact('user_id'));
       }
   }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Schedule $schedule, User $user) {
        $schedule->user_id = $request->id;
        $schedule->mon1 = $request->input('mon1');
        $schedule->mon2 = $request->input('mon2');
        $schedule->mon3 = $request->input('mon3');
        $schedule->mon4 = $request->input('mon4');
        $schedule->mon5 = $request->input('mon5');
        $schedule->mon6 = $request->input('mon6');
        $schedule->mon7 = $request->input('mon7');
        $schedule->tue1 = $request->input('tue1');
        $schedule->tue2 = $request->input('tue2');
        $schedule->tue3 = $request->input('tue3');
        $schedule->tue4 = $request->input('tue4');
        $schedule->tue5 = $request->input('tue5');
        $schedule->tue6 = $request->input('tue6');
        $schedule->tue7 = $request->input('tue7');
        $schedule->wed1 = $request->input('wed1');
        $schedule->wed2 = $request->input('wed2');
        $schedule->wed3 = $request->input('wed3');
        $schedule->wed4 = $request->input('wed4');
        $schedule->wed5 = $request->input('wed5');
        $schedule->wed6 = $request->input('wed6');
        $schedule->wed7 = $request->input('wed7');
        $schedule->thu1 = $request->input('thu1');
        $schedule->thu2 = $request->input('thu2');
        $schedule->thu3 = $request->input('thu3');
        $schedule->thu4 = $request->input('thu4');
        $schedule->thu5 = $request->input('thu5');
        $schedule->thu6 = $request->input('thu6');
        $schedule->thu7 = $request->input('thu7');
        $schedule->fri1 = $request->input('fri1');
        $schedule->fri2 = $request->input('fri2');
        $schedule->fri3 = $request->input('fri3');
        $schedule->fri4 = $request->input('fri4');
        $schedule->fri5 = $request->input('fri5');
        $schedule->fri6 = $request->input('fri6');
        $schedule->fri7 = $request->input('fri7');
    
        //update whichever fields you need to be updated
        $schedule->save();
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
