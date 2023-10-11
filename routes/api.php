<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('auth/{provider}/redirect', [LoginController::class, 'redirect']);
// Route::post('auth/{provider}/callback', [LoginController::class, 'callback']);


Route::post('user/data', [LoginController::class, 'userdata']);
Route::post('user/login', [AuthenticatedSessionController::class, 'store']);
Route::post('user/register', [RegisteredUserController::class, 'store']);
