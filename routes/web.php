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
    DB::insert('insert into posts (title, description, content)values(?, ?, ?)', ['Başlık', 'Açıklama', 'İçerik']);
    return "Veri Eklendi";
});

Route::get('/select', function(){
    $posts = DB::select('select * from posts where id = ?', [1]);

    foreach( $posts as $post){
       return $post->title;
    }
});

Route::get('/update', function(){
     $update = DB::update('UPDATE posts SET title = "yeni başlık1", description = "yeni açıklama1", content = "yeni içerik1" WHERE id = ?', [3]);   
     return $update;
});
 