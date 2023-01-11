<x-dashboard-layout>
    <div class="mt-12"></div>
    @isset($responses)
        @if ($total_score <= 30)
            <div class="mb-4 w-8/12 mx-auto py-8 bg-amber-100 font-semibold text-amber-600 px-12 rounded-md shadow">
                <h4 class="text-2xl mb-2">
                    Tu puntaje fue bajo entra al siguiente link para que puedas mas datos de la violencia de genero
                </h4>
                <p>
                    <a href="https://www.inegi.org.mx/tablerosestadisticos/vcmm/#General" target="_blank"
                        class="text-amber-700 underline">inegi.org.mx/tablerosestadisticos/vcmm</a>
                </p>
            </div>
        @endif
        <div class="rounded-md mx-auto shadow-xl w-8/12 p-8 bg-white">
            <h4 class="font-semibold text-2xl text-gray-600">Ya Has Respondido</h4>
            <p class="mb-4">Su puntaje total es {{ $total_score }} y sus respuestas se muestran a continuación:</p>
            <ul class="space-y-4">
                @foreach ($responses as $response)
                    <li>
                        <p class="font-semibold text-gray-600 text-lg">
                            {{ $response->question->text }}
                        </p>
                        <p>
                            <span>Tu respuesta:</span>
                            <span class="font-semibold">
                                {{ $response->value }}
                            </span>
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <form action="{{ route('response') }}" method="POST" class="w-8/12 mx-auto p-8 rounded-md shadow-xl bg-white">
            @csrf
            <p class="bg-purple-800 text-gray-100 w-max px-2 font-semibold">Prueba</p>
            <h2 class="text-4xl font-bold text-gray-600">Encuesta de conocimientos</h2>
            <p class="mb-8">Las siguientes preguntas son de carácter evaluativo, contesta del 0 al 3 que tanto sabes de la
                violencia de género, siendo 0 nada, 1 casi nada, 2 poco y 3 mucho:</p>
            <ul class="space-y-8">
                @foreach ($questions as $item)
                    <li>
                        @error("response[$item->id]")
                            <p class="text-red-600 rounded-md font-semibold bg-red-100 w-max px-2">Response required</p>
                        @enderror
                        <p class="font-semibold text-gray-600 text-lg mb-2">
                            {{ $item->text }}
                        </p>
                        <div class="flex space-x-4 items-center">
                            <p>Tu respuesta:</p>
                            <div id="range-input" class="flex items-center space-x-2">
                                <input type="range" min="0" value="0" max="3"
                                    name="response[{{ $item->id }}]" />
                                <span class="px-2 rounded-full bg-gray-100 text-sm font-semibold text-gray-600"></span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button
                class="mt-12 py-2 bg-purple-800 px-8 rounded-md hover:bg-purple-700 text-white font-semibold">Submit</button>
        </form>
        <script lang="js">
            addEventListener("load", () => {
                document.querySelectorAll("#range-input").forEach(e => {
                    let t = e.firstElementChild,
                        n = e.lastElementChild;
                    t instanceof HTMLInputElement && "range" === t.type && n instanceof HTMLSpanElement && (n
                        .textContent = t.value, t.addEventListener("input", () => {
                            n.textContent = t.value
                        }))
                })
            });
        </script>
    @endisset
</x-dashboard-layout>
