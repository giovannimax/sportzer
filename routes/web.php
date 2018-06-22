<?php

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

Route::get('/verifyemail/{token}', ['as' => 'verifyemail', 'uses' => 'Auth\RegisterController@verify']);
Route::get('test', function(){
    return view('email.verification');
});
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
        Route::get('/home', ['as' => 'home', function(){
            return view('home');
        }]);
});