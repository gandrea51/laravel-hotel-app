@extends('layouts.app')
@section('styles')
    <style>
        .register-header {
            padding: 70px 40px;
            text-align: center;
            background: linear-gradient(135deg, #24382d, #3f6453);
            border-radius: 24px;
            color: #ffffff;
            margin-bottom: 50px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .register-title {
            margin: 0;
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: -1px;
        }

        .register-sub {
            display: block;
            margin-top: 18px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.15rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.88);
        }

        .register-main .row {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            align-items: stretch;
        }

        .column-left {
            flex: 1;
            min-width: 320px;
            display: flex;
        }

        .column-right {
            flex: 1;
            min-width: 320px;
            display: flex;
            align-items: center;
        }

        .column-left .image-top-left {
            width: 100%;
            border-radius: 22px;
            object-fit: cover;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .column-right form {
            width: 100%;
            background: #ffffff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .column-right .form-control {
            height: 48px;
            border-radius: 14px;
            border: 1px solid #d8dfda;
            background: #f9fbfa;
            transition: all 0.25s ease;
        }

        .column-right .form-control:focus {
            border-color: #2f5b47;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(47, 91, 71, 0.12);
            outline: none;
        }

        .button-submit {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #2c5a46, #3d745d);
            color: #ffffff;
            font-weight: 600;
            font-size: 1rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .button-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(44, 90, 70, 0.25);
        }
    </style>
@endsection
@section('content')
<div class="container">
    <header class="register-header">
        <h1 class="register-title">Inizia il tuo viaggio con noi</h1>
        <span class="register-sub">Entra a far parte del nostro mondo e trasforma ogni tuo soggiorno in un'esperienza privilegiata. Creando il tuo account, 
            avrai accesso immediato a un'area riservata dove gestire le tue preferenze, velocizzare le prenotazioni e scoprire le offerte pensate esclusivamente 
            per i nostri membri.</span>
    </header>
    <main class="register-main">
        <div class="row">
            <div class="column-left">
                <img src="images/login.jpg" class="image-top-left" alt="The login" loading="lazy">
            </div>
            <div class="column-right">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="mariorossi@email.it">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*********">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="button-submit">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
