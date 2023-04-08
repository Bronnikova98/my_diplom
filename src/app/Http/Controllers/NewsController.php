<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Заголовок новости',
            'content' => 'текст новости'

        ];

        $posts = array_fill(0, 10, $post);

        return view('news.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Заголовок новости',
            'content' => 'текст новости'

        ];

        return view('news.show', compact('post'));
    }
}
