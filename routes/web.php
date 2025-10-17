<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CnCodeController;

Route::get('/', [CnCodeController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');


Route::post('/', [CnCodeController::class, 'show']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.submit');
