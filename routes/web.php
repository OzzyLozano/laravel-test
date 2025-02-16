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
Route::get('/', function () {
  return view('./subdomains/apps/index');
})->domain('apps.' . env('APP_URL'));
