<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogsController;

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
Route::post('book',[BookController::class,'post' ])->middleware('auth:sanctum');
Route::get('bookings',[BookController::class,'indexg' ])->middleware('auth:sanctum');
Route::get('users',[UserController::class,'index' ]);
Route::get('blogs',[BlogsController::class,'api' ]);
Route::post('blogsrandom',[BlogsController::class,'getRandomBlogs' ]);
Route::post('log',[UserController::class,'logguest' ]); 
Route::post('editprofile',[UserController::class,'update' ])->middleware('auth:sanctum');; 
Route::post('reg',[UserController::class,'regguest' ]); 
Route::post('log1',[AuthenticatedSessionController::class, 'store']);
// ->middleware([ 'auth:sanctum']);
// Route::get('/user', function() {})->middleware([ 'auth:sanctum']);
Route::get('/user', function (Request $request) 
{    return $request->user();})->middleware('auth:sanctum');
Route::post('/test', [UserController::class,'test'])->middleware([ 'auth:sanctum']);
Route::get('test2', [UserController::class,'test2']);
Route::post('validate-token', [UserController::class,'validatetoken']);
// Route::get('/menu', [ItemController::class, 'api'])->name('menuapi');
