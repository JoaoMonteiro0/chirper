<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']); /* qual o controller e o metodo que queremos usar */
Route::post('/chirps', [ChirpController::class, 'store']);
