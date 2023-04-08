<header>
    <div class="d-flex flex-row-reverse header_third_party_resources">


        <button class="d-flex header_third_party_resources_btn flex-row-reverse" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class="header_view_details_icon"
                src="/uploads/view_details.png" alt="Источники информации, Свердловская область"></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">

                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="d-flex offcanvas-body align-items-center flex-column">
                <a href="https://msp.midural.ru/"><img class="header_ministry_img" src="/uploads/ministry.png"
                        alt="Министерство социальной политики Свердловской области"></a>
                <a href="https://midural.ru/"><img class="header_coat_img" src="/uploads/coat.png"
                        alt="Официальный сайт правительства Свердловской области"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex col-sm-12 col-lg-3 justify-content-center">
                <a href="/">
                    <img class="img-fluid header_logo_img" src="/uploads/avrora_logo.png"
                        alt="Логотип сайта 
                Реабилитационный центр для детей АВРОРА, девочка с голубем"></a>
                <div class="glow-wrap">
                    <i class="glow"></i>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-3 align-items-center mb-2">
                <img class="img-fluid header_maps_icon" src="/uploads/maps.png"
                    alt="Адрес Реабилитационный центр для детей АВРОРА, Нижний Тагил">

                <div class="col">
                    <p class="header_addres">г. Нижний Тагил, ул Бобкова, д. 4, кв. 103</p>
                    <a class="header_show_map" href="">Показать на карте</a>
                </div>

            </div>
            <div class="d-flex col-sm-6 col-lg-3 align-items-center mb-2 justify-content-center">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid header_phone_icon" src="/uploads/phone.png"
                        alt="Номера телефонов Реабилитационный центр для детей АВРОРА, Нижний Тагил">

                    <div class="col">
                        <p class="header_numbers">+7 (3435) 111-111 <br>
                            +7 (3435) 222-111</p>
                        <p class="header_working_hours">8:00 - 20:00</p>
                    </div>
                </div>
            </div>
            <div class="d-flex col-sm-12 col-lg-3 align-items-center justify-content-center">

                <form action="{{ route('login') }}" method="get">
                    <button class="header_personal_area_btn" type="submit">Личный кабинет</button>
                </form>

            </div>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">


                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('about') }}">О центре</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news') }}">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specialists') }}">Специалисты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('patients') }}">Пациентам</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Контакты</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>
