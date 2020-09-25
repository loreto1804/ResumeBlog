<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // [HttpGet, route('contacts.index')]
    public function index() 
    {
        return view('contacts.index');
    }
}
