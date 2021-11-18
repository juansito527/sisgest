@extends('layouts.master')
<link rel="stylesheet" href="{{asset('css/evaluationStyles.css')}}">
@section('title','Evaluacion')
@section('nav')
@endsection
@section('clasenav')
class=" w-full z-30 top-0 text-white bg-white"
@endsection
@section('content')

<div class="grid grid-cols-8 ">
    {{-- titulo e imagen --}}
    <div class="col-span-7 md:col-span-3 m-10 ">
        <img src="{{asset('img/imagenes-evaluacion/img2.svg')}}" alt="">
    </div>

    <div class="col-span-8 md:col-span-5 m-auto  ">
        <div class="w-10/12 m-auto">
            <h1 class="text-6xl font-bold">Test evaluativo</h1>
            <p class="text-justify mt-5">A continuacion resolveras el siguiente test teniendo en cuenta cada uno de los
                aspectos vistos en la empesa "nombre empresa"
                porfavor responder cada una de las preguntas
            </p>
        </div>
    </div>

    {{-- fin titulo e imagen --}}

    {{-- TODO EL CUESTIONARIO --}}
    <div class="col-span-8 mb-5 md:col-span-6 md:col-start-2 lg:col-end-8 mt-5 m-auto w-full text-center shadow-2xl" id="scPlaneacion">
        {{-- tiulo antes del cuestionario --}}
        <label class="border-b text-4xl font-bold">RESOLUCIÓN 0312 DE 2019</label>
        <p class="my-2 font-bold ">ESTÁNDARES MÍNIMOS DEL SISTEMA DE GESTIÓN DE LA SEGURIDAD Y SALUD PARA EMPLEADORES Y
            CONTRATANTES.</p>
        {{-- FIN tiulo antes del cuestionario --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Descripción sociodemográfica y Diagnóstico de las condiciones de
                        salud de los trabajadores</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Recolectar la siguiente información actualizada de todos los trabajadores del último año: 
                        la descripción socio demográfica de los trabajadores (edad, sexo, escolaridad, estado civil) y el diagnóstico de condiciones 
                        de salud que incluya la caracterización de sus condiciones de salud, la evaluación y análisis de las estadísticas sobre la salud de los trabajadores tanto de origen laboral como común y los resultados de las evaluaciones médicas ocupacionales.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento consolidado con la información socio demográfica acorde con lo requerido en el criterio y el diagnóstico de condiciones de salud.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(2);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Actividades de medicina del trabajo y de prevención y promoción de la Salud. </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Desarrollar las actividades de medicina del trabajo, prevención y promoción de la salud y programas de vigilancia epidemiológica requeridos, de conformidad con las prioridades identificadas en el diagnóstico de condiciones de salud y con los peligros/riesgos prioritarios.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar las evidencias que constaten la definición y ejecución de las actividades de medicina del trabajo, promoción y prevención y los programas de vigilancia epidemiológica, de conformidad con las prioridades que se identificaron con base en los resultados del diagnóstico de las condiciones de salud y los peligros/riesgos de intervención prioritarios.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(1);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(3);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Perfiles de cargos </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Informar al médico que realiza las evaluaciones ocupacionales los perfiles de cargos con una descripción de las tareas y el medio en el cual se desarrollará la labor respectiva.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Verificar que se le remitieron al médico que realiza las evaluaciones ocupacionales, los soportes documentales respecto de los perfiles de cargos, descripción de las tareas y el medio en el cual desarrollaran la labor los trabajadores.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(2);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(4);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.4</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Evaluaciones médicas ocupacionales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar las evaluaciones médicas de acuerdo con la normatividad y los peligros/riesgos a los cuales se encuentre expuesto el trabajador.
                        Definir la frecuencia de las evaluaciones médicas ocupacionales periódicas según tipo, magnitud, frecuencia de exposición a cada peligro, el estado de salud del trabajador, las recomendaciones de los sistemas de vigilancia epidemiológica y la legislación vigente.
                        Comunicar por escrito al trabajador los resultados de las evaluaciones médicas ocupacionales los cuales reposarán en su historia médica.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los conceptos de aptitud que demuestren la realización de las evaluaciones médicas.

                        Solicitar el documento o registro que evidencie la definición de la frecuencia de las evaluaciones médicas periódicas.
                        
                        Solicitar el documento que evidencie la comunicación por escrito al trabajador de los resultados de las evaluaciones médicas ocupacionales.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(3);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(5);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.5</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Custodia de las historias clínicas</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Tener la custodia de las historias clínicas a cargo de una institución prestadora de servicios en SST o del médico que practica las evaluaciones médicas ocupacionales.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Evidenciar los soportes que demuestren que la custodia de las historias clínicas esté a cargo de una institución prestadora de servicios en SST o del médico que practica las evaluaciones médicas ocupacionales.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(4);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(6);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.6</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Restricciones y recomendaciones médico laborales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Cumplir las restricciones y recomendaciones médico laborales realizadas por parte de la Empresa Promotora de Salud (EPS) o Administradora de Riesgos Laborales (ARL) prescritas a los trabajadores para la realización de sus funciones.
                        Adecuar el puesto de trabajo, reubicar al trabajador o realizar la readaptación laboral cuando se requiera.                       
                        Entregar a quienes califican en primera oportunidad y/o a las Juntas de Calificación de Invalidez los documentos que son responsabilidad del empleador conforme a las normas, para la calificación de origen y pérdida de la capacidad laboral.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar documento de recomendaciones y restricciones médico laborales a trabajadores y constatar las evidencias de que la empresa las ha acatado ha realizado las acciones que se requieran en materia de reubicación o readaptación.
                        Solicitar soporte de recibido por parte de quienes califican en primera oportunidad y/o a las Juntas de Calificación de Invalidez, de los documentos que corresponde remitir al empleador para efectos del proceso de calificación de origen y pérdida de capacidad laboral.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(5);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(7);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.7</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Estilos de vida y entorno saludable </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Elaborar y ejecutar un programa para promover entre los trabajadores, estilos de vida y entornos de trabajo saludable, incluyendo campañas específicas tendientes a la prevención y el control de la fármaco dependencia, el alcoholismo y el tabaquismo, entre otros.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el programa respectivo y los documentos y registros que evidencien el cumplimiento del mismo.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(6);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(8);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.8</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Servicios de higiene </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Contar con un suministro permanente de agua potable, servicios sanitarios y mecanismos para disponer excretas y basuras.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Verificar mediante observación directa si se cumple lo exigido en el criterio, dejando soporte fílmico o fotográfico al respecto</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(7);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(9);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.1.9</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Manejo de Residuos </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Eliminar los residuos sólidos, líquidos o gaseosos que se producen, así como los residuos peligrosos, de forma que no se ponga en riesgo a los trabajadores.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Constatar mediante observación directa, las evidencias donde se dé cuenta de los procesos de eliminación de residuos conforme al criterio.
                        Solicitar contrato de empresa que elimina y dispone de los residuos peligrosos cuando se requiera dicha disposición.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(8);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(10);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Registro, reporte e investigación de las enfermedades laborales, los incidentes y accidentes del trabajo <label class="text-indigo-600">(5%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.2.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Reporte de accidentes de trabajo y enfermedades laborales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Reportar a la Administradora de Riesgos Laborales (ARL) y a la Entidad Promotora de Salud (EPS) todos los accidentes de trabajo y las enfermedades laborales diagnosticadas.
                        Reportar a la Dirección Territorial del Ministerio del Trabajo que corresponda los accidentes graves y mortales, así como las enfermedades diagnosticadas como laborales.                    
                        Estos reportes se realizan dentro de los dos (2) días hábiles siguientes al evento o recibo del diagnóstico de la enfermedad.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Indagar con los trabajadores si se han presentado accidentes de trabajo o enfermedades 
                        laborales (en caso afirmativo, tomar los datos de nombre y número de cedula y solicitar el reporte). Igualmente, realizar un muestreo del reporte 
                        de registro de accidente de trabajo (FURAT) y el registro de enfermedades laborales (FUREL) respectivo, verificando si el reporte a las Administradoras 
                        de Riesgos Laborales, Empresas Promotoras de Salud y Dirección Territorial se hizo dentro de los dos (2) días hábiles siguientes al evento o recibo del 
                        diagnóstico de la enfermedad.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(9);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(11);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.2.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Investigación de incidentes, accidentes de trabajo y las enfermedades cuando sean diagnosticadas como laborales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Investigar los incidentes, y todos los accidentes de trabajo y las enfermedades cuando sean diagnosticadas como laborales, con la participación del COPASST, 
                        determinando las causas básicas e inmediatas y la posibilidad de que se presenten nuevos casos.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">CVerificar por medio de un muestreo si se investigan los incidentes, accidentes de trabajo y las enfermedades laborales con la participación del COPASST, y si se definieron acciones para otros trabajadores potencialmente expuestos.
                        Constatar que las investigaciones se hayan realizado dentro de los quince (15) días siguientes a su ocurrencia a través del equipo investigador y evidenciar que se hayan remitido los informes de las investigaciones de accidente de trabajo grave o mortal o de enfermedad laboral mortal.                    
                        En caso de accidente grave o se produzca la muerte, verificar la participación de un profesional con licencia en Seguridad y Salud en el Trabajo en la investigación (propio o contratado), así como del Comité Paritario de SST.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(10);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(12);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Condiciones de salud en el trabajo  <label class="text-indigo-600">(9%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.2.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Registro y análisis estadístico de accidentes de trabajo y enfermedades laborales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Llevar registro estadístico de los accidentes de trabajo que ocurren así como de las enfermedades laborales que se presentan; se analiza este registro y las conclusiones derivadas del estudio son usadas para el mejoramiento del Sistema de Gestión de SST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el registro estadístico actualizado de lo corrido del año y el año inmediatamente anterior al de la visita, así como la evidencia que contiene el análisis y las conclusiones 
                        derivadas del estudio que son usadas para el mejoramiento del Sistema de Gestión de SST.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(11);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(13);">Continuar</button></div>
            </div>
        </form>


        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Mecanismos de vigilancia de las condiciones de salud de los trabajadores <label class="text-indigo-600">(6%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.3.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Frecuencia de accidentalidad </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Medir la frecuencia de los accidentes como mínimo una (1) vez al mes y realizar la clasificación del origen del peligro/riesgo que los generó 
                        (físicos, de químicos, biológicos, seguridad, públicos, psicosociales, entre otros.).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los resultados de la medición para lo corrido del año y/o el año inmediatamente anterior y constatar el comportamiento de la
                         frecuencia de los accidentes y la relación del evento con los peligros/riesgos identificados.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(12);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(14);">Continuar</button></div>
            </div>
        </form>
        
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Mecanismos de vigilancia de las condiciones de salud de los trabajadores <label class="text-indigo-600">(6%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.3.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Severidad de accidentalidad </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Medir la severidad de los accidentes de trabajo como mínimo una (1) vez al mes y realizar la clasificación del origen del peligro/riesgo que los generó (físicos, químicos, biológicos, de seguridad, públicos, psicosociales, entre otros).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los resultados de la medición para lo corrido del año y/o el año inmediatamente anterior y constatar el comportamiento de la severidad y la relación del evento con los peligros/riesgos identificados.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(13);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(15);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Mecanismos de vigilancia de las condiciones de salud de los trabajadores <label class="text-indigo-600">(6%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.3.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Proporción de accidentes de trabajo mortales </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Medir la mortalidad por accidentes como mínimo una (1) vez al año y realizar la clasificación del origen del peligro/riesgo que los generó 
                        (físicos, químicos, biológicos, de seguridad, públicos, psicosociales, entre otros).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los resultados de la medición para lo corrido del año y/o el año inmediatamente anterior y constatar el comportamiento de la mortalidad y la relación del evento con los peligros/riesgos identificados.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(14);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(16);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Mecanismos de vigilancia de las condiciones de salud de los trabajadores <label class="text-indigo-600">(6%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.3.4</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Prevalencia de la enfermedad laboral</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Medir la prevalencia de la enfermedad laboral como mínimo una (1) vez al año y realizar la clasificación del origen del peligro/riesgo que la generó (físico, químico, biológico, ergonómico o biomecánico, psicosocial, entre otros).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los resultados de la medición para lo corrido del año 
                        y/o el año inmediatamente anterior y constatar el comportamiento de la prevalencia de las enfermedades laborales y la relación del evento con los peligros/riesgos identificados.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(15);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(17);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Mecanismos de vigilancia de las condiciones de salud de los trabajadores <label class="text-indigo-600">(6%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.3.5</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Incidencia de la enfermedad laboral </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Medir la incidencia de la enfermedad laboral como mínimo una (1) vez al año y realizar la clasificación del 
                        origen del peligro/riesgo que la generó (físicos, químicos, biológicos, ergonómicos o biomecánicos, psicosociales, entre otros).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los resultados de la medición para lo corrido del año y/o el año inmediatamente 
                        anterior y constatar el comportamiento de la incidencia de las enfermedades laborales y la relación del evento con los peligros/riesgos identificados.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(16);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(18);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE LA SALUD <label class="text-indigo-600">(20%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Mecanismos de vigilancia de las condiciones de salud de los trabajadores <label class="text-indigo-600">(6%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>3.3.6</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Ausentismo por causa médica </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Medir el ausentismo por incapacidad de origen laboral y común, como mínimo una (1) vez al mes y realizar la clasificación del origen 
                        del peligro/riesgo que lo generó (físicos, ergonómicos, o biomecánicos, químicos, de seguridad, públicos, psicosociales, entre otros).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los resultados de la medición para lo corrido del año y/o el año inmediatamente anterior y constatar el comportamiento del ausentismo y la relación del 
                        evento con los peligros/riesgos.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(1.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(17);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(19);">Continuar</button></div>
            </div>
        </form>
        
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Identificación de peligros, evaluación y valoración de los riesgos  <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.1.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Metodología para identificación de peligros, evaluación y valoración de riesgos</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Definir y aplicar una metodología para la identificación de peligros y evaluación y valoración de los riesgos de origen físico, ergonómico o biomecánico, biológico, químico, de seguridad, público, psicosocial, entre otros, con alcance sobre todos los procesos, actividades rutinarias y no rutinarias, maquinaria y 
                        equipos en todos los centros de trabajo y respecto de todos los trabajadores independientemente de su forma de vinculación y/o contratación.
                        Identificar con base en la valoración de los riesgos, aquellos que son prioritarios.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento que contiene la metodología.

                        Verificar que se realiza la identificación de peligros, evaluación y valoración de los riesgos conforme a la metodología definida de acuerdo con el criterio y con la participación de los trabajadores, seleccionando de manera aleatoria algunas de las actividades identificadas.
                        
                        Confrontar mediante observación directa durante el recorrido a las instalaciones de la empresa la identificación de peligros..</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(4.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(18);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(20);">Continuar</button></div>
            </div>
        </form>
        
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Identificación de peligros, evaluación y valoración de los riesgos  <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.1.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Identificación de peligros y evaluación y valoración de riesgos con participación de todos los niveles de la empresa</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar la identificación de peligros y evaluación y valoración de los riesgos con participación de los trabajadores de todos los niveles de la empresa y actualizarla como mínimo una (1) vez al año y cada vez que ocurra un accidente de trabajo mortal o un evento catastrófico en la empresa o cuando se presenten cambios en los procesos, en las instalaciones, o maquinaria o equipos.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar las evidencias que den cuenta de la participación de los trabajadores en la identificación de peligros, evaluación y valoración de los riesgos, así como de la realización dicha identificación con la periodicidad señalada en el criterio.

                        Solicitar información acerca de si ha habido eventos mortales o catastróficos y validar que el peligro asociado al evento este identificado, evaluado y valorado.
                        
                        En los casos que se encuentren valoraciones de riesgo no tolerable, verificar la implementación inmediata de las acciones de intervención y control.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(4.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(19);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(21);">Continuar</button></div>
            </div>
        </form>
        
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Identificación de peligros, evaluación y valoración de los riesgos  <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.1.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Identificación de sustancias catalogadas como carcinógenas o con toxicidad aguda</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">En las empresas donde se procese, manipule o trabaje con sustancias o agentes catalogadas como carcinógenas o con toxicidad aguda, causantes de enfermedades, incluidas en la tabla de enfermedades laborales, priorizar los riesgos asociados a las mismas y realizar acciones de prevención e intervención al respecto.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Revisar la lista de materias primas e insumos, productos intermedios o finales, subproductos y desechos y verificar si estas son o están compuestas por agentes o sustancias catalogadas como carcinógenas en el grupo 1 de la clasificación de la Agencia Internacional de Investigación sobre el Cáncer (International Agency for Research on Cancer, IARC) y con toxicidad aguda según los criterios del Sistema Globalmente Armonizado (categorías I y II).

                        Se debe verificar que los riesgos asociados a estas sustancias o agentes carcinógenos o con toxicidad aguda son priorizados y se realizan acciones de prevención e intervención.
                        
                        Así mismo se debe verificar la existencia de áreas destinadas para el almacenamiento de las materias primas e insumos y sustancias catalogadas como carcinógenas y con toxicidad aguda</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(3.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(20);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(22);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Identificación de peligros, evaluación y valoración de los riesgos  <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.1.4</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Mediciones ambientales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar mediciones ambientales de los riesgos prioritarios, provenientes de peligros químicos, físicos y/o biológicos.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Verificar los soportes documentales de las mediciones ambientales realizadas y la remisión de estos resultados al Comité Paritario de Seguridad y Salud en el Trabajo</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(4.0%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(21);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(23);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Medidas de prevención y control para intervenir los peligros/riesgos <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.2.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Mediciones ambientales</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar mediciones ambientales de los riesgos prioritarios, provenientes de peligros químicos, físicos y/o biológicos.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Verificar los soportes documentales de las mediciones ambientales realizadas y la remisión de estos resultados al Comité Paritario de Seguridad y Salud en el Trabajo</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(21);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(23);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Medidas de prevención y control para intervenir los peligros/riesgos <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.2.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Aplicación de medidas de prevención y control por parte de los trabajadores</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Verificar la aplicación por parte de los trabajadores de las medidas de prevención y control de los peligros/riesgos (físicos, ergonómicos, biológicos, químicos, de seguridad, públicos, psicosociales, entre otros).</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los soportes documentales implementados por la empresa donde se verifica el cumplimiento de las responsabilidades de los trabajadores frente a la aplicación de las medidas de prevención y control de los peligros/riesgos (físicos, ergonómicos, biológicos, químicos, de seguridad, públicos, psicosociales, entre otros).
                        Realizar visita a las instalaciones para verificar el cumplimiento de las medias de prevención y control por parte de los trabajadores.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(22);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(24);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Medidas de prevención y control para intervenir los peligros/riesgos <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.2.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Procedimientos e instructivos internos de seguridad y salud en el trabajo</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Elaborar procedimientos, instructivos y fichas técnicas de seguridad y salud en el trabajo cuando se requiera y entregarlos a los trabajadores.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los procedimientos, instructivos, fichas técnicas cuando aplique y protocolos de SST y el soporte de entrega de los mismos a los trabajadores</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(23);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(25);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Medidas de prevención y control para intervenir los peligros/riesgos <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.2.4</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Inspecciones a instalaciones, maquinaria o equipos</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Elaborar formatos de registro para la realización de las visitas de inspección.

                        Realizar las visitas de inspección sistemática a las instalaciones, maquinaria o equipos, incluidos los relacionados con la prevención y atención de emergencias; con la participación del COPASST.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los formatos de registro de visitas de inspección elaborados.

                        Solicitar la evidencia de las visitas de inspección realizadas a las instalaciones, maquinaria y equipos, incluidos los relacionados con la prevención y atención de emergencias y verificar la participación del COPASST en las mismas.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(24);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(26);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Medidas de prevención y control para intervenir los peligros/riesgos <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.2.5</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Mantenimiento periódico de las instalaciones, equipos, máquinas y herramientas</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar el mantenimiento periódico de las instalaciones, equipos, máquinas y herramientas, de acuerdo con los informes de las visitas de inspección o reportes de condiciones inseguras y los manuales y/o las fichas técnicas de los mismos.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar la evidencia del mantenimiento preventivo y/o correctivo en las instalaciones, equipos, máquinas y herramientas de acuerdo con los manuales de uso de estos y los informes de las visitas de inspección o reportes de condiciones inseguras.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(25);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(27);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTION DE LOS PELIGROS Y RIESGOS <label class="text-indigo-600">(30%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo"> Medidas de prevención y control para intervenir los peligros/riesgos <label class="text-indigo-600">(15%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>4.2.6</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Entrega de los elementos de protección personal – EPP  y capacitación en uso adecuado</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Suministrar a los trabajadores los elementos de protección personal que se requieran y reponerlos oportunamente, conforme al desgaste y condiciones de uso de los mismos.

                        Verificar que los contratistas y subcontratistas entregan los elementos de protección personal que se requiera a sus trabajadores y realizan la reposición de los mismos oportunamente, conforme al desgaste y condiciones de uso.
                        
                        Realizar la capacitación para el uso de los elementos de protección personal.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los soportes que evidencien la entrega y reposición de los elementos de protección personal a los trabajadores.

                        Verificar los soportes del cumplimiento del criterio por parte de los contratistas y subcontratistas.
                        
                        Verificar los soportes que evidencian la realización de la capacitación en el uso de los elementos de protección personal.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(2.5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(26);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(28);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE AMENAZAS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Plan de prevencion, preparacion y respuestas ante emergencias <label class="text-indigo-600">(10%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>5.1.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Plan de prevención, preparación y respuesta ante emergencias</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Elaborar un plan de prevención, preparación y respuesta ante emergencias que identifique las amenazas, evalúe y analice la vulnerabilidad.

                        Como mínimo el plan debe incluir: planos de las instalaciones que identifican áreas y salidas de emergencia, así como la señalización, realización de simulacros como mínimo una (1) vez al año.
                        
                        El plan debe tener en cuenta todas las jornadas de trabajo en todos los centros de trabajo y debe ser divulgado</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el plan de prevención, preparación y respuesta ante emergencias y constatar evidencias de su divulgación.

                        Verificar si existen los planos de las instalaciones que identifican áreas y salidas de emergencia y verificar si existe la debida señalización de la empresa.
                        
                        Verificar los soportes que evidencien la realización de los simulacros y análisis de los mismos y validar que las recomendaciones emitidas con base en dicho análisis hayan sido tenidas en cuenta en el mejoramiento del plan de emergencias.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(27);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(29);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">II. HACER</label></p><br>
                <label class="font-medium italic">GESTIÓN DE AMENAZAS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Plan de prevencion, preparacion y respuestas ante emergencias <label class="text-indigo-600">(10%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>5.1.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Brigada de prevención, preparación y respuesta ante emergencias</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Conformar, capacitar y dotar la brigada de prevención, preparación y respuesta ante emergencias (primeros auxilios, contra incendios, evacuación, etc.), según las necesidades y el tamaño de la empresa</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento de conformación de la brigada de prevención, preparación y respuesta ante emergencias y verificar los soportes de la capacitación y entrega de la dotación.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(5%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300"></label><br>
                                    <input type="radio" class="m-2 ml-4">No aplica<br>
                                </div>   
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class="mt-4"><label
                                class="font-bold text-justify text-indigo-600">Evidencias/Observaciones</label></p>
                                
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify mb-2">
                        </textarea>
                        <div class="mt-2">
                            <input type="file" class="text-center ">
                        </div>
                        
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Plan de Acción
                                (Actividades)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600"> Fecha (Plazo de
                                Cumplimiento)</label></p>
                        <input type="date" class="text-center m-2">
                    </div>
                    <div class="col-span-3 lg:col-span-1 ">
                        <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Recursos
                            (Administrativos y Financieros)</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                    <div class="col-span-3 lg:col-span-1  ">
                        <p class=""><label class="font-bold text-justify text-indigo-600">Fundamentos y soportes de la efectividad de las acciones y actividades</label></p>
                        <textarea name="" id="" cols="20" rows="5"
                            class="border border-gray-400 m-2 rounded text-justify">
                        </textarea>
                    </div>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
            </div>
            <div class="col-span-4 grid grid-cols-4 mb-5 m-auto">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(27);">Volver</button></div>
                <div class="col-span-2"><a href="{{route('verificar')}}"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 ">Continuar</button></a></div>
            </div>
        </form>
        

         </div>

</div>
@endsection
@section('scripts')
    
@endsection