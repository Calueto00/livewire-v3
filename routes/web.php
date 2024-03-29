<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\Calculator;
use App\Livewire\TodoList;
use App\Livewire\CascadingDropDown;
use App\Livewire\ProductSearch;
use App\Livewire\ImageUpload;
use App\Livewire\RegisterForm;
use App\Livewire\ImageCreate;

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

Route::get('/', Index::class)->name('counter');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/todolist', TodoList::class)->name('todolist');
Route::get('/cascadingdropdown', CascadingDropDown::class)->name('cascadingdropdown');
Route::get('/products', ProductSearch::class)->name('products');
Route::get('/imageupload', ImageUpload::class)->name('imageupload');
Route::get('/createImage', ImageCreate::class)->name('createImagem');
