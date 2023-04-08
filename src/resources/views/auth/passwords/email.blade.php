@extends('layouts.base')

@section('title')
    {{ __('Сброс пароля') }}
@endsection

@section('content')
<div class="container text-center">
    <p class="email_title">{{ __('Сброс пароля') }}</p>
</div>
<div class="email_background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 mt-3">
                            <label for="email" class="email_form_email_label col-md-3 col-form-label text-md-end">{{ __('Почта:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="email_btn">
                                    {{ __('Отправить ссылку для сброса пароля') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
