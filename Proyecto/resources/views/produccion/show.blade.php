@extends('layouts.app')

@section('template_title')
    {{ $produccion->name ?? 'Show Produccion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Produccion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('produccions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $produccion->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Extra:</strong>
                            {{ $produccion->horas_extra }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $produccion->id_empleado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
