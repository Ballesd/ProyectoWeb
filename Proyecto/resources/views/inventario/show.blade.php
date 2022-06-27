@extends('layouts.app')

@section('template_title')
{{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
<section class="pl-5 py-8 bg-red-200">
    <div>
        <div>
            <div class="space-y-5">
                <div>
                    <div>
                        <span class="text-3xl font-bold">Información de Item Inventario</span>
                    </div>

                </div>

                <div class="space-y-5">

                    <div>
                        <strong>Cantidad:</strong>
                        {{ $inventario->cantidad }}
                    </div>
                    <div>
                        <strong>Precio:</strong>
                        {{ $inventario->precio }}
                    </div>
                    <div>
                        <strong>Descripcion:</strong>
                        {{ $inventario->descripcion }}
                    </div>

                </div>

                <div>
                    <a href="{{ route('inventario.index') }}"><button class="p-3 bg-red-500 hover:bg-red-600 rounded-lg text-white">Regresar</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection