@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? 'Show Proveedor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Proveedor</span>
                        </div>
                        <div>

                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedor.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">

                            <strong>Cédula:</strong>
                            {{ $proveedor->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $proveedor->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $proveedor->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Id Compañia:</strong>
                            {{ $proveedor->id_comp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
