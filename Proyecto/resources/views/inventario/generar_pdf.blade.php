<div class="mb-10">
    <div>
        <div>
            <div>
                <div>
                    <div class="flex justify-around py-5 mb-5">

                        <span class="text-4xl font-bold">
                            {{ __('Inventario') }}
                        </span>
                    </div>
                </div>
                <div>
                    <div class="relative overflow-x-auto flex justify-center text-center mx-3 lg:mx-20 border border-black rounded-xl shadow-2xl">
                        <table class="table-auto w-full  ">
                            <thead>
                                <tr>

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
                                @foreach ($inventario as $inventario)
                                <tr class="hover:bg-gray-100">
                                    <td class="py-3 border-b border-gray-300">{{ $inventario->cantidad }}</td>
                                    <td class="py-3 border-b border-gray-300">{{ $inventario->precio }}</td>
                                    <td class="py-3 border-b border-gray-300">{{ $inventario->descripcion }}</td>

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
