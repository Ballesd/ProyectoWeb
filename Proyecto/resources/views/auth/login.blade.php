@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="p-5 lg:px-96 lg:py-28 bg-gray-200">
    <div class="bg-white p-10 rounded-2xl shadow-2xl border-solid border-1 border-black">
    <h1 class="flex justify-center font-bold text-3xl">INGRESAR</h1>
    
        <form action="" method = "POST" class="flex flex-col space-y-4">
            @csrf    
        <!--
            <label for="">Cédula:</label>
            <input type="text" id= "cedula" name= "cedula">
    -->
            <div class="flex flex-col shadow-xl">
                <label for="" class="font-semibold">Correo:</label>
                <input class="border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl" type="email" id= "email" name= "email">
            </div>

            <div class="flex flex-col shadow-xl">
                <label for="" class="font-semibold ">Contraseña:</label>
                <input class="border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl" type="password" id= "password" name= "password">
            </div>

                @error('message')
                    <p class="text-red-500 font-bold">{{$message }}</p>
                @enderror

            <div class="flex justify-center">
            <button class="bg-blue-500 hover:bg-gradient-to-r hover:from-sky-500 hover:to-sky-700 py-2 px-7 font-black rounded-xl shadow-xl text-white text-xl">Ingresar</button>
            </div>
        </form>   
    </div>
  
</section>

@endsection