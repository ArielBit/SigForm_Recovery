<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigrController;

Route::get('/', [SigrController::class, 'index']);
Route::post('/form1', [SigrController::class, 'store1'])->name('form1.store1');
Route::get('/form1/confirmation', [SigrController::class, 'confirm')->name('sign_a.confirmation'); 
