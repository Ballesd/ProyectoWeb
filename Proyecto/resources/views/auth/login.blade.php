@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div>
    <h1>Login</h1>
    @csrf
    <form action="" method = "POST">
        <label for="">Cédula:</label>
        <input type="text" id= "cedula" name= "cedula">

        <label for="">Contraseña:</label>
        <input type="password" id= "contraseña" name= "contraseña">

        <button>Enviar</button>
    </form>

</div>
@endsection