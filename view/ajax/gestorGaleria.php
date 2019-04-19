
<?php 

/*===============================================
=            LLamado del controlador            =
===============================================*/

include "../../controller/gestorGaleria.php";

/*=====  End of LLamado del controlador  ======*/

/*========================================
=            Clases y metodos            =
========================================*/

class Ajax{

	/*----------  Subir imagen de la galeria  ----------*/

	public $imagenTemporal; //Esto es para el archivo temporal

	public function gestorGaleriaAjax(){

		$datos = $this->imagenTemporal;  //llena la variable datos con lo que traiga la variable imagenTemporal

		$respuesta = gestorGaleria::mostrarImagenController($datos);//Esto se manda al controlador

		echo $respuesta;

	}

	
}



/*----------  Objeto  ----------*/
if(isset($_FILES["imagen"]["tmp_name"])){ //Si la variable de subida existe y viene llena o cargada

	$a = new Ajax();//inicialiazando objeto
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];//asigna en $datos=$this->imagen temportal lo que se reciba
	$a -> gestorGaleriaAjax();

}


/*=====  End of Clases y metodos  ======*/

