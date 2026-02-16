<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\YouthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // municipality routes
    Route::get('/municipalities', [MunicipalityController::class, 'index'])->name('municipalities.index');
   // Route::get('/registrations/create', [RegistrationController::class, 'create'])->name('registrations.create');

    // youth routes
    Route::get('/youth', [YouthController::class, 'index'])->name('youth.index');
    Route::get('/youth/create', [YouthController::class, 'create'])->name('youth.create');
    Route::get('/youth/create-sk', [YouthController::class, 'createSk'])->name('youth.create-sk');

});




require __DIR__.'/auth.php';
