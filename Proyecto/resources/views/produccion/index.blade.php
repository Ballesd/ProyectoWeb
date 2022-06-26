@extends('layouts.app')

@section('template_title')
    Produccion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Produccion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('produccion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cantidad</th>
										<th>Horas Extra</th>
										<th>Id Empleado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produccions as $produccion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $produccion->cantidad }}</td>
											<td>{{ $produccion->horas_extra }}</td>
											<td>{{ $produccion->empleado->nombre }}</td>

                                            <td>
                                                <form action="{{ route('produccion.destroy',$produccion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('produccion.show',$produccion->id) }}"><i class="fa fa-fw fa-eye"></i> Mostar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('produccion.edit',$produccion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $produccions->links() !!}
            </div>
        </div>
    </div>
@endsection
