<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use ftp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            ->orderBy($request->sort ?? 'id', $request->order ?? 'desc')
            // ->where('hours', '>', 50)
            // ->hours()
            ->paginate()
            ->withQueryString();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        //1. validation

        //2. upload files
        $path = $request->file('image')->store('uploads', 'custom');

        //3. store in database
        // - using model object
        // $course = new Course();
        // $course->title = $request->title;
        // $course->image = $path;
        // $course->content = $request->content;
        // $course->hours = $request->hours;
        // $course->price = $request->price;
        // $course->save();

        // - using model class
        Course::create([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content,
            'hours' => $request->hours,
            'price' => $request->price,
        ]);

        //4. redirect to another page
        return redirect()
            ->route('courses.index')
            ->with('msg', 'course added successfully')
            ->with('type', 'success');
        // $courses = Course::all();
        // return view('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // Route Model Binding
        // $course = Course::find($id);
        // if (!$course) {
        //     abort(404);
        // }
        // $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        //1. validation

        //2. upload files
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'custom');
        }

        // - using model class
        $course->update([
            'title' => $request->title,
            'image' => $path ?? $course->image,
            'content' => $request->content,
            'hours' => $request->hours,
            'price' => $request->price,
        ]);

        //4. redirect to another page
        return redirect()
            ->route('courses.index')
            ->with('msg', 'course updated successfully')
            ->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        // unlink()
        // File::delete(public_path($course->image));
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('msg', 'Course deleted successfully')
            ->with('type', 'danger');
    }

    public function search(Request $request)
    {
        return [
            'courses' => Course::select('id', 'title')
                ->where('title', 'like', '%' . $request->q . '%')
                ->take(10)
                ->get()
        ];
    }

    /**
     * Show the trashed resource
     */
    public function trash()
    {
        // $courses = Course::whereNotNull('deleted_at')->paginate();
        $courses = Course::onlyTrashed()->paginate();

        return view('courses.trash', compact('courses'));
    }

    public function restore(Course $course)
    {
        // $course->update(['deleted_at' => null]);
        $course->restore();

        return redirect()
            ->route('courses.trash')
            ->with('msg', 'Course restored successfully')
            ->with('type', 'info');
    }

    public function delete(Course $course)
    {
        File::delete(public_path($course->image));
        $course->forceDelete();

        return redirect()
            ->route('courses.trash')
            ->with('msg', 'Course deleted permanently successfully')
            ->with('type', 'danger');
    }
}
