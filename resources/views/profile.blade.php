<x-dashboard-layout>
    <div class="mt-12"></div>
    @if ($errors->any())
        <p class="mb-4 bg-red-100 w-1/2 shadow mx-auto rounded-md px-4 py-2 text-red-600 font-semibold">
            Ocurrió un error. ¡Por favor, intenta de nuevo!
        </p>
    @endif
    <form class="w-1/2 mx-auto p-8 shadow-xl bg-white rounded-md" method="POST" action="{{ route('profile') }}">
        @csrf
        <h4 class="text-2xl text-gray-600 font-bold mb-4">Edit your profile</h4>
        <div class="mb-2">
            <label for="email" class="text-sm">
                Email
            </label>
            <input type="email" name="email" placeholder="Email" value="{{ auth()->user()->email }}"
                class="w-full rounded-md py-2 px-4 bg-gray-100 border-2 focus:ring-2 outline-none" />
        </div>
        <div class="mb-2">
            <label for="name" class="text-sm">
                Username
            </label>
            <input type="text" name="name" placeholder="Username" value="{{ auth()->user()->name }}"
                class="w-full rounded-md py-2 px-4 bg-gray-100 border-2 focus:ring-2 outline-none" />
        </div>
        <div class="flex space-x-8 mb-8">
            <div class="flex space-x-4 items-center">
                <p class="text-sm">Gender:</p>
                <p>
                    <input {{ auth()->user()->gender == 'm' ? 'checked' : '' }} type="radio" name="gender"
                        value="m" id="" />
                    <label for="male" class="font-semibold text-gray-600">
                        Male
                    </label>
                </p>
                <p>
                    <input {{ auth()->user()->gender == 'f' ? 'checked' : '' }} type="radio" name="gender"
                        value="f" id="" />
                    <label for="female" class="font-semibold text-gray-600">
                        Female
                    </label>
                </p>
            </div>
            <div class="flex space-x-4 items-center">
                <label for="age" class="text-sm">
                    Age
                </label>
                <input type="number" value="{{ auth()->user()->age }}"
                    class="w-36 rounded-md py-2 px-4 bg-gray-100 border-2  focus:ring-2 outline-none"
                    name="age" id="" placeholder="Eg: 24">
            </div>
        </div>
        <button type="submit"
            class="text-center w-full bg-purple-800 text-white font-semibold py-2 rounded-md hover:bg-purple-700">Save</button>
    </form>
</x-dashboard-layout>
