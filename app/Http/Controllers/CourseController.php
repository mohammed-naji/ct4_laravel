<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request->q);

        // $courses = Course::all();
        // $courses = Course::paginate(10);
        // $courses = Course::simplePaginate(10);
        // $courses = Course::orderBy('id', 'DESC')->get();
        // $courses = Course::orderBy('id', 'DESC')->paginate();
        // $courses = Course::latest()->paginate();
        // dd($courses);

        // if ($request->has('q')) {
        //     $courses = Course::where('title', 'like', '%' . $request->q . '%')
        //         ->orderBy($request->sort, $request->order)
        //         ->latest()
        //         ->paginate()
        //         ->withQueryString();
        // } else {
        //     $courses = Course::latest()->paginate();
        // }

        $courses = Course::when($request->q, function ($q) use ($request) {
            $q->where('title', 'like', '%' . $request->q . '%');
        })
            ->orderBy($request->sort ?? 'title', $request->order ?? 'asc')
            ->latest()
            ->paginate()
            ->withQueryString();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function search(Request $request)
    {
        return [
            'courses' => Course::select('id', 'title')
                ->where('title', 'like', '%' . $request->q . '%')
                ->take(10)
                ->get()
        ];
    }
}
