<?php

use App\Http\Controllers\SujiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', [SujiController::class, 'list']);
