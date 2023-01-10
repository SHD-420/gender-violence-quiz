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
    }
}
