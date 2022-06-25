@extends('layouts.app')

@section('template_title')
    {{ $compañium->name ?? 'Show Compañium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Compañium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compañia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $compañium->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $compañium->ciudad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
