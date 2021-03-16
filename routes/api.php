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

    Route::post('/update/{id}','CategoryController@update');
    
    Route::post('/edit/{id}','CategoryController@edit');

    Route::get('/find/{id}','CategoryController@find');

    Route::delete('/destroy/{id}','CategoryController@destroy');

    Route::get('/export', 'CategoryController@export')->name('export');
});
Route::group(['prefix' => 'product'], function () {

    Route::get('/index', 'ProductController@index');

    Route::post('/store','ProductController@store');

    Route::post('/edit/{id}','ProductController@edit');
    
    Route::delete('/destroy/{id}','ProductController@destroy');

    Route::get('/export', 'ProductController@export')->name('export');
});
Route::group(['prefix' => 'hastang'], function () {

    Route::get('/index', 'HastangController@index');

    Route::post('/store','HastangController@store');

    Route::post('/edit/{id}','HastangController@edit');
    
    Route::delete('/destroy/{id}','HastangController@destroy');

    Route::get('/export', 'HastangController@export')->name('export');
});
Route::group(['prefix' => 'comment'], function () {

    Route::get('/index', 'CommentController@index');

    Route::post('/store','CommentController@store');

    Route::post('/edit/{id}','CommentController@edit');
    
    Route::delete('/destroy/{id}','CommentController@destroy');

    Route::get('/export', 'CommentController@export')->name('export');
});
Route::group(['prefix' => 'teacher'], function () {

    Route::get('/index', 'TeacherController@index');

    Route::post('/store','TeacherController@store');

    Route::post('/edit/{id}','TeacherController@edit');
    
    Route::delete('/destroy/{id}','TeacherController@destroy');

    Route::get('/export', 'CategoryController@export')->name('export');
});
Route::group(['prefix' => 'certificate'], function () {

    Route::get('/index', 'CertificateController@index');

    Route::post('/store','CertificateController@store');

    Route::post('/edit/{id}','CertificateController@edit');
    
    Route::delete('/destroy/{id}','CertificateController@destroy');

    Route::get('/export', 'CertificateController@export')->name('export');
});
Route::group(['prefix' => 'order'], function () {

    Route::get('/index', 'OrderController@index');

    Route::post('/store','OrderController@store');

    Route::post('/edit/{id}','OrderController@edit');
    
    Route::delete('/destroy/{id}','OrderController@destroy');

    Route::get('/export', 'OrderController@export')->name('export');
});
Route::group(['prefix' => 'customer'], function () {

    Route::get('/index', 'CustomerController@index');

    Route::post('/store','CustomerController@store');

    Route::post('/edit/{id}','CustomerController@edit');
    
    Route::delete('/destroy/{id}','CustomerController@destroy');

    Route::get('/export', 'CategoryController@export')->name('export');

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
