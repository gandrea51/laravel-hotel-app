<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Radici</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body.antialiased {
                margin: 0;
                padding: 0;
                min-height: 100vh;
                background: #f4f6f9;
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                color: #222;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            .container {
                width: 90%;
                max-width: 1200px;
                margin: 40px auto;
                padding: 32px;
                background: #ffffff;
                border-radius: 18px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            }
            .radici-header {
                padding: 60px 60px;
                text-align: center;
                background: linear-gradient(135deg, #1f3b2d, #355c4d);
                border-radius: 22px;
                color: #ffffff;
                box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
                margin-bottom: 40px;
            }

            .radici-title {
                margin: 0;
                font-size: 3rem;
                font-weight: 700;
                line-height: 1.2;
                letter-spacing: -1px;
            }

            .radici-subs {
                margin: 24px auto 0;
                max-width: 900px;
                font-size: 1.2rem;
                font-weight: 400;
                line-height: 1.8;
                color: rgba(255, 255, 255, 0.9);
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
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <header class="radici-header">
                <h1 class="radici-title">Radici - Soggiorni autentici, impronta leggera</h1>
                <h3 class="radici-subs">Oltre il soggiorno, un’esperienza su misura. Scopri il perfetto equilibrio tra il comfort tecnologico e il 
                    calore dell’accoglienza tradizionale. La tua chiave digitale per un mondo di privilegi esclusivi.</h3>

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </header>
            <main class="radici-main">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/hotel.jpg" class="image-top-left" alt="The hotel" loading="lazy">
                        <div class="span-top-right">
                            <h4 class="span-title">Tutto ciò di cui hai bisogno, in un unico touch</h4>
                            <span class="card-text">Gestisci ogni aspetto del tuo soggiorno direttamente dal tuo smartphone: dal check-in rapido senza attese a
                                lla prenotazione dei servizi in camera. La nostra tecnologia è pensata per liberare il tuo tempo e permetterti di godere solo 
                                del meglio della nostra ospitalità</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="span-top-left">
                            <h4 class="span-title">Vivi la destinazione come uno del posto</h4>
                            <span class="card-text">Non siamo solo una camera dove dormire, ma la tua porta d’accesso al territorio. Attraverso l’app avrai accesso 
                                a itinerari curati dai nostri esperti, partnership con le migliori attività locali e suggerimenti personalizzati per scoprire i 
                                segreti più nascosti della città.</span>
                        </div>
                        <img src="images/second.jpg" class="image-top-right" alt="The hotel" loading="lazy">
                    </div>
                </div>
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
