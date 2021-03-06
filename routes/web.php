<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks', [App\Http\Controllers\Taskcontroller::class, 'index'])->name('tasks');

Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/create', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.delete');
Route::get('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');
