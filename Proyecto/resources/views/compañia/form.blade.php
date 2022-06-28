<div class="bg-white p-10 rounded-2xl shadow-2xl mb-10">
    <div class="space-y-5">

        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Nombre Empesa:</label>
            {{ Form::text('nombre_empresa', $compañia->nombre_empresa, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>
        <div class="flex flex-col space-y-1">
            <label for="" class="font-semibold">Ciudad:</label>
            {{ Form::text('ciudad', $compañia->ciudad, ['class' => 'border-solid border-2 border-gray-300 rounded-lg p-1 shadow-2xl' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="text-red-500 font-bold">:message</div>') !!}
        </div>

    </div>
    <div class="flex justify-center mt-10">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Empresa</button>
    </div>
</div>