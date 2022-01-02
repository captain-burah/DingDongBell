<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Admin\LinkController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('App\Http\Controllers\API')->group(function(){

    Route::post('/register',[AdminController::class, 'register']) -> middleware(['assign.guard:admins']);
    Route::post('/login',[AdminController::class, 'login']) -> middleware(['assign.guard:admins']);

    Route::group(['middleware'=>'jwt.verify'],function(){
        Route::get('admin','AdminController@getUser');
    });
});

// Route::group(['middleware' => ['assign.guard:admins','jwt.auth']],function ()
// {
// 	Route::post('/login',[AdminController::class, 'login']);	
// });

Route::group(['middleware'=>['jwt.verify', 'assign.guard:admins']],function(){
    Route::apiResource('courses', 'App\Http\Controllers\Admin\CourseController');
    Route::apiResource('links', 'App\Http\Controllers\Admin\LinkController');
    
});

Route::apiResource('users', 'App\Http\Controllers\Admin\UserController');

Route::namespace('App\Http\Controllers\API')->group(function(){

    //Route::post('/register','AuthController@register');
    Route::post('/user_login',[AuthController::class, 'login']) -> middleware(['assign.guard:web']);

    Route::group(['middleware'=>'jwt.verify'],function(){
        Route::get('admin','AdminController@getUser');
    });
});