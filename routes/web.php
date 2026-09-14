<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QrCodeController;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/configuracion', [QrCodeController::class, 'configuration'])->name('configuracion');
Route::post('/qr/generate', [QrCodeController::class, 'generate']);