<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BannerController;

use App\Http\Controllers\ContentController;

use App\Http\Controllers\ServiceController;

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;


Route::resource('/banner',BannerController::class);


Route::resource('/content',ContentController::class);


Route::resource('/service',ServiceController::class);

Route::resource('/change_password',ChangePasswordController::class);

Route::resource('/admin',AdminController::class);

Route::resource('/portfolios',PortfolioController::class);


Route::get('/', [SiteController::class, 'home'])->name('home'); 

Route::get('/about-us', [SiteController::class, 'about'])->name('about_us'); 

Route::get('/services', [SiteController::class, 'services'])->name('services'); 

Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio'); 

Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

////Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::get('/projects/{id}', [SiteController::class, 'service_details']);









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

});

require __DIR__.'/auth.php';
