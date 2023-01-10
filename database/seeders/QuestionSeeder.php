<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert(
            collect([
                '¿Lo han ignorado o no tomado en cuenta por su sexo?',
                '¿Lo han manoseado, tocado, besado o se la han arrimado, recargado o encimado sin su consentimiento?',
                '¿Lo han obligado a tener relaciones sexuales en contra de su voluntad?',
                '¿Han tratado de obligarlo a tener relaciones sexuales?',
                '¿Alguien del sexo opuesto le ha pateado o golpeado con el puño?',
                '¿Le han ofendido o humillado por su sexo?',
                '¿Le han impedido o prohibido estudiar o trabajar?',
                '¿Alguna persona le mostró sus partes íntimas o se las manoseó enfrente de usted?',
                '¿Le han enviado mensajes o publicado comentarios con insinuaciones sexuales, insultos u ofensas, a través del celular, correo electrónico o redes sociales?',
                '¿Le han dicho piropos groseros u ofensivos de tipo sexual sobre su cuerpo?',
                '¿Le han jaloneado la ropa para ver sus partes íntimas o ropa interior?',
                '¿Le han hecho sentir miedo de ser atacado o abusado sexualmente?',
                '¿Alguien del sexo opuesto, le han amenazado con hacerle daño a usted o a alguien que a usted le importa?',
                '¿Alguien del sexo opuesto le ha atacado o agredido con un cuchillo, navaja o arma de fuego?',
                '¿Le han obligado a mirar escenas o actos sexuales o pornográficos?',
            ])
                ->map(fn ($t) => ['text' => $t, 'response_type' => 'bool'])
                ->toArray()
        );
        Question::insert(
            collect([
                '¿En qué rango, crees saber cuál es la población nacional de mujeres en la actualidad?',
                '¿Conoces alguna plataforma de transparencia de violencia de genero?',
                '¿En qué rango, considera haber violentado alguna vez a una mujer?',
                '¿En qué rango, a alguien que haya sido violentada por ser mujer?',
                '¿En qué rango, crees que en tu hogar se haya suscitado por lo menos una vez violencia de genero?',
                '¿En qué rango, crees saber cuál es el estado de la Republica con más índices de violencia de género en los últimos años?',
                '¿En qué rango, crees saber cuál es el estado de la república con menos índices de violencia de género en los últimos años?',
                '¿En qué rango, crees que la violencia de genero se presente en Ciudad de México actualmente?',
                '¿En qué rango, crees conocer los 4 tipos de violencia de género que existen?',
                '¿En qué rango, crees poder mencionar estos cuatro?',
                '¿Conoces cuál es el rango de edad de mujeres que sufren algún tipo de violencia de genero?',
                '¿En qué rango, consideras que la violencia de genero la edad más afectada es de entre 15 y 35 años?',
                '¿En qué rango, consideras que la violencia de genero es un fenómeno importante para el desarrollo social?',
                '¿En qué rango, consideras que la violencia de genero se suscita por temas derivados por la clase social?',
                '¿Consideras conocer plataformas o números de emergencia en donde denunciar algún tipo de violencia de genero?',
            ])
                ->map(fn ($t) => ['text' => $t, 'response_type' => 'int'])
                ->toArray()
        );
    }
}
