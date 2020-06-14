<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function gonwei()
    {
        return view('layouts/welcome');
    }
    public function gonwei2()
    {
        return view('layouts/dashboard');
    }
    public function test()
    {
        return view('layouts.test');
    }
}
