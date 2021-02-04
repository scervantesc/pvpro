@csrf
	<div class="form-group">
		<label for="clave">Clave</label>
		<input class="form-control form-control-sm @error('clave') is-invalid @enderror"
			maxlength="1"
			type ="text"
			name="clave"
			value="{{ old('clave',$almacen->clave ?? '')}}"
			required
		>
		@error('clave')
			<span class="is-invalid">{{$message}}</span>
		@enderror
		<div class="mt-3">
			<span class="text-bold">Para modificar tu clave de almacen, ten en cuenta lo siguiente:</span>
			<ul class="pt-2">
				<li>No debe tener espacio</li>
				<li>Debe tener solo un cáracter</li>
				<li>Debe ser único</li>
			</ul>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input class="form-control form-control-sm @error('nombre') is-invalid @enderror"
			type ="text"
			name="nombre"
			value="{{ old('nombre',$almacen->nombre ?? '')}}"
			required
		>
		@error('nombre')
			<span class="is-invalid">{{$message}}</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="ubicacion">Codigo postal</label>
		<input class="form-control form-control-sm @error('ubicacion') is-invalid @enderror"
			type ="number"
			maxlength="4"
			name="ubicacion"
			value="{{ old('ubicacion',$almacen->ubicacion ?? '')}}"
			required
		>
		@error('ubicacion')
			<span class="is-invalid">{{$message}}</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="direccion">Direccion</label>
		<input class="form-control form-control-sm @error('direccion') is-invalid @enderror"
			type ="text"
			name="direccion"
			value="{{ old('direccion',$almacen->direccion ?? '')}}"
			placeholder="Calle y número"
			required
		>
		@error('direccion')
			<span class="is-invalid">{{$message}}</span>
		@enderror
	</div>

	<div class="form-group pt-2">
		<div class="">
			<button type="submit" class="btn btn-primary">Modificar</button>
			<a href ="{{ route('almacen.index') }}"type="button" class="btn btn-link">Cancelar</a>
		</div>
	</div>