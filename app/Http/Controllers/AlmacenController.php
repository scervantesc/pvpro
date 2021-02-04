<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almacen;
class AlmacenController extends Controller
{
    public function index(){
    	return view('almacen.index',[
    		'almacenes' => Almacen::paginate(),
    	]);
    }

    public function edit(Almacen $almacen){
    	return view('almacen.edit_almacen',[
    		'almacen'=> $almacen,
    	]);
    }

    public function update(Request $request, $id){
    	return $request;
    }

    public function add(){
        return view('almacen.add_almacen');
    }
    public function new(Request $request){
        return $request;
    }
}
