<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

 Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
 });

//books Api
Route::get('/books','API\bookController@index');
Route::get('/books/show/{id}','API\bookController@show');
Route::post('/books/store','API\bookController@store');

//middleware
Route::middleware('isApiUser')->group(function(){
    Route::post('/books/update/{id}','API\bookController@update');
    Route::get('/books/delete/{id}','API\bookController@destroy');
});


//user API
Route::post('/users/create','API\authController@handelRegister');
Route::post('/users/login','API\authController@handelLogin');
Route::post('/users/logout','API\authController@logout');
