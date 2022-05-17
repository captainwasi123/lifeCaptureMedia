<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\userController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\orderController;
use App\Http\Controllers\API\cartController;
use App\Http\Controllers\ProductController;


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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

//Route::resource('/video_upload', ProductController::class);


  //Authentication
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

  //Authenticated
    Route::middleware('auth:sanctum')->group( function () {
      //Address 
        Route::get('/allAddress', [userController::class, 'allAddress']);
        Route::post('/addAddress', [userController::class, 'addAddress']);

      //Cart
        Route::prefix('cart')->group(function(){
          Route::post('/step1', [cartController::class, 'step1']);
          Route::post('/step2', [cartController::class, 'step2']);
          Route::post('/step3', [cartController::class, 'step3']);
          Route::post('/step4', [cartController::class, 'step4']);
        });

      //Orders
        Route::prefix('orders')->group(function(){
          Route::get('/pending', [orderController::class, 'pending']);
          Route::get('/completed', [orderController::class, 'completed']);
        });
    });


