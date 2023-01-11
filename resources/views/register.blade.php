<x-home-layout>
    <div class="py-2 px-12 mx-auto w-1/2 rounded-md bg-white shadow-xl">
        <div class="grid grid-cols-2 gap-x-2">
            <a href="{{ route('login') }}" class="font-semibold text-center py-2 hover:bg-orange-100 rounded-md">Iniciar
                Sesión</a>
            <button class="bg-orange-200 py-2 text-orange-600 font-semibold rounded-md">Registro</button>
            <form class="col-span-2 py-8" method="POST" action="{{ route('register') }}">
                @csrf
                <h4 class="text-2xl font-bold text-gray-600 pb-2 border-b-2  mb-4">Registre una nueva cuenta</h4>
                <div class="mb-4">
                    <label for="email" class="text-sm">Introduce tu correo electrónico
                        @error('email')
                            <span class="text-red-600 ml-2 font-semibold">
                                {{ $errors->first('email') }}
                            </span>
                        @enderror
                    </label>
                    <input name="email" value="{{ old('email') }}"
                        class="w-full rounded-md py-2 px-4 bg-gray-100 border-2 @error('email')border-red-200 @enderror focus:ring-2 outline-none"
                        type="email" placeholder="Email" />
                </div>
                <div class="mb-4">
                    <label for="name" class="text-sm text-center">
                        Elige un nombre de usuario
                        @error('name')
                            <span class="text-red-600 ml-2 font-semibold">
                                {{ $errors->first('name') }}
                            </span>
                        @enderror
                    </label>
                    <input name="name" value="{{ old('name') }}"
                        class="w-full rounded-md py-2 px-4 bg-gray-100 border-2  focus:ring-2 outline-none  @error('username')border-red-200 @enderror"
                        type="text" placeholder="Username" />
                </div>
                <div class="flex space-x-8">
                    <div class="flex space-x-4 items-center">
                        <p class="text-sm">Género:</p>
                        <p>
                            <input checked type="radio" name="gender" value="m" id="" />
                            <label for="male" class="font-semibold text-gray-600">
                                Masculino
                            </label>
                        </p>
                        <p>
                            <input type="radio" name="gender" value="f" id="" />
                            <label for="female" class="font-semibold text-gray-600">
                                Femenino
                            </label>
                        </p>
                    </div>
                    <div class="flex space-x-4 items-center">
                        <label for="age" class="text-sm">
                            Años:
                        </label>
                        <input type="number" value="{{ old('age') }}"
                            class="w-36 rounded-md py-2 px-4 bg-gray-100 border-2  focus:ring-2 outline-none @error('age')border-red-200 @enderror"
                            name="age" id="" placeholder="Eg: 24">
                    </div>
                </div>
                <div class="mb-8">
                    <label for="password" class="text-sm text-center">Establecer una contraseña
                        @error('password')
                            <span class="text-red-600 ml-2 font-semibold">
                                {{ $errors->first('password') }}
                            </span>
                        @enderror

                    </label>
                    <input name="password"
                        class="w-full rounded-md py-2 px-4 bg-gray-100 border-2  focus:ring-2 outline-none @error('password')border-red-200 @enderror"
                        type="password" placeholder="Password" />
                </div>
                <button type="submit"
                    class="text-center w-full bg-purple-800 text-white font-semibold py-2 rounded-md hover:bg-purple-700">Ingresar</button>
            </form>
        </div>
    </div>
</x-home-layout>
