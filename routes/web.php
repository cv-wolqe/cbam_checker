<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CnCodeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
//get
Route::get('/', [CnCodeController::class, 'index'])->name('home');
Route::get('/blog/{post}', [BlogController::class, 'index'])->name('blog');
//post
Route::post('/', [CnCodeController::class, 'show']);
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.submit');
Route::post('/report', [ContactController::class, 'sendReport'])->name('report.submit');

