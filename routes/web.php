<?php

use App\Http\Controllers\AdminController;
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


Route::resource('admin/blog', BlogController::class);


Route::resource('admin/post', PostController::class);

Route::get('blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
Route::post('blogs/store', [BlogsController::class, 'store'])->name('blogs.store');
Route::get('blogs/edit/{blogs}', [BlogsController::class, 'edit'])->name('blogs.edit');
Route::post('blogs/update/{blogs}', [BlogsController::class, 'update'])->name('blogs.update');
Route::post('blogs/delete/{blogs}', [BlogsController::class, 'delete'])->name('blogs.delete');

Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('admin/widget', [AdminController::class, 'widget'])->name('admin.widget');
// Route::get('admin/blog', [AdminController::class, 'blog'])->name('admin.blog.index');

// Route::get('admin/blog', [BlogsController::class, 'index'])->name('backend.blog.index');
// Route::get('admin/blog/create', [BlogsController::class, 'create'])->name('backend.blog.create');
// Route::post('admin/blog/store', [BlogsController::class, 'store'])->name('backend.blog.store');
// Route::get('admin/blog/edit/{blog}', [BlogsController::class, 'edit'])->name('backend.blog.edit');
// Route::post('admin/blog/update/{blog}', [BlogsController::class, 'update'])->name('backend.blog.update');
