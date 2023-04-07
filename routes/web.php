<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('blog', BlogController::class);


Route::resource('post', PostController::class);

Route::get('blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
Route::post('blogs/store', [BlogsController::class, 'store'])->name('blogs.store');
Route::get('blogs/edit/{blogs}', [BlogsController::class, 'edit'])->name('blogs.edit');
Route::post('blogs/update/{blogs}', [BlogsController::class, 'update'])->name('blogs.update');
Route::post('blogs/delete/{blogs}', [BlogsController::class, 'delete'])->name('blogs.delete');
