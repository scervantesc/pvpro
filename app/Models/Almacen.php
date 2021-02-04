<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $table = 'almacen';

    public function alm_prod_det(){
    	return $this->hasMany('App\Models\AlmacenProducto');
    }

    public function products(){
    	return $this->belongsToMany('App\Models\Productos','App\Models\AlmacenProducto')->withPivot('cantidad');
    }
}
