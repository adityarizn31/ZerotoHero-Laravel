<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
