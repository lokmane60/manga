<?php

use App\Http\Controllers\CreatorUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\UserController;


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

Route::get('/manga', function () {
    return view('layouts/showManga');
});

Route::get('/links/create', [MangaController::class, 'create'])->name('links.create')->middleware('auth');
Route::post('/links', [MangaController::class, 'store'])->name('links.store');
Route::get('/', [MangaController::class, 'index'])->name('links.index');

Route::post('/chapter', [ChapterController::class, 'store'])->name('chapter.store');
Route::get('/chapter', [ChapterController::class, 'index'])->name('chapter.index');


Route::get('/manga/{id}', [MangaController::class, 'manga']);



Route::get('/signup', function () {
    return view('layouts/signUp');
});
Route::post('/signup', [UserController::class, 'store'])->name('signUp.store');



Route::get('/login', function () {
    return view('layouts/login');
})->name('login');
Route::post('/login', action: [UserController::class, 'login'])->name('login.store');
Route::get('/logout', action: [UserController::class, 'logout'])->name('login.logout');


Route::prefix('Dashboard')->middleware(['auth'])->group(function () {
    Route::get('/companyUser', [UserController::class, 'index']) ->name('companyUser.index')->middleware(['role:company_user']);
    Route::post('/companyUser', [UserController::class, 'index'])->name('companyUser.store')->middleware(['role:company_user']);

    Route::get('/creatorUser',[CreatorUserController::class, 'index'] )->name('creatorUser.index')->middleware(['role:creator_user']);
    Route::post('/creatorUser', [UserController::class, 'settings'])->name('creatorUser.store')->middleware(['role:creator_user']);

});

