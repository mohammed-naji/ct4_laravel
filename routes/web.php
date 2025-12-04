<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('uri', 'action');
// Route::post('uri', 'action');
// Route::put('uri', 'action');
// Route::patch('uri', 'action');
// Route::delete('uri', 'action');


// Route::get('/', function () {
//     return "Doneeeeee";
// });

// Route::put('/', function () {
//     return "Doneeeeee";
// });

// Route::get('/about', function () {
//     return "About Us";
// });

// Route::get('/contact', function () {
//     return "Contact Us";
// });

// require 'admin.php';

// Route::get('/policy', function () {
//     return "Policy Page";
// });

// Route::post('/policy', function () {
//     return "Policy Page";
// });

// Route::put('/policy', function () {
//     return "Policy Page";
// });

// Route::patch('/policy', function () {
//     return "Policy Page";
// });

// Route::delete('/policy', function () {
//     return "Policy Page";
// });

// Route::any('/policy', function () {
//     return "Policy Page";
// });

// Route::match(['put', 'patch'], '/edit', function () {
//     return "Edit Page";
// });

// Route::view('/policy', 'policy');

// Route::get('/policy', function () {
//     return view('policy');
// });

// Route::get('/courses/{name}', function ($name) {
//     return $name . " course page";
// });

// Route::get('/courses/{name}/{hours?}', function ($name, $hours = null) {
//     if ($hours) {
//         return $name . " course page, hours " . $hours;
//     }


//     return $name . " course page";
// });

// Route::get('/', function () {

//     $name = "ahmed";
//     $age = 31;

//     // $url = url('/user/' . $name . '/age/' . $age);
//     // $url = route('aboutpage');

//     $url = route('user', ['age' => $age, 'name' => $name]);

//     // return "<a href='/about-us'>About Page</a>";
//     return "<a href='$url'>User Page</a>";
// })->name('front.home');

// Route::get('/about-ussssssss', function () {
//     return "About";
// })->name('aboutpage');

// Route::get('/user/{name}/age/{age}', function ($name, $age) {
//     return "Welcome user $name, your age $age";
// })->whereAlpha('name')->whereNumber('age')->name('user');

// Route::get('/news/{id}', function ($id) {
//     return "News Number $id";
// })->where('id', '[0-5]+');

// ::
// ->
// =>
// .

// home, about, contact

Route::get('/', [MainController::class, 'home'])->name('front.home');
Route::get('/about', [MainController::class, 'about'])->name('front.about');
Route::get('/contact', [MainController::class, 'contact'])->name('front.contact');
