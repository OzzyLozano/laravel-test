<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::domain(env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('home');
  });
  Route::get('/hello', function () {
    return 'Hello World';
  });
});

Route::domain('blogs.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('./blogs/index');
  });
  Route::resource('/posts', PostController::class);
});

Route::domain('apps.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('./apps/index');
  });
  Route::get('/to-do-list', function () {
    return view('./apps/todolist');
  });
});

Route::domain('login.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('./login/index');
  });
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
