<x-dashboard-layout>
    <div class="mt-12"></div>
    @isset($responses)
        <div class="w-8/12 mx-auto p-8 bg-white rounded-md shadow-xl">
            <h4 class="font-semibold text-2xl text-gray-600">Resultados de la encuesta</h4>
            <p class="mb-8">Respondieron un total de {{ $total_responses }} personas, incluyéndote a ti.</p>
            <ul class="space-y-8">
                @foreach ($responses as $response)
                    <li>
                        <p class="font-semibold text-gray-600 text-lg">
                            {{ $response['question'] }}
                        </p>
                        <div class="grid h rounded-md overflow-hidden mb-2 bg-gray-100">
                            <div
                                class="col-start-1 row-start-1 text-sm text-center font-bold relative bg-orange-600 w-max mx-auto px-1 my-2">
                                Respondió públicamente que sí por {{ $response['public_yes'] }} personas
                            </div>
                            <div class="col-start-1 row-start-1 bg-purple-800 origin-left"
                                style="width: {{ ($response['public_yes'] * 100) / $total_responses }}%">
                            </div>
                        </div>
                        <p>
                            <span>Tu respuesta:</span>
                            <span class="font-semibold">
                                {{ $response['user_response'] === 0 ? 'No' : 'Si' }}
                            </span>
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        @error('response')
            <p class="mb-4 bg-red-100 w-8/12 shadow mx-auto rounded-md px-4 py-2 text-red-600 font-semibold">
                ¡Todas las preguntas son obligatorias!
            </p>
        @enderror
        <form class="w-8/12 mx-auto p-8 rounded-md shadow-xl bg-white" method="POST" action="{{ route('response') }}">
            @csrf
            <p class="bg-purple-800 text-gray-100 w-max px-2 font-semibold">Prueba</p>
            <h2 class="text-4xl font-bold text-gray-600">Encuesta personal</h2>
            <p class="mb-8">Por favor responda libremente; su identidad no será mostrada a :</p>

            <ul class="space-y-8">
                @foreach ($questions as $item)
                    <li>
                        @error("response[$item->id]")
                            <p class="text-red-600 rounded-md font-semibold bg-red-100 w-max px-2">Response required</p>
                        @enderror
                        <p class="font-semibold text-gray-600 text-lg mb-2">
                            {{ $item->text }}
                        </p>
                        <div class="flex space-x-8 items-center">
                            <p>Tu respuesta:</p>
                            <div class="flex items-center space-x-2">
                                <input {{ old("response.$item->id") == '1' ? 'checked' : '' }} type="radio"
                                    name="response[{{ $item->id }}]" value="1" />
                                <label for="yes">Si</label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input {{ old("response.$item->id") == '0' ? 'checked' : '' }} type="radio"
                                    name="response[{{ $item->id }}]" value="0" />
                                <label for="no">No</label>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button
                class="mt-12 py-2 bg-purple-800 px-8 rounded-md hover:bg-purple-700 text-white font-semibold">Submit</button>
        </form>
    @endisset
</x-dashboard-layout>
