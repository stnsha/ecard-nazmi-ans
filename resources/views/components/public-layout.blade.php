<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>#foreverANalways</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col h-screen font-sans antialiased bg-[#ede3d7]">
    <nav class="flex flex-row-reverse md:flex-row justify-start md:justify-center w-full mt-0 md:mt-4">
        <button data-collapse-toggle="navbar-hamburger" type="button"
            class="flex justify-between items-end p-2 w-10 h-10 text-sm text-gray-500 rounded-lg md:hidden"
            aria-controls="navbar-hamburger" aria-expanded="false">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="justify-center items-center w-full hidden md:block" id="navbar-hamburger">
            <ul
                class="flex flex-col md:flex-row md:justify-center md:items-center rounded-3xl bg-none font-medium text-start text-sm py-2 px-3">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 hover:text-[#faf9f6] {{ request()->routeIs('home') ? 'text-slate-800 md:text-red-950 bg-[#dbc5a9] md:bg-[#ede3d7] rounded-md md:rounded-none' : '' }}">#foreverANalways</a>
                </li>
                <li>
                    <a href="{{ route('rsvp') }}"
                        class="block py-2 px-3 hover:text-[#faf9f6] {{ request()->routeIs('rsvp') ? 'text-slate-800 md:text-red-950 bg-[#dbc5a9] md:bg-[#ede3d7] rounded-md md:rounded-none' : '' }}">RSVP</a>
                </li>
                <li>
                    <a href="{{ route('location') }}"
                        class="block py-2 px-3 hover:text-[#faf9f6] {{ request()->routeIs('location') ? 'text-slate-800 md:text-red-950 bg-[#dbc5a9] md:bg-[#ede3d7] rounded-md md:rounded-none' : '' }}">Lokasi</a>
                </li>
                <li>
                    <a href="{{ route('gift') }}"
                        class="block py-2 px-3 hover:text-[#faf9f6] {{ request()->routeIs('gift') ? 'text-slate-800 md:text-red-950 bg-[#dbc5a9] md:bg-[#ede3d7] rounded-md md:rounded-none' : '' }}">Belikan
                        hadiah!</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="flex w-full">
        {{ $slot }}
    </div>
    <footer
        class="{{ request()->routeIs('home') ? 'hidden' : 'flex' }} flex-row justify-center items-center w-full py-2">
        <span class="font-sans font-medium text-xs italic text-gray-600 px-0.5">handcrafted
            by ans, the bride</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-3 h-3 text-red-500">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </svg>
    </footer>
</body>

</html>
