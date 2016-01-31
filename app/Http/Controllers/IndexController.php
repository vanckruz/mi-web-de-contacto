<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view("index", ["titulo" => "Jhonny Vasquez | Curriculum"] );
    }

	public function Contacto(PostForm $postForm)
	{
		if (\Request::ajax())
		{
		    $post = new \App\Post;
	 
			$post->nombre = \Request::input('nombre');
	 
			$post->apellido = \Request::input('apellido');
			$post->email = \Request::input('email');
			$post->pais = \Request::input('pais');
			$post->tipo_contacto = \Request::input('tipo_contacto');
			$post->mensaje = \Request::input('mensaje');

			$post->save();
	 
			//return response()->json(['message' => 'Post saved']);
	    	print_r($post); 

		}
	}    

}
