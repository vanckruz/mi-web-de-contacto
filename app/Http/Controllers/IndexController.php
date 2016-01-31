<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
#use App\Http\Requests;
use Illuminate\Http\Request;
use App\Contactos;
use Mail;

class IndexController extends Controller
{
    public function index(){
    	return view("index", ["titulo" => "Jhonny Vasquez | Curriculum"] );
    }

	public function Contacto(Request $request)
	{

		if( $request->file('imagen') !== null){
			if ( $request->file('imagen')->isValid() ) {
				$request->file('imagen')->move("imagenes_c",$request->file('imagen')->getClientOriginalName());
			}
		}

		Contactos::insert([
			"nombres"   	=> $_POST['nombre'],
			"apellidos" 	=> $_POST['apellido'],
			"email"   		=> $_POST['email'],
			"pais"   		=> $_POST['pais'],
			"tipo_contacto" => $_POST['tipo_contacto'],
			"mensaje" 		=> $_POST['mensaje'],
			"imagen"        => ($request->file('imagen') !== null ? $request->file('imagen')->getClientOriginalName() : null)
		]);

/*		
$nombre        = $request->all()['nombre'];
$apellido      = $request->all()['apellido'];
$email         = $request->all()['email'];
$pais          = $request->all()['pais'];
$tipo_contacto = ($request->all()['tipo_contacto'] !== null ? $request->all()['tipo_contacto'] : null);
$mensaje       = $request->all()['mensaje'];*/

		$data = array(
			'nombre'        => $request->all()['nombre'],
			'apellido'      => $request->all()['apellido'],
			'email'         => $request->all()['email'],
			'pais'          => $request->all()['pais'],
			'tipo_contacto' => ($request->all()['tipo_contacto'] !== null ? $request->all()['tipo_contacto'] : null),
			'mensaje'       => $request->all()['mensaje'],
		);

		 Mail::send("mails.contacto",$data, function($mensaje) {
		    $mensaje->
		    to("jhonnyvanckruz@gmail.com", "Jhonny Vasquez")->
		    subject("Nuevo mensaje de Contacto en tu Página web"); 
		  });
		
    	return redirect("/");

	}    

}
