<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MarriageRegistrationController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // New route for marriage registrations
    Route::get('/marriage-registrations/create', [MarriageRegistrationController::class, 'create'])->name('marriageRegistrations.create');
    Route::get('/marriage-registration', [MarriageRegistrationController::class, 'show'])->name('marriage-registration.show');
    Route::post('/marriage-registration', [MarriageRegistrationController::class, 'store'])->name('marriage-registration.store');
    Route::resource('marriageRegistrations', MarriageRegistrationController::class);
});

require __DIR__.'/auth.php';