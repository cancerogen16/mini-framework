<?php

namespace App\Controllers;

use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::all();

        return Render('posts/index', ['posts' => $posts->toArray()]);
    }
}