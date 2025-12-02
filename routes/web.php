<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/courses/{name}/{hours?}', function ($name, $hours = null) {
    if ($hours) {
        return $name . " course page, hours " . $hours;
    }


    return $name . " course page";
});
