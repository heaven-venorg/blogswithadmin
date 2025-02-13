<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('landing.home');

Route::get('/post/{slug}', [HomeController::class, 'show'])->name('landing.show');


Route::get('about', function () {
    return view('landing.view.about');
})->name('landing.about');


Route::middleware('auth')->group(function () {
    // Home Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.home');

    // Logout
    Route::post('logout', [LoginController::class, 'actionLogout'])->name('logout');

    // Post Controll
    Route::resource('/dashboard/post', PostController::class);
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'actionLogin'])->name('action.login');

Route::get('/regis', [RegisController::class, 'create'])->name('regis');
Route::post('/regis', [RegisController::class, 'store'])->name('regis.store');