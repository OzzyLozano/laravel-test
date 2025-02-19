<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostViewController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::domain(env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('home');
  });
  Route::get('/login', function () {
    return view('./myauth/login');
  });
  Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
  Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
});

Route::domain('www.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return redirect(env('HOME'));
  });
});

Route::domain('admin.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('./admin/index');
  });
  Route::resource('/blogs', PostController::class);
});

Route::domain('apps.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('./apps/index');
  });
  Route::get('/to-do-list', function () {
    return view('./apps/todolist');
  });
});

Route::domain('blogs.' . env('APP_URL'))->group(function () {
  Route::get('/', function () {
    return view('./blogs/index');
  });
  Route::resource('/posts', PostViewController::class);
});

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
