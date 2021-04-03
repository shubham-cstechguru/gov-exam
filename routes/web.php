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
Route::any('admin', function () {
    return false;
});

// Route::group(['namespace' => 'App\Http\Controllers'], function() {
//     Route::group(['prefix' => '/account', 'as' => 'account.'], function() {
//         Route::get('login','UserAuthController@getLogin')->name('login');
// 	    Route::post('login', 'UserAuthController@postLogin')->name('login.post');
// 	    Route::get('register','UserAuthController@getRegister')->name('register');
// 	    Route::post('register', 'UserAuthController@postRegister')->name('register.post');
// 	    Route::get('logout', 'UserAuthController@logout')->name('logout');
//     });
//     Route::group(['middleware' => 'userauth'], function () {
//         Route::get('/', 'HomeController@index')->name('home');
//     });
// });


Route::group([], function () {
    Route::get('/', 'HomeController@examlist')->name('home');
    Route::get('/examlist', 'HomeController@index');
    Route::get('exam/{slug}', 'HomeController@examdetails');
    Route::post('examsearch', 'AjexController@examsearch');
    Route::get('notification/{slug}', 'HomeController@notification');
});


Route::group(['prefix' => '/account', 'as' => 'account.'], function () {
    Route::get('login', 'UserController@getLogin')->name('login');
    Route::post('login', 'UserController@postLogin')->name('login.post');
    Route::get('register', 'UserController@getRegister')->name('register');
    Route::post('register', 'UserController@postRegister')->name('register.post');
    Route::get('/forget-password', 'UserController@getEmail')->name('forgetpassword');
    Route::post('/forget-password', 'UserController@postEmail')->name('forgetpassword.post');
    Route::get('/reset-password/{token}', 'UserController@getPassword')->name('resetpassword');
    Route::post('/reset-password', 'UserController@updatePassword')->name('resetpassword.post');
    Route::get('/verify/{otp_token}', 'UserController@getVerify')->name('verify');
    Route::get('logout', 'UserController@logout')->name('logout');
});
Route::group(['middleware' => 'userauth',], function () {
    
});
