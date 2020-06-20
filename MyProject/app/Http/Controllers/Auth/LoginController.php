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
       // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        //$result = DB::select('SELECT * FROM user WHERE id = ? AND password = ?',$_POST['student_id'],$_POST['password']);
        $user = $request["student_id"];
        $pw = $request["password"];
        $result = DB::table('user')
                    ->where('id','=',$user)
                    ->where('password','=',$pw)
                    ->value('id');
        $request->session()->put('user',$result);

        if(isset($result))
        {
            $search_c = DB::table('student_selected')
                        //->where('student_selected.student_id','=',$result)
                        ->join('course','student_selected.course_id','=','course.id')
                        ->orderBy('period','asc')
                        ->orderBy('day','asc')
                        ->get();
            $search_t = DB::table('student_selected')
                //->where('student_selected.student_id','=',$result)
                ->join('course','student_selected.course_id','=','course.id')
                ->join('class','course.class','=','class.classid')
                ->orderBy('name','asc')
                ->orderBy('period','asc')
                ->get();
            //dd($search_t);
            return view('layouts.main')->with('sch',$search_c)->with('scht',$search_t);
        }
        else
        {
            return view('layouts.welcome');
        }
        //return $result->pluck('id') ; //回傳找到的user id
        // return $_POST['student_id'];
    }
    public function main()
    {
        $search_c = DB::table('student_selected')
            //->where('student_selected.student_id','=',$result)
            ->join('course','student_selected.course_id','=','course.id')
            ->orderBy('period','asc')
            ->orderBy('day','asc')
            ->get();
        $search_t = DB::table('student_selected')
            //->where('student_selected.student_id','=',$result)
            ->join('course','student_selected.course_id','=','course.id')
            ->join('class','course.class','=','class.classid')
            ->orderBy('name','asc')
            ->orderBy('period','asc')
            ->get();
        //dd($search_t);
        return view('layouts.main')->with('sch',$search_c)->with('scht',$search_t);
    }


}
