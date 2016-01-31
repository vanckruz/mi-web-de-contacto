<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
#use App\Http\Requests;
use Illuminate\Http\Request;
use App\Contactos;

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


		$html_mensaje  = "<div style='padding:1em;'>";
		$html_mensaje .= "<h1>".$request->all()['nombre']." ".$request->all()['apellido']."</h1>";
		$html_mensaje .= "<p style='font-weight:bold;'>Email: ".$request->all()['email']."</p>";
		$html_mensaje .= "<p style='font-weight:bold;'>Pais: ".$request->all()['pais']."</p>";
		$html_mensaje .= "<p style='font-weight:bold;'>Tipo de Contacto: ".($request->all()['tipo_contacto'] !== null ? $request->all()['tipo_contacto'] : null)."</p>";
		$html_mensaje .= "<p style='font-weight:bold;'>Mensaje:</p>";
		$html_mensaje .= "<p style='padding:1em;text-align:justify;'> ".$request->all()['mensaje']."</p>";
		$html_mensaje .= "</div>";		

		
    	return redirect("/");
		/*
		echo "<pre>";
		#print_r($var["nombre"]);
		print_r($request->all()["nombre"]);
		echo "</pre>";*/

	}    

}
