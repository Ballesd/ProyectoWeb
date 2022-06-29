@extends('layouts.app')

@section('title', 'home')

@section('content')

@if(auth()->check())

<section class="p-5 lg:px-20 lg:py-10 bg-gray-200">

    <article class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 text-3xl gap-5 sm:gap-10 text-center font-bold">

        @if((auth()->user()->role) == 'Administrador')
        <a href="{{ route('inventario.index') }}">
            <div class="h-72 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black hover:animate-pulse">
                <h1>Gestión de Inventario</h1>
                <div class="flex justify-center items-center h-full">
                    <img src="https://cdn-icons-png.flaticon.com/512/2825/2825867.png" alt="imagen de proveedor" class="h-36">
                </div>
            </div>
        </a>
        @endif

        @if((auth()->user()->role) == 'Administrador')
        <a href="{{ route('proveedor.index') }}">
            <div class="h-72 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black">
                <h1>Gestión de Proveedores</h1>
                <div class="flex justify-center items-center h-full">
                    <img src="https://cdn-icons-png.flaticon.com/512/2103/2103848.png" alt="imagen de proveedor" class="h-36">
                </div>

            </div>
        </a>
        @endif

        <a href="{{ url('API') }}">
            <div class="h-72 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black">
                <h1>Datos Abiertos</h1>
                <div class="flex justify-center items-center h-full">
                    <img src="https://cdn-icons-png.flaticon.com/512/1849/1849554.png" alt="imagen de Datos abiertsos" class="h-36">
                </div>
            </div>
        </a>



        <a href="{{ route('empleado.index') }}">
            <div class="h-72 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black">
                <h1>Recursos Humanos</h1>
                <div class="flex justify-center items-center h-full">
                    <img src="https://cdn-icons-png.flaticon.com/512/912/912267.png" alt="imagen de Recursos Humanos" class="h-36">
                </div>
            </div>
        </a>

        @if((auth()->user()->role) == 'Administrador')
        <a href="{{ route('produccion.index') }}">
            <div class="h-72 rounded-2xl p-5 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black">
                <h1>Gestión de producción</h1>
                <div class="flex justify-center items-center h-full">
                    <img src="https://cdn-icons-png.flaticon.com/512/875/875312.png" alt="imagen de Producción" class="h-36">
                </div>
            </div>
        </a>
        @endif

        <div>
            <div class="h-72 grid grid-cols-2 grid-rows-2 gap-5 text-xl">


                <a href="#" class="col-span-2 row-span-1 lg:col-span-1 lg:row-span-2">
                    <div class="rounded-2xl p-4 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black h-full">
                        <h1>Más funciones</h1>
                        <div class="flex justify-center items-center h-full">
                            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828921.png" alt="Imagen de más" class="w-20 lg:w-24">
                        </div>
                    </div>
                </a>

                <a href="#" class="col-span-2 row-span-1 lg:col-span-1 lg:row-span-2 ">
                    <div class="rounded-2xl p-4 bg-white shadow-2xl flex flex-col hover:bg-gradient-to-r hover:from-sky-200 hover:to-sky-500 hover:border border-black h-full">
                        <h1>Atención al cliente</h1>
                        <div class="flex justify-center items-center h-full">
                            <img src="https://cdn-icons-png.flaticon.com/512/1605/1605350.png" alt="Imagen de Atención al cliente" class="w-20 lg:w-24">
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </article>


</section>
@endif


@endsection