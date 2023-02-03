<?php

use Illuminate\Support\Facades\Route;

// Importo il MainController
use App\Http\Controllers\MainController;

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

// Index
Route::get('/', [MainController::class, 'home'])
    ->name('home');
// Show
Route::get('/saint/show/{id}', [MainController::class, 'saintShow'])
    ->name('saint.show');
// Delete 
Route::get('/saint/destroy/{id}', [MainController::class, 'saintDestroy'])
    ->name('saint.destroy');
// Create
Route::get('/saint/create/', [MainController::class, 'saintCreate']);