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

<body class="font-sans antialiased">
    <div class="flex flex-col min-h-screen max-w-sm mx-auto justify-center">
        <form action="{{ route('login.auth') }}" method="post">
            @csrf
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
                @error('email')
                    <div class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
                @error('password')
                    <div class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-1.5 rounded">{{ $message }}
                    </div>
                @enderror
            </div>
            @error('error')
                <div class="bg-red-100 text-red-800 text-xs font-medium my-2 px-2.5 py-1.5 rounded">{{ $message }}
                </div>
            @enderror
            <button type="submit"
                class="text-white bg-[#003049] hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Login</button>
        </form>
    </div>
</body>

</html>
