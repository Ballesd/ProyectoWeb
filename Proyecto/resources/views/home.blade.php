@extends('layouts.app')

@section('title', 'home')

@section('content')

<section class="p-5 lg:px-20 lg:py-10 bg-gray-200">

    <article class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 text-3xl gap-5 sm:gap-10 text-center">
        <a href="">
            <div class="h-60 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-sky-300">
                <h1>Análisis de ventas</h1>

            </div>
        </a>

        <a href="">
            <div class="h-60 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-sky-300">
                <h1>Gestión de proveedores</h1>
            </div>
        </a>

        <a href="">
            <div class="h-60 grid grid-cols-2 grid-rows-2 gap-5 text-xl">
                <div class="col-span-1 row-span-2 rounded-2xl p-4 bg-white shadow-2xl flex flex-col hover:bg-sky-300">Datos abiertos</div>

                <div class="col-span-1 row-span-1 rounded-2xl p-4 bg-white shadow-2xl flex flex-col hover:bg-sky-300">Más funciones</div>
                <div class="col-span-1 row-span-1 rounded-2xl p-4 bg-white shadow-2xl flex flex-col hover:bg-sky-300">Atención al cliente</div>
            </div>
        </a>

        <a href="">
            <div class="h-60 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-sky-300">
                <h1>Gestión de inventario</h1>
            </div>
        </a>

        <a href="">
            <div class="h-60 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-sky-300">
                <h1>Recursos Humanos</h1>
            </div>
        </a>

        <a href="">
            <div class="h-60 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-sky-300">
                <h1>Gestión de producción</h1>
            </div>
        </a>
    </article>


</section>



@endsection