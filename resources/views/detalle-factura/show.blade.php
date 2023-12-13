@extends('layouts.app')

@section('template_title')
    {{ $detalleFactura->name ?? "{{ __('Show') Detalle Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Factura:</strong>
                            {{ $detalleFactura->factura }}
                        </div>
                        <div class="form-group">
                            <strong>Reserva:</strong>
                            {{ $detalleFactura->reserva }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $detalleFactura->servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $detalleFactura->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleFactura->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $detalleFactura->valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
