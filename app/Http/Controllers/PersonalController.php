<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    function index()
    {
        return view('personal.index');
    }

    function resume()
    {
        return view('personal.resume');
    }

    function projects()
    {
        return view('personal.projects');
    }

    function contact()
    {
        return view('personal.contact');
    }
}
