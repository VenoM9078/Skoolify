<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Schedule;

class PDFController extends Controller
{
    public function download(Schedule $schedule, User $user) {
        $user_id = Auth::user()->id;
        $schedule = DB::table('schedules')->where('user_id' ,'=', $user_id)->get();
        $pdf = PDF::loadView('pdf_view', compact('schedule'));
        return $pdf->download('schedule.pdf');
    }
}
