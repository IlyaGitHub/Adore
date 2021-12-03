<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-events', [\App\Http\Controllers\DashboardController::class, 'events'])->name('dashboard-events');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/', [\App\Http\Controllers\StaticPageController::class, 'main'])->name('main');
Route::get('/members', [\App\Http\Controllers\MemberController::class, 'index'])->name('members');
Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::get('/events/{id}', [\App\Http\Controllers\EventController::class, 'show'])->name('event');
Route::get('/faq', [\App\Http\Controllers\StaticPageController::class, 'faq'])->name('faq');
Route::get('/contacts', [\App\Http\Controllers\StaticPageController::class, 'contact'])->name('contacts');
Route::get('/tariffs', [\App\Http\Controllers\TariffController::class, 'index'])->name('tariffs');

