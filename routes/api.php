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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');
// Route::post('/me2', [AuthController::class, 'me2']);
Route::post('/me2', [AuthController::class, 'me2'])->middleware('auth:sanctum');