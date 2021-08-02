<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
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
Route::post('/announcement/images/upload', [AnnouncementController::class, 'upload'])->name('announcement.images.upload');
Route::delete('/announcement/images/remove', [AnnouncementController::class, 'remove'])->name('announcement.images.remove');
Route::get('/announcement/images', [AnnouncementController::class, 'getImages'])->name('announcement.images');




Route::get('/mostra-dettaglio/{announcement}', [AnnouncementController::class, 'show'])->name('announcement.show');
Route::get('/dettaglio-categoria/{id}/{name}',[AnnouncementController::class, 'catdisplay'])->name('category.show');


Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class, 'accept'])->name('revisor.accept');
Route::post('/revisor/announcement/{id}/reject', [RevisorController::class, 'reject'])->name('revisor.reject');
Route::post('/revisor/announcement/{id}/nullify', [RevisorController::class, 'nullify'])->name('revisor.nullify');

Route::get('/search', [FrontController::class, 'search'])->name('search.results');

Route::get('/lavora-con-noi', [FrontController::class, 'work'])->name('work');

Route::post('/richiesta/revisore', [FrontController::class, 'send'])->name('send');
