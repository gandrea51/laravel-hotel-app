<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Radici</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/hotel.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @yield('styles')
    <style>
        .radici-header {
            padding: 60px 60px;
            text-align: center;
            background: linear-gradient(135deg, #1f3b2d, #355c4d);
            border-radius: 22px;
            color: #ffffff;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
            margin-bottom: 40px;
        }

        .radici-subs {
            margin: 24px auto 0;
            max-width: 900px;
            font-size: 1.2rem;
            font-weight: 400;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
        }
        .navbar {
            padding: 18px 0;
            background: rgba(255, 255, 255, 0.92) !important;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1f3b2d !important;
            letter-spacing: -0.5px;
            text-decoration: none;
            transition: opacity 0.25s ease;
        }

        .navbar-brand:hover {
            opacity: 0.8;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-link {
            position: relative;
            font-size: 1rem;
            font-weight: 500;
            color: #3f3f3f !important;
            padding: 10px 16px !important;
            border-radius: 12px;
            transition: all 0.25s ease;
        }

        .nav-link:hover {
            background: rgba(31, 59, 45, 0.08);
            color: #1f3b2d !important;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 16px;
            bottom: 6px;
            width: 0;
            height: 2px;
            background: #1f3b2d;
            transition: width 0.25s ease;
        }

        .nav-link:hover::after {
            width: calc(100% - 32px);
        }

        .navbar-toggler {
            border: none;
            box-shadow: none !important;
            padding: 8px 10px;
            border-radius: 10px;
            transition: background 0.25s ease;
        }

        .navbar-toggler:hover {
            background: rgba(31, 59, 45, 0.08);
        }
        .py-4 {
            padding: 50px 0;
            animation: fadeUp 0.6s ease;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .radici-title {
            margin: 0;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -1px;
        }

        .radici-main {
            margin-top: 40px;
        }

        .radici-main .row {
            display: flex;
            justify-content: center;
        }

        .radici-main .col-md-12 {
            display: flex;
            align-items: center;
            gap: 40px;
            padding: 40px;
            background: #ffffff;
            border-radius: 22px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .image-top-left {
            width: 45%;
            max-width: 520px;
            height: auto;
            border-radius: 18px;
            object-fit: cover;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .span-top-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .span-title {
            margin: 0 0 20px;
            font-size: 2rem;
            font-weight: 700;
            color: #1f3b2d;
            line-height: 1.3;
        }

        .card-text {
            font-size: 1.08rem;
            line-height: 1.9;
            color: #4b4b4b;
        }
        .span-top-left {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .image-top-right {
            width: 45%;
            max-width: 520px;
            height: auto;
            border-radius: 18px;
            object-fit: cover;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .radici-footer {
            margin-top: 60px;
            background: linear-gradient(135deg, #1c2d24, #2f4b3d);
            color: #ffffff;
            border-radius: 24px 24px 0 0;
            padding: 50px 40px 20px;
            box-shadow: 0 -8px 25px rgba(0, 0, 0, 0.15);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            gap: 60px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .footer-brand {
            flex: 1.5;
            min-width: 280px;
        }

        .footer-title {
            margin: 0 0 16px;
            font-size: 2rem;
            font-weight: 700;
        }

        .footer-description {
            margin: 0;
            max-width: 500px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.85);
        }

        .footer-links,
        .footer-contact {
            flex: 1;
            min-width: 220px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-heading {
            margin-bottom: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #d7e7dd;
        }

        .footer-links a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.82);
            transition: color 0.25s ease, transform 0.25s ease;
        }

        .footer-links a:hover {
            color: #ffffff;
            transform: translateX(4px);
        }

        .footer-contact p {
            margin: 0;
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.6;
        }

        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            text-align: center;
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.7);
        }
        .row-second {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin: 60px 0;
        }

        .column {
            display: flex;
        }

        .card {
            width: 18rem !important;
            border: none;
            border-radius: 22px;
            padding: 10px;
            background: #ffffff;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.14);
        }

        .card-body {
            padding: 28px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f3b2d;
            margin-bottom: 10px;
        }

        .card-subtitle {
            font-size: 0.95rem;
            color: #7a7a7a !important;
            margin-bottom: 18px !important;
            letter-spacing: 0.4px;
        }

        .card-text {
            font-size: 1rem;
            line-height: 1.8;
            color: #4d4d4d;
            margin-bottom: 24px;
        }

        .card-link {
            display: inline-block;
            text-decoration: none;
            color: #1f3b2d;
            font-weight: 600;
            position: relative;
            transition: all 0.25s ease;
        }

        .card-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 2px;
            background: #1f3b2d;
            transition: width 0.25s ease;
        }

        .card-link:hover::after {
            width: 100%;
        }

        .card-link:hover {
            opacity: 0.8;
        }
    </style>
    <!-- Scripts -->
    @vite(['resource/css/app.css'])
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Radici</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        @if (Auth::user())
                            <li class="nav-item"><a class="nav-link" href="{{url('/room')}}">Camere & suite</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/experience')}}">Esperienze</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/service')}}">Servizi</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contatti</a></li>
                        @endif
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{Auth::user()->name}}, {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="radici-footer">
            <div class="footer-content">
                <div class="footer-brand">
                    <h2 class="footer-title">Radici</h2>
                    <p class="footer-description">
                        Soggiorni autentici, impronta leggera. Un’esperienza che unisce innovazione,
                        comfort e il calore dell’ospitalità italiana.
                    </p>
                </div>

                <div class="footer-links">
                    <h4 class="footer-heading">Esplora</h4>
                    <a href="{{url('/room')}}">Camere & Suite</a>
                    <a href="{{url('/experience')}}">Esperienze</a>
                    <a href="{{url('/service')}}">Servizi</a>
                    <a href="{{url('/contact')}}">Contatti</a>
                </div>

                <div class="footer-contact">
                    <h4 class="footer-heading">Contatti</h4>
                    <p>Email: info@radicihotel.it</p>
                    <p>Tel: +39 051 000 0000</p>
                    <p>Bologna, Italia</p>
                </div>
            </div>

            <div class="footer-bottom">
                <span>© 2026 Radici Hotel — Tutti i diritti riservati</span>
            </div>
        </footer>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
