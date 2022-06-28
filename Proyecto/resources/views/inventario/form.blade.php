<div class="bg-white p-10 rounded-2xl shadow-2xl mb-10">
    <div class="space-y-5">
        
        <div class="flex flex-col">
            <label for="" class="font-semibold">Cantidad:</label>
            {{ Form::text('cantidad', $inventario->cantidad, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
           <label for="" class="font-semibold">Precio</label>
            {{ Form::text('precio', $inventario->precio, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Descripcion</label>
            {{ Form::text('descripcion', $inventario->descripcion, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>

    </div>
    <div class="flex justify-center mt-10">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar Item</button>
    </div>
</div>