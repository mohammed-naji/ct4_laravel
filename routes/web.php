<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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

// Route::get('/', [MainController::class, 'home'])->name('front.home');
// // Route::get('/', 'MainController@home')->name('front.home');
// Route::get('/about', [MainController::class, 'about'])->name('front.about');
// Route::get('/contact', [MainController::class, 'contact'])->name('front.contact');


// home, about, services, team, news, single news, contact

// Route::get('/', [SiteController::class, 'home'])->name('site.home');
// Route::get('/about', [SiteController::class, 'about'])->name('site.about');
// Route::get('/services', [SiteController::class, 'services'])->name('site.services');
// Route::get('/team', [SiteController::class, 'team'])->name('site.team');
// Route::get('/news', [SiteController::class, 'news'])->name('site.news');
// Route::get('/news/{id}', [SiteController::class, 'news_single'])->name('site.news_single');
// Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
// Route::post('/contact', [SiteController::class, 'contact_data'])->name('site.contact_data');

// Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
// Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
// Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
// Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');

// Route::resource('posts', PostsController::class);

// /pages/contact
// Route::get('pages/contact', [SiteController::class, 'contact']);
// Route::get('pages/{id}', [SiteController::class, 'pages']);

// Route::get('/export', TestController::class);


Route::get('sum/{x}/{y}', [CalcController::class, 'sum'])->name('sum');
Route::get('div/{x}/{y}', [CalcController::class, 'div'])->name('div');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/freelancer', [FreelancerController::class, 'index'])->name('freelancer.index');

Route::prefix('personal')->name('personal.')->group(function () {
    Route::get('/', [PersonalController::class, 'index'])->name('index');
    Route::get('/resume', [PersonalController::class, 'resume'])->name('resume');
    Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
    Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
    Route::post('/contact', [PersonalController::class, 'contact_email']);
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/about', [BlogController::class, 'about'])->name('about');
    Route::get('/post', [BlogController::class, 'post'])->name('post');
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
});


Route::get('/form1', [FormController::class, 'form1'])->name('forms.form1');
Route::post('/form1', [FormController::class, 'form1_data']);

Route::get('/form2', [FormController::class, 'form2'])->name('forms.form2');
Route::post('/form2', [FormController::class, 'form2_data']);

Route::get('/form3', [FormController::class, 'form3'])->name('forms.form3');
Route::post('/form3', [FormController::class, 'form3_data']);

Route::get('/form4', [FormController::class, 'form4'])->name('forms.form4');
Route::post('/form4', [FormController::class, 'form4_data']);

Route::get('/form5', [FormController::class, 'form5'])->name('forms.form5');
Route::post('/form5', [FormController::class, 'form5_data']);

Route::resource('courses', CourseController::class);
