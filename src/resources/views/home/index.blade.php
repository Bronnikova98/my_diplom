@extends('layouts.base')

@section('title')
    АНО "Реабилитационный центр для детей "АВРОРА"
@endsection

@section('content')
    <div class="home_background">

        <div class="container home_carousel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                            class="active home_carousel_indicator" aria-current="true"></button>
                        {{-- <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" class="home_carousel_indicator"aria-label="Slide 2"></button> --}}
                    </div>


                    <div class="carousel-item active " style="background-image: url('/uploads/igrushki41.jpg');">

                        <div class="home_carousel_text text-center">


                            <p>Реабилитационный центр "Аврора" приглашает Ваших детей получить оздоровительные услуги по
                                полустационарной форме</p>

                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <p class="home_subtitle">Наши преимущества</p>
        <div class="container">
            <div class="row">
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2">

                    <div class="card" style="border: none;">
                        <img src="/uploads/icon_heart.png" class="" alt="..."
                            style="height: 100px;
                            display: block;
                            margin-left: auto;
                            margin-right: auto;">
                        <div class="card-body text-center">
                            <p class="card-text"
                                style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">Широкий
                                спектр услуг</p>
                        </div>
                    </div>

                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2">

                    <div class="card" style="border: none;">
                        <img src="/uploads/icon_national.png" class="" alt="..."
                            style="height: 100px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                        <div class="card-body text-center">
                            <p class="card-text"
                                style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">
                                Профессиональный персонал</p>
                        </div>
                    </div>


                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2">

                    <div class="card" style="border: none;">
                        <img src="/uploads/icon_people.png" class="" alt="..."
                            style="height: 100px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                        <div class="card-body text-center">
                            <p class="card-text"
                                style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">Оказание
                                помощи ежедневно</p>
                        </div>
                    </div>




                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2">

                    <div class="card" style="border: none;">
                        <img src="/uploads/icon_holding.png" class="" alt="..."
                            style="height: 100px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                        <div class="card-body text-center">
                            <p class="card-text"
                                style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">
                                Индивидуальная программа</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <p class="home_subtitle">Новости</p>
    </div>
    <div class="home_background">
        <div class="container">

            <div class="row">
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 mt-2">
                    <div class="card">
                        <img src="/uploads/1880.jpeg" class="" alt="..."
                            style="object-fit: cover; min-height:240px;">
                        <div class="card-body">
                            <a href="#">
                                <p class="card-title" style="font-size: 19px; color: #000000; font-weight: 500; ">Заголовок
                                    новости</p>
                            </a>
                            <p class="card-text" style="font-size: 17px; color: #353333; ">
                                Текст новости</p>
                        </div>
                    </div>

                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 mt-2">

                    <div class="card">
                        <img src="/uploads/kids1.jpg" class="" alt="..."
                            style="object-fit: cover; min-height:240px;">
                        <div class="card-body">
                            <a href="#">
                                <p class="card-title" style="font-size: 19px; color: #000000; font-weight: 500; ">Заголовок
                                    новости</p>
                            </a>
                            <p class="card-text" style="font-size: 17px; color: #353333; ">
                                Текст новости</p>
                        </div>
                    </div>


                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 mt-2">

                    <div class="card">
                        <img src="/uploads/kids2.jpg" class="" alt="..."
                            style="object-fit: cover; min-height:240px;">
                        <div class="card-body">
                            <a href="#">
                                <p class="card-title" style="font-size: 19px; color: #000000; font-weight: 500; ">Заголовок
                                    новости</p>
                            </a>
                            <p class="card-text" style="font-size: 17px; color: #353333; ">
                                Текст новости</p>
                        </div>
                    </div>





                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 mt-2">

                    <div class="card">
                        <img src="/uploads/image5.png" class="" alt="..."
                            style="object-fit: cover; min-height:240px;">
                        <div class="card-body">
                            <a href="#">
                                <p class="card-title" style="font-size: 19px; color: #000000; font-weight: 500; ">
                                    Заголовок новости</p>
                            </a>
                            <p class="card-text" style="font-size: 17px; color: #353333; ">
                                Текст новости</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
