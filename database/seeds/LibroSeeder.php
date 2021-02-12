<?php

use Illuminate\Database\Seeder;
use App\Modelos\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Libro::create(['titulo'=>'ENFERMEDADES QUIRURJICAS DEL SISTEMA DIGESTIVO', 'fecha'=>'2020-10-15', 'tapa'=>'1.png','documentopdf'=>'01-8 Libro NAC tomo 2.pdf', 'edicion'=>'UNIDAD 15','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'NORMAS EN SALUD ORAL', 'fecha'=>'2020-10-15', 'tapa'=>'2.png','documentopdf'=>'02-2010-Normas_Salud_Oral-6316.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 176', 'lugarpublicacion'=>'LA PAZ BOLIVIA 2010',]);
Libro::create(['titulo'=>'DECRETO SUPREMO N° 28562', 'fecha'=>'2020-10-15', 'tapa'=>'3.png','documentopdf'=>'03-DECRETO_REGLAMENTARIO_A_LA_LEY_3131.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'8 DE AGOSTO 2005',]);
Libro::create(['titulo'=>'DOCUMENTO TECNICO DE PROCEDIMIENTO PARA EL MANEJO DE CADAVERES DE CASOS DE COVID-19', 'fecha'=>'2020-10-15', 'tapa'=>'4.png','documentopdf'=>'04-Documento tecnico de procedimiento para el manejo de cadaveres de casos de COVID19.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'ESTATUTO DEL TRABAJADOR EN SALUD DS. Nº 28909', 'fecha'=>'2020-10-15', 'tapa'=>'5.png','documentopdf'=>'05-ESTATUTO DEL TRABAJADOR EN SALUD DS. N 28909.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'GUIA DE EVALUACION Y ACREDITACION DE ESTABLECIMIENTOS DE SALUD SEUNDO NIVEL DE ATENCIÓN', 'fecha'=>'2020-10-15', 'tapa'=>'6.png','documentopdf'=>'06-Guia Acreditacion 2do nivel de atencion.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 61', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'GUIA DE EVALUACION Y ACREDITACION DE ESTABLECIMIENTOS DE SALUD TERCER NIVEL DE ATENCIÓN', 'fecha'=>'2020-10-15', 'tapa'=>'7.png','documentopdf'=>'07-Guia Acreditacion 3er Nivel de Atencion.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 62', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'GUIA DE MANEJO DE REACCIONES ADVERSAS A FARMACOS DE PRIMERA LINEA', 'fecha'=>'2020-10-15', 'tapa'=>'8.png','documentopdf'=>'08-Guia de Manejo de Reacciones Adversas a farmacos de Primera Linea.pdf', 'edicion'=>'PRIMERA EDICION','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 2013', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'GUIA DE PROCEDIMIENTOS DE DESINFECCION PARA EL COVID 19', 'fecha'=>'2020-10-15', 'tapa'=>'9.png','documentopdf'=>'09-Guia de procedimientos de desinfeccion para el Covid 19.pdf', 'edicion'=>'','serie'=>'SISTEMA UNICO DE SALUD', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'GUIA DE TAMIZAJE DE CANCER DE CUELLO UTERINO DE MAMA', 'fecha'=>'2020-10-15', 'tapa'=>'10.png','documentopdf'=>'10-Guia de Tamizaje de Cancer cervicouterino y de mama.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 335', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2013',]);
Libro::create(['titulo'=>'GUIA DE TRATAMIENTO ANTIRRETROVIRAL EN ADULTOS', 'fecha'=>'2020-10-15', 'tapa'=>'11.png','documentopdf'=>'11-Guia de Tratamiento Antirretroviral en adultos.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 51', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2009',]);
Libro::create(['titulo'=>'GUIA DE TRATAMIENTO ANTIRRETROVIRAL EN NIÑOS', 'fecha'=>'2020-10-15', 'tapa'=>'12.png','documentopdf'=>'12-Guia de Tratamiento Antirretroviral en ninos.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 50', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2009',]);
Libro::create(['titulo'=>'GUIA NACIONAL PARA EL MANEJO DE LA INFECCION POR EL VIRUS ZIKA', 'fecha'=>'2020-10-15', 'tapa'=>'13.png','documentopdf'=>'13-Guia Nacional para el Manejo de la infeccion por el virus Zika.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 414', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2016',]);
Libro::create(['titulo'=>'GUIA NACIONAL PARA EL MANEJO DE LA ENFERMEDAD POR EL VIRUS DE LA CHIKUNGUNYA', 'fecha'=>'2020-10-15', 'tapa'=>'14.png','documentopdf'=>'14-Guia Nacional para el Manejo del Virus de la enfermedad de Chikungunya.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 377', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2015',]);
Libro::create(['titulo'=>'GUIA PARA EL MANEJO DEL COVID 19', 'fecha'=>'2020-10-15', 'tapa'=>'15.png','documentopdf'=>'15-Guia para el Manejo del COVID 19.pdf', 'edicion'=>'VERSION MAYO 2020 EN ACTUALIZACCION CONSTANTE','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2020',]);
Libro::create(['titulo'=>'GUIA PARA LA PREVENCION Y CONTROL DE LA TUBERCULOSIS DENTRO DE LOS ESTABLECIMIENTOS DE SALUD', 'fecha'=>'2020-10-15', 'tapa'=>'16.png','documentopdf'=>'16-Guia para la prevencion y control de la Tuberculosis dentro de los Establecimientos de Salud.pdf', 'edicion'=>'PRIMERA EDICION','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 231', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2012',]);
Libro::create(['titulo'=>'GUIA PARA LA VIGILANCIA CENTINELA DE LAS INFECCIONES RESPIRATURIAS AGUDAS GRAVES, IRAG PARTE 2', 'fecha'=>'2020-10-15', 'tapa'=>'17.png','documentopdf'=>'17-Guia para la Vigilancia Centinela de las Infecciones Respiratorias Agudas Graves IRAG - Segunda p.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 390', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2015',]);
Libro::create(['titulo'=>'GUIA PARA LA VIGILANCIA CENTINELA DE LAS INFECCIONES RESPIRATURIAS AGUDAS GRAVES, IRAG PARTE 1', 'fecha'=>'2020-10-15', 'tapa'=>'18.png','documentopdf'=>'18-Guia para la Vigilancia Centinela de las Infecciones Respiratorias Graves IRAG - Primera parte.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 390', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2015',]);
Libro::create(['titulo'=>'GUIA PARA EL MANEJO DE COINFECCION TB/VIH', 'fecha'=>'2020-10-15', 'tapa'=>'19.png','documentopdf'=>'19-Guia Practica de manejo de Coinfeccion TB-VIH.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 460', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2018',]);
Libro::create(['titulo'=>'GUIA PRACTICA DE MONITOREO Y EVALUACION DEL PROGRAMA NACIONAL DE CONTROL DE LA TUBERCULOSIS', 'fecha'=>'2020-10-15', 'tapa'=>'20.png','documentopdf'=>'20-Guia practica de Monitoreo y Evaluacion del Programa Nacional de Control de la Tuberculosis', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 363', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2014',]);
Libro::create(['titulo'=>'GUIA TECNICA DE MANEJO DE LA TUBERCULOSIS DROGORRESISTENTE', 'fecha'=>'2020-10-15', 'tapa'=>'21.png','documentopdf'=>'21-Guia Tecnica de manejo de la Tuberculosis Drogorresistente.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 474', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2019',]);
Libro::create(['titulo'=>'LEVANTAMIENTO EPIDEMIOLOGICO INDICE CEO Y CPO-D', 'fecha'=>'2020-10-15', 'tapa'=>'22.png','documentopdf'=>'22-levantamiento ORAL.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 049', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2017',]);
Libro::create(['titulo'=>'LEY 2027 DEL ESTATUTO DEL FUNCIONARIO PUBLICO DEL 27 DE OCTUBRE DE 1999', 'fecha'=>'2020-10-15', 'tapa'=>'23.png','documentopdf'=>'23-Ley_2027_Estatuto_Funcionario_Publico.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'LEY 3131 LEY DEL EJERCICIO PROFESIONAL MEDICO', 'fecha'=>'2020-10-15', 'tapa'=>'24.png','documentopdf'=>'24-Ley-3131-Ejercicio-Mdico.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'NORMAS NACIONALES DE ATENCION CLINICA', 'fecha'=>'2020-10-15', 'tapa'=>'25.png','documentopdf'=>'25-Libro NAC tomo 1.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 288', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2012',]);
Libro::create(['titulo'=>'LISTA NACIONAL DE MEDICAMENTOS ESENCIALES LINAME 2018-2020', 'fecha'=>'2020-10-15', 'tapa'=>'26.png','documentopdf'=>'26-Lista Nacional de Medicamentos LINAME 2018-2020.pdf', 'edicion'=>'REGULACION FARMACEUTICA N. 20','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 454', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2018',]);
Libro::create(['titulo'=>'NORMAS BOLIVIANAS DE DIAGNOSTICO Y TRATAMIENTO DE LA MALARIA', 'fecha'=>'2020-10-15', 'tapa'=>'27.png','documentopdf'=>'27-MALARIA.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 22', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'MANUAL DE EVALUACION Y ACREDITACION DE ESTABLECIMIENTOS DE SALUD PRIMER NIVEL DE ATENCION', 'fecha'=>'2020-10-15', 'tapa'=>'28.png','documentopdf'=>'28-Manual Acreditacion 1er Nivel de Atencion.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 57', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'ATENCION INTEGRADA AL CONTINUO DEL CURSO DE LA VIDA ADOLESCENTE - MUJER EN EDAD FERTIL - MUJER DURANTE EL EMBARAZO, PARTO Y PUERPERIO - RECIEN NADICO/A - NIÑO/A MENOR DE 5 AÑOS', 'fecha'=>'2020-10-15', 'tapa'=>'29.png','documentopdf'=>'29-Manual AIEPI Continuo de la Vida.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 240', 'lugarpublicacion'=>'BOLIVIA 2011',]);
Libro::create(['titulo'=>'MANUAL DE AUDITORIA Y NORMA TECNICA', 'fecha'=>'2020-10-15', 'tapa'=>'30.png','documentopdf'=>'30-Manual de Auditoria y Norma Tecnica.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 63', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'MANUAL DE NORMAS PARA EL DIAGNOSTICO Y TRATAMIENTO DE CHAGAS CONGENITO', 'fecha'=>'2020-10-15', 'tapa'=>'31.png','documentopdf'=>'31-Manual de Normas para el Diagnostico y Tratamiento del Chagas Congenito.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 219', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2011',]);
Libro::create(['titulo'=>'MANUAL DE NORMAS TECNICAS EN TUBERCULOSIS', 'fecha'=>'2020-10-15', 'tapa'=>'32.png','documentopdf'=>'32-Manual de Normas Tecnicas en Tuberculosis.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 449', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2017',]);
Libro::create(['titulo'=>'MANUAL DE NORMAS TECNICAS Y OPERATIVAS PARA EL TAMIZAJE, DIAGNOSTICO Y TRATAMIENTO DE LA ENFERMEDAD DE CHAGAS CRONICA RECIENTE INFANTIL', 'fecha'=>'2020-10-15', 'tapa'=>'33.png','documentopdf'=>'33-Manual de Normas Tecnicas y operativas para el tamizaje, diagnostico y tratamiento del Chagas cro.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 30', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2007',]);
Libro::create(['titulo'=>'MANUAL DE APLICACIÓN DE PRESTACIONES', 'fecha'=>'2020-10-15', 'tapa'=>'34.png','documentopdf'=>'34-Manual de prestaciones de la Ley 475.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 388', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2015',]);
Libro::create(['titulo'=>'MANUAL DE PROCESOS PARA LA DETECCION, DIAGNOSTICO, TRATAMIENTO Y SEGUIMIENTO DE ENFERMEDAD DE CHAGAS INFANTIL', 'fecha'=>'2020-10-15', 'tapa'=>'35.png','documentopdf'=>'35-Manual de Procesos para la deteccion, diagnostico, tratamiento y seguimiento de la enfermedad de .pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 31', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2007',]);
Libro::create(['titulo'=>'MANUAL DE NORMAS Y PROCEDIMIENTOS PARA LA PREVENCION Y CONTROL DEL ANTAVIRUS', 'fecha'=>'2020-10-15', 'tapa'=>'36.png','documentopdf'=>'36-Manual Hantavirus.pdf', 'edicion'=>'PRIMERA EDICION','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 102', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2009',]);
Libro::create(['titulo'=>'MANUAL TECNICO PROGRAMA AMPLIADO INMUNAZIÓN PAI FAMILIAR Y COMUNITARIA', 'fecha'=>'2020-10-15', 'tapa'=>'37.png','documentopdf'=>'37-Manual tecnico del PAI.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 356', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2016',]);
Libro::create(['titulo'=>'CARTILLA DE SALUD SEXUAL Y SALUD REPRODUCTIVA CONSENTIMIENTO INFORMADO Y METODOS ANTICONCEPTIVOS', 'fecha'=>'2020-10-15', 'tapa'=>'38.png','documentopdf'=>'38-Metodos Anticonceptivos.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2018',]);
Libro::create(['titulo'=>'NORMA NACIONAL DE PROFILAXIS PARA RABIA HUMANA Y ANIMALES DOMESTICOS', 'fecha'=>'2020-10-15', 'tapa'=>'39.png','documentopdf'=>'39-Norma Nacional de Profilaxis para Rabia Humana y animales domesticos.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 268', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2012',]);
Libro::create(['titulo'=>'NORMA NACIONAL DE REFERENCIA Y CONTRAREFERENCIA', 'fecha'=>'2020-10-15', 'tapa'=>'40.png','documentopdf'=>'40-Norma Nacional de Referencia y Contrareferencia.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 289', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2013',]);
Libro::create(['titulo'=>'MANUAL NACIONAL DE PROCEDIMIENTOS TECNICOS DE LEISHMANIASIS', 'fecha'=>'2020-10-15', 'tapa'=>'41.png','documentopdf'=>'41-Norma Nacional y Manual de Procedimientos Tecnicos de Leishmaniasis.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 364', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2015',]);
Libro::create(['titulo'=>'NORMA TECNICA ADMINISTRATIVA Y MANUAL DE APLICACIONES ODONTOLOGICAS', 'fecha'=>'2020-10-15', 'tapa'=>'42.png','documentopdf'=>'42-NORMA TECNICA  PNSO 2018 ULTIMO.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 434', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2017',]);
Libro::create(['titulo'=>'NORMA TENICA DE PROCEDIMIENTOS DE BIOSEGURIDAD PARA LA PREVENCION DEL CONTAGIO DE COVID-19', 'fecha'=>'2020-10-15', 'tapa'=>'43.png','documentopdf'=>'43-Norma Tecnica de procedimientos de Bioseguridad para la prevencion del contagio de Covid 19.pdf', 'edicion'=>'VERSION MAYO 2020','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>'', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2020',]);
Libro::create(['titulo'=>'NORMA TECNICA PARA EL MANEJO DEL EXPEDIENTE CLINICO', 'fecha'=>'2020-10-15', 'tapa'=>'44.png','documentopdf'=>'44-Norma Tecnica para el Manejo del Expediente Clinico.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 64', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'NORMAS DE DIAGNOSTICO Y MANEJO DEL DENGUE', 'fecha'=>'2020-10-15', 'tapa'=>'45.png','documentopdf'=>'45-Normas de diagnostico y manejo del Dengue.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'SANTA CRUZ - BOLIVIA 2009',]);
Libro::create(['titulo'=>'OBTENCION DEL CONSENTIMIENTO INFORMADO', 'fecha'=>'2020-10-15', 'tapa'=>'46.png','documentopdf'=>'46-Obtncion del Consentimiento Informado.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 65', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2008',]);
Libro::create(['titulo'=>'PLAN DE MONITOREO Y EVALUACION DEL PROGRAMA NACIONAL DE CONTROL DE LA TUBERCULOSIS', 'fecha'=>'2020-10-15', 'tapa'=>'47.png','documentopdf'=>'47-Plan de Monitoreo y Evaluacion del Programa de Control de la Tuberculosis.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 362', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2014',]);
Libro::create(['titulo'=>'PLAN NACIONAL DE CONTROL DE LA TUBERCULOSIS EN BOLIVIA 2016 - 2020', 'fecha'=>'2020-10-15', 'tapa'=>'48.png','documentopdf'=>'48-Plan Nacional de Control de la Tuberculosis en Bolivia 2016-2020.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 424', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2017',]);
Libro::create(['titulo'=>'PROTOCOLO BASICO AISLAMIENTO DEL PACIENTE CASOS SOSPECHOSOS DE COVID-19', 'fecha'=>'2020-10-15', 'tapa'=>'49.png','documentopdf'=>'49-Protocolo Basico de Aislamiento del paciente casos sospechosos de Covid 19.pdf', 'edicion'=>'','serie'=>'', 'nropublicacion'=>'', 'lugarpublicacion'=>'',]);
Libro::create(['titulo'=>'PROTOCOLO PARA EL DIAGNOSTICO POR LABORATORIO DE COVID-19 EN EL MARCO DE LA EMERGENCIA SANITARIA', 'fecha'=>'2020-10-15', 'tapa'=>'50.png','documentopdf'=>'50-Protocolo para el Diagnostico por laboratorio de Covid 19 en el marco de la emergencia sanitaria.pdf', 'edicion'=>'VERSION MAYO 2020','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>'', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2020',]);
Libro::create(['titulo'=>'PROTOCOLO PARA EL MANEJO DE LA MUJER EMBARAZADA Y COVID-19', 'fecha'=>'2020-10-15', 'tapa'=>'51.png','documentopdf'=>'51-Protocolo para el manejo de la mujer embarazada y Coronavirus (Covid 19).pdf', 'edicion'=>'VERSION MAYO 2020','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>'', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2020',]);
Libro::create(['titulo'=>'PROTOCOLO MANEJO DE LAS REACCIONES ADVERSAS POR TRATAMIENTO ETIOLOGICO DE LA EMFERMEDAD DE CHAGAS', 'fecha'=>'2020-10-15', 'tapa'=>'52.png','documentopdf'=>'52-Protocolo para el Manejo de Reacciones Adversas por tratamiento etiologico de la enfermedad de Ch.pdf', 'edicion'=>'','serie'=>'SERIE DOCUMENTOS TECNICOS - NORMATIVOS', 'nropublicacion'=>' 32', 'lugarpublicacion'=>'LA PAZ - BOLIVIA 2007',]);


    }
}
