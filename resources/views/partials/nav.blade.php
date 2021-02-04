@section('extra-css')

@endsection

	<div class="col-md-12 col-12 row pt-2 px-0 m-0 navbar-expand-md">
		<div class="col-md-2 col-2 col-xs-2" >
			<a  href="{{ route('home')}}">
				<picture>
					 <source media="(max-width: 920px)" srcset="/img/icon.png" style="width: auto; height: 40px;">
					 	<img src="/img/logow.png" style="width:auto; height:40px;">
				</picture>
			</a>
		</div>
		<div class="col-md-8 col-7 col-xs-7 m-0 p-0" >
			<form action="{{ route('products.search') }}" method="GET">
			 	<div class="input-group-prepend border">
  				  	<input id="search-box" type="search" name="q" autocomplete="off" placeholder="Busca por producto, marca o clave del producto" required class="form-control border-0 shadow-none" value style="border-radius: 0;z-index: 0">
                  	<button class="btn btn-light" type="submit" title="Buscar productos" style="border-radius: 0">
                  		<img src="/img/search-icon.svg" width="12px">
                  	</button>
  				</div>
			</form>
		</div>
		<div class="col-md-2 col-3 col-xs-3 p-0">
			<div class="col-12 col-md-12  col-lg-12">
				<div class="row">

					<div class="col-4 col-md-4 col-lg-4 d-flex justify-content-center p-0">
						<button class="navbar-toggler pl-0 p-1 " type="button"
							data-toggle="collapse"
							data-target="#nav-prod"
							aria-controls="nav-prod"
							aria-expanded="false">
        					<span><i class="fas fa-bars fa-lg text-white"></i></span>
        				</button>
					</div>

					<div class="col-4 col-md-4 col-lg-4  d-flex justify-content-center p-0">
        				<div style="position: relative;display: inline-block;text-align: center;">
        					<a class="btn btn-light btn-sm" href="{{route('mycart')}}"><img src="/img/carts.svg" width="32px" height="auto">
        						@if($productsCount>=1)
        							<div style="position: absolute;top: 25%;left: 70%; transform: translate(-50%, -50%);">
        								<span class="badge badge-danger" style="border-radius: 15px">{{$productsCount}}</span>
        							</div>
								@else
								@endif
							</a>
        				</div>
					</div>

					<div class="col-4 col-md-4 col-lg-4 p-0"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar navbar-expand-md shadow-none mt-1 p-0">
		<div class="collapse navbar-collapse" id="nav-prod">
			 	<div class="col-md-12 col-12 pt-1">
        		<div class="row">
        			<div class="col-md-2 p-0">
        				<div class="dropdown">
        					<a class="dropdown-toggle btn-block shadow-none btn-light btn btn-sm rounded-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
        					<div class="dropdown-menu shadow-sm rounded-1 border-0">
        						@forelse($categorys as $linea)
        							<a class="dropdown-item"  href="{{route('products.index', ['category' => $linea->Nombre]) }}">{{$linea->Nombre}}</a>
        						@empty
        						@endforelse
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4">
        			</div>
        			<div class="col-md-6">
        					<div class="row">
        						<div class="dropdown mr-3">
        							<a class="dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none">
										@guest
											<span>Mi Cuenta</span>
										@endguest
										@auth
											<span>{{Auth::user()->name}}</span>
										 @endauth
									</a>
									<div class="dropdown-menu border-0 rounded-1 shadow-sm">
										@guest
											<a class="dropdown-item" href="{{route('login')}}">Iniciar Sesion</a>
											<a class="dropdown-item" href="{{route('register')}}">Crear cuenta</a>
										@endguest
										@auth
											<a class="dropdown-item" href="{{route('account.index')}}">Mi cuenta</a>
											<a class="dropdown-item" href="{{ route('orders.index') }}">Mis pedidos</a>
											<a class="dropdown-item" href="{{ route('account.book')}}">Envío y Facturación</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
			        	 					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
										@endauth
									</div>
        						</div>
        						<div class="dropdown">
        							<a class="dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none">Mi lista</a>
        								<div class="dropdown-menu border-0 rounded-1 shadow-sm"></div>
        						</div>
        					</div>
        			</div>
        		</div>
        	</div>
		</div>
	</div>

@section('extra-js')

@endsection