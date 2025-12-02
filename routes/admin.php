<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::get('/admin', function () {
    return "Admin panel";
});

Route::get('/admin/posts', function () {
    return "Admin posts";
});

Route::get('/admin/gallery', function () {
    return "Admin gallery";
});
