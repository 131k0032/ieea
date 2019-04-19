<?php 




/*============================================
=            Clase gestor galeria            =
============================================*/

class gestorGaleria{

	/*===================================================
	=            Mostrar imagen galeria ajax            =
	===================================================*/
	
	public function mostrarImagenController($datos){
		
		list($ancho,$alto) = getimagesize($datos); //Largo y ancho de la imagen

			if($ancho < 1024 || $alto < 768){				
				echo 0;
				
			}else{

				$aleatorio = mt_rand(100,999); //Para que la imagen no se repita en nombre
				$ruta="../../view/images/galeria/galeria".$aleatorio.".jpg";
				// $ruta="controller/galeria".$aleatorio."jpg";
				// Para redimensionar la imagen
				$nuevo_ancho =1024;
				$nuevo_alto=768;

				$origen=imagecreatefromjpeg($datos);
				// crear color verdadero
				$destino= imagecreatetruecolor($nuevo_ancho,$nuevo_alto);
				// copia la porcion de la imagen a otra, de origen a destino
				// imagecopyresized($destino, $origen, int $destino_x, int $destino_y, int $origen_x, int $origen_y, int $destino_w, int $destino_h, int $origen_w, int $origen_h)
				imagecopyresized($destino, $origen, 0,0,0,0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino,$ruta);				



		}
			

	}
	
	/*=====  End of Mostrar imagen galeria ajax  ======*/
	

}

/*=====  End of Clase gestor galeria  ======*/
