<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => "Home Page"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About Page",
        'nama' => 'Azror'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => "Blog",
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
   
    //$post = Post::find($id);

    return view('post', [
        'title' =>  $post['title'] ?? "Post Tidak Ditemukan",
        'post' => $post]);

});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => "Kontak",
        'nama' => 'Azror',
        'mail' => 'irvanea1@gmail.com',
        'nohp' => '6285852226976'
    ]);
});
