@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div>
    <h1>Register</h1>
    <form action="" enctype = "multipart/form-data" method = "POST">
        @csrf
        <label for="avatar">Foto:
        <input type="file" id="photo" name="photo">
        </label>

        <label for="">Nombre:</label>
        <input type="text" id= "name" name= "name">


        <label for="">Apellido:</label>
        <input type="text" id= "apellido" name= "apellido">
        
        <label for="">Cédula:</label>
        <input type="text" id= "cedula" name= "cedula">
 
        @error('email')
            <p>{{$message }}</p>
        @enderror
        <label for="">Correo:</label>
        <input type="email" id= "email" name= "email">

        <div class="">
          <label for="Cargo"><b>Rol:</b></label>
          <select name="Cargo" id="Cargo" class="">
            <option value="Administrador">Administrador</option>
            <option value="Usuario">Usuario</option>
          </select>
        </div>

        @error('password')
            <p>{{$message }}</p>
        @enderror
        <label for="">Contraseña:</label>
        <input type="password" id= "password" name= "password">

        <label for="">Confirmar Contraseña:</label>
        <input type="password" id= "password_confirmation" name= "password_confirmation">

        <button>Registrarse</button>
    </form>
</div>
@endsection