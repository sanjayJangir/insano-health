<?php

namespace App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

// dd('Usera');

// Route::controller(HomeController::class)->middleware('user_token')->prefix('users')->name('users.')->group(function () {
Route::middleware('user_token')->prefix('users')->group(function () {
    Route::get('index', [HomeController::class, 'index'])->name('users.home');
    Route::get('saved-candidates', [HomeController::class, 'savedCandidates'])->name('users.saved-candidates');
    Route::get('contact', [HomeController::class, 'contact'])->name('users.contact');
    Route::get('details', [HomeController::class, 'details'])->name('users.details');
    Route::get('settings', [HomeController::class, 'settings'])->name('users.settings');
    Route::get('overview', [HomeController::class, 'overview'])->name('users.overview');
    Route::get('my-profile', [HomeController::class, 'myprofile'])->name('users.myprofile');
    Route::any('create-profile', [HomeController::class, 'createprofile'])->name('users.createprofile');
    // Route::PUT('create-profile', [HomeController::class, 'createprofile'])->name('users.createprofile');
    Route::get('recent-candidates', [HomeController::class, 'recentCandidates'])->name('users.recent-candidates');
    Route::post('create-profile-update', [HomeController::class, 'userStore'])->name('users.userStore');
    Route::post('create-profile-update-other', [HomeController::class, 'userStoreother'])->name('users.userStoreother');
    Route::post('user/save_bookmark', [HomeController::class, 'save_bookmark'])->name('users.save_bookmark');

});

