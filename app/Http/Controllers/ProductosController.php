<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Almacen;
class ProductosController extends Controller
{
	public function index(){
		// return Productos::paginate(15);
		// return view('productos.index',[
			// 'productos'=>Productos::orderBy('id','DESC')->paginate(15)
		// ]);
		$Almacen = 1;
		return Almacen::products()->firts();
	}
}
