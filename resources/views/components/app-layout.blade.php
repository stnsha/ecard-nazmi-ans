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

<body class="flex flex-col h-screen font-sans antialiased bg-[#fff8f0]">
    <button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar"
        aria-controls="cta-button-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open
            sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <aside id="cta-button-sidebar"
        class="fixed top-0 left-0 z-40 w-48 mt-8 ml-3 h-[670px] transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 pt-8 overflow-y-auto bg-white rounded-xl">
            <span class="flex font-bold text-lg text-slate-900 mb-6">#foreverANalways</span>
            <ul
                class="flex justify-start items-center w-full mb-2 space-y-2 font-medium {{ Route::is('dashboard') ? 'bg-[#c1554e] hover:bg-orange-800 rounded-md' : 'bg-none' }}">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 rounded-lg {{ Route::is('dashboard') ? 'text-white hover:none' : 'text-gray-900 hover:text-amber-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-[15px] h-[15px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>


                        <span class="font-medium text-sm ms-2">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul
                class="flex justify-start items-center w-full mb-2 space-y-2 font-medium {{ Route::is('rsvp.index') ? 'bg-[#c1554e] hover:bg-orange-800 rounded-md' : 'bg-none' }}">
                <li>
                    <a href="{{ route('rsvp.index') }}"
                        class="flex items-center p-2 rounded-lg {{ Route::is('rsvp.index') ? 'text-white hover:none' : 'text-gray-900 hover:text-amber-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-[15px] h-[15px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                        </svg>

                        <span class="font-medium text-sm ms-2">RSVP</span>
                    </a>
                </li>
            </ul>
            <ul
                class="flex justify-start items-center w-full mb-2 space-y-2 font-medium {{ Route::is('gift.index') ? 'bg-[#c1554e] hover:bg-orange-800' : 'bg:none' }}">
                <li>
                    <a href="{{ route('gift.index') }}"
                        class="flex items-center p-2 rounded-lg {{ Route::is('gift.index') ? 'text-white hover:none' : 'text-gray-900 hover:text-amber-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-[15px] h-[15px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                        <span class="font-medium text-sm ms-2">Gift</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="flex w-4/5 pt-8 pb-4 sm:ml-56">
        {{ $slot }}
    </div>
</body>

</html>
