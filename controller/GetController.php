<?php

class GetController{
	public function Get(){

// Si recibe la palabra action en la url
		if(isset($_GET["action"])){
			$url=$_GET["action"];
		}

	// sino, mandalo que sea siempre al index
		else{
			$url="index";
		}
	//Quiero que me ejecute la clase enlacesPaginasModel de la clase EnlacesModels con el parámetro recibido
		$respuesta=GetModel::Get($url);

	// Incluye la respuesta despues del retorno
		include $respuesta;


}

}
