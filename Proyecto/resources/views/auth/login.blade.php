@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="px-5 lg:px-96 pt-4 lg:pt-28 bg-gray-200">
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
                <input class="border-solid border-2 border-gray-300 rounded-lg" type="email" id= "email" name= "email">
            </div>

            <div class="flex flex-col shadow-xl">
                <label for="" class="font-semibold ">Contraseña:</label>
                <input class="border-solid border-2 border-gray-300 rounded-lg" type="password" id= "password" name= "password">
            </div>

                @error('message')
                    <p>{{$message }}</p>
                @enderror

            <div class="flex justify-center">
            <button class="bg-green-500 hover:bg-green-600 py-2 px-7 font-bold rounded-xl shadow-xl">Enviar</button>
            </div>
        </form>   
    </div>
    <p class="pt-96"></p>   
</section>
<!-- <section>
<footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
    </footer>
</section> -->

@endsection