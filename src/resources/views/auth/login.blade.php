@extends('layouts.base')

@section('title')
    {{ __('Авторизация') }}
@endsection

@section('content')
    <div class="container text-center">
        <p class="login_title">{{ __('Авторизация') }}</p>
    </div>
    <div class="login_background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3 mt-3">
                                    <label for="email"
                                        class="login_form_email_label col-md-3 col-form-label text-md-end">{{ __('Почта:') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="login_form_password_label col-md-3 col-form-label text-md-end">{{ __('Пароль:') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="d-flex justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Запомнить меня') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="login_btn">
                                            {{ __(' Войти') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="d-flex justify-content-center">
                                        @if (Route::has('password.request'))
                                            <a class="login_recovery" href="{{ route('password.request') }}">
                                                {{ __('Забыли пароль?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="d-flex justify-content-center">
                                        <a class="login_reg" href="{{ route('register') }}">
                                            <p>{{ __('Регистрация') }}</p>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
