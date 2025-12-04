<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return "Admin panel";
    })->name('home');

    Route::get('/posts', function () {
        return "Admin posts";
    })->name('posts');

    Route::get('/gallery', function () {
        return "Admin gallery";
    })->name('gallery');
});



// class News {}
// Route::get('/news/{news}', function(News $news) {

// });

// Route::get('/news/{id}', function ($id) {
//     $sql = "SELECT * FROM news WHERE id = $id";
//     $res = mysqli_query($conn, $sql);
//     $news = mysqli_fetch_assoc($res);
//     if (!$news) {
//         return "Not Found";
//     }
// });
