<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// })->middleware(['auth', 'verified'])->group(function(){
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// });
//dd(auth()->user());
    return view('./adminscontrol/admincontrol');
})
->middleware(['auth:sanctum',
//  'verified'
 ])
->name('admincontrol');

// Route::get('./adcategory', function () {
//     return view('./adminscontrol/category');
// })->middleware(['auth', 'verified'])->name('adcategory');

Route::get('/admenu', function () {
    return view('./adminscontrol/menu');
})->middleware(['auth', 'verified'])->name('admenu');

Route::get('/api/menu', [ItemController::class, 'api'])->name('menuapi');
Route::get('api/category', [CategoryController::class, 'api'])->name('categoryapi');
Route::get('api/book', [BookController::class, 'index'])->name('bookapi');

// Route::post('api/book', [BookController::class, 'post']
// )->name('book');

// Route::post('adcategory',[CategoryController::class, 'store'])->name('adcategory.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::post('/api/book','BookController@post');
// Route::resource('categories', CategoryController);
// Route::any('{all}', function () {
//     return view('welcome');
// })->where(['all' => '.*']);


Route::get('/testlog', function(){
    return view('./LoginAndReg/log');
});
  
  Route::post('/testlog', [UserController::class,'log'])->name('log.adm');
//   Route::post('/testlog', [AuthenticatedSessionController::class, 'store'])->name('log.adm');
Route::post('/bookhandleresponse', [BookController::class,'handleresponse']);
// Route::post('/rejectb', [BookController::class,'handleresponse']);


// Route::post('logcred',[UserController::class,'log' ])->name('logcred');

require __DIR__.'/auth.php';
