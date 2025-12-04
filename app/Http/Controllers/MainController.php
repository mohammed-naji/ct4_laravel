<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function home()
    {
        return "home page";
    }

    function about()
    {
        return "about page";
    }

    function contact()
    {
        return "contact page";
    }
}
