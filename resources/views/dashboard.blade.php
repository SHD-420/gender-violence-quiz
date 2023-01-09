<x-dashboard-layout>
    <div class="mt-20"></div>
    @if (session()->has('success-message'))
        <p class="mb-4 w-8/12 mx-auto py-2 bg-blue-200 font-semibold text-blue-600 px-4 rounded-md shadow">
            {{ session('success-message') }}
        </p>
    @endif
    <div class="w-8/12 rounded-md shadow-xl bg-white mx-auto py-8 px-12">
        <img src="https://images.pexels.com/photos/2990644/pexels-photo-2990644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            class="w-full rounded-md shadow-xl h-60 object-cover mb-8">
        <p class="text-sm bg-orange-600 w-max font-semibold px-1 text-gray-100">Definition</p>
        <h1 class="text-4xl font-bold text-gray-600 mb-4">Violencia de género</h1>
        <p class="leading-loose mb-12">
            La violencia de género es un grave problema que afecta a personas de todo el mundo. Puede tomar muchas
            formas, desde la violencia doméstica y la violación hasta el acoso y la discriminación en el lugar de
            trabajo. Esta violencia se basa en la desigualdad de género y es más comúnmente perpetrada contra las
            mujeres.
        </p>
        <p class="text-sm bg-purple-800 w-max font-semibold px-1 text-gray-100">Stats</p>
        <h4 class="text-2xl mb-4 font-semibold text-gray-600">Algunos hechos</h4>
        <ul class="space-y-4 list-disc list-inside">
            <li>Según el Instituto Nacional de Estadística y Geografía, la tasa de feminicidios (asesinatos de
                mujeres por su género) en México aumentó 137% entre 2015 y 2020.</li>
            <li>El gobierno mexicano ha sido criticado por no abordar la violencia de género y proteger a las
                mujeres. En 2020, Naciones Unidas llamó a México a tomar medidas urgentes para hacer frente a
                los altos índices de feminicidios en el país.</li>
            <li>Indigenous women in Mexico are particularly at risk of gender violence. A study conducted by the
                Universidad Nacional Autónoma de México found that indigenous women are three times more likely
                to be victims of femicide than non-indigenous women.</li>
            <li>La violencia de género a menudo está relacionada con otras formas de violencia en México, como
                la violencia relacionada con las drogas y la trata de personas.</li>
            <li>En México existen diversas organizaciones que trabajan para combatir la violencia de género y
                brindar apoyo a las víctimas, entre ellas el Observatorio Nacional del Femicidio y la Red
                Nacional de Casas de Acogida para Mujeres.</li>
            <li>
                In 2021, the Mexican government launched a National Plan to Prevent and Eradicate Violence
                Against Against Women and Girls, which aims to address gender violence and protect the rights of
                women and girls in the country.
            </li>
        </ul>

    </div>
</x-dashboard-layout>
