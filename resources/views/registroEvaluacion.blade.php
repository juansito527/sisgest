@extends('layouts.master')
@section('title','Registro-Evaluacion')
@section('nav')
@endsection
@section('clasenav')
class=" w-full z-30 top-0 text-white bg-white"
@endsection
@section('content')
<!-- component -->
<div class="font-sans">
    <div class="relative mt-10 min-h-screen flex flex-col sm:justify-center items-center">
        <div class="relative max-w-sm w-full">
            <div class="card bg-gren-800 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-gray-800 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Completa el formulario para comenzar la evaluación
                </label>
                <form method="#" action="#" class="mt-10">

                    <div>
                        <label class="text-black text-transform: uppercase" for="">nombre de la empresa</label>
                        <input type="text"
                            class=" pl-4 mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" required>
                    </div>

                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">Nit de la empresa</label>
                        <input type="number"
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>

                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for=""># de trabajadores directos</label>
                        <input type="number"
                            class=" pl-4 mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>

                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for=""># de trabajadores indirectos</label>
                        <input type="number" 
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">Fecha de realizacion</label>
                        <input type="date" 
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">Realizado por</label>
                        <input type="text" 
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">cargo</label>
                        <input type="text" 
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">departamento de ubicacion</label>
                        <select class="pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="departamento" name="departamento" required>
                            <option value = ""> </option>
                            <option value = "Amazonas">Amazonas</option>
                            <option value = "Antioquia">Antioquia</option>
                            <option value = "Arauca">Arauca</option>
                            <option value = "Atlántico">Atlántico</option>
                            <option value = "Bolívar">Bolívar</option>
                            <option value = "Boyacá">Boyacá</option>
                                <option value = "Caldas">Caldas</option>
                            <option value = "Caquetá">Caquetá</option>
                            <option value = "Casanare">Casanare</option>
                            <option value = "Cauca">Cauca</option>
                            <option value = "Cesar">Cesar</option>
                            <option value = "Chocó">Chocó</option>		            
                            <option value = "Córdoba">Córdoba</option>
                            <option value = "Cundinamarca">Cundinamarca</option>
                            <option value = "Guainía">Guainía</option>
                                <option value = "Guaviare">Guaviare</option>
                            <option value = "Huila">Huila</option>
                            <option value = "La Guajira">La Guajira</option>
                            <option value = "Magdalena">Magdalena</option>
                                <option value = "Meta">Meta</option>
                            <option value = "Nariño">Nariño</option>
                            <option value = "Norte de Santander">Norte de Santander</option>
                            <option value = "Putumayo">Putumayo</option>                
                            <option value = "Quindío">Quindío</option>  
                                <option value = "Risaralda">Risaralda</option>
                            <option value = "San Andrés y Providencia">San Andrés y Providencia</option>
                            <option value = "Santander">Santander</option>
                            <option value = "Sucre">Sucre</option>
                            <option value = "Tolima">Tolima</option>
                            <option value = "Valle del Cauca">Valle del Cauca</option>
                            <option value = "Vaupés">Vaupés</option>
                            <option value = "Vichada">Vichada</option>
                          </select>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">ciudad</label>
                        <select class="pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="inputCiudadLine2" required>
                            <option value=""></option>
                            <option value="Arauca">Arauca</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Bogotá">Bogotá</option>
                            <option value="Bucaramanga">Bucaramanga</option>
                            <option value="Cali">Cali</option>
                            <option value="Cartagena">Cartagena</option>
                            <option value="Cúcuta">Cúcuta</option>
                            <option value="Florencia">Florencia</option>
                            <option value="Ibagué">Ibagué</option>
                            <option value="Leticia">Leticia</option>
                            <option value="Manizales">Manizales</option>
                            <option value="Medellín">Medellín</option>
                            <option value="Mitú">Mitú</option>
                            <option value="Mocoa">Mocoa</option>
                            <option value="Montería">Montería</option>
                            <option value="Neiva">Neiva</option>
                            <option value="Pasto">Pasto</option>
                            <option value="Pereira">Pereira</option>
                            <option value="Popayán">Popayán</option>
                            <option value="Puerto Carreño">Puerto Carreño</option>
                            <option value="Puerto Inírida">Puerto Inírida</option>
                            <option value="Quibdó">Quibdó</option>
                            <option value="Riohacha">Riohacha</option>
                            <option value="San Andrés">San Andrés</option>
                            <option value="San José del Guaviare">San José del Guaviare</option>
                            <option value="Santa Marta">Santa Marta</option>
                            <option value="Sincelejo">Sincelejo</option>
                            <option value="Tunja">Tunja</option>
                            <option value="Valledupar">Valledupar</option>
                            <option value="Villavicencio">Villavicencio</option>
                            <option value="Yopal">Yopal</option>
                        </select>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">sector economico</label>
                        <input type="text" 
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>
                    <div class="mt-7">
                        <label class="text-black text-transform: uppercase" for="">clase de riesgo</label>
                        <input type="text" 
                            class=" pl-4  mt-1 block w-full border-none bg-gray-100 text-black h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"required>
                    </div>

                    <div class="mt-7">
                        <button
                            class="bg-green-600 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
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