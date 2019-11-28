<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Complaint;

use App\User;


class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isTeacher']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $complaints = Complaint::all();
        return view('viewcomplaint',compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user) {
        $user = User::all();
        $user->name = Auth::user()->name;
        return view('createcomplaint',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Complaint $complaint, User $user) {
        $user =  User::find($user);
        $complaint->name = Auth::user()->name;
        $complaint->cname = $request->input('cname');
        $complaint->cbody = $request->input('cbody');
    
        //update whichever fields you need to be updated
        $complaint->save();
        return redirect()->route('home.index');
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
    public function destroy(Complaint $complaint)
    {
        $complaint->delete();
        return redirect()->route('complaint.index');
    }
}
