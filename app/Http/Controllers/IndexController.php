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

		/*echo "<pre>"; 
    	print_r($_FILES); 
		echo "</pre>";*/
		$nombre_imagen = $_FILES["imagen"]["name"];
		$origen_imagen = $_FILES["imagen"]["tmp_name"];

 move_uploaded_file($nombre_imagen, "/public/imagenes_c".$nombre_imagen);
    	#print_r($_POST); 
    	#print_r($request); 
    	echo "<pre>";
    	print_r($request->files); 
    	#print_r($request->request->parameters); 
		/*
		echo "</pre>";
		foreach ($request->files as $key => $value) {
			echo $key;
			echo "<bR>";
			echo $value;
		}*/
		/*
		Contactos::insert([
			"nombres"   	=> $_POST['nombre'],
			"apellidos" 	=> $_POST['apellido'],
			"email"   		=> $_POST['email'],
			"pais"   		=> $_POST['pais'],
			"tipo_contacto" => $_POST['tipo_contacto'],
			"mensaje" 		=> $_POST['mensaje'],
		]);


		$html_mensaje  = "<div style='padding:1em;'>";
		$html_mensaje .= "<h1>".$_POST['nombre']." ".$_POST['apellido']."</h1>";
		$html_mensaje .= "<p style='font-weight:bold;'>Email: ".$_POST['email']."</p>";
		$html_mensaje .= "<p style='font-weight:bold;'>Pais: ".$_POST['pais']."</p>";
		$html_mensaje .= "<p style='font-weight:bold;'>Tipo de Contacto: ".$_POST['tipo_contacto']."</p>";
		$html_mensaje .= "<p style='font-weight:bold;'>Mensaje:</p>";
		$html_mensaje .= "<p style='padding:1em;text-align:justify;'> ".$_POST['tipo_contacto']."</p>";
		$html_mensaje .= "</div>";
		

    	#return redirect("/");
    	*/
	}    

}
