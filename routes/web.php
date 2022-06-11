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

    //Orders
     Route::prefix('orders')->group(function(){
      Route::get('pending', 'orderController@pending')->name('admin.order.pending');
      Route::get('delivered', 'orderController@delivered')->name('admin.order.delivered');
      Route::get('cancelled', 'orderController@cancelled')->name('admin.order.cancelled');

      Route::get('cancel/{id}', 'orderController@cancelOrder');
      Route::get('deliver/{id}', 'orderController@deliverOrder');
      Route::get('downloadMedia/{id}', 'orderController@downloadMedia');
     });

    //Users
     Route::prefix('users')->group(function(){
      Route::get('active', 'userController@active')->name('admin.users.active');
      Route::get('blocked', 'userController@blocked')->name('admin.users.blocked');

      Route::get('block/{id}', 'userController@blockUser');
      Route::get('active/{id}', 'userController@activeUser');
     });

    //settings
     Route::prefix('settings')->group(function(){
      Route::get('/', 'settingController@index')->name('admin.settings');
      Route::post('/update', 'settingController@update')->name('admin.settings.update');
     });
   });
 });
