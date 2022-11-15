<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/delete/{id}', [TodoController::class, 'delete']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::post('/save-todo', [TodoController::class, 'saveTodo'])->name('saveTodo');
Route::post('/edit', [TodoController::class, 'updateTodo'])->name('updateTodo');