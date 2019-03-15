<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function listar() {
    	//Cargar las categorias desde la bbdd
    	$lista_cats = Category::all();
    	return view('categorias')
    		->with('lista_cats',$lista_cats);
    }

    public function agregar(Request $request) {
    	//Agregar categoria

    	request()->validate([
    		'nombre' => 'required|unique:categories'
    	],[
    		'nombre.required' => 'La categoria es requisito',
    		'nombre.unique' => 'La categoría ya existe'
    	]);


    	$categoria = new Category();
    	$categoria->nombre = $request->nombre;
    	$categoria->save();

    	return redirect()->route('categorias.listar');
    }

    public function eliminar($id){
    	//Eliminar categoría
    	$categoria = Category::find($id);
		$categoria->delete();
    	return redirect()->route('categorias.listar');
    }

    public function editar($id){
    	//Editar categoria

    	$categoria = Category::find($id);
    	//dd($categoria);
    	return view('editarcategorias')
    		->with('categoria',$categoria);
    }

    public function actualizar(Request $request) {
    	//Agregar categoria

    	request()->validate([
    		'nombre' => 'required|unique:categories'
    	],[
    		'nombre.required' => 'La categoria es requisito',
    		'nombre.unique' => 'La categoría ya existe'
    	]);

    	$categoria = Category::find($request->id);
    	//dd($request->nombre);
    	$categoria->nombre = $request->nombre;
    	$categoria->update();

    	return redirect()->route('categorias.listar');
    }
}

