<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('user');
});

Route::get('/', function () {
  return view('créer');
});

Route::get('/', function () {
  return view('ajouter');
});

Route::get('/', function () {
  return view('Dashboard-admin');
});
