<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ATZINTLI</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <div class="grid">
        <img src="{{ asset('images/home-bg.jpg') }}" class="w-full h-96 object-cover col-start-1 row-start-1">
        <div class="col-start-1 row-start-1 h-96 bg-gray-800 bg-opacity-25 backdrop-blur-sm">
        </div>
        <div class="col-start-1 row-start-1 relative">
            <section class="mt-20 mb-12 text-center">
                <h1 class="text-6xl mx-auto font-bold leading-none text-gray-100 mb-4">ATZINTLI</h1>
                <div class="w-60 mx-auto bg-orange-600 h-2"></div>
                <p class="max-w-xl mx-auto mt-4 font-semibold text-lg text-gray-100">
                    Regístrate para evaluar y ampliar tus conocimientos sobre el tema de la <span
                        class="bg-orange-200 text-orange-600 italic">Violencia de Género</span> en
                    México e informa si has sido víctima de ella o has cometido un acto de violencia sin saberlo con un
                    par de cuestionarios.
                </p>
            </section>
            @guest
                {{ $slot }}
            @endguest
            @auth
                <div
                    class="w-1/2 mx-auto flex justify-between items-center py-4 px-8 rounded-md bg-white shadow-lg text-gray-600">
                    <p>
                        <span>Logged in as:</span>
                        <span class="font-semibold ml-2">
                            {{ auth()->user()->name }}
                        </span>
                        <span class="text-gray-400">
                            {{ auth()->user()->email }}
                        </span>
                    </p>
                    <div class="flex space-x-2">
                        <a href="{{ route('dashboard') }}"
                            class="font-semibold text-purple-800 bg-purple-100 rounded hover:bg-purple-200 px-2">Dashboard</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="font-semibold text-orange-600 bg-orange-100 hover:bg-orange-200 rounded px-2">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</body>

</html>
