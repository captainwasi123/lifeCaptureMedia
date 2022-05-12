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


// Admin Panel
    Route::prefix('admin')->namespace('admin')->group(function(){
        Route::get('/login', 'authController@login')->name('admin.login');
        Route::post('/login', 'authController@loginAttempt');
        Route::get('/logout', 'authController@logout')->name('admin.logout');

        //Authenticated
            Route::middleware('adminAuth')->group(function(){
                //Dashboard
                Route::get('/', 'adminController@index')->name('admin.index');
            });
    });
