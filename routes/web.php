<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Crew
Route::get('/crew', [CrewsController::class, 'index'])->name('crew.index');
Route::get('/crew/create', [CrewsController::class, 'create'])->name('crew.create');
Route::post('/crew/insert', [CrewsController::class, 'store'])->name('crew.store');
Route::get('/crew/{crew}/edit', [CrewsController::class, 'edit'])->name('crew.edit');
Route::post('/crew/update', [CrewsController::class, 'update'])->name('crew.update');
Route::get('/crew/{id}/delete', [CrewsController::class, 'destroy'])->name('crew.destroy');


//Document
Route::get('/document', [DocumentsController::class, 'index'])->name('document.index');
Route::get('/document/create', [DocumentsController::class, 'create'])->name('document.create');
Route::post('/document/insert', [DocumentsController::class, 'store'])->name('document.store');
// Route::get('/document/{crew}/edit', [DocumentsController::class, 'edit'])->name('document.edit');
// Route::patch('/document', [DocumentsController::class, 'update'])->name('document.update');
// Route::delete('/document/{crew}', [DocumentsController::class, 'destroy'])->name('document.destroy');

//User
Route::get('/user', [UsersController::class, 'index'])->name('user');
