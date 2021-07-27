<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [FrontController::class, 'homepage'])->name('homepage');
Route::get('/inserisci-annuncio', [AnnouncementController::class, 'create'])->name('announcement.create');
Route::post('/annuncio-store', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::get('/mostra-dettaglio/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');