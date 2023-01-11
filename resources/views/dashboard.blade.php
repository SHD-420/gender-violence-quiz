<x-dashboard-layout>
    <div class="mt-20"></div>
    @if (session()->has('success-message'))
        <p class="mb-4 w-8/12 mx-auto py-2 bg-blue-200 font-semibold text-blue-600 px-4 rounded-md shadow">
            {{ session('success-message') }}
        </p>
    @endif
    <div class="w-8/12 rounded-md shadow-xl bg-white mx-auto py-8 px-12">
        <h2 class="text-gray-600 font-bold text-4xl">
            Bienvenid {{ '@' . auth()->user()->name }}
        </h2>
        <p class="mb-8">
            Evalúa y amplía tus conocimientos sobre el tema de “Violencia de Género” en
            México e informa si has sido víctima o has cometido un acto de violencia sin saberlo con un
            un par de cuestionarios.
        </p>
        <img src="{{ asset('/images/dashboard.png') }}" class="w-full rounded-md shadow-xl h-60 object-cover mb-8">
        <p class="text-sm bg-orange-600 w-max font-semibold px-1 text-gray-100 mb-2">Definiciones</p>
        <ol class="list-decimal px-4 space-y-8 mb-12">
            <li>
                <h5 class="text-xl text-gray-600 font-bold">Agresividad</h5>
                <p>Es una conducta innata que se despliega automáticamente ante determinados estímulos y que, asimismo,
                    cesa ante la presencia de inhibidores muy específicos. Es biología pura.</p>
            </li>
            <li>
                <h5 class="text-xl mb-4 text-gray-600 font-bold">Violencia</h5>
                <p>
                    <img src="{{ asset('/images/dashboard-2.png') }}"
                        class="w-60 rounded-md shadow h-40 object-cover float-left mr-8" />

                    Es agresividad, sí, pero agresividad alterada, principalmente, por la acción de factores
                    socioculturales que le quitan el carácter automático y la vuelven una conducta intencional y
                    dañina
                    (Sanmartín, 2000; Sanmartín, 2002, Sanmartín, 2006). En ese sentido entenderé en lo sucesivo
                    por
                    violencia cualquier conducta intencional que causa o puede causar un daño.
                </p>

            </li>
            <li>
                <div class="grid gap-x-4 grid-flow-col items-center">
                    <div>
                        <h5 class="text-xl text-gray-600 font-bold">Género</h5>
                        <p>Se refiere a las características de las mujeres, hombres, niñas y niños que se construyen
                            socialmente. Esto incluye normas, comportamientos y roles asociados con ser mujer, hombre,
                            niña o
                            niño, así como las relaciones entre sí. Como construcción social, el género varía de una
                            sociedad a
                            otra y puede cambiar con el tiempo.</p>
                    </div>
                    <img src="{{ asset('/images/dashboard-3.jpg') }}"x
                        class="w-80 rounded-md shadow h-60 object-cover" />
                </div>

            </li>
            <li>
                <h5 class="text-xl text-gray-600 font-bold">Violencia de género</h5>
                <p><img src="{{ asset('/images/dashboard-4.jpg') }}" class="h-40 mt-2 float-right"> Todo acto de
                    violencia sexista que
                    tiene como
                    resultado posible o real un daño físico, sexual o
                    psíquico, incluidas las amenazas, la coerción o la privación arbitraria de libertad, ya sea que
                    ocurra en la vida pública o en la privada.
                </p>

            </li>
            <li>
                <h5 class="text-xl text-gray-600 font-bold">Machismo</h5>
                <p>Se puede definir como una ideología que defiende y justifica la idea de superioridad y el dominio del
                    hombre sobre la mujer; exalta las cualidades masculinas, como agresividad, independencia y
                    dominancia, mientras estigmatiza las cualidades femeninas, como debilidad, dependencia y sumisión.
                    El machismo tradicionalmente ha estado asociado con la cultura mexicana y latina.</p>
            </li>
            <li>
                <h5 class="text-xl text-gray-600 font-bold">Consentimiento</h5>
                <p>En un contexto sexual, el consentimiento significa estar activamente de acuerdo con realizar
                    actividades de índole sexual con una persona. El consentimiento le indica a la otra persona que
                    deseamos tener relaciones sexuales. La actividad sexual sin consentimiento es una violación o
                    agresión sexual. El consentimiento tiene las siguientes características:</p>
                <ul class="list-disc list-inside mt-4 space-y-2 py-4 px-8 bg-gray-100 rounded-md shadow">
                    <li> Se da libremente. Consentir es una opción que tomas sin presión, sin manipulación o sin la
                        influencia de las drogas o el alcohol.</li>
                    <li> Es entusiasta. Cuando se trata de sexo, debes hacer las cosas que DESEAS hacer, no lo que se
                        espera que hagas.</li>
                    <li> Es específico. Decir que sí a algo (como ir a besarse al dormitorio) no significa que aceptes
                        hacer otras cosas (como tener relaciones sexuales).</li>
                    <li> Se brinda estando informado. Solo puedes consentir algo si tienes toda la información al
                        respecto.
                        Por ejemplo, si alguien dice que usará un condón y luego no lo hace, no hubo consentimiento
                        total.</li>
                    <li> Es reversible. Todos pueden cambiar de parecer sobre lo que desean hacer, en cualquier momento.
                        Incluso si ya lo hicieron antes y ambos están desnudos en la cama.</li>
                    <div class="py-4">
                        <img src="{{ asset('/images/dashboard-6.png') }}"
                            class="w-full h-40 object-cover rounded-md shadow" />
                    </div>
                </ul>
            </li>
            <li>
                <h5 class="text-xl text-gray-600 font-bold">Violencia Sexual o Agresión Sexual</h5>
                <img src="{{ asset('/images/dashboard-7.png') }}" alt=""
                    class="float-right w-80 h-80 rounded-md shadow ml-4 mb-4 object-cover">
                <p>No se presenta de una única forma. No es necesario que haya un arma ni que la víctima se resista,
                    grite o diga “no” repetidas veces para que una acción cuente como violación o agresión sexual. La
                    mayor parte de las agresiones sexuales no involucran a desconocidos en callejones oscuros. Por lo
                    general, es alguien que la víctima conoce o incluso una pareja romántica.</p>
                <p class="my-4">
                    Por lo general, las personas utilizan el término “agresión sexual” para referirse a cualquier tipo
                    de contacto sexual no consensuado y el término “violación” para el contacto sexual que incluye
                    penetración.
                </p>
                <p>
                    Todos podemos ser víctimas, sin importar cuál sea el género, la orientación sexual o la edad. Sin
                    embargo, algunos grupos de personas son más propensas que otras a sufrir agresiones sexuales durante
                    la vida. Las mujeres, las personas que se identifican como LGBT, las personas con discapacidades de
                    desarrollo y las mujeres de color son más propensas a sufrir agresiones sexuales a lo largo de su
                    vida.
                </p>
            </li>

        </ol>
        <p class="text-sm bg-purple-800 w-max font-semibold px-1 text-gray-100">Estadísticas</p>
        <h4 class="text-2xl mb-4 font-bold text-gray-600">La situación en México</h4>
        <ul class="space-y-4">
            <li>
                En 2021, en México vivían 128 millones de personas, 65.5 millones eran mujeres (51.2 %), de las cuales
                más de 50.5 millones (77.1 %) tenían 15 años y más de edad.
                <img src="{{ asset('/images/dashboard-stats-1.png') }}" class="mx-auto mt-4" />
            </li>
            <li>
                En 2021, a nivel nacional, del total de mujeres de 15 años y más, 70.1 % han experimentado al menos un
                incidente de violencia, que puede ser psicológica, económica, patrimonial, física, sexual o
                discriminación en al menos un ámbito y ejercida por cualquier persona agresora a lo largo de su vida.
            </li>
            <li>
                La violencia psicológica es la que presenta mayor prevalencia (51.6 %), seguida de la violencia sexual
                (49.7 %), la violencia física (34.7 %) y la violencia económica, patrimonial y/o discriminación (27.4
                %).
            </li>
            <li>
                Mientras que, de octubre 2020 a octubre 2021, 42.8 % de las de mujeres de 15 años y más experimentaron
                algún tipo de violencia, la violencia psicológica es la que presenta mayor prevalencia (29.4 %), seguida
                de la violencia sexual (23.3 %), la violencia económica, patrimonial y/o discriminación (16.2 %) y la
                violencia física (10.2 %).
            </li>
            <li>
                Las entidades federativas donde las mujeres de 15 años y más han experimentado mayor violencia a lo
                largo de su vida son: Estado de México (78.7 %), Ciudad de México (76.2 %) y Querétaro (75.2 %).
            </li>
            <li>
                Mientras que los estados con menor prevalencia son: Tamaulipas (61.7 %), Zacatecas (59.3 %) y Chiapas
                (48.7 %).
            </li>
            <li>
                Las entidades federativas donde las mujeres de 15 años y más que han experimentado más violencia de
                octubre 2020 a octubre 2021 son: Querétaro (49.8 %), Colima (48.2 %) y Aguascalientes (48.0 %).
            </li>
            <li>
                Por su parte, Baja California (37.2 %), Tamaulipas (34.2 %) y Chiapas (26.9 %), son las entidades que
                presentan las prevalencias más bajas en ese periodo.
                <img src="{{ asset('/images/dashboard-stats-2.png') }}" class="mx-auto mt-4" />
            </li>

        </ul>

    </div>
</x-dashboard-layout>
