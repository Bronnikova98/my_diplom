<footer>
    <div class="container footer_container">
        <div class="d-flex flex-row-reverse footer_btn">
            <div class="footer_btn_up footer_btn_up_hide"></div>
        </div>
        <div class="row">
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 footer_container_info">
                <div class="col">
                    <p class="footer_title">{{ __('Информация') }}</p>
                    <ul>
                        <li class="footer_menu_item"><a href="{{ route('specialists') }}">{{ __('Специалисты') }}</a></li>
                        <li class="footer_menu_item"><a href="{{ route('services') }}">{{ __('Услуги') }}</a></li>
                        <li class="footer_menu_item"><a href="{{ route('patients') }}">{{ __('Пациентам') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 footer_container_center">
                <div class="col">
                    <p class="footer_title">{{ __('Центр') }}</p>
                    <ul>
                        <li class="footer_menu_item"><a href="{{ route('about') }}">{{ __('О центре') }}</a></li>
                        <li class="footer_menu_item"><a href="{{ route('news') }}">{{ __('Новости') }}</a></li>
                        <li class="footer_menu_item"><a href="{{ route('contacts') }}">{{ __('Контакты') }}</a></li>
                    </ul>
                </div>

            </div>
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2 footer_container_profile">
                <div class="col">
                    <p class="footer_title">{{ __('Профиль') }}</p>
                    <ul>
                        <li class="footer_menu_item"><a href="{{ route('login') }}">{{ __('Личный кабинет') }}</a></li>
                        <li class="footer_menu_item"><a href="">{{ __('Политика') }}<br>{{ __('конфиденциальности') }}</a></li>
                    </ul>


                </div>

            </div>
            <div class="d-flex col-sm-6 col-lg-3 justify-content-center footer_container_social">
                <div class="col">
                    <p class="footer_title">Социальные сети{{ __('') }}</p>

                    <ul>
                        <li class="footer_menu_item"><img class="footer_whatsapp_icon" src="/uploads/whatsapp.png"
                                alt="WhatsApp Реабилитационный центр для детей АВРОРА"><a href="">{{ __('WhatsApp') }}</a>
                        </li>
                        <li class="footer_menu_item"><img class="footer_vk_icon" src="/uploads/vk.png"
                                alt="Вконтакте Реабилитационный центр для детей АВРОРА"><a href="">{{ __('Вконтакте') }}</a>
                        </li>
                    </ul>



                </div>

            </div>
        </div>

    </div>

    <div class="footer_line">
        <div class="d-flex container footer_line align-items-center">
            <p class="footer_copyright">&#169 {{ __('АНО «Реабилитационный Центр для Детей «АВРОРА»') }}</p>
        </div>
    </div>
</footer>
