<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // [HttpGet, route('portfolio.index')]
    public function index() 
    {
        return view('portfolio.index');
    }
}
