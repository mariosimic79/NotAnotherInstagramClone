<?php

namespace NotAnotherInstagramClone\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        return view('profile');
        
    }
}
