@extends('layouts.base')

@section('title')
    Новости
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Новости от администратора</p>

    </div>
    <div class="container d-flex flex-row-reverse">

        <form action="{{ route('admin.news.create') }}" method="get">
            <button class="btn" style="border: 1px black solid">Создать новость</button>
        </form>

    </div>
    <div class="container">

        @if (@empty($posts))
            <p>Нет ни одной новости от администратора</p>
        @else
            @foreach ($posts as $post)
                <div class="mb-4">
                    <h5>
                        <a href="{{ route('admin.news.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </h5>

                    <p>
                        {{ now()->format('d.m.Y H:i:s') }}
                    </p>

                </div>
            @endforeach
        @endif

    </div>
@endsection
