@extends('layouts.app')

@section('template_title')
    Compañia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compañia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compañia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar compañia') }}
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
                                        
										<th>Nombre Empresa</th>
										<th>Ciudad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compañias as $compañia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $compañia->nombre_empresa }}</td>
											<td>{{ $compañia->ciudad }}</td>

                                            <td>
                                                <form action="{{ route('compañia.destroy',$compañia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compañia.show',$compañia->id) }}"><i class="fa fa-fw fa-eye"></i> Mostra</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compañia.edit',$compañia->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $compañias->links() !!}
            </div>
        </div>
    </div>
@endsection
