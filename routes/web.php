<?php

use App\Http\Controllers\TaskController;
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
    return view('home/index');
})->name('home');

Route::prefix('tasks')->controller(TaskController::class)->group(function() {
    Route::get('/create', 'create')->name('tasks.create');
    Route::get('/edit/{id}', 'edit')->name('tasks.edit');
});

