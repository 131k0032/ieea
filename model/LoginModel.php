<?php 

require_once "model/Conexion.php";

class LoginModel{
	
			public function loginUserModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("SELECT  usuario, password FROM $tabla WHERE usuario=:usuario");
				$statement->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
				$statement->execute();
				return $statement->fetch();

			// cierra las consultas
			$statement->close();

		}
	
}

 ?>