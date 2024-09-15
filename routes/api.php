<?php

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\SujiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/hello', [SujiController::class, 'list']);
Route::get('/suji', [SujiController::class, 'index']);
Route::post('/suji', [SujiController::class, 'add']);
Route::get('/todo', [ToDoController::class, 'index']);
Route::post('/todo', [ToDoController::class, 'add']);
Route::get('/users', function () {
    return User::all();
});
