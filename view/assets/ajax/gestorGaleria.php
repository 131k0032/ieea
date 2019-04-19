
<?php 

/*===============================================
=            LLamado del controlador            =
===============================================*/

require_once "../../controller/gestorGaleria.php";

/*=====  End of LLamado del controlador  ======*/

/*========================================
=            Clases y metodos            =
========================================*/

class Ajax{

	/*----------  Subir imagen de la galeria  ----------*/

	public $imagenTemporal;

	public function gestorGaleriaAjax(){

		$datos = $this->imagenTemporal;  //lo que traiga la variable imagenTemporal

		$respuesta = gestorGaleria::mostrarImagenController($datos);//Esto se manda al controlador

		echo $respuesta;

	}

	
}



/*----------  Objetos  ----------*/
// Si esto viene lleno

if(isset($_FILES["imagen"]["tmp_name"])){

	$a = new Ajax();//inicialiazando objeto
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];//lo que se reciba de imagenTemporal
	$a -> gestorGaleriaAjax();

}


/*=====  End of Clases y metodos  ======*/

