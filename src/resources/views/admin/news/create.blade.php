@extends('layouts.base')

@section('title')
    Создать новость
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Создание новости от администратора</p>

    </div>
    <div class="container d-flex flex-row-reverse">
        <a href="{{ route('admin.news') }}">Назад к новостям админа</a>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8">

                <form action="{{ route('admin.news.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 ms-3 me-3">
                        <label class="">Название новости:</label>
                        <div class="d-flex align-items-center justify-content-center">

                            <input class="form-control " type="text" name="title" id="" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 ms-3 me-3">
                        <label class="">Содержание новости:</label>
                        <div class="">

                            editor
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="btn" style="border: 1px black solid">Создать</button>
                        </div>
                    </div>



                </form>
            </div>


        </div>





    </div>
@endsection
{{-- @push('js')
    <script src=""></script>
@endpush --}}


