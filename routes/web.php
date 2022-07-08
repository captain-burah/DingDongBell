<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('comingSoon.index');
    return view('front-end.index');
});

Route::get('/about', function () {
    // return view('comingSoon.index');
    return view('front-end.about');
});

Route::get('/course', function () {
    // return view('comingSoon.index');
    return view('front-end.course');
});

Route::get('/instructor', function () {
    // return view('comingSoon.index');
    return view('front-end.instructor');
});

Route::get('/contact', function () {
    // return view('comingSoon.index');
    return view('front-end.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function() {
//     return view('admin.admin');
// })->name('admin');

Route::prefix('admin')->group(function () {
    Route::get('/{any?}', function () {
        return view('admin.admin');
    })->where('any', '^(?!api\/)[\/\w\.\,-]*')->name('admin-page');
});

Route::prefix('students')->group(function () {
    Route::get('/{any?}', function () {
        return view('students.students');
    })->where('any', '^(?!api\/)[\/\w\.\,-]*')->name('student-login-page');
});  

