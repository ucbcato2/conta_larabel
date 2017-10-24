<?php

namespace sisconta\Http\Controllers;

use Illuminate\Http\Request;

use sisconta\Ficha;
use Illuminate\Support\Facades\Redirect;
use sisconta\Http\Requests\VistaFichaFormRequest;
use DB;
class VistaFichaController extends Controller
{
    public function __construct()
    {
    	//sirve para validar
    }
    public function index(Request $request)
    { 
        if ($request)//si existe el request se obtendra los datos de BDD
        {
            $query=trim($request->get('searchText'));// por el metodo get, para ingresar el texto par la busqueda de fichas 

            //aqui esta el query para las busquedas por FECHA
            //'%'.$query.'%' para buscar en cualquier ubicacion en la cadena de texto
            $fichas=DB::table('ficha')->where('fecha','LIKE','%'.$query.'%')
            ->where ('estado','=','1') //todos las fichas activas
            ->orderBy('idcategoria','desc') //ordenar de forma desendiente
            ->paginate(7); //con paginacion

            //PARA DEVOLVER EN LA VISTA
            //en la carpeta ficha/index
            //con parametros: fichas y el texto de busqueda en searchtext
            return view('secre.ficha.index',["fichas"=>$fichas,"searchText"=>$query]);
        }
        
    }
    public function create()
    {
        return view("secre.ficha.create"); //lleva a la vista de crear ficha
    }
    public function store (CategoriaFormRequest $request)
    {
    	//para almacenar el objeto en la BDD 
    	//pero se debe validar por eso : (CategoriaFormRequest $request)
        $ficha=new Ficha;
        //para llenar la ficha aqui
        $ficha->idpago=$request->get('idpago');
        $ficha->idusuario=113;
        $ficha->idtipotrans=123;
        $ficha->idtipocambio=131;
        $ficha->idpersona=506;
        $ficha->num_partida=$request->get('num_partida');
        $ficha->fecha='2017-10-10';
        $ficha->time='16:00:00';
        $ficha->estado=1;
        $ficha->total=$request->get('total');
        

        $ficha->save(); //se almacena la ficha
        return Redirect::to('secre/ficha'); //y se direcciona
        //se deberia redireccionar a una partalla emergente para imprimir
    }
    public function show($id)
    {
    	//muestra la ficha especifica
        return view("secre.ficha.show",["ficha"=>Ficha::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("secre.ficha.edit",["ficha"=>Ficha::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $request,$id)
    {
    	//por ahora solo editara el total
        $ficha=Ficha::findOrFail($id);
     //   $ficha->nombre=$request->get('nombre');
        $ficha->total=$request->get('total');
        $ficha->update();
        return Redirect::to('secre/ficha');
    }
    public function destroy($id)
    {
        $ficha=Ficha::findOrFail($id);
        $ficha->condicion='0';
        $ficha->update();
        return Redirect::to('secre/ficha');
    }
}
