<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = [];
        $name = "<script>alert(1)</script>";
        $desc = "<p>lorem lorem <i>italic text</i> and <b>Bold text</b></p>";

        return view('users', compact('users', 'name', 'desc'));
    }
}
