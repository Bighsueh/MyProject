<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MainController extends Controller
{
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

    public function class_search()
    {
        return "尚未加入此功能";
    }
    public function department_search()
    {
        return "尚未加入此功能";
    }
    public function school_search()
    {
        return "尚未加入此功能";
    }
    public function search(Request $request)
    {
        return "尚未加入此功能";
    }
}
