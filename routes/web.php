<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/test', function () {
//    return view('admin.post.form');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/posts', \App\Http\Controllers\Admin\Post\IndexController::class)->middleware(['auth', 'verified'])->name('posts');
Route::get('/{post}',\App\Http\Controllers\Admin\Post\ShowController::class)->middleware(['auth', 'verified'])->name('show');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
