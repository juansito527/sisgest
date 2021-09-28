@extends('layouts.master')
@section('title','Registro-Evaluacion')
@section('nav')
@endsection
@section('clasenav')
class=" w-full z-30 top-0 text-white"
@endsection
@section('content')
<!-- component -->
<div class="font-sans">
    <div class="relative mt-10 min-h-screen flex flex-col sm:justify-center items-center">
        <div class="relative max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-blue-800 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Completa el formulario para comenzar la evaluaci
                </label>
                <form method="#" action="#" class="mt-10">

                    <div>
                        <label class="text-black text-transform: uppercase" for="">nombre de la empresa</label>
                        <input type="text"
                            class=" pl-4 mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">Nit de la empresa</label>
                        <input type="number"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for=""># de trabajadores directos</label>
                        <input type="number"
                            class=" pl-4 mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for=""># de trabajadores indirectos</label>
                        <input type="number" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">Fecha de realizacion</label>
                        <input type="date" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">Realizado por</label>
                        <input type="text" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">cargo</label>
                        <input type="text" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">departamento de ubicacion</label>
                        <input type="text" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">ciudad</label>
                        <input type="text" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">sector economico</label>
                        <input type="text" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">clase de riesgo</label>
                        <input type="text" placeholder="Confirmar contraseña"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <button
                            class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Comenzar
                        </button>
                    </div>

                    <div class="flex mt-7 items-center text-center">
                        <hr class="border-gray-300 border-1 w-full rounded-md">

                        <hr class="border-gray-300 border-1 w-full rounded-md">
                    </div>



                    <div class="mt-7">
                        <div class="flex justify-center items-center">

                            <a href="{{ route('inicio') }}"
                                class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Volver
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection