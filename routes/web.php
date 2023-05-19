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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'company'])->name('company');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/center-of-excellence', [App\Http\Controllers\HomeController::class, 'excellence'])->name('excellence');
Route::get('/services/{slung}', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/center-of-excellence/{slung}', [App\Http\Controllers\HomeController::class, 'excellences'])->name('excellences');
Route::get('/why-pr', [App\Http\Controllers\HomeController::class, 'why'])->name('why');
Route::get('/articles', [App\Http\Controllers\HomeController::class, 'articles'])->name('articles');
Route::get('/articles/{slung}', [App\Http\Controllers\HomeController::class, 'article'])->name('article');

Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-and-conditions');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');
