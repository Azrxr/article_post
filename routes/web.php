<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

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
    // $posts = Post::with(['author', 'category'])->latest()->get();
    // $posts = Post::latest();

    // if (request('search')) {
    //     $posts = Post::where('title', 'like', '%' . request('search') . '%');
    // } 

    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request
    (['search']))->latest()->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    //$post = Post::find($id);

    return view('post', [
        'title' =>  $post['title'] ?? "Post Tidak Ditemukan",
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $posts = $user->posts->load(['author', 'category']);

    return view('posts', [
        'title' => count($user->posts) . ': Article By ' . $user->name
            ?? "Article Tidak Ditemukan",
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    // $posts = $category->posts->load(['author', 'category']);
    return view('posts', [
        'title' => 'Article in: ' . $category->name
            ?? "Article Tidak Ditemukan",
        'posts' => $category->posts
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => "Kontak",
        'nama' => 'Azror',
        'mail' => 'irvanea1@gmail.com',
        'nohp' => '6285852226976'
    ]);
});
