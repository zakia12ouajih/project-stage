<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="/css/main.css">
        
    </head>
    <body>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                        @endif
                        @endauth
                    </div>
                    @endif
                    
                </div> --}}
                
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>

        <div class="container h-100">
            
                <div class="row d-flex justify-content-center ">
                    <div class="col-4 d-flex justify-content-center">
                        <img class="img-fluid " src="/images/logo amazigh.png" alt="">
                        <img class="img-fluid" src="/images/logo lion.png" alt="">
                        <img class="img-fluid" src="/images/logo arab.png" alt="">
                    </div>
                </div>
            
            

            <div class="d-flex  justify-content-center align-items-center mt-5 ">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm btn btn-md btn-primary px-5  text-gray-700 dark:text-gray-500 underline">{{ __('msg.login') }}</a>

                        
                    @endauth
                </div>
            @endif
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                        Dropdown
                    </button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item disabled" href="#">Disabled action</a>
                <h6 class="dropdown-header">Section header</h6>
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">After divider action</a>
            </div>
        </div>
    </body>
</html>
