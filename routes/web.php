<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

Route::get(
    '/',
    [todosController::class, 'index']
)->name("todo.home");

Route::get('/create', function () {
    return view('layout.create');
})->name("todo.create");


Route::get('/edit/{id}', [todosController::class, 'edit'])->name("todo.edit");

Route::post('/update', [todosController::class, 'updateData'])->name("todo.updateData");

Route::post('/create', [todosController::class, 'store'])->name("todo.store");
Route::get('/delete/{id}', [todosController::class, 'delete'])->name("todo.delete");
