<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    function sum($x, $y)
    {
        $sum = $x + $y;

        // return view('sum')->with('x', $x)->with('y', $y)->with('sum', $sum);
        // return view('sum', [
        //     'x' => $x,
        //     'y' => $y,
        //     'sum' => $sum
        // ]);

        return view('sum', compact('x', 'y', 'sum'));
    }

    function div($x, $y)
    {
        $div = $x / $y;

        return view('div', compact('x', 'y', 'div'));
    }
}
