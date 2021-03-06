@extends('layouts.app')

@section('template_title')
Inventario
@endsection

@section('content')
<body>
    <div class="mb-10">
        <div>
            <div>
                <div>
                    <div>
                        <div class="flex justify-around py-5 mb-5 flex-wrap space-y-2 sm:space-y-0">

                            <span class="text-4xl font-bold">
                                {{ __('Inventario') }}
                            </span>

                            <div>
                                <a href="{{ route('descargar-pdf') }}" data-placement="left">
                                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-download"></i> {{ __('Generar lista del inventario (PDF)') }}</button>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('inventario.create') }}" data-placement="left">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Crear Nuevo') }}</button>
                                </a>
                            </div>
                            
                        </div>
                    </div>

                    
                    @if ($message = Session::get('success'))
                    <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-4 mx-3 lg:mx-20 flex justify-center">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div>
                        <div>
                            <div>
                                <div class="relative overflow-x-auto flex justify-center text-center mx-3 lg:mx-20 border border-black rounded-xl shadow-2xl">
                                    <table class="table-auto w-full  ">
                                        <thead>
                                            <tr>
                                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                                    No
                                                </th>

                                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                                    Cantidad
                                                </th>

                                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                                    Precio
                                                </th>

                                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                                    Descripcion
                                                </th>

                                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inventarios as $inventario)
                                            <tr class="hover:bg-gray-100">
                                                <td class="py-3 border-b border-gray-300">{{ ++$i }}</td>
                                                <td class="py-3 border-b border-gray-300">{{ $inventario->cantidad }}</td>
                                                <td class="py-3 border-b border-gray-300">{{ $inventario->precio }}</td>
                                                <td class="py-3 border-b border-gray-300">{{ $inventario->descripcion }}</td>

                                                <td class="py-3 border-b border-gray-300">
                                                    <form action="{{ route('inventario.destroy',$inventario->id) }}" method="POST">
                                                        <a href="{{ route('inventario.show',$inventario->id) }}" class="text-green-500 font-bold"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                        <a href="{{ route('inventario.edit',$inventario->id) }}" class="text-blue-500 font-bold"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-500 font-bold"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $inventarios->links() !!}
            </div>
        </div>
    </div>
</body>
@endsection