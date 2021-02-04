@extends('adminlte::page')

@section('title', 'Modificar almacen')

@section('content_header')

@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h4>Nuevo almacen</h4>
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form method="POST" action="{{ route('almacen.new') }}" >
                    @include('almacen.form_almacen')
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop