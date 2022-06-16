@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div>
    <h1>Login</h1>
    
    <form action="" method = "POST">
        @csrf    
    <!--
        <label for="">Cédula:</label>
        <input type="text" id= "cedula" name= "cedula">
-->

        <label for="">Correo:</label>
        <input type="email" id= "email" name= "email">

        <label for="">Contraseña:</label>
        <input type="password" id= "password" name= "password">

            @error('message')
                <p>{{$message }}</p>
            @enderror

        <button>Enviar</button>
    </form>

</div>
@endsection