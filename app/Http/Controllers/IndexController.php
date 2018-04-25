<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () 
    {
        $userLogin = auth()->check();
        return view('pages.index',compact('userLogin'));
    }
}
