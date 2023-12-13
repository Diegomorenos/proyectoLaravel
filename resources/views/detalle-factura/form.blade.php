<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('factura') }}
            {{ Form::text('factura', $detalleFactura->factura, ['class' => 'form-control' . ($errors->has('factura') ? ' is-invalid' : ''), 'placeholder' => 'Factura']) }}
            {!! $errors->first('factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reserva') }}
            {{ Form::text('reserva', $detalleFactura->reserva, ['class' => 'form-control' . ($errors->has('reserva') ? ' is-invalid' : ''), 'placeholder' => 'Reserva']) }}
            {!! $errors->first('reserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicio') }}
            {{ Form::text('servicio', $detalleFactura->servicio, ['class' => 'form-control' . ($errors->has('servicio') ? ' is-invalid' : ''), 'placeholder' => 'Servicio']) }}
            {!! $errors->first('servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $detalleFactura->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detalleFactura->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $detalleFactura->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>