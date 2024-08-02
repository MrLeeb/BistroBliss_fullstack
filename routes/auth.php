<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    Route::post('logout1', [UserController::class, 'destroy'])
                ->name('logout1');
});
// Route::post('/testlog',[UserController::class,'log']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('adcategory',[CategoryController::class, 'index'])->name('adcategory');
    Route::post('adcategory',[CategoryController::class, 'store'])->name('adcategory.store');
    Route::get('adcategory/add',[CategoryController::class, 'create'])->name('adcategory.add');
    Route::get('adcategory/edit',[CategoryController::class, 'edit']);
    Route::post('adcategory/edit',[CategoryController::class, 'update'])->name('adcategory.edit');
    Route::get('adcategory/remove',[CategoryController::class, 'delete'])->name('adcategory.delete');
    Route::delete('adcategory/destroy',[CategoryController::class, 'destroy'])->name('adcategory.destroy');
    
    Route::get('admenu',[ItemController::class, 'index'])->name('admenu');
    Route::post('admenu',[ItemController::class, 'store'])->name('admenu.store');
    Route::get('admenu/add',[ItemController::class, 'create'])->name('admenu.add');
    Route::get('admenu/edit',[ItemController::class, 'edit']);
    Route::post('admenu/edit',[ItemController::class, 'update'])->name('admenu.edit');
    Route::get('admenu/remove',[ItemController::class, 'delete'])->name('admenu.delete');
    Route::delete('admenu/destroy',[ItemController::class, 'destroy'])->name('admenu.destroy');

    Route::get('blogs',[BlogsController::class, 'index'])->name('adblogs');
    Route::post('blogs',[BlogsController::class, 'store'])->name('adblogs.store');
    Route::get('blogs/add',[BlogsController::class, 'create'])->name('adblogs.add');
    Route::get('blogs/edit',[BlogsController::class, 'edit']);
    Route::post('blogs/edit',[BlogsController::class, 'update'])->name('adblogs.edit');
    Route::get('blogs/remove',[BlogsController::class, 'delete'])->name('adblogs.delete');
    Route::delete('blogs/destroy',[BlogsController::class, 'destroy'])->name('adblogs.destroy');


    Route::get('adbookings',[BookController::class, 'index'])->name('adbookings');
});
// Route::post('/api/book','BookController@handle');