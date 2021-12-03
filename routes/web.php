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
    return view('comingSoon.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function() {
//     return view('admin.admin');
// })->name('admin');

Route::get('admin/{any?}', function () {
    return view('admin.admin');
})->where('any', '^(?!api\/)[\/\w\.\,-]*')->name('landing-page');;