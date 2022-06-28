<div class="bg-white p-10 rounded-2xl shadow-2xl mb-10">
  
    <div class="space-y-5">

        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Cantidad:</label>
            {{ Form::text('cantidad', $produccion->cantidad, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Horas Extra:</label>
            {{ Form::number('horas_extra', $produccion->horas_extra, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('horas_extra') ? ' is-invalid' : ''), 'placeholder' => 'Horas Extra']) }}
            {!! $errors->first('horas_extra', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Empleado:</label>
            {{ Form::select('id_empleado',$empleado, $produccion->id_empleado, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>

    </div>
    <div class="flex justify-center mt-10">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
    </div>
</div>