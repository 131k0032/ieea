<?php
// ***********************************************************************
// FUNCION PARA PROCESAR LOS LINKS O ENLACES CON LOS CUALES EL USUARIO NAVEGA DENTRO DEL SISTEMA
// ***********************************************************************
class GetModel{

	public function Get($url){
		// SI en la url hay estos valores
		if( $url=="inicio"||
			$url=="registro"||
			$url=="slide"||
			$url=="welcome"||
			$url=="students"||
			$url=="videos"||
			$url=="suscriptores"||
			$url=="mensajes"||
			$url=="perfil"||
			$url=="usuarios"||
			$url=="exit"||
			$url=="editar"
			)
		{
			// entonces mandalo al que esté solicitando
			$module="view/modules/".$url.".php";

			// pero si es igual al index o bien un url vacío mandalo a
		}else if($url=="index"){
			// ingresar
			$module="view/modules/home.php";
		}else{
			// si ninguna de las opciones o pone otra cosa, tambien
			$module="view/modules/home.php";
		}

		// devuelveme la variable y envialo al controlador
		return $module;
	}
}
