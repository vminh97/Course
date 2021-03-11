<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
// Authentication Routes
Auth::routes();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'category'], function () {

    Route::get('/index', 'CategoryController@index');

    Route::get('/categorydad', 'CategoryController@listcategorydad');

    Route::post('/store','CategoryController@store');

    Route::post('/edit/{id}','CategoryController@edit');
    
    Route::delete('/destroy/{id}','CategoryController@destroy');

    Route::get('/export', 'CategoryController@export')->name('export');
});
Route::group(['prefix' => 'teacher'], function () {

    Route::get('/index', 'TeacherController@index');

    Route::post('/store','TeacherController@store');

    Route::post('/edit/{id}','TeacherController@edit');
    
    Route::delete('/destroy/{id}','TeacherController@destroy');
});
Route::group(['prefix' => 'customer'], function () {

    Route::get('/index', 'CustomerController@index');

    Route::post('/store','CustomerController@store');

    Route::post('/edit/{id}','CustomerController@edit');
    
    Route::delete('/destroy/{id}','CustomerController@destroy');

});



Route::group(['prefix' => 'user'], function () {
    
    Route::post('/register','AuthController@register');

    Route::post('/login','AuthController@login');

    Route::get('/logout','AuthController@logout');

    Route::get('/users','AuthController@all');

    Route::post('/users','AuthController@create');

    Route::put('/users/{id}','AuthController@updateUser');

    Route::delete('/users/{id}','AuthController@delete');
    //send gmail
    Route::post('/sentmail', 'ResetPasswordController@sendMail');
    //infomation user
    Route::get('/find/{token}', 'ResetPasswordController@find');
    //reset password
    Route::post('/reset', 'ResetPasswordController@resetPassword');
    //login social
    Route::post('/loginsocical','UserController@handleProviderCallback');



});
