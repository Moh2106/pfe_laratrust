<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document juridique</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .login{
                background: rgb(52, 52, 232);
                padding: 1em;
                border-radius: 1em;
                width: 10%;
                margin: 0 auto;
                transform: translate(50%, 50%);
                border: 1px solid #fff;
            }

            .login a{
                color: #fff;
                text-decoration: none;
            }

            
            
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 middle">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <!--<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>-->
                    @else
                        <button class="login">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">يتصل</a>
                        </button>
                        

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>
