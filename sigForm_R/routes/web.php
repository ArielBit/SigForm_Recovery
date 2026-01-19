<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigrController;

Route::get('/', [SigrController::class, 'index']);
