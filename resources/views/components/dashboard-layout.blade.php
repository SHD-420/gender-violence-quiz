<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <nav class="grid grid-cols-5 text-purple-800 w-8/12 mx-auto py-4">
        <a href="{{ route('dashboard') }}"
            class="text-center flex items-center flex-col py-4 px-4 @if (Route::currentRouteName() == 'dashboard') bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.home></x-icons.home>
            <p>Home</p>
        </a>
        <a href="{{ route('knowledge-quiz') }}"
            class="text-center flex items-center flex-col py-4 px-4 @if (Route::currentRouteName() == 'knowledge-quiz') bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.knowledge></x-icons.knowledge>
            <p>Knowledge quiz</p>
        </a>
        <a href="{{ route('personal-quiz') }}"
            class="text-center flex items-center flex-col py-4 px-4 @if (Route::currentRouteName() == 'personal-quiz') bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.gender></x-icons.gender>
            <p>Personal quiz</p>
        </a>
        <a href="{{ route('profile') }}"
            class="text-center flex items-center flex-col py-4 px-4 @if (Route::currentRouteName() == 'profile') bg-purple-200 @endif hover:bg-purple-100 hover:shadow-xl hover:shadow-purple-200 rounded-md">
            <x-icons.user></x-icons.user>
            <p>Edit your profile</p>
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="text-center flex items-center flex-col py-4 px-4 hover:bg-orange-100 rounded-md text-orange-600 hover:shadow-xl hover:shadow-orange-200 w-full">
                <x-icons.logout></x-icons.logout>
                <p>Logout</p>
            </button>
        </form>
    </nav>
    <div class="w-8/12 mx-auto h-px bg-purple-800"></div>
    {{ $slot }}
</body>

</html>
