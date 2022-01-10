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
    return view('welcome');
});


Route::middleware('setlang')->group(function(){
    //home
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    //login with Git
    Route::get('login/github', 'authController@redirectToProvider')->name('auth.github.redirect');
    Route::get('login/github/callback', 'authController@handleProviderCallback')->name('auth.github.callback');
   
    //Register & Login
    Route::get('/signin' ,'authController@register')->name('auth.signin');
    Route::post('/handelRegister' ,'authController@handelRegister')->name('auth.handelRegister');
    Route::post('/handleLogin' ,'authController@handleLogin')->name('auth.handleLogin');

    Route::middleware('is_register')->group(function(){
        //language
        Route::get('/eng' ,'langController@eng')->name('lang.eng');
        Route::get('/ara' ,'langController@ara')->name('lang.ara');

        //user_services
        Route::get('/logout' ,'authController@logout')->name('auth.logout');
        Route::get('/showProfile' ,'userController@show' )->name('user.profile');
        Route::get('/editProfile/{id}' ,'userController@edit')->name('user.editprofile');
        Route::post('/updateProfile/{id}' ,'userController@update')->name('user.updateprofile');
        Route::get('/delete/{id}' ,'userController@destroy')->name('user.deleteprofile');

        //books
        Route::get('/book/index' ,'bookController@index')->name('book.index');
        Route::get('/book/show/{id}' ,'bookController@show')->name('book.show');
        Route::get('/book/create' ,'bookController@create')->name('book.create');
        Route::post('/book/store' ,'bookController@store')->name('book.store');

        //category
        Route::get('/category' ,'categoryController@index')->name('category.index');
        Route::get('/category/show/{id}' ,'categoryController@show')->name('category.show');

        //Notes
        Route::get('/note' ,'noteController@create')->name('note.create');
        Route::post('/note/create' ,'noteController@store')->name('note.store');




    });

    Route::middleware('is_admin')->group(function(){

        Route::get('/adminHome', function () {
            return view('adminHome');
        })->name('adminHome');
    });

});