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
    <nav class="flex flex-col w-full">
        <div class="flex justify-end items-end w-full p-4">
            <button data-collapse-toggle="navbar-hamburger" type="button"
                class="flex justify-between items-end p-2 w-10 h-10 text-sm text-gray-500 rounded-lg"
                aria-controls="navbar-hamburger" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full" id="navbar-hamburger">
                <ul class="flex flex-col md:flex-row md:justify-center md:items-center font-medium text-end mt-4">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 text-slate-800 rounded-sm">#foreverANalways</a>
                    </li>
                    <li>
                        <a href="{{ route('rsvp.create') }}" class="block py-2 px-3 text-slate-800">RSVP</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-slate-800">Lokasi</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-slate-800">Belikan hadiah!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex w-full">
        {{ $slot }}
    </div>
</body>

</html>
