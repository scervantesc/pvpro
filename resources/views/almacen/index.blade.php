@extends('adminlte::page')
@section('title', 'Almacen')

@section('content_header')

@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm p-3">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h3 class="card-title">Almacen</h3>
                    </div>
                     <div class="col-6 col-md-6">
                         <div class="d-flex justify-content-end">
                             <a type="button" class="btn btn-light" href="{{ route('almacen.add') }}"><i class="fas fa-plus"></i> &nbsp; Agregar</a>
                         </div>
                     </div>
                </div>
            </div>
            <div class="card-body">
                <div class="dataTables_wrapper dt-bootstrap4">
                    <div class="row pb-2">
                        <div class="col-sm-12 mb-2 col-md-6"> Mostrando {{$almacenes->firstItem()}} - {{$almacenes->lastItem()}} de {{$almacenes->total()}} Registros</div>
                        <div class="col-sm-12 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                    <input class="form-control form-control-sm" type="text" id="inputSearch" onkeyup="searchtable()" placeholder="Buscar">
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover" role="grid" id="list-almacen">
                                <thead>
                                    <tr role="row">
                                        <th>Clave</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Codigo postal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @forelse($almacenes as $almacen)
                                        <tr class="text-secondary">
                                            <td>{{$almacen->clave}}</td>
                                            <td>{{$almacen->nombre}}</td>
                                            <td>{{$almacen->direccion}}</td>
                                            <td>{{$almacen->ubicacion}}</td>
                                            <td class="d-flex justify-content-end">
                                                <a href="{{ route('almacen.edit',$almacen) }}"type="button" class="btn btn-link"><i class="fas fa-chevron-right text-primary"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        @endforelse
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
    {!! $almacenes->links() !!}
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function searchtable() {
  // variabless
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("inputSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("list-almacen");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
{{--<script src="/js/bootstable.js"></script>--}}
@stop