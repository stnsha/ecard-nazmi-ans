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
                    <a href="#" class="block py-2 px-3 text-slate-800 hover:text-[#faf9f6]">Belikan hadiah!</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="flex w-full">
        {{ $slot }}
    </div>
</body>

</html>
