@extends('layouts.base')

@section('title')
    Вход
@endsection

@section('content')
    <div class="container text-center">
        <p class="login_title">Авторизация</p>

    </div>
    <div class="login_background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="mb-3 ms-3 me-3">
                                    <label class="login_form_email_label required">Почта:</label>
                                    <div class="d-flex align-items-center justify-content-center">

                                        <input class="form-control login_form_email_input" type="email" name="email"
                                            id="" autofocus>
                                    </div>
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label class="login_form_password_label required">Пароль:</label>
                                    <div class="d-flex align-items-center justify-content-center">

                                        <input class="form-control login_form_password_input" type="password"
                                            name="password" id="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">

                                        капча от яндекс

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <input class="form-check-input login_form_checkbox" type="checkbox" id="remember"
                                            value="1" name="remember">
                                        <label class="form-check-label login_form_checkbox_label" for="remember">Запомнить
                                            меня</label>
                                    </div>
                                </div>
                                

                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button type="submit" class="login_btn">Войти</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="login_recovery" href="">
                                            <p>Забыли пароль?</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="login_reg" href="{{route('register')}}">
                                            <p>Регистрация</p>
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


