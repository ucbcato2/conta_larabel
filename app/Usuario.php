<?php

namespace sisconta;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   
    protected $table='usuario';
    protected $primaryKey='idusuario';
    public $timestamps=true;//para que el primary se incremente
    //los atributos de la tabla
    protected $fillable = [
    	'usser',
    	'password',
    	'cargo',
    	'estado',
    	'idempleado' 
    ];
    protected $guarded= [
    	 
    ];
}
