@extends('layouts.app')

@section('template_title')
    Proveedor
@endsection

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>

                            <span>
                                {{ __('Proveedor') }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cedula</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Telefono</th>
										<th>Id Comp</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedor as $proveedor)
                                        <tr>
                                            
											<td>{{ $proveedor->cedula }}</td>
											<td>{{ $proveedor->nombre }}</td>
											<td>{{ $proveedor->apellido }}</td>
											<td>{{ $proveedor->telefono }}</td>
											<td>{{ $proveedor->compañia->nombre_empresa }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
