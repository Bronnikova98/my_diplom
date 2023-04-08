<footer>
    <div class="container footer_container">
        <div class="d-flex flex-row-reverse footer_btn">
            <div class="footer_btn_up footer_btn_up_hide"></div>
        </div>
        <div class="row">
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 footer_container_info">
                <div class="col">
                    <p class="footer_title">Информация</p>
                    <ul>
                        <li class="footer_menu_item"><a href="{{ route('specialists') }}">Специалисты</a></li>
                        <li class="footer_menu_item"><a href="{{ route('services') }}">Услуги</a></li>
                        <li class="footer_menu_item"><a href="{{ route('patients') }}">Пациентам</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 footer_container_center">
                <div class="col">
                    <p class="footer_title">Центр</p>
                    <ul>
                        <li class="footer_menu_item"><a href="{{ route('about') }}">О центре</a></li>
                        <li class="footer_menu_item"><a href="{{ route('news') }}">Новости</a></li>
                        <li class="footer_menu_item"><a href="{{ route('contacts') }}">Контакты</a></li>
                    </ul>
                </div>

            </div>
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 footer_container_profile">
                <div class="col">
                    <p class="footer_title">Профиль</p>
                    <ul>
                        <li class="footer_menu_item"><a href="{{ route('login') }}">Личный кабинет</a></li>
                        <li class="footer_menu_item"><a href="">Политика <br>конфиденциальности</a></li>
                    </ul>


                </div>

            </div>
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center footer_container_social">
                <div class="col">
                    <p class="footer_title">Социальные сети</p>

                    <ul>
                        <li class="footer_menu_item"><img class="footer_whatsapp_icon" src="/uploads/whatsapp.png"
                                alt="WhatsApp Реабилитационный центр для детей АВРОРА"><a href="">WhatsApp</a>
                        </li>
                        <li class="footer_menu_item"><img class="footer_vk_icon" src="/uploads/vk.png"
                                alt="Вконтакте Реабилитационный центр для детей АВРОРА"><a href="">Вконтакте</a>
                        </li>
                    </ul>



                </div>

            </div>
        </div>

    </div>

    <div class="footer_line">
        <div class="d-flex container footer_line align-items-center">
            <p class="footer_copyright">&#169 АНО «Реабилитационный Центр для Детей «АВРОРА»</p>
        </div>
    </div>
</footer>
