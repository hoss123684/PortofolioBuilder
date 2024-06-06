<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIAuthController;
// use App\Http\Controllers\UserAuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/register', [APIAuthController::class, 'register']);
Route::post('/login', [APIAuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [APIAuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
// Route::post('register',[UserAuthController::class,'register']);
// Route::post('login',[UserAuthController::class,'login']);
// Route::post('logout',[UserAuthController::class,'logout'])
// ->middleware('auth:sanctum');