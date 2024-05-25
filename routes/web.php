<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormHandling;

Route::get('/', [FormHandling::class, 'index']);
Route::post('/', [FormHandling::class, 'store']);
Route::get('/view-students', [FormHandling::class, 'show']);
Route::get('/delete/{id}', [FormHandling::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [FormHandling::class, 'edit'])->name('edit');
Route::post('/update/{id}', [FormHandling::class, 'update'])->name('update');

