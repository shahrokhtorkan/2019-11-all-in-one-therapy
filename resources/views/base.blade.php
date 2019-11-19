<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &ndash; AIOT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

{{--                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif--}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @yield('title') &ndash; AIOT
                </div>

                <main>
                    @yield('main')
                </main>
            </div>
        </div>
    </body>
</html>
