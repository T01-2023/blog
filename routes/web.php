<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Post\IndexController;
use App\Http\Controllers\Admin\Post\ShowController;
use App\Http\Controllers\Admin\Post\CreateController;
use App\Http\Controllers\Admin\Post\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/default', function () {
    return view('default');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/posts',IndexController::class)->middleware(['auth', 'verified'])->name('posts');
Route::get('/posts/form',CreateController::class)->middleware(['auth', 'verified'])->name('form');
Route::get('/posts/{post}',ShowController::class)->middleware(['auth', 'verified'])->name('show');
Route::post('/posts/store',StoreController::class)->middleware(['auth', 'verified'])->name('store');

Route::get('/test', function () {
    return view('admin.post.form');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
