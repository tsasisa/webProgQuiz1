<?php

use App\Http\Controllers\MateriController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MateriController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\MateriController::class, 'index'])->name('home');

Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi.show');
Route::get('/popular', [MateriController::class, 'popular'])->name('materi.popular');


Route::get('/category/{name}', [CategoryController::class, 'categoryIndex'])->name('category.category');

Route::get('/about', function () {return view('about.aboutus');})->name('about');

Route::get('/writers', [WriterController::class, 'index'])->name('writer.index');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writer.show');

