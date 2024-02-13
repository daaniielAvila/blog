<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/posts', function () {
//     return view('posts.listado');
// })->name('posts_listado');

// Route::get('/posts/{id}', function ($id) {
//     return view('posts.ficha', ['id' => $id]);
// })->where('id', '[0-9]+')->name('posts_ficha');


Route::get('/inicio', function () {
    return view('inicio');
})->name('partials.inicio');

Route::resource('posts',PostController::class)->only(['index' , 'show' , 'create' , 'edit']);