<?php

namespace sisconta;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table='ficha';
    protected $primaryKey='idficha';
    public $timestamps=false;//para que el primary se incremente
    //los atributos de la tabla
    protected $fillable = [
    	'idpago',
    	'idusuario',
    	'idtipotrans',
    	'idtipocambio',
    	'idpersona',
    	'num_partida',
    	'fecha',
    	'time',
    	'estado',
    	'total',
    ];
    protected $guarded= [
    	 
    ];
}