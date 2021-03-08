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
});
Route::group(['prefix' => 'user'], function () {
    
    Route::post('/register','AuthController@register');

    Route::post('/login','AuthController@login');

    Route::get('/logout','AuthController@logout');

    Route::get('/users','AuthController@all');

    Route::post('/users','AuthController@create');

    Route::put('/users/{id}','AuthController@updateUser');

    Route::delete('/users/{id}','AuthController@delete');

});