<div class="mb-10">
    <div>
        <div>
            <div>
                <div>
                    <div class="flex justify-around py-5 mb-5">

                        <span class="text-4xl font-bold">
                            {{ __('Empleado') }}
                        </span>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-4 mx-3 lg:mx-20 flex justify-center">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div>
                    <div class="relative overflow-x-auto flex justify-center text-center mx-3 lg:mx-20 border border-black rounded-xl shadow-2xl">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Numero
                                    </th>

                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Nombre
                                    </th>

                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Cedula
                                    </th>

                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Apellido
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Fecha Ingreso
                                    </th>

                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Direccion
                                    </th>

                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider">
                                        Telefono
                                    </th>

                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-gray-600 tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleado)
                                <tr class="hover:bg-gray-100">
                                    <td>{{ $empleado->id }}</td>
                                    <td>{{ $empleado->nombre }}</td>
                                    <td>{{ $empleado->cedula }}</td>
                                    <td>{{ $empleado->apellido }}</td>
                                    <td>{{ $empleado->fecha_ingreso }}</td>
                                    <td>{{ $empleado->direccion }}</td>
                                    <td>{{ $empleado->telefono }}</td>
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