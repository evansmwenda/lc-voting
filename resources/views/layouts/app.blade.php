<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Lara Voting</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Open+Sans -->
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.png')}}" alt="LOGO" class="h-5"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class=" px-6 text-right z-10">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/0000000000?d=mp" alt="avatar"
                    class="w-8 h-8 rounded-full">
                </a>
            </div>
        </header>
        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Add idea form here<br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Consequatur et porro ratione debitis enim numquam a culpa qui, 
                repudiandae repellat incidunt commodi omnis ipsa. Quia minus repellendus magnam maxime
                 possimus.
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                        <li>
                            <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                                Considering (6)
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                                In progress (1)
                            </a>
                        </li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li>
                            <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                                Implemented (10)
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                                Closed (5)
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
