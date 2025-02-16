<?php

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
