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
    <div class="col-span-3 m-10 ">
        <img src="{{asset('img/imagenes-evaluacion/img2.svg')}}" alt="">
    </div>

    <div class="col-span-5 m-auto  ">
        <div class="w-10/12 m-auto">
            <h1 class="text-6xl font-bold">Test evaluativo</h1>
            <p class="text-justify mt-5">A continuacion resolveras el siguiente test teniendo en cuenta cada uno de los aspectos vistos en la empesa  "nombre empresa" 
                porfavor responder cada una de las preguntas
            </p>
        </div>
    </div>
    
    {{-- fin titulo e imagen --}}

    {{-- TODO EL CUESTIONARIO --}}
    <div class="col-span-6 col-start-2 col-end-8 mt-5 m-auto w-full text-center shadow-2xl" id="scPlaneacion">
        {{-- tiulo antes del cuestionario --}}
        <label class="border-b text-4xl font-bold">RESOLUCIÓN 0312 DE 2019</label>
        <p class="my-2 font-bold ">ESTÁNDARES MÍNIMOS DEL SISTEMA DE GESTIÓN DE LA SEGURIDAD Y SALUD PARA EMPLEADORES Y CONTRATANTES.</p>
        <div class="bg-white  text-black mx-5 border-2 border-solid border-white rounded mt-5">
            <p class="mt-5"><label class="font-bold  text-2xl text-indigo-600 plTitle">I. PLANEAR</label></p><br>
            <label class="font-medium italic">RECURSOS <label class="text-indigo-600">(10%)</label> </label>
            <p class="font-medium text-1xl mt-2 p-2">Recursos financieros, técnicos humanos y de otra índole requeridos para coordinar y desarrollar el Sistema de Gestion de la Seguridad y Salud en el Trabajo (SG-SST) (4 %)</p>
        </div>
        {{-- FIN tiulo antes del cuestionario --}}

        {{-- FORMULARIO --}}
        <form action="">
        <div class="grid grid-cols-4 bg-white  text-black mx-5 border border-solid border-gray-400 rounded shadow-2xl">
            <div class="col-span-1">
                <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Numeral</label></p>
                <p>1.1.1</p>
            </div>
            <div class="col-span-1">
                <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Item</label></p>
                <p class="text-justify mx-4">Asignacion de una persona que diseñe e implemente el Sistema de Gestion de SST</p>
            </div>
            <div class="col-span-1">
                <p class="mt-4 "><label class="font-bold text-justify text-indigo-600">Criterio</label></p>
                <p class="text-justify mx-4">Asignar una persona que cumpla conel siguiente perfil:
                    El diseño e implementacion del Sistema de Gestion de SST Podra ser realizado 
                    por profesionales en SST, profesionales con posgrado en SST que cuenten con licencia en Seguridad 
                    y Salud en el Trabajo vigente y el curso de capacitacion virtual de cincuenta (50) horas.</p>
            </div>
            <div class="col-span-1">
                <p class="mt-4"><label class="font-bold text-justify text-indigo-600">Modo de verificación</label></p>
                <p class="text-justify mx-4">Solicitar el documento en el que consta la asignacion, con la respectiva 
                determinacion de responsabilidaes y constatar la hoja de vida con soportes de la persona asignada.</p>
            </div>
        </div>
        </form>
    </div>

</div>
@endsection