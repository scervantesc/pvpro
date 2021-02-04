@extends('adminlte::page')

@section('title', 'Configuracion')

@section('content_header')

@stop

@section('content')

<div class="d-flex justify-content-center">
	<div class="col-md-6 bg-white p-3">
		<div class="row">
			<div class="col-md-6">
			<form id="formConfig" >
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control form-control-sm @error('nombre') is-invalid @enderror"
					value="{{old('nombre',$config->nombre)}}">
					@error('nombre')
						<span class="is-invalid">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="rfc">RFC</label>
					<input type="text" name="rfc" class="form-control form-control-sm @error('rfc') is-invalid @enderror"
					value="{{old('rfc',$config->rfc)}}">
					@error('rfc')
						<span class="is-invalid">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" class="form-control form-control-sm @error('direccion') is-invalid @enderror"
					value="{{old('direccion',$config->direccion)}}">
					@error('direccion')
						<span class="is-invalid">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="telefono">Telefono</label>
					<input type="text" name="telefono" class="form-control form-control-sm @error('telefono') is-invalid @enderror"
					value="{{old('telefono',$config->telefono)}}">
					@error('telefono')
						<span class="is-invalid">{{$message}}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="www">Sitio web</label>
					<input type="text" name="www" class="form-control form-control-sm @error('www') is-invalid @enderror"
					value="{{old('www',$config->www)}}">
					@error('www')
						<span class="is-invalid">{{$message}}</span>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary" id="submit">Submit</button>
			</form>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-center">
				<form action="{{ route('config.update') }}" method="POST" id="logoForm" enctype="multipart/formdata">
					@csrf
					<div class="image-upload pt-5">
  						<label for="file-input">
    						<img width="180px" height="auto" src="/storage/configuracion/{{$config->logo}}"
    							onmouseover="this.src='/storage/configuracion/upload.png'"
								onmouseout="this.src='/storage/configuracion/{{$config->logo}}'" />
  						</label>
						<input id="file-input" type="file" style="display: none" />
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
@stop

@section('css')

@stop

@section('js')
	<script type="text/javascript">
		$(function () {
    		var  $file, $form;

    			$file = $('#file-input');
    			$form = $('#logoForm');

    			$file.on('change', function () {
        			var formData = new FormData();
    				formData.append('logo', $file[0].files[0]);

    				$.ajax({
        				url: {{ route('config.update') }},
        				method: $form.attr('method'),
        				data: formData,
        				processData: false,
       	 				contentType: false
    				}).done(function (data) {
        			if (data.success)
            			alert('La imagen subida correcto');
    				}).fail(function () {
        				alert('La imagen subida no tiene un formato correcto');
    				});
    			});
		});
	</script>
@stop
