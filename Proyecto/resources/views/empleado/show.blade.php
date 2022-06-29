@extends('layouts.app')

@section('template_title')
{{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
<section class="pl-5 py-8">
    <div>
        <div>
            <div class="space-y-5">
                <div>
                    <div>
                        <span class="text-3xl font-bold">Información del Empleado: </span>
                    </div>

                </div>

                <div class="space-y-5">

                    <div>
                        <strong>Nombre:</strong>
                        {{ $empleado->nombre }}
                    </div>
                    <div>
                        <strong>Cedula:</strong>
                        {{ $empleado->cedula }}
                    </div>
                    <div>
                        <strong>Apellido:</strong>
                        {{ $empleado->apellido }}
                    </div>
                    <div>
                        <strong>Fecha Ingreso:</strong>
                        {{ $empleado->fecha_ingreso }}
                    </div>
                    <div>
                        <strong>Direccion:</strong>
                        {{ $empleado->direccion }}
                    </div>
                    <div>
                        <strong>Telefono:</strong>
                        {{ $empleado->telefono }}
                    </div>

                </div>

                <div>
                    <a href="{{ route('empleado.index') }}"><button class="p-3 bg-red-500 hover:bg-red-600 rounded-lg text-white">Regresar</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection