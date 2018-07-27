<?php
// ***********************************************************************
// FUNCION PARA PROCESAR LOS LINKS O ENLACES CON LOS CUALES EL USUARIO NAVEGA DENTRO DEL SISTEMA
// ***********************************************************************
class GetModel{

	public function Get($url){
		// SI en la url hay estos valores
		if( 
			//Main views
			$url=="welcome"||
			$url=="student"||
			$url=="instructor"||
			$url=="course"||								
			$url=="setting"||								

			//Actions
			$url=="exit"||
			//Editions
			$url=="editwelcome"||
			$url=="editstudent" ||
			$url=="editinstructor"||
			$url=="editcourse" ||
			$url=="editsetting" ||
			// Adds
			$url=="addwelcome" ||
			$url=="addstudent" ||
			$url=="addinstructor"||
			$url=="addcourse"||
			$url=="addsetting" 			
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
