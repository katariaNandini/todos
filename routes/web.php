<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('todos', todosController::class)->middleware('auth');

Auth::routes();
Route::get('/', [todosController::class, 'index'])->name("todo.home");
// web.php
// Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:api');

Route::get('/create', function () {
    return view('layout.create');
})->name("todo.create");


Route::get('/edit/{id}', [todosController::class, 'edit'])->name("todo.edit");

Route::post('/update', [todosController::class, 'updateData'])->name("todo.updateData");

Route::post('/create', [todosController::class, 'store'])->name("todo.store");
Route::get('/delete/{id}', [todosController::class, 'delete'])->name("todo.delete");

Auth::routes();

Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome')->middleware('auth');

// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/register');
})->name('logout');


Route::resource('todos', todosController::class)->middleware('auth');
Auth::routes();
