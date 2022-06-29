@extends('layouts.app')

@section('title', 'Register')

@section('content')

<section class="p-5 md:px-44 lg:px-72 lg:py-28 bg-gray-200">
  <div class="bg-white p-10 rounded-2xl shadow-2xl">
    <h1 class="flex justify-center font-bold text-3xl">REGISTRARSE</h1>
    <form action="" enctype="multipart/form-data" method="POST" class="flex flex-col space-y-3 md:space-y-5">
      @csrf
      <div>
        <label for="avatar" class="font-semibold">Foto:</label>
        <input type="file" id="photo" name="photo">
      </div>

      <div class="flex flex-col shadow-xl">
        <label for="" class="font-semibold">Nombre:</label>
        <input class="border-solid border-2 border-gray-300 rounded-lg" type="text" id="name" name="name" class="py-1 rounded-lg">
      </div>


      <div class="flex flex-col shadow-xl">
        <label for="" class="font-semibold">Apellido:</label>
        <input class="border-solid border-2 border-gray-300 rounded-lg" type="text" id="apellido" name="apellido" class="py-1 rounded-lg">
      </div>

      <div class="flex flex-col shadow-xl">
        <label for="" class="font-semibold">Cédula:</label>
        <input class="border-solid border-2 border-gray-300 rounded-lg" type="text" id="cedula" name="cedula" class="py-1 rounded-lg">
      </div>

      @error('email')
      <p class="text-red-500 font-bold">{{$message }}</p>
      @enderror
      <div class="flex flex-col shadow-xl">
        <label for="" class="font-semibold">Correo:</label>
        <input class="border-solid border-2 border-gray-300 rounded-lg" type="email" id="email" name="email" class="py-1 rounded-lg">
      </div>

      <div class="">
        <label for="Cargo" class="font-semibold">Rol:</label>
        <select name="Cargo" id="Cargo" class="">
          <option value="Administrador">Administrador</option>
          <option value="Usuario">Usuario</option>
        </select>
      </div>

      @error('password')
      <p class="text-red-500 font-bold">{{$message }}</p>
      @enderror

      <div class="flex flex-col shadow-xl">
        <label for="" class="font-semibold">Contraseña:</label>
        <input class="border-solid border-2 border-gray-300 rounded-lg" type="password" id="password" name="password" class="py-1 rounded-lg">
      </div>

      <div class="flex flex-col shadow-xl">
        <label for="" class="font-semibold">Confirmar Contraseña:</label>
        <input class="border-solid border-2 border-gray-300 rounded-lg" type="password" id="password_confirmation" name="password_confirmation" class="py-1 rounded-lg">
      </div>

      <div class="flex justify-center font-bold">
        <button class= "bg-blue-500 hover:bg-gradient-to-r hover:from-sky-500 hover:to-sky-700 py-2 px-7 font-black rounded-xl shadow-xl text-white text-xl">Registrarse</button>
      </div>
    </form>
  </div>


</section>
@endsection