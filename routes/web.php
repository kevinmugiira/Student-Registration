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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('master', [\App\Http\Controllers\ProfileController::class,'master']);
Route::get('welcome', [\App\Http\Controllers\ProfileController::class,'index']);
Route::get('profile/{id}', [\App\Http\Controllers\ProfileController::class,'show']);
Route::get('create', [\App\Http\Controllers\ProfileController::class,'create'])->name('create');
Route::post('profile/store', [\App\Http\Controllers\ProfileController::class,'store']);
Route::get('edit/{id}', [\App\Http\Controllers\ProfileController::class,'edit']);
Route::put('update/{id}', [\App\Http\Controllers\ProfileController::class,'update']);
Route::get('delete/{id}', [\App\Http\Controllers\ProfileController::class,'destroy']);

//Route::get('view', [\App\Http\Controllers\ProfileController::class,'index']);

Route::post("/logout",[\App\Http\Controllers\LogoutController::class,"store"])->name("logout");
