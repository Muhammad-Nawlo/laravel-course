<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\TaskController::class, 'index'])->name('home');
Route::post('/tasks', [\App\Http\Controllers\TaskController::class, 'store'])->name('create.task');
Route::delete('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'destroy'])->name('destroy.task');
Route::put('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'update'])->name('update.task');


Route::get('/test', function () {
    return view('welcome');
});
