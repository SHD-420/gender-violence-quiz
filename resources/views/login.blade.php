<x-home-layout>
    <div class="py-2 px-12 mx-auto w-1/2 rounded-md bg-white shadow-xl">
        <div class="grid grid-cols-2 gap-x-4">
            <button class="bg-orange-200 py-2 text-orange-600 font-semibold rounded-md">Iniciar Sesión</button>
            <a href="{{ route('register') }}"
                class="font-semibold text-center py-2 hover:bg-orange-100 rounded-md">Registro</a>
            <form class="col-span-2 py-8" method="POST" action="{{ route('login') }}">
                <h4 class="text-2xl font-bold text-gray-600 pb-2 border-b-2 mb-4">
                    Iniciar sesión en una cuenta existente</h4>
                @csrf
                <div class="mb-2">
                    @error('email')
                        <label for="email"
                            class="text-sm text-red-600 font-semibold">{{ $errors->first('email') }}</label>
                    @enderror
                    <input
                        class="w-full rounded-md py-2 px-4 bg-gray-100 border-2 focus:ring-2 outline-none @error('email')border-red-200 @enderror"
                        name="email" value="{{ old('email') }}" type="email" placeholder="Email" />
                </div>
                <input class="w-full rounded-md py-2 px-4 bg-gray-100 border-2 focus:ring-2 outline-none mb-8"
                    type="password" name="password" placeholder="Password" />
                <button type="submit"
                    class="text-center w-full bg-purple-800 text-white font-semibold py-2 rounded-md hover:bg-purple-700">Ingresar</button>
            </form>
        </div>
    </div>
</x-home-layout>
