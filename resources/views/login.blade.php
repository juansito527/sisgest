@extends('layouts.master')
@section('title','Inicio de sesion')
@section('nav')
@endsection
@section('clasenav')
class=" w-full z-30 top-0 text-white bg-white"
@endsection
@section('content')
<div class="h-screen  flex flex-col space-y-5 justify-center items-center">
    <div class="bg-white w-96 shadow-xl rounded p-5 text-black">
      <h1 class="text-4xl text-center font-bold">Bienvenido</h1>
      
      
      <form class="space-y-5 mt-5">
        <input type="text" class="w-full h-12 border border-green-800 rounded px-3" placeholder="Email" />
        <div class="w-full flex items-center border border-green-800 rounded px-3">
          <input type="password" class="w-4/5 h-12" placeholder="Password" />
          <span class="text-green-600 hover:bg-green-400  rounded-md px-3">Show</span>
        </div>
  
        <div class="">
          <a href="#!" class="font-medium text-green-900 hover:bg-green-300 rounded-md p-2">Olvido su contraseña?</a>
        </div>
  
        <button class="text-center w-full bg-green-600 rounded-md text-white py-3 font-medium">Entrar</button>
      </form>
    </div>
  </div>
@endsection