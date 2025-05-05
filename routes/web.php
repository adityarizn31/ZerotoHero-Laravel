<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
        'posts' =>
        [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Aditya RN',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa hic sit commodi nulla
            animi officiis ab corporis, totam quod nihil aperiam quo temporibus dolorem dolores debitis sint nobis harum odit.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 1',
                'author' => 'Aditya RN',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa hic sit commodi nulla
            animi officiis ab corporis, totam quod nihil aperiam quo temporibus dolorem dolores debitis sint nobis harum odit.'
            ]
        ]
    ]);
});

// Rute untuk menampilkan detail Postingan / artikel
Route::get('/posts/{slug}', function ($slug) {
    $posts =
        [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Aditya RN',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa hic sit commodi nulla
        animi officiis ab corporis, totam quod nihil aperiam quo temporibus dolorem dolores debitis sint nobis harum odit.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 1',
                'author' => 'Aditya RN',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa hic sit commodi nulla
        animi officiis ab corporis, totam quod nihil aperiam quo temporibus dolorem dolores debitis sint nobis harum odit.'
            ]
        ];

    // Function untuk mencari data sesuai dengan id
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

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
