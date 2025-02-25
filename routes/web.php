<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BannerController;

use App\Http\Controllers\ContentController;

use App\Http\Controllers\ServiceController;

Route::resource('/banner',BannerController::class);


Route::resource('/content',ContentController::class);


Route::resource('/service',ServiceController::class);


Route::get('/', [SiteController::class, 'home']);

Route::get('/about_us', [SiteController::class, 'about']);

Route::get('/services', [SiteController::class, 'services']);


Route::get('/portfolio', [SiteController::class, 'portfolio']);


Route::get('/contact', [SiteController::class, 'contact']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

});

require __DIR__.'/auth.php';
