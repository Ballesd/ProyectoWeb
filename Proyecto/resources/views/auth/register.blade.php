@extends('layouts.app')

@section('title', 'Register')

@section('content')

<section class="px-5 md:px-44 lg:px-72">
  <div class="bg-gray-200 p-10 rounded-2xl">
    <h1 class="flex justify-center font-bold text-3xl">Register</h1>
    <form action="" enctype="multipart/form-data" method="POST" class="flex flex-col space-y-3 md:space-y-5">
      @csrf
      <div>
        <label for="avatar" class="font-semibold">Foto:</label>
        <input type="file" id="photo" name="photo">
      </div>

      <div class="flex flex-col">
        <label for="" class="font-semibold">Nombre:</label>
        <input type="text" id="name" name="name" class="py-1 rounded-lg">
      </div>


      <div class="flex flex-col">
        <label for="" class="font-semibold">Apellido:</label>
        <input type="text" id="apellido" name="apellido" class="py-1 rounded-lg">
      </div>

      <div class="flex flex-col">
        <label for="" class="font-semibold">Cédula:</label>
        <input type="text" id="cedula" name="cedula" class="py-1 rounded-lg">
      </div>

      @error('email')
      <p>{{$message }}</p>
      @enderror
      <label for="" class="font-semibold">Correo:</label>
      <input type="email" id="email" name="email" class="py-1 rounded-lg">

      <div class="">
        <label for="Cargo" class="font-semibold">Rol:</label>
        <select name="Cargo" id="Cargo" class="">
          <option value="Administrador">Administrador</option>
          <option value="Usuario">Usuario</option>
        </select>
      </div>

      @error('password')
      <p>{{$message }}</p>
      @enderror

      <div class="flex flex-col">
        <label for="" class="font-semibold">Contraseña:</label>
        <input type="password" id="password" name="password" class="py-1 rounded-lg">
      </div>

      <div class="flex flex-col">
        <label for="" class="font-semibold">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="py-1 rounded-lg">
      </div>

      <div class="flex justify-center font-bold">
        <button class= "py-2 px-4 rounded-xl bg-green-500 hover:bg-green-600">Registrarse</button>
      </div>
    </form>
  </div>

</section>
@endsection