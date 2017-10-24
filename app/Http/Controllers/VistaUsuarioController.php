<?php

namespace sisconta\Http\Controllers;

use Illuminate\Http\Request;
use sisconta\Usuario;
use Illuminate\Support\Facades\Redirect;
use sisconta\Http\Requests\VistaUsuarioFormRequest;
use DB;
class VistaUsuarioController extends Controller
{
     public function __construct()
    {
    	//sirve para validar
    }
    public function index(Request $request)
    { 
        if ($request)//si existe el request se obtendra los datos de BDD
        {
            $query=trim($request->get('searchText'));// por el metodo get, para ingresar el texto par la busqueda de usuarios 

            //aqui esta el query para las busquedas por FECHA
            //'%'.$query.'%' para buscar en cualquier ubicacion en la cadena de texto
            $usuarios=DB::table('usuario')->where('usser','LIKE','%'.$query.'%')
            ->where ('estado','=','1') //todos las usuarios activas
           ->orderBy('idusuario','desc') //ordenar de forma desendiente
            ->paginate(7); //con paginacion

            //PARA DEVOLVER EN LA VISTA
            //en la carpeta usuario/index
            //con parametros: usuarios y el texto de busqueda en searchtext
            return view('listado_usuarios',["usuarios"=>$usuarios,"searchText"=>$query];
        }
        else
        {
        	// Show a listing of games.
        $usuarios = Usuario::all();
        return View::make('listado_usuarios',["usuarios"=>$usuarios]);
        }
    }
    public function create()
    {
        return view("create_usuario.create"); //lleva a la vista de crear usuario
    }
    public function store (CategoriaFormRequest $request)
    {
    	//para almacenar el objeto en la BDD 
    	//pero se debe validar por eso : (CategoriaFormRequest $request)
        $usuario=new usuario;
        //para llenar la usuario aqui
        $usuario->usser=$request->get('usser');
        $usuario->password=$request->get('password');
        $usuario->cargo=$request->get('cargo');
        $usuario->estado=1;
		$usuario->idempleado=101;
        $usuario->save(); //se almacena la usuario
        return Redirect::to('listado_usuarios'); //y se direcciona
        //se deberia redireccionar a una partalla emergente para imprimir
    }
    public function show($id)
    {
    	//muestra la usuario especifica
        return view("show_usuario.show",["usuario"=>usuario::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("edit_usuario.edit",["usuario"=>usuario::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $request,$id)
    {
    	//por ahora solo editara el total
        $usuario=usuario::findOrFail($id);
     //   $usuario->nombre=$request->get('nombre');
        $usuario->password=$request->get('password');
        $usuario->update();
        return Redirect::to('listado_usuarios');
    }
    public function destroy($id)
    {
        $usuario=usuario::findOrFail($id);
        $usuario->condicion='0';
        $usuario->update();
        return Redirect::to('listado_usuarioss');
    }
}
