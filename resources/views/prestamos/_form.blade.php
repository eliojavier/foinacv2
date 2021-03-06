<div class="form-group">
    {!! Form::label('accionista', 'Accionista:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('accionista', $stockholders, ['class' => 'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::text('fecha', '', ['id' => 'datepicker', 'readonly', 'class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('monto', 'Monto', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::text('monto', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('concepto', 'Concepto (Opcional)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::text('concepto', null, ['class' => 'form-control col-md-6']) !!}
    </div>
</div>

