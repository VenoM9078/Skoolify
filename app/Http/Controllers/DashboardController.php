<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DashboardController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware(['auth','isAdmin','clearance','isTeacher']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles = Role::get();
        return view('createstudent',['roles'=>$roles]);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $data
     * @return \App\User
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request, User $user)
    {

        $validData = $this->validate($request, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'rollno' => ['required','unique:users','integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'class' => ['required','string'],
        ]);

        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
            }
        }

        User::create([
            'fname' => $validData['fname'],
            'lname' => $validData['lname'],
            'name' => $validData['name'],
            'rollno' => $validData['rollno'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),
            'class' => $validData['class'],
        ]);

        
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
    public function edit($id, User $user)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();
        return view ('editstudent',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    $user =  User::find($id);
    $user->fname = $request->input('fname');
    $user->lname = $request->input('lname');
    $user->name = $request->input('name');
    $user->class = $request->input('class');
    $user->rollno = $request->input('rollno');
    $user->email = $request->input('email');
    $roles = $request['roles'];

    if (isset($roles)) {        
        $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
    }        
    else {
        $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
    }
    //update whichever fields you need to be updated
    $user->save();
    return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard.index');
    }
}
