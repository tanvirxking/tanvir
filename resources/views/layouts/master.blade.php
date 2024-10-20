<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Islamic Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8c20b98a6a.js" crossorigin="anonymous"></script>
    <style>
        .hidden-transition {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-amber-50">

    <!-- Navbar -->
    <nav class="relative bg-amber-200 shadow max-w-screen-2xl container mx-auto">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <a href="#">
                        <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="Logo">
                    </a>
                    <div class="flex lg:hidden">
                        <button
                            id="menu-button"
                            type="button"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu"
                        >
                            <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>
                            <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="menu" class="absolute inset-x-0 z-20 w-full px-6 py-4 bg-amber-200 dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:flex lg:items-center hidden hidden-transition opacity-0 -translate-x-full lg:opacity-100 lg:translate-x-0">
                    <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">
                        <a href="{{url('/')}}" class="my-2 text-xl text-black transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold uppercase">Home</a>
                        <a href="{{url('/front-products')}}" class="my-2 text-xl text-black transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold uppercase">Products</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{route('checkout')}}" class="my-2 text-xl text-black transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold uppercase">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>{{ session('cart') ? count(session('cart')) : 0 }}</span>
                                </a>
                                <a href="{{route('order.list')}}" class="my-2 text-xl text-black transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold uppercase">My Order</a>
                                <a href="{{ url('/dashboard') }}" class="my-2 text-xl text-black transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold uppercase">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="my-2 text-xl text-black transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold uppercase">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="my-2 text-xl transition-colors duration-300 transform hover:text-amber-500 md:mx-4 md:my-0 font-semibold text-black uppercase">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-amber-50 max-w-screen-2xl container mx-auto">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="flex justify-center items-center p-4 bg-amber-200 text-lg max-w-screen-2xl container mx-auto">
        <aside>
            <p>Copyright © 2024 - All right reserved by Islamic Store Corporation</p>
        </aside>
    </footer>
    
    <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        const menuIconOpen = document.getElementById('menu-icon-open');
        const menuIconClose = document.getElementById('menu-icon-close');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('-translate-x-full');
            menu.classList.toggle('translate-x-0');
            menu.classList.toggle('opacity-100');
            menuIconOpen.classList.toggle('hidden');
            menuIconClose.classList.toggle('hidden');
        });
    </script>
</body>
</html>
