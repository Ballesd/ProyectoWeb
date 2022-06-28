<div class="bg-white p-10 rounded-2xl shadow-2xl mb-10">
    <div class="space-y-5">

        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Nombre:</label>
            {{ Form::text('nombre', $empleado->nombre, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Cédula:</label>
            {{ Form::text('cedula', $empleado->cedula, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Apellido:</label>
            {{ Form::text('apellido', $empleado->apellido, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Fecha ingreso:</label>
            {{ Form::date('fecha_ingreso', $empleado->fecha_ingreso, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Dirección</label>
            {{ Form::text('direccion', $empleado->direccion, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
        <label for="" class="font-semibold">Teléfono</label>
            {{ Form::text('telefono', $empleado->telefono, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>

    </div>
    <div class="flex justify-center mt-10">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
    </div>
</div>