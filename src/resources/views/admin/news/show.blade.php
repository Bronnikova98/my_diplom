@extends('layouts.base')

@section('title')
    Просмотр новости
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Просмотр одной новости от администратора</p>

    </div>
    <div class="container d-flex flex-row-reverse">
        <a href="{{ route('admin.news') }}">Назад к новостям админа</a>

    </div>
    <div class="container">

        <div class="mb-4">
            <h5>
                {{ $post->title }}

            </h5>

            <p>
                {{ now()->format('d.m.Y H:i:s') }}
            </p>

            <p>
                {{ $post->content }}
            </p>

        </div>

    </div>
@endsection
