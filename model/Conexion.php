<?php 
 class Conexion{
 	public function conectar(){
 		$link = new PDO("mysql:host=localhost;dbname=ieea","root","");
 		 return $link;
 		//var_dump($link);

 		 mysqli_set_charset($link, 'utf8');
 	}
 }

//$a=new conexion();
//$a->conectar();
 ?>

