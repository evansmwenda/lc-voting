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
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur excepturi dolorum perspiciatis aspernatur suscipit, quia voluptatibus amet eligendi facere dignissimos sint repudiandae sunt molestiae mollitia aliquam dolores, eum doloribus neque totam harum minima accusantium nisi exercitationem. Dicta modi quod corporis. Non, iure soluta reprehenderit at et ab voluptas blanditiis? Veritatis dolores sed dolorem dignissimos eos dolorum. Nobis enim porro blanditiis, laudantium, numquam atque corrupti dolor voluptatum, quae aperiam rerum! Sequi esse pariatur et soluta consequatur incidunt alias facere repellendus dignissimos? Iusto mollitia fugit dolor facilis, quasi nobis ex maiores suscipit necessitatibus sit odit dolore labore sunt hic corporis optio quidem!
            </div>
            <div class="w-175">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore aut porro voluptates odit modi temporibus eum perferendis architecto consequatur voluptas? Voluptatibus tempore quos saepe quasi totam ratione officiis accusamus asperiores ex perferendis. Quis omnis, ratione voluptas id provident quod distinctio officiis. Dolorum pariatur at doloremque eaque aut ratione reiciendis voluptatem ipsum autem? At mollitia iusto est nulla sunt reprehenderit unde voluptate quia? Numquam quam in perspiciatis totam, id dolores. Eos numquam perspiciatis blanditiis dolor magnam unde inventore repellat consequatur, illum quisquam ut aspernatur laborum? Neque necessitatibus quidem ea repellat! Nam molestiae nostrum placeat odio ullam, hic minima veritatis. Minus provident magnam atque, accusantium sint cum asperiores omnis neque molestiae cumque quae nostrum ad impedit dicta ratione veniam iure voluptatum eligendi unde mollitia harum itaque. Qui ut molestiae harum corporis illo. Cum esse optio, sapiente blanditiis vel sunt perspiciatis cupiditate minima dolorum temporibus consectetur modi ratione deserunt inventore soluta? Odio vel minus tenetur autem nisi blanditiis, praesentium non amet inventore, ea nemo, qui voluptatibus recusandae animi. Ratione similique blanditiis assumenda quia commodi eos nam consequuntur recusandae, alias cumque adipisci incidunt reiciendis pariatur consequatur id dolores. At recusandae consequatur corporis itaque sapiente soluta inventore praesentium nulla earum consequuntur? Repellat necessitatibus adipisci tempora?</div>
        </main>
    </body>
</html>
