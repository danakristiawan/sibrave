<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/home', 'User\HomeController@index');
    Route::get('/target', 'User\TargetController@index');
    Route::get('/achievement', 'User\AchievementController@index');
    Route::get('/report', 'User\ReportController@index');
    Route::get('/profile', 'User\ProfileController@index');
});

Route::group([
    'prefix' => 'super',
    'middleware' => ['auth', 'role:super']
], function () {
    Route::get('/home', 'Super\HomeController@index');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin|super']
], function () {
    Route::get('/home', 'Admin\HomeController@index');
});
