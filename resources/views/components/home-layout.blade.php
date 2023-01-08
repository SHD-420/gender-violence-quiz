<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <div class="grid">
        <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            class="w-full h-96 object-cover col-start-1 row-start-1">
        <div class="col-start-1 row-start-1 h-96 bg-gray-800 bg-opacity-25 backdrop-blur-sm">

        </div>
        <div class="col-start-1 row-start-1 relative">
            <section class="mt-20 mb-12 text-center">
                <h1 class="text-6xl mx-auto font-bold leading-none text-gray-100 mb-4">Welcome to our website.</h1>
                <div class="w-60 mx-auto bg-orange-600 h-2"></div>
                <p class="max-w-xl mx-auto mt-4 font-semibold text-lg text-gray-100">Lorem ipsum dolor sit amet
                    consectetur
                    adipisicing elit. Ipsum, soluta?</p>
            </section>
            @guest
                {{ $slot }}
            @endguest
            @auth
                <div class="w-1/2 mx-auto px-12 py-12 rounded-md bg-white shadow-lg text-gray-600">
                    <p>Logged in as:</p>
                    <h2 class="text-4xl font-bold">{{ auth()->user()->name }}</h2>
                    <div class="flex space-x-8">
                        <p class="text-lg">{{ auth()->user()->email }}</p>
                        <p class="text-lg">Age: <span class="font-semibold"> {{ auth()->user()->age }}</span></p>
                        <p class="text-lg">Gender: <span class="font-semibold">
                                @if (auth()->user()->gender === 'm')
                                    Male
                                @else
                                    Female
                                @endif
                            </span>
                        </p>
                    </div>
                    <div class="flex space-x-2 mt-4">
                        <a href=""
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
