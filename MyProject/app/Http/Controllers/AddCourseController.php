<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddCourseController extends Controller
{
    Public function add(Request $request)
    {
        //DB:insert('course(id,name,period,day,credit,class,teacher,classroom,type)values(?,?,?,?,?,?,?,?,?)',[$request["id"],$request["name"],$request["period"],$request["day"],$request["credit"],$request["class"],$request["teacher"],$request["classroom"],$request["type"]]);
        $data = $request['id'];
        DB::table('course')->insert([
            //'id' => $data, This is key value can't be added.
            'name' => $request['name'],
            'period' => $request['period'],
            'day' => $request['day'],
            'credit' => $request['credit'],
            'class' => $request['class'],
            'teacher' => $request['teacher'],
            'classroom' => $request['classroom'],
            'type' => $request['type']
        ]);
        return view('layouts.addcourse');
    }

    public function n()
    {
        return view('layouts.addcourse');
    }
}
