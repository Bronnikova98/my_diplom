@extends('layouts.base')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <h3>
        {{ $post->title }}
    </h3>

    <a href="{{route('news')}}">Назад к новостям</a>

    <p>
        {{ $post->content }}
    </p>
    <p>
        {{now()->format('d.m.Y в H:i')}}
    </p>
@endsection
