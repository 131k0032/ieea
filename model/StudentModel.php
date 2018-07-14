<?php 
require_once "model/Conexion.php";

	class StudentModel {
		#REGISTRO DE ALUMNOS
		#--------------------------------------
		public function newStudentModel($datosModel, $tabla){
			$statement = Conexion::conectar()->prepare("INSERT INTO  $tabla (name,lastname,created_at) 
				VALUES 
				(:name,:lastname,:created_at)");

			$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			$statement->bindParam(":lastname",$datosModel["lastname"],PDO::PARAM_STR);
			$statement->bindParam(":created_at",$datosModel["created_at"],PDO::PARAM_STR);

			if($statement->execute()){
				return "success";
			}else{
				return "error";
			}

			// cierra las consultas
			$statement->close();
		}



		#VISUALIZAR DE ALUMNOS
		#--------------------------------------
		public function getAllStudentModel($tabla){
				$statement = Conexion::conectar()->prepare("SELECT id, name, lastname,created_at FROM $tabla");
				$statement->execute();
				// Obtaining all results
				return $statement->fetchAll();
				
			// Close de statement started
			$statement->close();

		}

		#VISUALIZAR ALUMNOS PARA USO DE IDS
		public function getAllStudentModelForId($tabla){
			$statement=Conexion::conectar()->prepare("SELECT id, name, lastname, created_at FROM $tabla");
			$statement->execute();

			return $statement->fetchAll();
		}



			#EDITAR ALUMNOS
		#--------------------------------------
		public function editStudentModel($idModel, $tabla){
				$statement = Conexion::conectar()->prepare("SELECT id, name, lastname, created_at FROM $tabla where id=:id");
				$statement->bindParam(":id",$idModel,PDO::PARAM_INT);
				$statement->execute();
				
				return $statement->fetch();
				
			// cierra las consultas
			$statement->close();

		}





			#ACTUALIZAR ALUMNOS
		#--------------------------------------
		public function updateStudentModel($datosModel, $tabla){
				$statement = Conexion::conectar()->prepare("UPDATE $tabla SET name=:name,lastname=:lastname WHERE id=:id");				
				$statement->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
				$statement->bindParam(":lastname",$datosModel["lastname"],PDO::PARAM_STR);				
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



			#BORAR ALUMNOS
		#--------------------------------------
		public function delStudentModel($datosModel, $tabla){
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




	}

 ?>
