<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    function index()
    {
        $about_title = "About Homepage";

        return view('personal.index', compact('about_title'));
    }

    function resume()
    {
        $about_title = "About Resume";

        return view('personal.resume', compact('about_title'));
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
