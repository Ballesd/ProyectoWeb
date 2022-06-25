@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="px-5 lg:px-96">
    <div class="bg-gray-200 p-10 rounded-2xl">
    <h1 class="flex justify-center font-bold text-3xl">Login</h1>
    
    <form action="" method = "POST" class="flex flex-col space-y-4">
        @csrf    
    <!--
        <label for="">Cédula:</label>
        <input type="text" id= "cedula" name= "cedula">
-->
        <div class="flex flex-col">
            <label for="" class="font-semibold">Correo:</label>
            <input type="email" id= "email" name= "email">
        </div>

        <div class="flex flex-col">
            <label for="" class="font-semibold">Contraseña:</label>
            <input type="password" id= "password" name= "password">
        </div>

            @error('message')
                <p>{{$message }}</p>
            @enderror

        <div class="flex justify-center">
        <button class="bg-green-500 hover:bg-green-600 py-2 px-7 font-bold rounded-xl">Enviar</button>
        </div>
    </form>
    </div>
</section>

@endsection