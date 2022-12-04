<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\forntController;
use App\Http\Controllers\ideaController;
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

Route::get('/',[forntController::class,'index'])->name('front');
Route::post('/add-ideas',[forntController::class,'new'])->name('new.idea');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');
    Route::get('/details/{id}',[ideaController::class,'detail'])->name('idea.details');
    Route::get('/selected-idea',[ideaController::class,'selectedIdea'])->name('idea.selected');
    Route::post('/select-idea/{id}',[ideaController::class,'select'])->name('idea.select');
    Route::post('/new-category',[categoryController::class,'new'])->name('new.category');
    Route::get('/add-category',[categoryController::class,'add'])->name('add.category');
    Route::get('/manage-category',[dashboardController::class,'manage'])->name('manage.category');
    Route::get('/delete-category/{id}',[categoryController::class,'delete'])->name('delete.category');

});
