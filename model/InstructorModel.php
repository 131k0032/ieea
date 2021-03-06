<?php 
require_once "model/Conexion.php";

	class InstructorModel {
		#REGISTRO DE USUARIOS
		#--------------------------------------
		public function newInstructorModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("INSERT INTO  $tabla (name,lastname, email,age,address,created_at,is_active) 
				VALUES 
				(:name,:lastname, :email,:age,:address,:created_at,:is_active)");

			$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			$statement->bindParam(":lastname",$datosModel["lastname"],PDO::PARAM_STR);
			$statement->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
			$statement->bindParam(":age",$datosModel["age"],PDO::PARAM_STR);
			$statement->bindParam(":address",$datosModel["address"],PDO::PARAM_STR);
			$statement->bindParam(":created_at",$datosModel["created_at"],PDO::PARAM_STR);
			$statement->bindParam(":is_active",$datosModel["is_active"],PDO::PARAM_STR);

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

			// cierra las consultas
			$statement->close();
		}



		#VISUALIZAR DE USUARIOS
		#--------------------------------------
		public function getAllInstructorModel($tabla){
				$statement = Conexion::conectar()->prepare("SELECT id, name, lastname, email, age, address,is_active, created_at FROM $tabla");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}



			#EDITAR USUARIOS
		#--------------------------------------
		public function editInstructorModel($idModel, $tabla){
				$statement = Conexion::conectar()->prepare("SELECT id, name, lastname, email, age, address, created_at,is_active FROM $tabla where id=:id");
				$statement->bindParam(":id",$idModel,PDO::PARAM_INT);
				$statement->execute();
				
				return $statement->fetch();
				
			// cierra las consultas
			$statement->close();

		}




			#ACTUALIZAR USUARIOS
		#--------------------------------------
		public function updateInstructorModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("UPDATE $tabla SET name=:name,lastname=:lastname,email=:email, age=:age, address=:address, is_active=:is_active, created_at=:created_at WHERE id=:id");				

				$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
				$statement->bindParam(":lastname",$datosModel["lastname"],PDO::PARAM_STR);				
				$statement->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);				
				$statement->bindParam(":age",$datosModel["age"],PDO::PARAM_STR);				
				$statement->bindParam(":address",$datosModel["address"],PDO::PARAM_STR);				
				$statement->bindParam(":is_active",$datosModel["is_active"],PDO::PARAM_STR);				
				$statement->bindParam(":created_at",$datosModel["created_at"],PDO::PARAM_STR);				
				$statement->bindParam(":id",$datosModel["id"],PDO::PARAM_INT);
				$statement->execute();
				

				if($statement->execute()){
				return "success";
			}else{
				return "error";
			}



				return $statement->fetch();
				
			// cierra las consultas
			$statement->close();

		}



			#BORAR USUARIOS
		#--------------------------------------
	/*	public function delInstructorModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
			$statement->bindParam(":id",$datosModel,PDO::PARAM_INT);

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

					
			// cierra las consultas
			$statement->close();

			}

	*/


	}

?>
