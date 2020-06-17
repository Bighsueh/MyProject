<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //return view('');
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        //$result = DB::select('SELECT * FROM user WHERE id = ? AND password = ?',$_POST['student_id'],$_POST['password']);
        $user = $request["student_id"];
        $pw = $request["password"];
        $result = DB::table('user')
                    ->where('id','=',$user)
                    ->where('password','=',$pw)
                    ->value('id');
        
        
        if(isset($result))
        {
            return view('layouts.main');
        }
        else
        {
            return route('welcome');
        }
        //return $result->pluck('id') ; //回傳找到的user id
        // return $_POST['student_id'];
    }

}
