<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CnCodeController;

Route::get('/', [CnCodeController::class, 'index']);
Route::get('/knowledgebase', [\App\Http\Controllers\KnowledgebaseController::class, 'index'])->name('knowledgebase');
Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');


Route::post('/', [CnCodeController::class, 'show']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.submit');
