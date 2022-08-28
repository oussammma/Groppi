@extends('layouts.app')
@section('login-title')
    <title>Groppi</title>
@endsection
@section('content')
    <div class="login-cont">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-7 bg-light px-4 pb-4 pt-0 pt-lg-4 login-info">
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="img-logo-phone text-center">
                                <a href="{{ route('index') }}"><img src="/upload/logo.png" alt="Groppi" width="250px"></a>
                            </div>
                            <div class="login-title text-capitalize mb-3">{{ __('connexion') }}</div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="info-inner">
                                    <label for="email">{{ __('Adresse e-mail') }}</label>
                                    <div>
                                        <div class="login-input">
                                            <i class="fa-solid fa-at"></i>
                                            <input id="email" type="email"
                                                class="w-100 @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="info-inner">
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                    <div>
                                        <div class="login-input">
                                            <i class="fa-solid fa-key"></i>
                                            <input id="password" type="password"
                                                class=w-100 "@error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div>
                                <div>
                                    <div>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                                <div>
                                    <div class="login-btn">
                                        <button class="mt-3 w-100" type="submit">
                                            {{ __('connexion') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="d-none" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
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
    </div>
@endsection
