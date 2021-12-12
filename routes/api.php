<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Admin\UserController;
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

    Route::post('/register','AuthController@register');
    Route::post('/login',[AuthController::class, 'login']);

    Route::group(['middleware'=>'jwt.verify'],function(){
        Route::get('user','AuthController@getUser');
    });

});

Route::group(['middleware'=>'jwt.verify'],function(){
    Route::apiResource('courses', 'App\Http\Controllers\Admin\CourseController');
    Route::apiResource('users', 'App\Http\Controllers\Admin\UserController');
});

