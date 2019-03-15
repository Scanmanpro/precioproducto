<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Web;


class WebController extends Controller
{
    public function listar() {
    	//Cargar las categorias desde la bbdd
    	$lista_webs = Web::all();
    	return view('webs')
    		->with('lista_webs',$lista_webs);
    }

    public function agregar(Request $request) {
    	//Agregar web
    	request()->validate([
    		'nombre' => 'required|unique:webs',
    		'url' => 'required|unique:webs'
    	],[
    		'nombre.required' => 'La web no puede estar vacía',
    		'nombre.unique' => 'La web ya existe',
    		'url.required' => 'La url no puede estar vacía',
    		'url.unique' => 'La url ya existe'
    	]);
    	$web = new Web();
    	$web->nombre = $request->nombre;
    	$web->url = $request->url;
    	$web->save();

    	return redirect()->route('webs.listar');
    }

    public function eliminar ($id) {
		//Eliminar web
		$web = Web::find($id);
		$web->delete();
    	return redirect()->route('webs.listar');
    }

    public function editar($id){
    	//Editar categoria

    	$web = Web::find($id);
    	//dd($categoria);
    	return view('editarwebs')
    		->with('web',$web);
    }

    public function actualizar(Request $request){

		// request()->validate([
  //   		'nombre' => 'required|unique:webs'

  //   	],[
  //   		'nombre.required' => 'La web no puede estar vacía',
  //   		'nombre.unique' => 'La web ya existe'

  //   	]);
		$web = Web::find($request->id);
    	$web->nombre = $request->nombre;
    	$web->url = $request->url;
    	$web->update();

    	return redirect()->route('webs.listar');
    }
}
