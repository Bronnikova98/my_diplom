@extends('layouts.base')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="container text-center">
        <p class="register_title">Регистрация</p>

    </div>
    <div class="register_background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="mb-3 ms-3 me-3">
                                    <label class="register_form_email_label required">Почта:</label>
                                    <div class="d-flex align-items-center justify-content-center">

                                        <input class="form-control register_form_email_input" type="email" name="email"
                                            id="" autofocus>
                                    </div>
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label class="register_form_tel_label required">Номер телефона:</label>
                                    <div class="d-flex align-items-center justify-content-center">

                                        <input class="form-control register_form_tel_input" type="tel" name="telephone"
                                            id="">
                                    </div>
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label class="register_form_password_label required">Пароль:</label>
                                    <div class="d-flex align-items-center justify-content-center">

                                        <input class="form-control register_form_password_input" type="password"
                                            name="password" id="">
                                    </div>
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label class="register_form_password_confirmation_label required">Повтор пароля:</label>
                                    <div class="d-flex align-items-center justify-content-center">

                                        <input class="form-control register_form_password_confirmation_input"
                                            type="password" name="password_confirmation" id="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <input class="form-check-input register_form_checkbox" type="checkbox"
                                            id="agreement" value="1" name="agreement">
                                        <label class="form-check-label register_form_checkbox_label" for="agreement">Я
                                            согласен на <a class="register_processing" href="/processing">обработку
                                                персональных данных</a></label>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">

                                        капча от яндекс

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button type="submit" class="register_btn">Зарегистрироваться</button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="register_log" href="{{ route('login') }}">
                                            <p>Авторизация</p>
                                        </a>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
