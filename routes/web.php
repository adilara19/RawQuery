<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/insert', function () {
    DB::insert('insert into posts (title, description, content)values(?, ?, ?)', ['Laravel Raw Query', 'Laravel Veri Tabanı', 'Laravel Veri Tabanı Dersleri']);
    return "Veri Eklendi";
});
