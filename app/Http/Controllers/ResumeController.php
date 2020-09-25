<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    // [HttpGet, route('resume')]
    public function index() 
    {
        return view('resume.index');
    }
}
