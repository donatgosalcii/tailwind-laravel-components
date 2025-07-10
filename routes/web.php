<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.hero');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::view('/hero', 'pages.hero')->name('hero');
Route::view('/feature', 'pages.feature')->name('feature');
Route::view('/cta', 'pages.cta')->name('cta');
Route::view('/bento', 'pages.bento')->name('bento');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/header', 'pages.header')->name('header');
Route::view('/stats', 'pages.stats')->name('stats');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/grid', 'pages.grid')->name('grid');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/float-layouts', 'pages.float-layouts')->name('float-layouts');
// Continue for each component...

