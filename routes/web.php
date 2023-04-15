<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PublicController;
use App\Models\Application;
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

Route::get('/', [PublicController::class, 'home'])->name('homepage');

//Email per Contacts
Route::post('/submit', [PublicController::class, 'submit'])->name('submit');

//Creazione offerte di lavoro
Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
Route::get('/job/index', [JobController::class, 'index'])->name('job.index');
Route::get('/job/show/{job}', [JobController::class, 'show'])->name('job.show');

//Filtro per posizione
Route::get('/job/position/{position}', [JobController::class, 'byPosition'])->name('job.byPosition');

//Sezione Lavora con noi
// Route::get('/careers', [JobController::class, 'careers'])->name('careers');
Route::middleware(['auth'])->group(function(){
    Route::post('application/store', [ApplicationController::class, 'store'])->name('application.store');
    Route::get('application/index', [ApplicationController::class, 'index'])->name('application.index');
    Route::get('application/show/{application}', [ApplicationController::class, 'show'])->name('application.show');
    Route::get('application/{application}/download', [ApplicationController::class, 'download'])->name('application.download');
});

//Dashboard Admin
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});