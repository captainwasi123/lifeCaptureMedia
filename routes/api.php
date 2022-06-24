<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\userController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\orderController;
use App\Http\Controllers\Api\cartController;
use App\Http\Controllers\Api\checkoutController;


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

  //Authentication
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

  //Authenticated
    Route::middleware('auth:sanctum')->group( function () {
      Route::post('logout', [AuthController::class, 'logout']);
      //Profile 
        Route::prefix('profile')->group(function(){
          Route::get('/view', [userController::class, 'viewProfile']);
          Route::post('/update', [userController::class, 'updateProfile']);
          Route::post('/changePassword', [userController::class, 'changePassword']);
        });

      //Address 
        Route::get('/allAddress', [userController::class, 'allAddress']);
        Route::post('/addAddress', [userController::class, 'addAddress']);

      //Cart
        Route::prefix('cart')->group(function(){
          Route::post('/step1', [cartController::class, 'step1']);
          Route::post('/step2', [cartController::class, 'step2']);
          Route::post('/step3', [cartController::class, 'step3']);
          Route::post('/step4', [cartController::class, 'step4']);

          Route::get('/view', [cartController::class, 'view']);
        });

      //Checkout
        Route::prefix('checkout')->group(function(){
          Route::post('/', [checkoutController::class, 'index']);
        });

      //Orders
        Route::prefix('orders')->group(function(){
          Route::get('/pending', [orderController::class, 'pending']);
          Route::get('/completed', [orderController::class, 'completed']);
        });
    });


