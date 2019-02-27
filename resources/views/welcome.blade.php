<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fedamc</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .m-b-0 {
                margin-bottom: 0px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Intranet</a>
                    @else
                        <a href="{{ route('login') }}">Inciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-0">
                    FEDAMC
                </div>

                <div class="links m-b-md">
                    <p>Federación Española De Artes Marciales Coreanas y Disciplinas Asociadas</p>
                </div>

                <div class="links">
                    <a href="https://www.fedamc.es/" target="_blank">
                        <i class="fas fa-desktop"></i> Página Web</a>
                    <a href="https://es-es.facebook.com/www.fedamc.es/" target="_blank">
                        <i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://twitter.com/fedamcyda?lang=es" target="_blank">
                        <i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://www.instagram.com/fedamcyda/" target="_blank">
                        <i class="fab fa-instagram"></i> Instagram</a>    
                </div>
            </div>
        </div>
    </body>
</html>
