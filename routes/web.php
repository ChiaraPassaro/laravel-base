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
    // dd('Ciao');
    return view('users.index');
    //return 'Ciao Classe 10';
})->name('index');

Route::get('/home', function() {
    return view('home');
})->name('home');