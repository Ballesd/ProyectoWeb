<div class="bg-white p-10 rounded-2xl shadow-2xl mb-10">
    <div class="space-y-5">
        
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Cédula:</label>
            {{ Form::text('cedula', $proveedor->cedula, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Nombre:</label>
            {{ Form::text('nombre', $proveedor->nombre, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Apellido:</label>
            {{ Form::text('apellido', $proveedor->apellido, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Telefono:</label>
            {{ Form::text('telefono', $proveedor->telefono, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>

        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Compañia Asociada:</label>
            {{ Form::select('id_comp',$compañia ,$proveedor->id_comp, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('id_comp') ? ' is-invalid' : ''), 'placeholder' => 'Id Comp']) }}
            {!! $errors->first('id_comp', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
    </div>
    <div class="flex justify-center mt-10">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
    </div>
</div>