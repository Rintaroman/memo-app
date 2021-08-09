<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    //
    public function showHome()
    {
        return view('home');
    }

    public function showSubmit()
    {
        return view('submit');
    }
}
