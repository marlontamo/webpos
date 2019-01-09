<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => 'required|max:255',
            'username'=> 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    public function index()
    {
        return view('backend.index');
    }
    public function userProfile($id)
    {
       echo "<h1>User IDnumber [".$id."] Profile:</h1>";
    }
    // function for creating new user by admin

    public  function createnewuser(Request $request)
    {
       return view('backend/Users.create');
       
    }
    // for storing information of new user in database
    public function storenewuser (Request $request)
    {
       $this->validate($request,[
            'username'=> 'required|max:255|unique:users',
           'email' => 'required|email|max:255|unique:users',
        ]);
        User::create([
            'name' => $request['name'],
            'username'=>$request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
       
          return "new user created";

    }
    public function edituser($id)
    {
        $user = User::find($id);

        
        return view('backend/Users.edit', compact('user'));
    }
    public function updateuser($id, Request $request)
    {
          $user = User::findOrFail($id);
       $this->validate(request(),[
            'username'=> 'required|max:255|unique:users',
           'email' => 'required|email|max:255|',
        ]);
       $requestData = $request->all();
      
       $user->update([
            'name' => $requestData['name'],
            'username'=>$requestData['username'],
            'email' => $requestData['email'],
            'password' => bcrypt($requestData['password']),
        ]);
      return redirect('/backend/users');
    }
    public function destroyuser($id)
    {
        //
    }
    public function listallusers()
    {
        $users = User::all();
       // dd($users);
        return view('backend/Users.list', compact('users'));
    }
    public function showuser($id)
    {
        $user= User::findOrFail($id);
        return view('backend/Users.view', compact('user'));
    }
}
