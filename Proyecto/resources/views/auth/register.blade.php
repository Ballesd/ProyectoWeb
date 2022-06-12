@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div>
    <h1>Register</h1>
    <form action="" method = "POST">
    @csrf
        <label for="">Foto:</label>
        <input type="file" id="foto" name="foto">

        <label for="">Nombre:</label>
        <input type="text" id= "nombre" name= "nombre">

        <label for="">Apellido:</label>
        <input type="text" id= "apellido" name= "apellido">
         
        <label for="">Cédula:</label>
        <input type="text" id= "cedula" name= "cedula">

        <label for="">Correo:</label>
        <input type="email" id= "correo" name= "correo">

        <div class="">
          <label for="Cargo"><b>Cargo:</b></label>
          <select name="Cargo" id="Cargo" class="">
            <option value="Administrador">Administrador</option>
            <option value="Usuario">Usuario</option>
            <option value="Cliente">Cliente</option>
            <option value="Observador">Observador</option>
          </select>
        </div>

        <label for="">Contraseña:</label>
        <input type="password" id= "contraseña" name= "contraseña">

        <label for="">Confirmar Contraseña:</label>
        <input type="password" id= "contraseña_valid" name= "contraseña_valid">

        <button>Registrarse</button>
    </form>
</div>
@endsection