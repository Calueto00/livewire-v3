<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\Calculator;
use App\Livewire\TodoList;
use App\Livewire\CascadingDropDown;

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
Route::get('/todolist', TodoList::class)->name('index.todolist');
Route::get('/cascadingdropdown', CascadingDropDown::class)->name('index.cascadingdropdown');
