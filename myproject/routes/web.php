<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\YouthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SKController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // municipality routes
    Route::get('/organizations', [MunicipalityController::class, 'index'])->name('organizations.index');
    Route::get('/organizations/{id}', [MunicipalityController::class, 'show'])->name('organizations.show');
    Route::get('/organizations/{id}/edit', [MunicipalityController::class, 'edit'])->name('organizations.edit');
    Route::put('/organizations/{id}', [MunicipalityController::class, 'update'])->name('organizations.update');
    Route::delete('/organizations/{id}', [MunicipalityController::class, 'destroy'])->name('organizations.destroy');
   // Route::get('/registrations/create', [RegistrationController::class, 'create'])->name('registrations.create');

    // youth routes
    Route::get('/youth', [YouthController::class, 'index'])->name('youth.index');
    Route::get('/youth/create', [YouthController::class, 'create'])->name('youth.create');
    Route::post('/youth', [YouthController::class, 'store'])->name('youth.store');
    Route::get('/youth/create-sk', [SKController::class, 'create'])->name('youth.create-sk');
    Route::post('/youth/store-sk', [SKController::class, 'store'])->name('youth.store-sk');
    Route::get('/youth/{id}', [YouthController::class, 'show'])->name('youth.show');
    Route::get('/youth/{id}/edit', [YouthController::class, 'edit'])->name('youth.edit');
    Route::put('/youth/{id}', [YouthController::class, 'update'])->name('youth.update');
    Route::delete('/youth/{id}', [YouthController::class, 'destroy'])->name('youth.destroy');
    
    // LYDP file routes
    Route::get('/youth/{id}/download-lydp', [YouthController::class, 'downloadLydp'])->name('youth.download-lydp');
    Route::get('/youth/{id}/view-lydp', [YouthController::class, 'viewLydp'])->name('youth.view-lydp');

    Route::get('/sk', [SKController::class, 'index'])->name('sk.index');
    Route::get('/sk/{id}', [SKController::class, 'show'])->name('sk.show');
    Route::get('/sk/{id}/edit', [SKController::class, 'edit'])->name('sk.edit');
    Route::put('/sk/{id}', [SKController::class, 'update'])->name('sk.update');
    Route::delete('/sk/{id}', [SKController::class, 'destroy'])->name('sk.destroy');
    




});




require __DIR__.'/auth.php';
