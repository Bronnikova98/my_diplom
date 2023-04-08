@extends('layouts.base')

@section('title')
    Новости
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Новости</p>

    </div>
    <div class="container d-flex flex-row-reverse">
        <button class="d-flex flex-row-reverse news_sorting_btn" type="button"><img class="news_sorting_icon"
                src="/uploads/Slider.png" alt=""></button>

    </div>
    <div class="container">

        @if (@empty($posts))
            <p>Нет ни одной новости</p>
        @else
            @foreach ($posts as $post)
                <div  class="mb-4">
                    <h5>
                        <a href="{{route('news.show', $post->id)}}">
                            {{ $post->title }}
                        </a>
                    </h5>

                    <p>
                        {{ $post->content }}
                    </p>

                </div>
            @endforeach
        @endif

    </div>
@endsection
