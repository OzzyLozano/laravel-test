<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});
Route::get('/to-do-list', function () {
  return view('./todolist/index');
});
Route::get('/hello', function () {
  return 'Hello World';
});
