@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <h6>404 | NOT FOUND</h6>
    </div>
    {{-- <div class="login-cont">
        <div class="container">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-8 col-xl-7 bg-light px-4 pb-4 pt-0 pt-lg-4 login-info">
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="img-logo-phone text-center">
                                <a href="{{ route('index') }}"><img src="/upload/logo.png" alt="Groppi" width="250px"></a>
                            </div>
                            <div class="login-title text-capitalize mb-3">{{ __("S'inscrire") }}</div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="info-inner">
                                    <label for="name" class="">{{ __('Name') }}</label>
                                    <div>
                                        <div class="login-input">
                                            <i class="fa-solid fa-user"></i>
                                            <input id="name" type="text"
                                                class="w-100 @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="info-inner">
                                    <label for="email" class="">{{ __('Email Address') }}</label>
                                    <div>
                                        <div class="login-input">
                                            <i class="fa-solid fa-at"></i>
                                            <input id="email" type="email"
                                                class="w-100 @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="info-inner">
                                    <label for="password" class="">{{ __('Password') }}</label>
                                    <div>
                                        <div class="login-input">
                                            <i class="fa-solid fa-key"></i>
                                            <input id="password" type="password"
                                                class="w-100 @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="info-inner">
                                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                    <div>
                                        <div class="login-input">
                                            <i class="fa-solid fa-key"></i>
                                            <input id="password-confirm" type="password" class="w-100"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="login-btn">
                                        <button type="submit" class="mt-3 w-100">
                                            {{ __("S'inscrire") }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="img-logo col-6 d-none d-lg-block text-center">
                            <a href="{{ route('index') }}"><img src="/upload/logo.png" alt="Groppi" width="340px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
