<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\Calculator;

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

Route::get('/', Index::class)->name('index.counter');
Route::get('/calculator', Calculator::class)->name('index.calculator');
