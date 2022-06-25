<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Empresa:') }}
            {{ Form::text('nombre_empresa', $compañium->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad:') }}
            {{ Form::text('ciudad', $compañium->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Gurdar</button>
    </div>
</div>