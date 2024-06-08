<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NourAya Cosmetic</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-gray-100">
    <div id="app" class="w-full flex">

        <aside class="w-[18%] bg-[#E76364] min-h-screen text-white py-3">
            <div class="my-6 flex justify-center text-xl font-semibold ">
                NourAya Cosmetic
            </div>
            @guest
                @if (Route::has('login'))
                    <a class="block w-9/12 text-white hover:bg-[#D15252] p-2 mx-auto rounded mb-2"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="block w-9/12 text-white hover:bg-[#D15252] p-2 mx-auto rounded"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <nav class="mt-6 ">
                    <ul>
                        <li class="mb-2 w-9/12 mx-auto">
                            <a href="{{ route('products.index') }}"
                                class="flex items-center p-2 hover:bg-[#D15252] rounded no-underline text-white">
                                <img src="/icons/dashboard.png" width="25" style="margin-right: 10px;" alt="">
                                Dashboard
                            </a>
                        </li>
                        <li class="mb-2 w-9/12 mx-auto">
                            <a href="/add-product"
                                class="flex items-center p-2 hover:bg-[#D15252] rounded no-underline text-white">
                                <img src="/icons/upload.png" width="25" style="margin-right: 10px;" alt="">
                                Ajouter Produit
                            </a>
                        </li>
                        <li class="mb-2 w-9/12 mx-auto">
                            <a href="{{ route('products.products') }}"
                                class="flex items-center p-2 hover:bg-[#D15252] rounded no-underline text-white">
                                <img src="/icons/prods.png" width="25" style="margin-right: 10px;" alt="">
                                Produits
                            </a>
                        </li>
                        <li class="mb-2 w-9/12 mx-auto">
                            <a href="{{ route('products.basket') }}"
                                class="flex items-center p-2 hover:bg-[#D15252] rounded no-underline text-white">
                                <img src="/icons/vente.png" width="25" style="margin-right: 10px;" alt="">
                                Ventes
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="flex items-center p-2 hover:bg-[#D15252] rounded no-underline text-white w-9/12 mx-auto"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <img src="/icons/logout.png" width="25" style="margin-right: 10px;" alt="">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            @endguest
        </aside>

        <main class="w-[80%] pt-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
