<?php 
 class Conexion{
 	public function conectar(){
 		$link = new PDO("mysql:host=localhost;dbname=ieea","root","");
 		 return $link;
 		//var_dump($link);


 	}
 }

//$a=new conexion();
//$a->conectar();
 ?>

