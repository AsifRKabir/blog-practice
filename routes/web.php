<?php

use App\Http\Controllers\BlogPagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// User Routes

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/blogs/{id}', [PagesController::class, 'blog'])->name('blog');

// Admin Routes

Route::prefix('admin')->group(function () {

    // Main Pages Routes

    Route::get('/main', [MainPagesController::class, 'index'])->name('admin.main');
    Route::put('/main', [MainPagesController::class, 'update'])->name('admin.main.update');

    // Admin Pages Routes

    Route::get('/dashboard', [MainPagesController::class, 'dashboard'])->name('admin.dashboard');

    // Blogs Pages Routes

    Route::get('/blogs/create', [BlogPagesController::class, 'create'])->name('admin.blogs.create');
    Route::put('/blogs/create', [BlogPagesController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/list', [BlogPagesController::class, 'list'])->name('admin.blogs.list');
    Route::get('/blogs/edit/{id}', [BlogPagesController::class, 'edit'])->name('admin.blogs.edit');
    Route::post('/blogs/update/{id}', [BlogPagesController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/destroy/{id}', [BlogPagesController::class, 'destroy'])->name('admin.blogs.destroy');

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
