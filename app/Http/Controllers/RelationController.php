<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    function users()
    // function users(User $user)
    {
        // $user->load('passport');
        // $users = User::get();
        $users = User::with('passport')->get();
        // dd($users);
        // user has one passport

        return view('relations.users', compact('users'));
    }

    function passport(Passport $passport)
    {
        $passport->load('user');
        dd($passport);
        // dd($passport->user->name);
    }
}

// hasOne - belongsTo
// hasMany - belongsTo
// belongsToMany - belongsToMany
