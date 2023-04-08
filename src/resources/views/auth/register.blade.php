@extends('layouts.base')

@section('title')
    {{ __('Регистрация') }}
@endsection

@section('content')
    <div class="container text-center">
        <p class="register_title">{{ __('Регистрация') }}</p>

    </div>
    <div class="register_background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3 mt-3">
                                    <label for="name"
                                        class="register_form_name_label col-md-3 col-form-label text-md-end">{{ __('Имя:') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="register_form_email_label col-md-3 col-form-label text-md-end">{{ __('Почта:') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="register_form_password_label col-md-3 col-form-label text-md-end">{{ __('Пароль:') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="register_form_password_confirmation_label col-md-3 col-form-label text-md-end">{{ __('Повтор пароля:') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="d-flex justify-content-center">
                                        <div class="form-check">

                                            <input class="form-check-input register_form_checkbox" type="checkbox"
                                                name="agreement" id="agreement" required
                                                {{ old('agreement') ? 'checked' : '' }}>
                                            <label class="form-check-label register_form_checkbox_label"
                                                for="agreement">{{ __('Я согласен на ') }}<a class="register_processing"
                                                    href="/processing">{{ __('обработку персональных данных') }}</a></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="register_btn">
                                            {{ __('Зарегистрироваться') }}
                                        </button>
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
