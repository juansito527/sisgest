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
        <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5">
            <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
            <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
            <p class="font-medium text-1xl mt-2 p-2">Recursos financieros, técnicos humanos y de otra índole requeridos
                para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) (4 %)
            </p>
        </div>
        {{-- FIN tiulo antes del cuestionario --}}

        {{-- FORMULARIO --}}
        <form action="" class="sgForm">
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.1</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 lg:mt-14 ">Asignacion de una persona que diseñe e implemente el Sistema de Gestion
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
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.05%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300">(0.5%)</label><br>
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
            <div
                class="grid grid-cols-4 bg-white mb-5  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl pr-5 mb-5">
                <div class="col-span-4 md:col-span-2 lg:col-span-1">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                    <p>1.1.2</p>
                </div>
                <div class="col-span-4 md:col-span-2 lg:col-span-1 md:mt-0 mt-5">
                    <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                    <p class="text-justify mx-4 mt-0 lg:mt-14 ">Asignacion de una persona que diseñe e implemente el Sistema de Gestion
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
                                    <input type="radio" class="ml-4 inline-block"> <p class="inline-block">Cumple Totalmente</p> <label class="text-red-300 ml-6">(0.05%)</label><br>
                                    <input type="radio" class="m-2 ml-4">No cumple<label class="text-red-300">(0.5%)</label><br>
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
                <div class="col-span-2"><button type="button" class="font-bold rounded m-4 bg-blue-500 text-bold border border-blue-500 p-3 w-28  ring-4 ring-blue-500 hover:bg-blue-700">Continuar</button></div>
            </div>
        </form>
        {{-- FORMULARIO --}}
        
    </div>

</div>
@endsection
@section('scripts')
    
@endsection