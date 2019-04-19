<?php 

require_once "model/Conexion.php";

class LoginModel{
	
			public function loginUserModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("SELECT  email, password FROM $tabla WHERE email=:email");
				$statement->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
				$statement->execute();
				return $statement->fetch();

			// cierra las consultas
			$statement->close();

		}
	
}

?>