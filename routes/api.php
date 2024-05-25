<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::post('book',[BookController::class,'post' ]);
Route::get('users',[UserController::class,'index' ]);
Route::post('log',[UserController::class,'log' ]); 
Route::post('log1',[AuthenticatedSessionController::class, 'store']);
// ->middleware([ 'auth:sanctum']);
// Route::get('/user', function() {})->middleware([ 'auth:sanctum']);
Route::get('/user', function (Request $request) 
{    return $request->user();})->middleware('auth:sanctum');
Route::post('/test', [UserController::class,'test'])->middleware([ 'auth:sanctum']);
