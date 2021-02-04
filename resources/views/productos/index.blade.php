@extends('adminlte::page')
@section('title', 'Productos')
@section('content_header')

@stop

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-12">
    <div class="card border-0 p-4">
      <div class="card-header">
        <div class="row">
          <div class="col-6 col-md-6">
            <h3>Gestion de Productos</h3>
          </div>
          <div class="col-6 col-md-6">
            <div class="d-flex justify-content-end">
              <a type="button" class="btn btn-light" href="#"><i class="fas fa-plus"></i> &nbsp; Agregar</a>
            </div>
          </div>
        </div>
        <div class="row pb-2">
          <div class="col-sm-12 mb-2 col-md-6"> Mostrando {{$productos->firstItem()}} - {{$productos->lastItem()}} de {{$productos->total()}} Registros</div>
        </div>
      </div>

      <div class="card-body bg-white">
        <div>
          <div class="row">
            <div class="col-md-12 col-12">
              <ul class="list-group border-0">
                @forelse($productos as $producto)
                  <li class="list-group-item border-top-0 border-left-0 border-right-0">
                    <div class="row">
                      <div class="col-md-1 col-2 d-flex justify-content-center">
                        @if($producto->image == null)
                          <img src="https://prodinet.mx/ventas/imagenes/no.jpg" width="64px" height="64px">
                        @else
                          <img src="https://prodinet.mx/ventas/imagenes/Prodinet/{{$producto->image}}" width="64px" height="64px">
                        @endif
                      </div>
                      <div class="col-md-7 col-7">
                        <span class="text-secondary">#{{$producto->clave}}</span>
                        <span title="{{$producto->nombre}}" style="
                          display: block;
                          display: -webkit-box;
                          height: 10* 2 * 2;
                          -webkit-line-clamp:2;
                          -webkit-box-orient: vertical;
                          overflow: hidden;
                          text-overflow: ellipsis;">{{$producto->nombre}}</span>
                      </div>
                      <div class="col-md-2 col-2 pt-4">
                        <span class="text-primary">$ {{$producto->precio}}</span>
                      </div>
                      <div class="col-md-2 col-1 d-flex justify-content-end">
                        <a href="" title="Editar"><i class="fas fa-ellipsis-v text-secondary"></i></a>
                      </div>
                    </div>
                  </li>
                @empty
                @endforelse
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 card-footer bg-transparent">
        <div class="d-flex justify-content-end">
          {!! $productos->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>


@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
{{--<script src="/js/bootstable.js"></script>--}}
@stop