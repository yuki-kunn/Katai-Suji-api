<?php

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\SujiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', [SujiController::class, 'list']);
Route::get('/suji', [SujiController::class, 'list']);
Route::post('/suji', [SujiController::class, 'add']);
Route::get('/todo', [ToDoController::class, 'index']);
Route::post('/todo', [ToDoController::class, 'add']);
