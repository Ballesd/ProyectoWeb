@extends('layouts.app')

@section('template_title')
{{ $produccion->name ?? 'Show Produccion' }}
@endsection

@section('content')
<section class="pl-5 py-8">
    <div>
        <div>
            <div class="space-y-5"1>
                <div>
                    <div>
                        <span class="text-3xl font-bold">Ver Producción</span>
                    </div>

                </div>

                <div class="space-y-5">

                    <div>
                        <strong>Cantidad:</strong>
                        {{ $produccion->cantidad }}
                    </div>
                    <div>
                        <strong>Horas Extra:</strong>
                        {{ $produccion->horas_extra }}
                    </div>
                    <div>
                        <strong>Id Empleado:</strong>
                        {{ $produccion->id_empleado }}
                    </div>

                </div>

                <div>
                    <a href="{{ route('produccion.index') }}"><button class="p-3 bg-red-500 hover:bg-red-600 rounded-lg text-white">Regresar</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection