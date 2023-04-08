<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return view('admin.news.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        echo $request->input('editor');
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Заголовок новости',
            'content' => 'текст новости'

        ];

        return view('admin.news.show', compact('post'));;
    }

    public function edit()
    {
        return 'Страница изменение поста';
    }

    public function update()
    {
        return 'Запрос изменение поста';
    }

    public function delete()
    {
        return 'Запрос удаление поста';
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
           
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

           
            $extension = $request->file('upload')->getClientOriginalExtension();

           
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            

            echo json_encode([
                'default' => asset('storage/uploads/' . $filenametostore),
                
            ]);
        }
    }
}

