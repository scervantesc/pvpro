<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;

class ConfiguracionController extends Controller
{
    public function index(){
    	return view('config.index',[
    		'config' => Configuracion::first()
    	]);
    }


    public function update(Request $request){
       /* $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        Images::make($image)->resize(200,200)->save(public_path('image/'.$fileName));
        $save = new image;
        $save->image = $fileName;
        $save->save();
        return redirect()->back();*/
        return $data['success'];
   }
}
