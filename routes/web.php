<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class, 'welcome'])->name('welcome');
Route::get('form',[PublicController::class,'Form']) -> name ('form');


Route::post('form/iscriviti',[PublicController::class,'iscriviti']) -> name ('form.iscriviti');

Route::get('/articles/index', [PublicController::class, 'index'])->name('articles.index');
Route::get('/article/{id}/edit', [PublicController::class, 'edit'])->name('article.edit');