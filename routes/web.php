<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Rute untuk menampilkan halaman home
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Rute untuk menampilkan halaman about
Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

// Rute untuk menampilkan list postingan / artikel
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all()
    ]);
});

// Rute untuk menampilkan detail Postingan / artikel
Route::get('/posts/{slug}', function ($slug) {

    // Function untuk mencari data sesuai dengan slug yang berada di Model Post
    $post = Post::find($slug);

    return view(
        'post',
        [
            'title' => 'Single Post',
            'post' => $post
        ]
    );
});

// Rute untuk menampilkan halaman kontak
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
