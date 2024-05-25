<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormHandling;

Route::get('/',[FormHandling::class,'index']);
Route::post('/',[FormHandling::class,'store']);
