<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cantidad:') }}
            {{ Form::text('cantidad', $produccion->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horas extra:') }}
            {{ Form::number('horas_extra', $produccion->horas_extra, ['class' => 'form-control' . ($errors->has('horas_extra') ? ' is-invalid' : ''), 'placeholder' => 'Horas Extra']) }}
            {!! $errors->first('horas_extra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empleado:') }}
            {{ Form::select('id_empleado',$empleado, $produccion->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>