@extends('layouts.app')

@section('template_title')
    Compañium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compañium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compañia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                    @foreach ($compañia as $compañium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $compañium->nombre_empresa }}</td>
											<td>{{ $compañium->ciudad }}</td>

                                            <td>
                                                <form action="{{ route('compañia.destroy',$compañium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compañia.show',$compañium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compañia.edit',$compañium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $compañia->links() !!}
            </div>
        </div>
    </div>
@endsection
