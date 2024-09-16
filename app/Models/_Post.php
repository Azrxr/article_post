<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{ //otomatis ngambil dari database
    protected $table = 'posts'; //digunakan jika nama tabel beda dengan nama model
    protected $primaryKey = 'id'; //digunakan jika nama primary key beda dengan id
    
    protected $fillable = ['slug', 'title', 'author', 'body']; //digunakan jika ingin mengisi data ke database
}


// public static function all()
    // {
    //     return [
    //         [
    //             'id' => '1',
    //             'slug' => 'judul-post-pertama',
    //             'title' => 'Judul Post Pertama',
    //             'author' => 'Azror',
    //             'date' => '2021-10-10',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.',
    //         ],
    //         [
    //             'id' => '2',
    //             'slug' => 'judul-post-kedua',
    //             'title' => 'Judul Post Kedua',
    //             'author' => 'Azror',
    //             'date' => '2021-10-10',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.',
    //         ],
    //     ];
    // }

    // public static function find($slug): array
    // {
    //     // return Arr::first(static::all(), function ($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });

    //     $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

    //     if (!$post) {
    //         abort(404);
    //     }

    //     return $post;
    // }
