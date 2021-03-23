<?php

use App\Modelos\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//factory(Pregunta::class, 5)->make(['estado'=> '0']);

        factory(Pregunta::class, 50)->create();

        Pregunta::create([	'PREGUNTA'=>'NO es un objetivo del programa de tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una META del Programa de Tuberculosis ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una META del Programa de Tuberculosis ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Paciente que presenta sintomas o signos sugetivos de tuberculosis es:', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Tuberculosis bacteriologicamente confirmada es:', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Tuberculosis bacteriologicamente confirmada es:', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Según la localización anatómica de la enfermedad la TB se clasifica en:', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Paciente que nunca ha sido tratado por tuberculosis o que ha recibido medicamentos anti tuberculosos por menos de un mes', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se considera un paciente con recaída', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Paciente con TB pulmonar con bacteriologia confirmada al inicio del tratamiento y que tiene baciloscopías negativas en los dos últimos meses de tratamiento y cultivo negativo al 4to o 5to mes', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Paciente de TB que completo el tratamiento sin resultado de bacilosocpía de los dos ultimos meses de tratamiento y cultivo del 4to o 5to mes negativo', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Paciente conTB pulmonar cuya baciloscopía es positiva en el 5to mes o posterior , o el cultivo del 4to o 5to mes es positivo', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Paciente que con TB que no inicio tratamiento o interrumpió el tratamiento durante un mes consecutivo o más', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La tuberculosis es causada por', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Entrada del M Tuberculosis por primera vez en contacto con una persona sana y que desencadena en una respuesta inmunológica ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una forma de transmisión del Mycobacterium tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Son sintomas generales de tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Son síntomas específicos de tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Sintomático respiratorio es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Qué es la detección pasiva de casos de tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La captación activa de casos sospechosos de tuberculosis se realiza en', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Para reducir el diagnóstico tardío de tuberculosis hay que fortalecer', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es un método bacteriológico de diagnóstico de TB', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Una Baciloscopía de una sola cruz (+) es cuando', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La primera muestra de baciloscopía se la toma', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El método con mayor sensibilidad para el diagnóstico de la tuberculosis es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una indicación para solicitar cultivo de mycobacterium tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'No es una indicación para solicitar cultivo de M. tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Reaccion en cadena de la polimerasa en tiempo real es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una indicación para soliciar Genexpert', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'No es una indicación para solicitar Genexpert', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Que muestra puede enviar para realizar Genexpert', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El tratamiento antituberculoso debe ser', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es un medicamento antituberculoso de Primera Línea', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'No es un medicamento antituberculoso de primera línea', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El tratamiento de tuberculosis sensible dura', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La dosis de Isoniazida es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las tabletas de Etambutol tienen una presentacion de', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La fase intensiva del tratamiento antituberculosos dura', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las tabletas de Pirazinamida vienen en una presentación de ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las dos pruebas que se debe pedir a todos los pacientes de tuberculosis son', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'En caso que la muestra de bacilocopía de control de segundo mes salga positiva que se hace', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'En caso de embarazo y tuberculosis sensible el tratamiento debe', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'En caso de lactancia materna y tuberculosis sensible ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento interfiere con los métodos anticonceptivos orales', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento interfiere con los antidiabéticos orales', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El tratamiento de meningitis tuberculosa dura', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La vacuna BCG es efectiva para prevenir', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'No es una medida de proteccion contra la tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La quimioprofilaxis se realiza con este medicamento', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La quimioprofilaxis se realiza en este grupo de personas', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La quimioprofilaxis del menor de 5 años dura', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Estas personas NO deben recibir quimioprofilaxis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se dice que es Monorresistente cuando', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se dice que es polirresistente cuando', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se dice que es multidrogorresistente cuando', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se dice que es extensamente resistente cuando', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'En la resistencia secundaria a los fármacos Antituberculosos intervienen estos factores EXCEPTO', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'No es un medicamento antituberculoso de segunda línea', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La fase intensiva del tratamiento modificado para multi drogoresistentes  dura', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento antituberculoso es el mayor causante de dolores articulares', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento antituberculoso es el mayor causante de neuritis periférica', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento antituberculoso es el mayor causante de Neuritis retrobulbar (afectación de la visión de colores)', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento antituberculoso es el mayor causante de Púrpura trombocitopénica (petequias, hematomas, gingivorragia)', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una medida de Prevención de las reacciones adversas a los fármacos antituberculosos', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Pacientes con VIH que NO son elegibles para iniciar quimioprofilaxis para tuberculosis', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La frecuencia de terapia preventiva con isoniacida en pacientes con VIH se realiza cada', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se considera ya como Diabetes Miellitus cuando los valores de glicemia en ayunas están encima de', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Son pruebas confirmatorias para Diabetes miellitus', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Valores normales de la creatinina sérica', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las medidas de control de infecciones que tienen como objetivo reducir la exposición del trabajador y de los pacientes al M. Tuberculosis son', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las medidas de control de infecciones que tienen como objetivo reducir la concentración de las partículas infecciosas son', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las medidas de control de infecciones que protegen al trabajador de salud en ambientes donde la concentración de núcleos de gotitas infecciosas no puede ser reducida se llama', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Si la Tasa de incidencia de Tuberculosis pulmonar es menos de 100 por 100,000 habitantes la programación de sintomatico respiratorio se lo hace con', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Si la Tasa de incidencia de Tuberculosis pulmonar es  de 100 a 150 por 100,000 habitantes la programación de sintomatico respiratorio se lo hace con', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Si la Tasa de incidencia de Tuberculosis pulmonar es  mayor a 150 por 100,000 habitantes la programación de sintomatico respiratorio se lo hace con', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La Supervisión permite lo siguiente EXCEPTO', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Incidencia se refiere a', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Prevalencia se refiere a', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La meta de captación de sintomático respiratorio para la gestión es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La tasa de éxito de tratamiento y curación debería ser', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Las pérdidas en el seguimiento deberían ser', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Una buena muestra de esputo debe ser tomada de la siguiente manera EXCEPTO', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La temperatura para almacenamiento y transporte de muestra de esputo debe ser', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El transporte de muestra de esputo debe hacerse', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Son criterios de rechazo de una muestra las siguientes afirmaciones EXCEPTO', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El medicamento antituberculoso considerado nefrotóxico es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Que medicamento antituberculoso de segunda línea produce graves alteraciones psicológicas como ser depresión y tendencia a suicidio', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Cuanto tiempo dura el tratamiento de tuberculosis drogorresistente', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El método más rápido que nos permite detectar resistencia a la Rifampicina es', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El proceso de administración de los medicamentos uno por uno, en dosis progresivas se llama', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La muestra de líquido cefalorraquídeo sirve para diagnosticar ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Se llama Periodo ventana a ', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Todas son un signo o síntoma de inmunosupresion severa EXCEPTO', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'La terapia preventiva con isoniacida en personas con VIH se realiza cada', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicamento disminuye la absorción y efecto de la isoniacida', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Este medicameno aumenta el riesgo de Hepatotoxicidad', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es una indicación para terapia preventiva con cotrimoxazol', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'Es un factor de riesgo para desarrollar Sindrome Inflamatorio de Reconstitución Inmune los siguientes, EXCEPTO', 	'tema_id'=>'2', 	]);
Pregunta::create([	'PREGUNTA'=>'El tratamiento del Sindrome Inflamatorio de Reconstitución Inmune se realiza con', 	'tema_id'=>'2', 	]);


    }
}
