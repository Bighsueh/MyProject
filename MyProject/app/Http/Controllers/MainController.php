<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function start(Request $request)
    {
        return view('layouts.welcome');
    }

}
