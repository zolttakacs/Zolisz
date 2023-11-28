<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Regisztrációs nézet, nem bejelentkezett felhasználóknak
Route::get('/registration', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/registration', [RegistrationController::class, 'processData'])->name('registration.process');

Route::get('/login', [LoginController::class, 'showForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'processData'])->name('login.process');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/todos',[TodoController::class, 'showList'])->name('todos.list');
Route::get('/todos/{record}', [TodoController::class, 'showOne'])->name('todos.one');

Route::get('/todos/new',[TodoController::class,'addForm'])->name('todos.addForm');
Route::post('/todos/new', [TodoController::class, 'add'])->name('todos.add');

Route::delete('todos/delete/{record}', [TodoController::class, 'delete'])->name('todos.delete');
Route::get('/todos/update/{record}', [TodoController::class, 'updateForm'])->name('todos.updateForm');
Route::put('/todos/update/{record}', [TodoController::class, 'update'])->name('todos.update');