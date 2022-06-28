@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? 'Show Proveedor' }}
@endsection

@section('content')
    <section class="pl-5 py-8">
        <div>
            <div>
                <div class="space-y-5">
                    <div>
                        <div>
                            <span class="text-3xl font-bold">Mostrar Proveedor</span>
                        </div>
                        <div>

                        </div>
                        
                    </div>

                    <div class="space-y-5">
                        
                        <div>

                            <strong>Cédula:</strong>
                            {{ $proveedor->cedula }}
                        </div>
                        <div>
                            <strong>Nombre:</strong>
                            {{ $proveedor->nombre }}
                        </div>
                        <div>
                            <strong>Apellido:</strong>
                            {{ $proveedor->apellido }}
                        </div>
                        <div>
                            <strong>Teléfono:</strong>
                            {{ $proveedor->telefono }}
                        </div>
                        <div>
                            <strong>Id Compañia:</strong>
                            {{ $proveedor->id_comp }}
                        </div>

                    </div>

                    <div>
                            <a href="{{ route('proveedor.index') }}"><button class="p-3 bg-red-500 hover:bg-red-600 rounded-lg text-white">Regresar</button></a>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
