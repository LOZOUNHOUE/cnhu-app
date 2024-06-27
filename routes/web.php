<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('patient', PatientController::class);

    Route::resource('personnels', PersonnelController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour les admissions de nouveaux patients
    Route::prefix('admissions')->group(function () {
        Route::get('/create', [AdmissionController::class, 'create'])->name('admissions.create');
        Route::post('/', [AdmissionController::class, 'store'])->name('admissions.store');
    });
});

Route::get('/creer-admin', [UserController::class, 'createAdminAccount']);
Route::post('/ajouter_patient', [PatientController::class, 'addPatient']);

require __DIR__.'/auth.php';




Route::get('/about', [AboutController::class, 'index'])->name('about');
