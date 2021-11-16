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
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Asignacion de una persona que diseñe e implemente el Sistema de Gestion
                        de SST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Asignar una persona que cumpla conel siguiente perfil:
                        El diseño e implementacion del Sistema de Gestion de SST Podra ser realizado
                        por profesionales en SST, profesionales con posgrado en SST que cuenten con licencia en
                        Seguridad y Salud en el Trabajo vigente y el curso de capacitacion virtual de cincuenta (50) horas.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento en el que consta la asignacion, con la
                        respectiva
                        determinacion de responsabilidaes y constatar la hoja de vida con soportes de la persona
                        asignada.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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

                <div class="col-span-4"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(2);">Continuar</button></div>
            </div>
        </form>

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Asignacion  de responsabiilidades en SST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Asignar y documentar las responsabilidades específicas en el Sistema de Gestión SST a todos los niveles de la organización, para el desarrollo y mejora continua de dicho Sistema.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el soporte que contenga la asignación de las responsabilidades en SST.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(1);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot" onclick="currentSlide(3);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Asignación de recursos para el Sistema de Gestión en SST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Definir y asignar el talento humano, los recursos financieros, técnicos y tecnológicos, requeridos para la implementación, mantenimiento y continuidad del Sistema de Gestión de SST.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Constatar la existencia de evidencias físicas que demuestren la definición y asignación del talento humano, los recursos financieros, técnicos y de otra índole para la implementación, mantenimiento y continuidad del Sistema de Gestión de SST, evidenciando la asignación de recursos con base en el plan de trabajo anual</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(2);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700"onclick="currentSlide(4);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.4</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Afiliación al Sistema de Seguridad Social Integral</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-2 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Garantizar que todos los trabajadores, independientemente de su forma de vinculación o contratación están afiliados al Sistema de Seguridad Social en Salud, Pensión y Riesgos Laborales.</p>
                </div>
                <div class="col-span-4 md:col-span-4 lg:col-span-4 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar una lista de los trabajadores vinculados laboralmente a la fecha y comparar con la planilla de pago de aportes a la seguridad social de los cuatro (4) meses anteriores a la fecha de verificación.
                        Realizar el siguiente muestreo:
                        
                        En empresas entre cincuenta y uno (51) y doscientos (200) trabajadores verificar el 10%.
                        
                        Mayores a doscientos un (201) trabajadores verificar el registro de 30 trabajadores.
                        Solicitar una lista de los trabajadores vinculados por prestación de servicios a la fecha y comparar con la última planilla de pago de aportes a la seguridad social suministrada por los contratistas.
                        
                        Tomar: Entre cincuenta y un (51) y doscientos (200) trabajadores verificar el 10%.
                        
                        Mayores a doscientos un (201) trabajadores verificar el registro de 30 trabajadores.
                        
                        De la muestra seleccionada verificar la afiliación al Sistema General de Seguridad Social.
                        
                        En los casos excepcionales de trabajadores independientes que se afilien a través de agremiaciones verificar que corresponda a una agremiación autorizada por el Ministerio de Salud y Protección Social, conforme al listado publicado en la página Web del Ministerio del Trabajo o del Ministerio de Salud y Protección Social.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(3);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700"onclick="currentSlide(5);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.5</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Identificación de trabajadores que se dediquen en forma permanente a actividades de alto riesgo y cotización de pensión especial </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">En el caso que aplique, identificar a los trabajadores que se dediquen en forma permanente al ejercicio de las actividades de alto riesgo establecidas en el Decreto 2090 de 2003 o de las normas que lo adicionen, modifiquen o complementen y cotizar el monto establecido en la norma, al Sistema de Pensiones.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">En los casos en que aplique, verificar si se tienen identificados los trabajadores que se dedican en forma permanente al ejercicio de las actividades de alto riesgo de que trata el Decreto 2090 de 2003 y si se ha realizado el pago de la cotización especial señalado en dicha norma. </p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(4);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700"onclick="currentSlide(6);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.6</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Conformación y funcionamiento del COPASST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Conformar y garantizar el funcionamiento del 
                        Comité Paritario de Seguridad y Salud en el Trabajo - COPASST.
                        </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los soportes de la convocatoria, elección, conformación del Comité Paritario de Seguridad y Salud en el Trabajo y el acta de constitución.

                        Constatar si es igual el número de representantes del empleador y de los trabajadores y revisar si el acta de conformación se encuentra vigente.
                        
                        Solicitar las actas de reunión mensuales del último año del Comité Paritario y verificar el cumplimiento de sus funciones.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(5);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700"onclick="currentSlide(7);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.7</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Capacitación de los integrantes del COPASST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Capacitar a lo integrantes del COPASST para el cumplimiento efectivo de las responsabilidades que les asigna la ley. </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar documentos que evidencien las actividades de capacitación brindada a los integrantes del COPASST.</p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(6);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(8);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Recursos financieros, técnicos humanos y de otra índole requeridos
                    para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) <label class="text-indigo-600">(4 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.8</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Conformación y funcionamiento del Comité de Convivencia Laboral</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Conformar y garantizar el funcionamiento del Comité de Convivencia Laboral de acuerdo con la normatividad vigente.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento de conformación del Comité de Convivencia Laboral y verificar que esté integrado de acuerdo a la normativa y que se encuentra vigente.

                        Solicitar las actas de las reuniones (como mínimo una reunión cada tres (3) meses) y los informes de Gestión del Comité de Convivencia Laboral, verificando el desarrollo de sus funciones.
                        </p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1   ">
                        <p class="mt-5"><label class="font-bold text-center text-indigo-600">Selecciona porfavor la
                                calificacion</label></p>
                                <div class="text-center mt-5">
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.5%)</label><br>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(7);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(9);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Capacitación en el Sistema de Gestión de Seguridad y Salud en el Trabajo <label class="text-indigo-600">(6 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.2.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Conformación y funcionamiento del Comité de Convivencia Laboral</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Conformar y garantizar el funcionamiento del Comité de Convivencia Laboral de acuerdo con la normatividad vigente.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento de conformación del Comité de Convivencia Laboral y verificar que esté integrado de acuerdo a la normativa y que se encuentra vigente.

                        Solicitar las actas de las reuniones (como mínimo una reunión cada tres (3) meses) y los informes de Gestión del Comité de Convivencia Laboral, verificando el desarrollo de sus funciones.
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(8);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(10);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Capacitación en el Sistema de Gestión de Seguridad y Salud en el Trabajo <label class="text-indigo-600">(6 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.2.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Inducción y reinducción en SST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar actividades de inducción y reinducción, las cuales deben estar incluidas en el programa de capacitación, dirigidas a todos los trabajadores, independientemente de su 
                        forma de vinculación y/o contratación, de manera previa al inicio de sus labores, en aspectos generales y específicos de las actividades o funciones a realizar que incluya entre otros, la identificación de peligros 
                        y control de los riesgos en su trabajo y la prevención de accidentes de trabajo y enfermedades laborales.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar la lista de trabajadores, participantes independientemente de su forma de vinculación y/o contratación, y verificar los soportes documentales que den cuenta de la inducción y reinducción de conformidad con el criterio. 
                        La referencia es el programa de capacitación y su cumplimento.
                        Para realizar la verificación tener en cuenta:
                        
                        En empresas entre cincuenta y uno (51) y doscientos (200) trabajadores, verificar el 10%.
                        
                        Solicitar la lista de trabajadores, participantes independientemente de su forma de vinculación y/o contratación, y verificar los soportes documentales que den cuenta de la inducción y reinducción de conformidad con el criterio. La referencia es el programa de capacitación y su cumplimento.
                        
                        Para realizar la verificación tener en cuenta:
                        
                        En empresas entre cincuenta y uno (51) y doscientos (200) trabajadores, verificar el 10%.
                        
                        En empresas con doscientos uno (201) trabajadores en adelante, verificar los soportes para 30 trabajadores.
                        
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(9);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(11);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Capacitación en el Sistema de Gestión de Seguridad y Salud en el Trabajo <label class="text-indigo-600">(6 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.2.3</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Curso Virtual de capacitación de cincuenta (50) horas en SST. </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">El responsable del Sistema de Gestión de SST realiza el curso de capacitación virtual de cincuenta (50) horas en SST definido por 
                        el Ministerio del Trabajo.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el certificado de aprobación del curso de capacitación virtual de cincuenta (50) horas en SST definido 
                        por el Ministerio del Trabajo, expedido a nombre del responsable del Sistema de Gestión de Seguridad y Salud en el Trabajo
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(10);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(12);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}


        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">GESTIÓN INTEGRAL DEL SISTEMA DE LA SEGURIDAD Y SALUD EN EL TRABAJO <label class="text-indigo-600">(15%)</label>
                </p>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Política de Seguridad y Salud en el Trabajo  <label class="text-indigo-600">(1 %)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.1.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Política de Seguridad  y Salud en el Trabajo. </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Establecer por escrito la Política de Seguridad y Salud en el Trabajo y comunicarla al Comité Paritario de Seguridad y Salud en el Trabajo - COPASST.

                        La Política debe ser fechada y firmada por el representante legal y expresa el compromiso de la alta dirección, el alcance sobre todos los centros de trabajo y todos sus trabajadores independientemente de su forma de vinculación y/o contratación, es revisada, como mínimo una vez al año, hace parte de las políticas de gestión de la empresa, se encuentra difundida y accesible para todos los niveles de la organización. Incluye como mínimo el compromiso con:
                        
                        - La identificación de los peligros, evaluación y valoración de los riesgos y con los respectivos controles.
                        
                        - Proteger la seguridad y salud de todos los trabajadores mediante la mejora continua.
                        
                        - El cumplimiento de la normatividad vigente aplicable en materia de riesgos laborales.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar la política del Sistema de Gestión de SST de la empresa y confirmar que cumpla con los aspectos contenidos en el criterio.

                        Validar para la revisión anual de la política como mínimo: fecha de emisión, firmada por el representante legal actual, que estén incluidos los requisitos normativos actuales.
                        
                        Entrevistar a los miembros del COPASST para indagar el conocimiento de la política en SST. 
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(11);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(13);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Objetivos del Sistema de Gestión de Seguridad y Salud en el Trabajo SG-SST <label class="text-indigo-600">(1%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.2.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Objetivos de SST </p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Definir los objetivos del Sistema de Gestión de SST de conformidad con la política de  SST, los cuales deben ser claros, medibles, cuantificables y tener metas, 
                         coherentes con el plan de trabajo anual, compatibles con la normatividad vigente, se encuentran documentados, son comunicados a los trabajadores, 
                         son revisados y evaluados mínimo una vez al año, actualizados de ser necesario y se encuentran en documento firmado por el empleador.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Revisar si los objetivos se encuentran definidos, cumplen con las condiciones mencionadas en el criterio y si 
                        existen evidencias del proceso de difusión. 
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(12);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(14);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Evaluación inicial del Sistema de Gestión – Seguridad y Salud en el Trabajo <label class="text-indigo-600">(1%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.3.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Evaluación Inicial del Sistema de Gestión</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar la evaluación inicial del Sistema de Gestión de SST, identificando las prioridades para establecer el plan de trabajo anual o para la actualización del existente.
                        Debe ser realizada por el responsable del Sistema de Gestión de SST o contratada por la empresa con personal externo con licencia en Seguridad y Salud en el Trabajo.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar la evaluación inicial del Sistema de Gestión de SST mediante la matriz legal, matriz de peligros y evaluación de riesgos, verificación de controles, lista de asistencia a capacitaciones,
                         análisis de puestos de trabajo, exámenes médicos de ingreso y periódicos y seguimiento de indicadores, entre otros. 
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(13);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(15);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Plan Anual de Trabajo  <label class="text-indigo-600">(2%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.4.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Plan Anual de Trabajo</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Diseñar y definir un plan anual de trabajo para el cumplimiento del Sistema de Gestión de SST, el cual identifica los objetivos, metas, responsabilidades, 
                        recursos, cronograma de actividades, firmado por el empleador y el responsable del Sistema de Gestión de SST.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el plan de trabajo anual.
                        Verificar el cumplimiento del mismo. En el caso que se hayan presentado incumplimientos al plan, solicitar los planes de mejora respectivos.
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(14);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(16);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Conservación de la documentación  <label class="text-indigo-600">(2%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.5.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Archivo y retención documental del Sistema de Gestión de SST</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Contar con un sistema de archivo y retención documental, para los registros y documentos que soportan el Sistema de Gestión de SST.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Constatar la existencia de un sistema de archivo y retención documental, para los registros y documentos que soportan el Sistema de Gestión de SST.

                        Verificar mediante muestreo que los registros y documentos sean legibles (entendible para el lector objeto), fácilmente identificables y accesibles (para todos los que 
                        estén vinculados con cada documento en particular), protegidos contra daño y pérdida.
                        </p>
                </div>
                {{-- CAJON DE PREGUNTAS Y RESPUESTAS --}}
                <div class="col-span-4 grid grid-cols-3   m-auto text-black  border  rounded shadow-2xl mt-4 text-center mb-5 ml-4">
                    <div class="col-span-3  lg:col-span-1">
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(15);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(17);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Rendición de cuentas <label class="text-indigo-600">(1%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.6.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Rendición de cuentas</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Realizar anualmente la Rendición de Cuentas del desarrollo del Sistema de Gestión de SST, que incluya a todos los niveles de la empresa.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar los registros documentales que evidencien la rendición de cuentas anual, al interior de la empresa.

                        Solicitar a la empresa los mecanismos de rendición de cuentas que haya definido y verificar que se haga y se cumplan con los criterios del requisito.
                        
                        La rendición de cuentas debe incluir todos los niveles de la empresa ya que en cada uno de ellos hay responsabilidades sobre la Seguridad y Salud en el Trabajo.
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(16);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(18);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Normativa nacional vigente y aplicable en materia de Seguridad y Salud en el Trabajo. <label class="text-indigo-600">(2%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.7.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Matriz legal</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Definir la matriz legal que contemple las normas actualizadas del Sistema General de Riesgos Laborales aplicables a la empresa.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar la matriz legal.

                        Verificar que contenga:
                        
                        - Normas vigentes en riesgos laborales, aplicables a la empresa.
                        - Normas técnicas de cumplimiento de acuerdo con los peligros / riesgos identificados en la empresa.
                        
                        - Normas vigentes de diferentes entidades que le apliquen, relacionadas con riesgos laborales.
                        </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(17);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(19);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Comunicación.<label class="text-indigo-600">(1%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.8.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Mecanismos de comunicación</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Disponer de mecanismos eficaces para recibir y responder las comunicaciones internas y externas relativas a la Seguridad y Salud en el Trabajo, 
                        como por ejemplo auto reporte de condiciones de trabajo y de salud por parte de los trabajadores o contratistas.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Constatar la existencia de mecanismos eficaces de comunicación interna y externa que tiene la empresa en materia de Seguridad y Salud en el Trabajo.
                    </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(18);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(20);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Adquisiciones<label class="text-indigo-600">(1%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.9.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Identificación y evaluación para la adquisición de bienes y servicios</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Establecer un procedimiento para la identificación y evaluación de las especificaciones en SST de las compras y adquisición de productos y servicios.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Verificar la existencia de un procedimiento para la identificación y evaluación de las especificaciones en SST de las compras o adquisición de 
                        productos y servicios y constatar su cumplimiento. 
                    </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(19);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(21);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Contratación<label class="text-indigo-600">(2%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.10.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Evaluación y selección de proveedores y contratistas</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Establecer los aspectos de SST que podrá tener en cuenta la empresa en la evaluación y selección de proveedores y contratistas.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento que señale los criterios relacionados con SST para la evaluación y selección de proveedores, cuando la empresa los haya establecido.
                    </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(20);">Volver</button></div>
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 btnDot2"onclick="currentSlide(22);">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5 ">
                <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
                <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
                <p class="font-medium text-1xl mt-2 p-2 parrafo">Gestión del cambio<label class="text-indigo-600">(1%)</label>
                </p>
            </div>
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>2.11.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 ">Gestión del cambio</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0  mt-5">
                    <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                    <p class="text-justify mx-4">Disponer de un procedimiento para evaluar el impacto sobre la Seguridad y Salud en el Trabajo que se pueda generar por cambios internos o externos.</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mb-0 mb-5 ">
                    <p class="mt-4"><label class="font-bold 
                        text-justify text-indigo-600 ">Modo de verificación</label>
                    </p>
                    <p class="text-justify mx-4 ">Solicitar el documento que contenga el procedimiento.
                    </p>
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
            <div class="col-span-4 grid grid-cols-4 mb-5">
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700" onclick="currentSlide(20);">Volver</button></div>
                <div class="col-span-2"><a href="{{route("hacer")}}"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700 ">Continuar</button></a></div>
            </div>
        </form>
        {{-- FORMULARIO --}}

    </div>

</div>
@endsection
@section('scripts')
    
@endsection